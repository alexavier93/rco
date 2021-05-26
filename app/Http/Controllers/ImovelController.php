<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Diferencial;
use App\Models\Imovel;
use App\Models\ImovelImage;
use App\Models\ImovelPlanta;
use App\Models\ImovelStatus;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImovelController extends Controller
{

    private $imovel;

    public function __construct(Imovel $imovel)
    {
        $this->imovel = $imovel;
    }

    public function index()
    {

        $imoveis = DB::table('imoveis')
        ->leftJoin('categorias', 'categorias.id', '=', 'imoveis.categoria_id')
        ->leftJoin('imoveis_imagens', 'imoveis_imagens.imovel_id', '=', 'imoveis.id')
        ->where('imoveis.status', '=', '1')
        ->where('imoveis_imagens.cover', '=', '1')
        ->select('imoveis.*', 'categorias.nome as categoriaNome', 'categorias.slug as categoriaSlug', 'imoveis_imagens.cover', 'imoveis_imagens.image')
        ->orderBy('id', 'desc')
        ->paginate(10);

        $categorias = Categoria::all();

        return view('imoveis.index', compact('imoveis', 'categorias'));
    }


    public function info($slug)
    {

        $imovel = $this->imovel->where('slug', $slug)->first();

        $categorias = Categoria::all();
        $diferenciais = Diferencial::all();
        $status = Status::all();
        $statusProgresso = ImovelStatus::where('imovel_id', $imovel->id)->get();

        $images = ImovelImage::where('imovel_id', $imovel->id)->get();
        $plantas = ImovelPlanta::where('imovel_id', $imovel->id)->get();

        return view('imoveis.info', compact('imovel', 'categorias', 'diferenciais', 'status', 'images', 'plantas', 'statusProgresso'));
    }



}
