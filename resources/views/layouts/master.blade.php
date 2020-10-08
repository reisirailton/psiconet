<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Psiconet')</title>
    <link rel="icon" type="image/png" href="{{url('img/favicon.png')}}" />
    <link rel="stylesheet" href="{{url('css/app.css')}}">
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <link rel="stylesheet" href="{{url('css/responsive.css')}}">
    <link rel="stylesheet" href="{{url('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('css/icofont.css')}}"/>
	<link rel="stylesheet" href="{{url('css/responsive.css')}}">
	<link rel="stylesheet" href="{{url('css/auth.css')}}">
	<link rel="stylesheet" href="{{url('css/profile.css')}}">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Inicio Tentativa mudança -->
    <link rel="icon" type="image/png" href="{{url('img/favicon.png')}}" />
    <link rel="stylesheet" href="{{url('css/app.css')}}">
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <link rel="stylesheet" href="{{url('css/responsive.css')}}">
    <link rel="stylesheet" href="{{url('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('css/icofont.css')}}"/>
	<link rel="stylesheet" href="{{url('css/responsive.css')}}">
	<meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body  >
         <header class="header">
                <div class="container">
                    <div class="row flexbox-center">
                        <div class="col-lg-2 col-md-3 col-6">
                            <div class="logo">
                                <img src="{{url('img/logo.png')}}" alt="">
                                <a href="/index"><span>Psiconet</a>
                            </div>
						</div>


                        <div class="col-lg-10 col-md-9 col-6">
                            <div class="responsive-menu"></div>
                            <div class="mainmenu">
                                <ul id="primary-menu">
									@if (!Auth::user())
										<li><a class="nav-link" href="/comofunciona">Como Funciona</a></li>
										<li><a class="nav-link" href="/">Para Você</a></li>
										<li><a class="nav-link" href="paraPsicologo">Para Psicólogo</a></li>
									@endif
									<!-- Authentication Links -->
										@guest
											<li class="nav-item">
												<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
											</li>
											@if (Route::has('register'))
												<li class="nav-item">
													<a class="nav-link" href="{{ route('register') }}">{{ __('Cadastre-se') }}</a>
												</li>
											@endif
										@else
											@if(Auth::user())
												<li class="navitem dropdown mr-5">
													<h4 class="text-white">Seja bem vindo a Psiconet</h4>
												</li>
												@if(auth()->user()->type == 0)
												<li><a class="nav-link" href="/clienteLogado">Consulte-se agora</a></li>
												@endif
											@endif

											<li class="nav-item dropdown">
												<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
													{{ Auth::user()->name }} <span class="caret"></span>
												</a>

												<div class="dropdown-menu dropdown-menu-right bg-primary" aria-labelledby="navbarDropdown">
													@if(auth()->user()->type == 1)
													<a class="dropdown-item" href="/psicologoLogado"
														onclick="event.preventDefault();
																	  document.getElementById('psicologoLogado').submit();">
														 {{ __('Perfil') }}
													 </a>
													@else
													<a class="dropdown-item" href="/perfilCliente/{{Auth::user()->id}}"
													onclick="event.preventDefault();
																  document.getElementById('perfilCliente').submit();">
													 {{ __('Perfil') }}
												 	</a>
													<!-- <a class="dropdown-item" href=""
														onclick="event.preventDefault();
																	  document.getElementById('editarCadastroCliente').submit();">
														 {{ __('Editar Perfil') }}
													 </a> -->
													 @endif
													<a class="dropdown-item" href="{{ route('logout') }}"
													   onclick="event.preventDefault();
																	 document.getElementById('logout-form').submit();">
														{{ __('Sair') }}
													</a>
													<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
														@csrf
													</form>
													@if(auth()->user()->type == 1)
													<form id="psicologoLogado" action="/psicologoLogado" method="GET" style="display: none;">
														@csrf{{ method_field('GET') }}
													</form>

													<form id="editarCadastroPsicologo" action="/editarCadastroPsicologo/{{auth()->user()->id}}" method="GET" style="display: none;">
														@csrf{{ method_field('GET') }}
													</form>
													@elseif(auth()->user()->type == 0)
													<form id="perfilCliente" action="/perfilCliente/{{auth::user()->id}}" method="GET" style="display: none;">
														@csrf{{ method_field('GET') }}
													</form>

													<form id="editarCadastroCliente" action="/editarCadastroCliente/{{auth()->user()->id}}" method="GET" style="display: none;">
														@csrf
													</form>
													@endif

												</div>
											</li>
										@endguest


                                </ul>
							</div>

                        </div>
                    </div>
                </div>
            </header><!-- header section end -->
            <main>
                @yield('content')
			</main>


    <!-- Modal start longin -->
	<div class="modal fade" id="sitModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header text-center">
					<div class="modal-title w-100 d-flex align-items-center justify-content-center">
						<img src="img/logo.png" alt="">
						<h2>PSICONET</h2>
					</div>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="login-container d-flex align-items-start justify-content-center">
						<form class="login-form text-center">
							<h2 class="title-login mb-4 font-weight-light ">Login</h2>
							<div class="form-check form-check-inline mb-4">
								<input class="form-check-input" type="radio" name="radioLogin" id="radioLoginCliente" value="loginCliente" checked>
								<label class="form-check-label" for="radioLogin1">
									Cliente
								</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="radioLogin" id="radioLoginPsicologo" value="loginPsicologo">
								<label class="form-check-label" for="radioLogin2">
									Psicólogo(a)
								</label>
							</div>
							<div class="form-group">
								<input type="text" class="form-control form-control-lg" placeholder="E-mail">

							</div>
							<div class="form-group">
								<input type="password" class="form-control form-control-lg" placeholder="Senha">
							</div>
							<div class="forgot-link d-flex align-items-center justify-content-center">
								<a class="alert-link" href="#">Esqueci minha Senha ?</a>
							</div>

							<button class="button-form btn btn-primary btn-block btn-lg mt-4" id="">Login</button>
							<div class="resgister d-flex align-items-center justify-content-around mt-4">
							{{-- <p class="font-weight-normal">Não tem conta!</p> --}}
                            <p><a class="alert-link" href="/cadastroCliente">Registre-se Cliente</a></p>
                            <p><a class="alert-link" href="/cadastroPsicologo">Registre-se Psicologo</a></p>
							</div>
						</form>
					</div>
				</div>
				<div class="modal-footer d-flex align-items-center justify-content-center">
					 <p class="">Copyright &copy; Psiconet 2019</p>
				</div>
			</div>
		</div>
	</div>
    <!-- Modal longin  end-->

    <!-- footer section start -->
	<footer class="footer mt-5 pt-5" id="contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<p class="footer-links">
						<a href="/comofunciona">Como funciona</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="#porque-usar">Por que usar</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;

						<a href="#team">Nossos Pisicólogos</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="/paraPsicologo">Seja um Pisicólogos</a>
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="copyright-area">
						<ul>
							<li><a href="http://facebook.com" target="_blank"><i class="icofont icofont-social-facebook"></i></a></li>
							<li><a href="http://instagram.com" target="_blank"><i class="icofont icofont-social-instagram"></i></a></li>
							<li><a href="http://linkedin.com" target="_blank"><i class="icofont icofont-brand-linkedin"></i></a></li>
						</ul>
						<p>Se você estiver em uma situação de perigo, não use este site e procure o atendimento
							presencial ou ligue para 188 - Centro de valorização da vida <a href="https://www.cvv.org.br/" target="_blank">(https://www.cvv.org.br/)</a></p>
						<p style="font-size: 12px;">&copy;Copyright &copy;
							<script>document.write(new Date().getFullYear());</script> PSICONET Terapias | Todos os
							direitos reservados</p>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- footer section end -->

	<a href="#" class="scrollToTop">
		<i class="icofont icofont-arrow-up"></i>
    </a>

    <script  src="{{url('js/jquery.min.js')}}"></script>
    <script  src="{{url('js/jquery.slicknav.min.js')}}"></script>
    <script  src="{{url('js/main.js')}}"></script>
    <script  src="{{url('js/owl.carousel.min.js')}}"></script>
    <script  src="{{url('js/slick.min.js')}}"></script>
	<script  src="{{url('js/wow-1.3.0.min.js')}}"></script>

</body>
</html>
