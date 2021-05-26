@extends('layouts.app')

@section('title', '- Sobre Nós')

@section('content')

    <div id="quem-somos">

        <div class="page-title-content" style="background: url('{{ asset('assets/images/banner-pages/banner-quem-somos.png') }}')">
            <div class="container">
                <h5>Sobre Nós</h5>
                <h1>Lorem Ipsum Dolor Sit Amet</h1>
            </div>
        </div>

        <div class="container">

            <div class="content">

                <div class="row">

                    <div class="col-lg-6 px-md-5">

                        <div class="title-section text-left">
                            <h3>Fusce nec arcu ornare, commodo velit venenatis</h3>
                            <h2>Curabitur imperditente</h2>
                        </div>

                        <p>A RCO EMPREENDIMENTOS dedica-se a fornecer aso clientes um serviço cordial. </p>
                        <p>Tornamos nossa missão o fornecimento de produtos e serviços confiáveis em nossa abordagem voltada ao cliente.</p>
                        <p>Nossa equipe cortês e profissional dispõe de uma variedade de serviços para atender suas necessidades.</p>

                    </div>

                    <div class="col-lg-6">

                        <img class="img-fluid" src="{{ asset('assets/images/sobre-rco.jpg') }}" alt="RCO" title="RCO">

                    </div>

                    <div class="col-lg-12 mt-5">

                        <div class="row">

                            <div class="col-lg-4">

                                <div class="card">
                                    <img class="w-25 mx-auto my-3" src="{{ asset('assets/images/icon_financiamento.png') }}" alt="">
                                    <h4>Simule seu financiamento</h4>
                                    <p>Donec vehicula laoreet arcu, eget porta velit venenatis a. Aliquam nec eleifend ipsum. Phasellus at sapien at tellus congue accumsan ac et ipsum. Pellentesque. Nunc nec porttitor diam. Ut ac nulla elementum, suscipit lobortis malesuadaultricies.</p>
                                </div>

                            </div>


                            <div class="col-lg-4">

                                <div class="card">
                                    <img class="w-25 mx-auto my-3" src="{{ asset('assets/images/icon_lancamento.png') }}" alt="">
                                    <h4>Imóvel em lançamento</h4>
                                    <p>Donec vehicula laoreet arcu, eget porta velit venenatis a. Aliquam nec eleifend ipsum. Phasellus at sapien at tellus congue accumsan ac et ipsum. Pellentesque. Nunc nec porttitor diam. Ut ac nulla elementum, suscipit lobortis malesuadaultricies.</p>
                                </div>

                            </div>

                            <div class="col-lg-4">

                                <div class="card">
                                    <img class="w-25 mx-auto my-3" src="{{ asset('assets/images/icon_chaves.png') }}" alt="">
                                    <h4>Imóvel pronto para morar</h4>
                                    <p>Donec vehicula laoreet arcu, eget porta velit venenatis a. Aliquam nec eleifend ipsum. Phasellus at sapien at tellus congue accumsan ac et ipsum. Pellentesque. Nunc nec porttitor diam. Ut ac nulla elementum, suscipit lobortis malesuadaultricies.</p>

                                </div>

                            </div>

                        </div>

                    </div>


                </div>




            </div>

        </div>

    </div>

@endsection
