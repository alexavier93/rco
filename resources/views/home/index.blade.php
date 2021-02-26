@extends('layouts.app')

@section('content')

    <!-- Home -->
    <div id="home">

        <!-- Banner Section -->
        <section class="banner-section">

            <div class="banner-carousel owl-carousel owl-theme">

                @foreach ($banners as $banner)
                    @if ($banner->status == 1)
                        <!-- Slide Item -->
                        <div class="slide-item"
                            style="background-image: url('{{ asset('storage/' . $banner->image) }}');">

                            <div class="container">

                                <div class="content-box">

                                    @if ($banner->title_active == 1)
                                        <h2>{{ $banner->title }}</h2>
                                    @endif

                                    <p class="descricao">
                                        {{ $banner->description }}
                                    </p>

                                    <!--<div class="btn-box">
                                                    <a href="{{ $banner->link }}" class="theme-btn btn-style-two">
                                                        <span class="btn-title">Conheça Mais</span> <i class="fas fa-arrow-right ml-2"></i>
                                                    </a>
                                                </div>-->

                                </div>

                            </div>

                        </div>
                    @endif
                @endforeach

            </div>

        </section>

        <section class="imoveis_home">

            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="title-section">
                            <h3>Nossos Imóveis</h3>
                            <h2>Excelentes Oportunidades em Imóveis</h2>
                        </div>
                    </div>
                </div>

                <div>

                    <div class="owl-theme owl-carousel imoveis-carousel">

                        @foreach ($imoveis as $imovel)
                        <div class="item">
                            <div class="card">
                                <div class="img">
                                    <a href="{{ route('imoveis.info', ['slug' => $imovel->slug]) }}">
                                        <img src="{{ asset('storage/' . $imovel->image) }}" alt="{{ $imovel->nome }}" title="{{ $imovel->nome }}">
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
                                    <hr>
                                    <div class="text-center">
                                        <a class="btn-mais" href="{{ route('imoveis.info', ['slug' => $imovel->slug]) }}">Saiba mais <i class="fas fa-arrow-right ms-2"></i></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        @endforeach
      
                    </div>

                </div>

            </div>

        </section>

        <section class="empresa_home">

            <div class="escopo">

                <div class="row">

                    <div class="col-texto">

                        <div class="title-section text-left">
                            <h3>Sobre Nós</h3>
                            <h2>Construindo Conquistas</h2>
                        </div>

                        <p class="texto">Donec vehicula laoreet arcu, eget porta velit venenatis a. Aliquam nec eleifend ipsum. Phasellus at sapien at tellus congue accumsan ac et ipsum. Pellentesque.</p>

                        <p class="texto">Nunc nec porttitor diam. Ut ac nulla elementum, suscipit lobortis malesuadaultricies metus id, volutpat ligula. </p>

                        <a class="btn btn-default">Assista o Vídeo <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>

                    <div class="col-img p-0">
                        <img class="" src="{{ asset('assets/images/video-thumb.jpg') }}" alt="Euromav" title="Euromav">
                    </div>

                </div>

            </div>

        </section>

        <section class="realizados_home">

            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-left">
                        <div class="title-section">
                            <h2>Projetos Realizados</h2>
                        </div>
                    </div>

                </div>

                <div>

                    <div class="owl-theme owl-carousel imoveis-carousel">

                        @foreach ($imoveisRealizados as $imovel)

                            <div class="item">
                                <div class="card">
                                    <div class="img">
                                        <a href="{{ route('imoveis.info', ['slug' => $imovel->slug]) }}">
                                            <img src="{{ asset('storage/' . $imovel->image) }}" alt="{{ $imovel->nome }}" title="{{ $imovel->nome }}">
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

        </section>

        <section class="contato_home">

            <div class="container">

                <div class="content-wrapper">

                    <div class="row">

                        <div class="col-lg-4 col-md-12">

                            <div class="box-info">
    
                                <h1>Pensando em vender seu terreno?</h1>
    
                                <hr>
    
                                <h2 class="mb-5">Nós temos a solução na medida certa para você!</h2>
                                
                                <a href="tel:5511990009999"><span class="phone-box"><i class="fas fa-phone-alt"></i></span> <span>11 90000-0000</span></a>
                            </div>
    
    
                        </div>

                        <div class="col-lg-8 col-md-12">

                            <h3>Envie sua Mensagem</h3>

                            <div class="form-contato">

                                <form action="">

                                    <div class="row">

                                        <div class="col-md-12 col-lg-6">
                                            <div class="form-group mb-3">
                                                <input type="text" class="form-control" name="nome" placeholder="Nome"
                                                    required>
                                            </div>
                                        </div>

                                        <div class="col-md-12 col-lg-6">
                                            <div class="form-group mb-3">
                                                <input type="email" class="form-control" name="nome"
                                                    placeholder="E-mail" required>
                                            </div>
                                        </div>

                                        <div class="col-md-12 col-lg-6">
                                            <div class="form-group mb-3">
                                                <input type="text" class="form-control telefone" name="nome"
                                                    placeholder="Telefone" required>
                                            </div>
                                        </div>

                                        <div class="col-md-12 col-lg-6">
                                            <div class="form-group mb-3">
                                                <select name="cidade" class="form-control" require>
                                                    <option>Selecione uma cidade</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group mb-3">
                                                <textarea class="form-control" name="mensagem" rows="8"
                                                    placeholder="Mensagem" require></textarea>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group mb-3">
                                                <button type="submit" class="btn btn-default">Enviar Mensagem <i
                                                        class="fas fa-arrow-right ms-2"></i></button>
                                            </div>
                                        </div>


                                    </div>


                                </form>

                            </div>


                        </div>

                    </div>
                </div>

            </div>

        </section>


    </div>
    <!-- End Home -->
    

@endsection
