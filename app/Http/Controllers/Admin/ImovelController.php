<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Diferencial;
use App\Models\Imovel;
use App\Models\ImovelImage;
use App\Models\ImovelPlanta;
use App\Models\ImovelStatus;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;


class ImovelController extends Controller
{

    private $imovel;

    public function __construct(Imovel $imovel)
    {
        $this->imovel = $imovel;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $imoveis = DB::table('imoveis')
            ->leftJoin('categorias', 'categorias.id', '=', 'imoveis.categoria_id')
            ->leftJoin('imoveis_imagens', 'imoveis_imagens.imovel_id', '=', 'imoveis.id')
            ->select('imoveis.*', 'categorias.nome as categoriaNome', 'imoveis_imagens.cover', 'imoveis_imagens.image')
            ->orderBy('id', 'desc')
            ->paginate(10);
        
        return view('admin.imoveis.index', compact('imoveis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        $diferenciais = Diferencial::all();

        return view('admin.imoveis.create', compact('categorias', 'diferenciais'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $slug = Str::slug($request->nome, '-');
        $data['slug'] = $slug;

        $data['latitude'] = $request->lat;
        $data['longitude'] = $request->lng;
        $data['cep'] = $request->postal_code;
        $data['lougradouro'] = $request->route;
        $data['bairro'] = $request->sublocality;
        $data['cidade'] = $request->administrative_area_level_2;
        $data['estado'] = $request->administrative_area_level_1;

        $imovel = $this->imovel->create($data);
        $imovel->diferenciais()->sync($data['diferenciais']);

        flash('Imóvel criado com sucesso!')->success();
        return redirect()->route('admin.imoveis.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($imovel)
    {
        
        $imovel = $this->imovel->findOrFail($imovel);

        $categorias = Categoria::all();
        $diferenciais = Diferencial::all();
        $status = Status::all();
        $statusProgresso = ImovelStatus::all();

        $images = ImovelImage::where('imovel_id', $imovel->id)->get();
        $plantas = ImovelPlanta::where('imovel_id', $imovel->id)->get();

        return view('admin.imoveis.edit', compact('imovel', 'categorias', 'diferenciais', 'status', 'images', 'plantas', 'statusProgresso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $imovel)
    {
        $data = $request->all();

        $slug = Str::slug($request->nome, '-');
        $data['slug'] = $slug;

        if ($request->status == 1) {
            $data['status'] = 1;
        } else {
            $data['status'] = 0;
        }

        if ($request->view_home == 1) {
            $data['view_home'] = 1;
        } else {
            $data['view_home'] = 0;
        }

        $data['categoria_id'] = $request->categorias;
        $data['latitude'] = $request->lat;
        $data['longitude'] = $request->lng;
        $data['cep'] = $request->postal_code;
        $data['lougradouro'] = $request->route;
        $data['bairro'] = $request->sublocality;
        $data['cidade'] = $request->administrative_area_level_2;
        $data['estado'] = $request->administrative_area_level_1;
        
        
        $imovel = $this->imovel->find($imovel);
        $imovel->update($data);
        $imovel->diferenciais()->sync($data['diferenciais']);

        flash('Serviço atualizado com sucesso!')->success();
        return redirect()->route('admin.imoveis.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $id = $request->id;

        $imovel = $this->imovel->find($id);

        if ($imovel->delete() == TRUE) {

            flash('Serviço removido com sucesso!')->success();
            return redirect()->route('admin.imoveis.index');

        }
        
    }


    public function uploadImages(Request $request)
    {

        $imovel_id = $request->imovel_id;
        $imovel = $this->imovel->findOrFail($imovel_id);
        $imovelDir = $imovel->id;

        if($request->hasFile('image'))
        {

            $images = $request->file('image');

            foreach ($images as $image) {

                $image = $image->store('imoveis/'.$imovelDir, 'public');
                $data['image'] = $image;

                // Redimensionando a imagem
                $image = Image::make(public_path("storage/{$image}"))->fit(800, 550);
                $image->save();

                $imovel->imagens()->create($data);
                
            }
        
        }

        flash('Upload realizado com sucesso!')->success();
        return redirect()->route('admin.imoveis.edit', ['imovel' => $imovel_id]);
        
    }

    public function deleteImage($image)
    {

        $image = ImovelImage::find($image);
        $imovel = $image->imovel_id;

        if ($image->delete() == TRUE) {

            if (Storage::exists($image->image)) {
                Storage::delete($image->image);
            }

            flash('Imagem removida com sucesso!')->success();
            return redirect()->route('admin.imoveis.edit', ['imovel' => $imovel]);

        }

    }

    public function makeCover($image)
    {
     
        $image = ImovelImage::find($image);
        $imovel = $image->imovel_id;

        $images = ImovelImage::where('imovel_id', $imovel)->get();

        foreach($images as $images){
            ImovelImage::where('imovel_id', $imovel)->update(array('cover' => '0'));
        }

        $image->update(array('cover' => '1'));

        flash('Capa selecionada!')->success();
        return redirect()->route('admin.imoveis.edit', ['imovel' => $imovel]);
      

    }


    public function uploadPlantas(Request $request)
    {

        $imovel_id = $request->imovel_id;
        $imovel = $this->imovel->findOrFail($imovel_id);
        $imovelDir = $imovel->id;

        if($request->hasFile('image'))
        {

            $plantas = $request->file('image');

            foreach ($plantas as $planta) {

                $planta = $planta->store('imoveis/'.$imovelDir, 'public');
                $data['image'] = $planta;

                // Redimensionando a planta
                $planta = Image::make(public_path("storage/{$planta}"));
                $planta->save();

                $imovel->plantas()->create($data);
                
            }
        
        }

        flash('Upload realizado com sucesso!')->success();
        return redirect()->route('admin.imoveis.edit', ['imovel' => $imovel_id]);
        
    }

    public function deletePlanta($planta)
    {

        $planta = ImovelPlanta::find($planta);
        $imovel = $planta->imovel_id;

        if ($planta->delete() == TRUE) {

            if (Storage::exists($planta->image)) {
                Storage::delete($planta->image);
            }

            flash('Planta removida com sucesso!')->success();
            return redirect()->route('admin.imoveis.edit', ['imovel' => $imovel]);

        }

    }


    public function insertProgress(Request $request)
    {

        $data = $request->all();
        $imovel_id = $request->imovel_id;

        ImovelStatus::create($data);

        flash('Progresso cadastrado com sucesso!')->success();
        return redirect()->route('admin.imoveis.edit', ['imovel' => $imovel_id]);
        
    }

    public function deleteProgress($id)
    {

        $progresso = ImovelStatus::find($id);
        $imovel = $progresso->imovel_id;

        if ($progresso->delete() == TRUE) {

            flash('Progresso removido com sucesso!')->success();
            return redirect()->route('admin.imoveis.edit', ['imovel' => $imovel]);

        }

    }


}


