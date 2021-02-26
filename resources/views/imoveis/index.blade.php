@extends('layouts.app')

@section('title', '- Serviços')

@section('content')

    <div id="imoveis">

        <div class="page-title-content" style="background: url('{{ asset('assets/images/banner-pages/banner-imoveis.png') }}')">
            <div class="container">
                <h5>Imóveis</h5>
                <h1>Lorem Ipsum Dolor Sit Amet</h1>
            </div>
        </div>

        <div class="container">

            <div class="content">

                <div class="row">

                    <div class="col-md-3">

                        <ul class="filtros">
                            <li class="filter all active" data-filter="all"><span>Todos</span></li>

                            @foreach ($categorias as $categoria)
                            <li class="filter" data-filter=".{{ $categoria->slug }}"><span>{{ $categoria->nome }}</span></li>
                            @endforeach

                        </ul>

                    </div>

                    <div class="col-md-9">

                        <div class="list">

                            <div class="mix-imoveis row">

                                @foreach ($imoveis as $imovel)

                                <div class="col-md-6 col-lg-4 item mix {{ $imovel->categoriaSlug }}" data-myorder="{{ $imovel->id }}">
                                    <div class="card">
                                        <div class="img">
                                            <a href="{{ route('imoveis.info', ['slug' => $imovel->slug]) }}">
                                                <img src="{{ asset('storage/' . $imovel->image) }}" alt="Residencial Luiza">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <span class="label">{{ $imovel->categoriaNome }}</span>
                                            <span class="titulo">{{ $imovel->nome }}</span>
                                            <span class="localidade">{{ $imovel->cidade }}</span>
                                            <div class="info">
                                                <div class="property-meta">
                                                    <ul class="property-meta-list list-inline">
                                                        <li>
                                                            <span class="label-content">Bairro</span>
                                                            <span class="label-property banheiro">{{ $imovel->bairro }}</span>
                                                        </li>
                                                        <li>
                                                            <span class="label-content">Dormitórios</span>
                                                            <span class="label-property quarto">{{ $imovel->dormitorios }}</span>
                                                        </li>
                                                        <li>
                                                            <span class="label-content">Metragem</span>
                                                            <span class="label-property area">{{ $imovel->area_privativa }}</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <a class="btn-mais" href="{{ route('imoveis.info', ['slug' => $imovel->slug]) }}"><i class="fas fa-arrow-right ml-2"></i></a>
                                        </div>
                                    </div>
                                </div>

                                @endforeach

                            </div>

                        </div>

                    </div>

                </div>


            </div>

        </div>

    </div>

@endsection
