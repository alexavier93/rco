@extends('layouts.app')

@section('content')

    <!-- Home -->
    <div id="home">

        <!-- Banner Section -->
        <section class="banner-section">

            <div class="banner-carousel owl-carousel owl-theme">
                <!-- Slide Item -->
                <div class="slide-item" style="background-image: url('{{ asset('assets/images/banner-01.jpg') }}');">
                    <div class="container">
                        <div class="title">
                            <h1>Soluções imobiliárias</h1>
                            <h4>para investidores de alta renda</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="searchblock__content">
                <form id="formBusca" class="filtros__form" action="" method="get">
                    <div class="row justify-content-start">
                        <div class="col-md-4">
                            <div class="filtros__form__item">
                                <input type="text" id="geocomplete"
                                    class="form-control input_form input__location pac-target-input" name="localizacao"
                                    placeholder="Digite bairro, cidade ou cep" autocomplete="off">
                                <input name="sublocality" type="hidden" value="">
                                <input name="administrative_area_level_2" type="hidden" value="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="filtros__form__item">
                                <select class="form-control" name="" required="">
                                    <option value="todos">Categorias</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="filtros__form__item">
                                <select class="form-control" name="" required="">
                                    <option value="todos">Tipos</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="filtros__form__item">
                                <button class="btn btn-default ml-2">Buscar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>

        <section class="imoveis-home">

            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="title-section">
                            <h2><span>Destaques</span> de Vendas</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nec sem sed lectus tempus
                                maximus. Sed condimentum, tellus et finibus placerat.</p>
                        </div>
                    </div>
                </div>

                <div class="imoveis mt-5">
                    <div class="imoveis-carousel owl-carousel owl-theme">
                            <div class="item">
                                <div class="img">
                                    <div class="tag">Pré-lançamento</div>
                                    <img src="{{ asset('assets/images/img-imovel.jpg') }}" alt="">
                                </div>
                                <div class="content">
                                    <span class="title">Lorem Ipsum Dolor</span>
                                    <span class="price">R$ 300.000</span>
                                    <span class="description">Praesent ac mauris at magna auctor sodales. Sed vel vulputate ligula. Praesent sed ultricies augue. Vestibulum ante ipsum primis.</span>
                                    <div class="info">
                                        <div class="clearfix">
                                            <div class="property-meta">
                                                <ul class="property-meta-list list-inline">
                                                    <li>
                                                        <span class="label-content"><i class="fas fa-bed"></i></span>
                                                        <span class="label-property quarto">2</span>
                                                    </li>
                                                    <li>
                                                        <span class="label-content"><i class="fas fa-bath"></i></span>
                                                        <span class="label-property banheiro">2</span>
                                                    </li>
                                                    <li>
                                                        <span class="label-content"><i class="fas fa-ruler-combined"></i></span>
                                                        <span class="label-property garagem">65m²</span>
                                                    </li>
                                                    <li><a class="btn btn-sm">Detalhes</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                      

                            <div class="item">
                                <div class="img">
                                    <div class="tag">Pré-lançamento</div>
                                    <img src="{{ asset('assets/images/img-imovel.jpg') }}" alt="">
                                </div>
                                <div class="content">
                                    <span class="title">Lorem Ipsum Dolor</span>
                                    <span class="price">R$ 300.000</span>
                                    <span class="description">Praesent ac mauris at magna auctor sodales. Sed vel vulputate ligula. Praesent sed ultricies augue. Vestibulum ante ipsum primis.</span>
                                    <div class="info">
                                        <div class="clearfix">
                                            <div class="property-meta">
                                                <ul class="property-meta-list list-inline">
                                                    <li>
                                                        <span class="label-content"><i class="fas fa-bed"></i></span>
                                                        <span class="label-property quarto">2</span>
                                                    </li>
                                                    <li>
                                                        <span class="label-content"><i class="fas fa-bath"></i></span>
                                                        <span class="label-property banheiro">2</span>
                                                    </li>
                                                    <li>
                                                        <span class="label-content"><i class="fas fa-ruler-combined"></i></span>
                                                        <span class="label-property garagem">65m²</span>
                                                    </li>
                                                    <li><a class="btn btn-sm">Detalhes</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="img">
                                    <div class="tag">Pré-lançamento</div>
                                    <img src="{{ asset('assets/images/img-imovel.jpg') }}" alt="">
                                </div>
                                <div class="content">
                                    <span class="title">Lorem Ipsum Dolor</span>
                                    <span class="price">R$ 300.000</span>
                                    <span class="description">Praesent ac mauris at magna auctor sodales. Sed vel vulputate ligula. Praesent sed ultricies augue. Vestibulum ante ipsum primis.</span>
                                    <div class="info">
                                        <div class="clearfix">
                                            <div class="property-meta">
                                                <ul class="property-meta-list list-inline">
                                                    <li>
                                                        <span class="label-content"><i class="fas fa-bed"></i></span>
                                                        <span class="label-property quarto">2</span>
                                                    </li>
                                                    <li>
                                                        <span class="label-content"><i class="fas fa-bath"></i></span>
                                                        <span class="label-property banheiro">2</span>
                                                    </li>
                                                    <li>
                                                        <span class="label-content"><i class="fas fa-ruler-combined"></i></span>
                                                        <span class="label-property garagem">65m²</span>
                                                    </li>
                                                    <li><a class="btn btn-sm">Detalhes</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="item">
                                <div class="img">
                                    <div class="tag">Pré-lançamento</div>
                                    <img src="{{ asset('assets/images/img-imovel.jpg') }}" alt="">
                                </div>
                                <div class="content">
                                    <span class="title">Lorem Ipsum Dolor</span>
                                    <span class="price">R$ 300.000</span>
                                    <span class="description">Praesent ac mauris at magna auctor sodales. Sed vel vulputate ligula. Praesent sed ultricies augue. Vestibulum ante ipsum primis.</span>
                                    <div class="info">
                                        <div class="clearfix">
                                            <div class="property-meta">
                                                <ul class="property-meta-list list-inline">
                                                    <li>
                                                        <span class="label-content"><i class="fas fa-bed"></i></span>
                                                        <span class="label-property quarto">2</span>
                                                    </li>
                                                    <li>
                                                        <span class="label-content"><i class="fas fa-bath"></i></span>
                                                        <span class="label-property banheiro">2</span>
                                                    </li>
                                                    <li>
                                                        <span class="label-content"><i class="fas fa-ruler-combined"></i></span>
                                                        <span class="label-property garagem">65m²</span>
                                                    </li>
                                                    <li><a class="btn btn-sm">Detalhes</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="img">
                                    <div class="tag">Pré-lançamento</div>
                                    <img src="{{ asset('assets/images/img-imovel.jpg') }}" alt="">
                                </div>
                                <div class="content">
                                    <span class="title">Lorem Ipsum Dolor</span>
                                    <span class="price">R$ 300.000</span>
                                    <span class="description">Praesent ac mauris at magna auctor sodales. Sed vel vulputate ligula. Praesent sed ultricies augue. Vestibulum ante ipsum primis.</span>
                                    <div class="info">
                                        <div class="clearfix">
                                            <div class="property-meta">
                                                <ul class="property-meta-list list-inline">
                                                    <li>
                                                        <span class="label-content"><i class="fas fa-bed"></i></span>
                                                        <span class="label-property quarto">2</span>
                                                    </li>
                                                    <li>
                                                        <span class="label-content"><i class="fas fa-bath"></i></span>
                                                        <span class="label-property banheiro">2</span>
                                                    </li>
                                                    <li>
                                                        <span class="label-content"><i class="fas fa-ruler-combined"></i></span>
                                                        <span class="label-property garagem">65m²</span>
                                                    </li>
                                                    <li><a class="btn btn-sm">Detalhes</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="img">
                                    <div class="tag">Pré-lançamento</div>
                                    <img src="{{ asset('assets/images/img-imovel.jpg') }}" alt="">
                                </div>
                                <div class="content">
                                    <span class="title">Lorem Ipsum Dolor</span>
                                    <span class="price">R$ 300.000</span>
                                    <span class="description">Praesent ac mauris at magna auctor sodales. Sed vel vulputate ligula. Praesent sed ultricies augue. Vestibulum ante ipsum primis.</span>
                                    <div class="info">
                                        <div class="clearfix">
                                            <div class="property-meta">
                                                <ul class="property-meta-list list-inline">
                                                    <li>
                                                        <span class="label-content"><i class="fas fa-bed"></i></span>
                                                        <span class="label-property quarto">2</span>
                                                    </li>
                                                    <li>
                                                        <span class="label-content"><i class="fas fa-bath"></i></span>
                                                        <span class="label-property banheiro">2</span>
                                                    </li>
                                                    <li>
                                                        <span class="label-content"><i class="fas fa-ruler-combined"></i></span>
                                                        <span class="label-property garagem">65m²</span>
                                                    </li>
                                                    <li><a class="btn btn-sm">Detalhes</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    

                    </div>

                </div>

            </div>

        </section>

        <section class="energy">

            <div class="content">

                <div class="row justify-content-center">
                    <div class="col-sm-12 col-lg-6 texto">
                        <h2>Porque investir com a <br><span>Energy Imóvies?</span></h2>

                        <p>A Energy Imóveis é uma imobiliária especializada em comercializar empreendimentos exclusivos para
                            investidores primários qualificados. Atuamos também, no mercado de lançamentos (secundário).</p>
                        <p>Viabilizamos empreendimentos para nossos clientes de seis a doze meses antes do lançamento
                            tradicional, desta forma conseguimos rentabilizar o capital do investidor em até 50% no primeiro
                            ano. Como trata-se de uma sociedade em conta de participação, o investidor é isento de imposto
                            de renda sobre o lucro imobiliário.</p>

                        <a href="#" class="saiba-mais"><i class="far fa-arrow-alt-circle-right"></i> Saiba Mais</a>

                    </div>
                    <div class="col-sm-12 col-lg-6 p-0">
                        <img class="img-fluid" src="{{ asset('assets/images/energy_imoveis.jpg') }}" alt="">
                    </div>
                </div>

            </div>

        </section>

        <section class="boxes">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="box">
                            <img src="{{ asset('assets/images/icons/icon-01.jpg') }}" alt="">
                            <h3>Lorem Ipsum</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesen pellentesque.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <img src="{{ asset('assets/images/icons/icon-02.jpg') }}" alt="">
                            <h3>Lorem Ipsum</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesen pellentesque.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <img src="{{ asset('assets/images/icons/icon-03.jpg') }}" alt="">
                            <h3>Lorem Ipsum</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesen pellentesque.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <img src="{{ asset('assets/images/icons/icon-04.jpg') }}" alt="">
                            <h3>Lorem Ipsum</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesen pellentesque.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <img src="{{ asset('assets/images/icons/icon-05.jpg') }}" alt="">
                            <h3>Lorem Ipsum</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesen pellentesque.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <img src="{{ asset('assets/images/icons/icon-06.jpg') }}" alt="">
                            <h3>Lorem Ipsum</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesen pellentesque.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="depoimentos">

            <div class="container">

                <div class="text-center">
                    <div class="title-section">
                        <h2>O que nossos clientes pensam sobre nós?</h2>
                    </div>
                </div>

                <div class="carrosel-depoimentos owl-carousel owl-theme">

                    <div class="item">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-sm-3 col-md-2 col-lg-2">
                                <img src="{{ asset('assets/images/img-depoimento.jpg') }}" alt="">
                            </div>
                            <div class="col-sm-7 col-md-6 col-lg-5">
                                <div class="texto">Vestibulum faucibus justo non lectus tincidunt, vel convallis elit mollis. Integer sit amet viverra urna, vel consequat ex.</div>
                                <div class="autor">- Fulano de Souza</div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-sm-3 col-md-2 col-lg-2">
                                <img src="{{ asset('assets/images/img-depoimento.jpg') }}" alt="">
                            </div>
                            <div class="col-sm-7 col-md-6 col-lg-5">
                                <div class="texto">Vestibulum faucibus justo non lectus tincidunt, vel convallis elit mollis. Integer sit amet viverra urna, vel consequat ex.</div>
                                <div class="autor">- Fulano de Souza</div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-sm-3 col-md-2 col-lg-2">
                                <img src="{{ asset('assets/images/img-depoimento.jpg') }}" alt="">
                            </div>
                            <div class="col-sm-7 col-md-6 col-lg-5">
                                <div class="texto">Vestibulum faucibus justo non lectus tincidunt, vel convallis elit mollis. Integer sit amet viverra urna, vel consequat ex.</div>
                                <div class="autor">- Fulano de Souza</div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>

        </section>



    </div>
    <!-- End Home -->


@endsection
