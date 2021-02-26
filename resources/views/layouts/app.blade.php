<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">
    <title>RCO @yield('title')</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">

    <script src="https://maps.googleapis.com/maps/api/js?v=3&sensor=false&amp;libraries=places&key=AIzaSyAexUoFpkweVmPfHrClf8SMzt-lzHPmiJs"></script>

</head>

<body>

	<!-- Header -->
	<header id="header">

		@if (route('home'))
		<div class="header-nav">
        @else
		<div class="header-nav header-nav-pages">
		<?php endif; ?>

			<div class="wrap">

				<div class="logo">
					@if (route('home'))
						<a href="{{ route('home') }}" class="logo-main"><img src="{{ asset('assets/images/logo-rco.png') }}" alt=""></a>
                    @else
						<a href="{{ route('home') }}" class="logo-main"><img class="img-fluid" src="{{ asset('assets/images/logo-rco.png') }}" alt=""></a>
                    @endif
					    <a href="{{ route('home') }}" class="logo-fix"><img class="img-fluid" src="{{ asset('assets/images/logo-rco.png') }}" alt=""></a>
				</div>

				<div class="menu">

					<nav class="nav">
						<ul>
							<li class="nav-item">
								<a class="nav-link" href="{{ route('home') }}">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{ route('quemsomos.index') }}">Sobre Nós</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{ route('imoveis.index') }}">Imóveis</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{ route('venderterreno.index') }}">Venda seu Terreno</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{ route('contato.index') }}">Contato</a>
							</li>
						</ul>
					</nav>

					<div class="portal-cliente">
						<a class="btn btn-default btn-sm" href="" target="_blank">Portal do Cliente<i class="fas fa-arrow-right ms-2"></i></a>
					</div>

				</div>

				<div class="contato">
					<div>
						<a href="tel:5565454117">
							<span class="phone-box"><i class="fas fa-phone-alt"></i></span> <span>11 90000-0000</span>
						</a>
					</div>
				</div>

				<a href="javascript:void(0)" class="sidemenu_btn d-lg-none" id="sidemenu_toggle">
					<span></span>
					<span></span>
					<span></span>
				</a>

			</div>

		</div>

		<!--Side Nav-->
		<div class="side-menu hidden">
			<div class="inner-wrapper">
				<span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
				<nav class="side-nav w-100">
					<ul class="navbar-nav">
						<li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('quemsomos.index') }}">Sobre Nós</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('imoveis.index') }}">Imóveis</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('venderterreno.index') }}">Venda seu Terreno</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contato.index') }}">Contato</a>
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

                <div class="row links">

                    <div class="col-xs-12 col-lg-5 item-link">
                        <img class="img-fluid mb-2" src="{{ asset('assets/images/logo-rco.png') }}" alt="">

                        <p>Nos dedicamos em fornecer aos clientes um serviço cordial. Valorizamos o seu negócio. Tornamos nossa missão o fornecimento de produtos e serviços confiáveis. Dispomos de uma variedade de serviços para atender suas necessidades.</p>
                        
                        <div class="address">
                            <div class="address-icon"><i class="fas fa-map-marker-alt"></i></div>
                            <div class="address-info">Av. Washington Luiz, 685 - Jardim Emilia, Sorocaba - SP</div>
                        </div>

                        <ul class="social list-inline">
                            <li>
                                <a href="https://www.facebook.com/basilarcomercialeconstrutora" target="_blank"
                                    class="facebook">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>

                            <li>
                                <a href="mailto:basilar@basilarconstrutora.com.br" target="_blank" class="instagram">
                                    <i class="far fa-envelope"></i>
                                </a>
                            </li>
                        </ul>

                    </div>

                    <div class="col-xs-12 col-md-5 col-lg-4 offset-md-2 item-link">

                        <h3>Cadastre-se e Receba Novidades</h3>
                        <h5 class="mb-3">Tenha certeza de que receberá somente mensagens de grandes oportunidades.</h5>

                        <div class="msg-sucesso"></div>
                        <div class="msg-erro"></div>

                        <div class="form-newsletter">
                            <form id="form-newsletter" method="post">
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control" name="email_newsletter" placeholder="Seu e-mail">
                                </div>
                                <div class="form-group mb-3">
                                    <button type="submit" class="btn btn-primary mb-2">Enviar <i class="fas fa-arrow-right ms-2"></i></button>
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

                    <p class="col-sm-12 col-md-6 col-lg-6 copy">© 2021 RCO - Todos os direitos reservados</p>

                    <p class="col-sm-12 col-md-6 col-lg-6 dev">
                        Desenvolvido por <a href="https://www.agenciaaffinity.com.br"><img width="90" src="https://agenciaaffinity.com.br/assinatura/affinity-logo-branco.svg"></a>
                    </p>

                </div>

            </div>

        </div>

    </footer>
    <!-- End Footer -->


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/2.1.11/jquery.mixitup.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/geocomplete/1.7.0/jquery.geocomplete.min.js"></script>

    <script src="{{ asset('/assets/js/app.js') }} "></script>



</body>

</html>
