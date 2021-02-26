<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index()
    {

        $banners = Banner::all();
        
        $imoveis = DB::table('imoveis')
            ->leftJoin('categorias', 'categorias.id', '=', 'imoveis.categoria_id')
            ->leftJoin('imoveis_imagens', 'imoveis_imagens.imovel_id', '=', 'imoveis.id')
            ->where('imoveis.status', '=', '1')
            ->where('imoveis.view_home', '=', '1')
            ->where('imoveis_imagens.cover', '=', '1')
            ->select('imoveis.*', 'categorias.nome as categoriaNome', 'imoveis_imagens.cover', 'imoveis_imagens.image')
            ->orderBy('id', 'desc')
            ->limit(10)
            ->get();


        $imoveisRealizados = DB::table('imoveis')
            ->leftJoin('categorias', 'categorias.id', '=', 'imoveis.categoria_id')
            ->leftJoin('imoveis_imagens', 'imoveis_imagens.imovel_id', '=', 'imoveis.id')
            ->where('imoveis.status', '=', '1')
            ->where('categorias.slug', '=', 'realizados')
            ->where('imoveis_imagens.cover', '=', '1')
            ->select('imoveis.*', 'categorias.nome as categoriaNome', 'imoveis_imagens.cover', 'imoveis_imagens.image')
            ->orderBy('id', 'desc')
            ->limit(10)
            ->get();
        
        return view('home.index', compact('banners', 'imoveis', 'imoveisRealizados'));

    }
}
