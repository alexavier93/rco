<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('/assets/images/favicon.ico') }} ">

    <title>Energy @yield('title')</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">

    <script
        src="https://maps.googleapis.com/maps/api/js?v=3&sensor=false&amp;libraries=places&key=AIzaSyAexUoFpkweVmPfHrClf8SMzt-lzHPmiJs">
    </script>

</head>

<body>

    <!-- Header -->
    <header id="header">

        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-3 col-lg-3 text-center text-md-start">
                        <ul class="nav-top">
                            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href=""><i class="fab fa-instagram"></i></a></li>
                            <li><a href=""><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>

                    <div class="col-sm-12 col-md-9 col-lg-9 text-center text-md-end">
                        <ul class="nav-top">
                            <li><a href=""><i class="fab fa-whatsapp"></i> 11 99995-3304</a></li>
                            <li><a href=""><i class="fas fa-phone-alt"></i> 11 99995-3304</a></li>
                            <li><a href=""><i class="fas fa-phone-alt"></i> 11 99995-3304</a></li>
                            <li><a href=""><i class="far fa-envelope"></i> atendimento@energyimoveis.com.br</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-nav">

            <div class="container">

                <div class="wrap">

                    <div class="logo">
                        @if (route('home'))
                            <a href="{{ route('home') }}" class="logo-main"><img
                                    src="{{ asset('assets/images/logo-energy.png') }}" alt=""></a>
                        @else
                            <a href="{{ route('home') }}" class="logo-main"><img class="img-fluid"
                                    src="{{ asset('assets/images/logo-energy.png') }}" alt=""></a>
                        @endif
                        <a href="{{ route('home') }}" class="logo-fix"><img class="img-fluid"
                                src="{{ asset('assets/images/logo-energy.png') }}" alt=""></a>
                    </div>

                    <div class="menu">

                        <nav class="nav">
                            <ul>
                                <li class="nav-item">
                                    <a class="nav-link @if (\Route::current()->getName() ==
                                        'home') active @endif"
                                        href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link @if (\Route::current()->getName() ==
                                        'imoveis') active @endif"
                                        href="{{ route('home') }}">Imóveis</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link @if (\Route::current()->getName() ==
                                        'servicos') active @endif"
                                        href="{{ route('home') }}">Serviços</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link @if (\Route::current()->getName() ==
                                        'quemsomos') active @endif"
                                        href="{{ route('home') }}">Quem Somos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link @if (\Route::current()->getName() ==
                                        'contato') active @endif"
                                        href="{{ route('home') }}">Contato</a>
                                </li>
                            </ul>
                        </nav>

                    </div>

                    <div class="area-cliente">

                        <a href="" class="btn btn-secondary btn-sm"><i class="fas fa-user-circle"></i> Área do
                            Cliente</a>

                    </div>

                    <a href="javascript:void(0)" class="sidemenu_btn d-lg-none" id="sidemenu_toggle">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>

                </div>

            </div>



        </div>

        <!--Side Nav-->
        <div class="side-menu hidden">
            <div class="inner-wrapper">
                <span class="btn-close" id="btn_sideNavClose"><i></i></span>
                <nav class="side-nav w-100">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Imóveis</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Quem Somos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Área do Cliente</a>
                        </li>

                    </ul>
                </nav>

            </div>

        </div>

        <a id="close_side_menu" href="javascript:void(0);"></a>

    </header>
    <!-- Header -->

    <main role="main">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer id="footer">

        <div class="footer-top">

            <div class="container">

                <div class="row justify-content-between links">

                    <div class="col-sm-12 col-md-6 col-lg-5 item-link">
                        <img class="img-fluid mb-4 w-50" src="{{ asset('assets/images/logo-energy.png') }}" alt="">

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent blandit pellentesque diam,
                            nec rutrum ipsum ut. Ut viverra tellus sit amet sem sollicitudin aliquam.</p>

                        <div class="contact">
                            <div class="contact-icon"><i class="fab fa-whatsapp"></i></div>
                            <div class="contact-info">11 95824-8889</div>
                        </div>
                        <div class="contact">
                            <div class="contact-icon"><i class="fas fa-phone-alt"></i></div>
                            <div class="contact-info">11 94454-0915</div>
                        </div>
                        <div class="contact">
                            <div class="contact-icon"><i class="fas fa-phone-alt"></i></div>
                            <div class="contact-info">11 99995-3304</div>
                        </div>

                        <div class="contact">
                            <div class="contact-icon"><i class="far fa-envelope"></i></div>
                            <div class="contact-info">atendimento@energyimoveis.com.br</div>
                        </div>

                        <div class="address">
                            <div class="address-icon"><i class="fas fa-map-marker-alt"></i></div>
                            <div class="address-info">Av. Washington Luiz, 685 - Jardim Emilia, Sorocaba - SP</div>
                        </div>

                        <ul class="social list-inline">
                            <li>
                                <a href="https://www.facebook.com/" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>

                            <li>
                                <a href="https://www.facebook.com/" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>

                            <li>
                                <a href="https://www.facebook.com/" target="_blank">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>

                        </ul>

                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-4 item-link">

                        <h3>Fale conosco</h3>
                        <h5 class="mb-3">Praesent blandit pellentesque diam, nec rutrum ipsum ut. Ut viverra tellus sit
                            amet sem sollicitudin aliquam.</h5>

                        <div class="msg-sucesso"></div>
                        <div class="msg-erro"></div>

                        <div class="form-contato">
                            <form id="form-contato" method="post">

                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                            <input type="text" class="form-control" name="nome"
                                                placeholder="Nome completo">
                                        </div>

                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <input type="text" class="form-control" name="email" placeholder="E-mail">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <input type="text" class="form-control fone" name="email"
                                                placeholder="Telefone">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                            <textarea name="mensagem" class="form-control" rows="6" placeholder="Mensagem"></textarea>
                                        </div>
                                    </div>

                                </div>

                                <div class="form-group mb-3 text-end">
                                    <button type="submit" class="btn btn-primary mb-2">Enviar</button>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="bottom-footer">

            <div class="container">

                <div class="clearfix">

                    <p class="col-sm-12 col-md-6 col-lg-6 copy">© 2021 Energy - Todos os direitos reservados</p>

                    <p class="col-sm-12 col-md-6 col-lg-6 dev">
                        Desenvolvido por <a href="https://www.agenciaaffinity.com.br"><img width="90"
                                src="https://agenciaaffinity.com.br/assinatura/affinity-logo-branco.svg"></a>
                    </p>

                </div>

            </div>

        </div>

    </footer>
    <!-- End Footer -->


    <div id="floating-smi" class="floating-smi hidden-xs hidden-sm">
        <div class="floating-smi-wrap">
            <div class="floating-smi-list">
                <div class="textwidget custom-html-widget">
                    <ul>
                        <li>
                            <a href="https://api.whatsapp.com/send?phone=5511" target="_blank"
                                rel="noopener noreferrer">
                                <span class="fab fa-whatsapp"></span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/rcoempreendimentos/" target="_blank"
                                rel="noopener noreferrer">
                                <span class="fab fa-facebook-f"></span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/rcoempreendimentos/" target="_blank"
                                rel="noopener noreferrer">
                                <span class="fab fa-instagram"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/2.1.11/jquery.mixitup.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/geocomplete/1.7.0/jquery.geocomplete.min.js"></script>

    <script src="{{ asset('/assets/js/app.js') }} "></script>



</body>

</html>
