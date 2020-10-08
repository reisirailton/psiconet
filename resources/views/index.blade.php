@extends('layouts.master')
@section('content')
<section class="hero-area">
	<div class="success">
		@if(session('sucess'))
		<div class="alert alert-success text-center">
			{{ session('sucess') }}
		</div>
		@endif
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-10">
				<div class="hero-area-content">
					<h1>Terapia Online e uma nova maneira cuidar da sua saúde e inteligência emocional</h1>
					<p>A Psiconet está aqui para conectar Psicólogos a milhares de pessoas que desejam melhorar o
						seu bem-estar.</p>
					<a href="login" class="appao-btn">Consulta online</a>
					@if (!Auth::user())
						<a href="paraPsicologo" class="appao-btn">Seja um Psicólogo</a>
					@endif
					
				</div>
			</div>
		</div>
	</div>
</section><!-- hero area end -->
<section class="about-area ptb-90" id="about">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="sec-title">
					<h2>Sobre a Psiconet<span class="sec-title-border"><span></span><span></span><span></span></span>
					</h2>
				</div>
			</div>
		</div>
		<div class="row px-3">
			<div class="col-lg-4 text-justify punchline">
				<div class="single-about-box py-4 my-2">
					<p>Psiconet é formada por um grupo de pessoas apaixonadas por pessoas. Acreditamos que podemos
						facilitar o acesso a melhores condições de saúde e bem-estar através de soluções tecnológicas e
						inovadoras por meio da internet.</p>
				</div>
			</div>
			<div class="col-lg-4 text-justify punchline">
				<div class="single-about-box py-4 my-2">
					<p>Nosso trabalho é proporcionar a todos um serviço de alta qualidade, eficiente e seguro. Oferecer
						facilidade e comodidade para os clientes que precisam de um bom serviço e para os psicólogos que
						desejam aumentar sua renda através da internet. prestando um bom serviço.</p>
				</div>
			</div>
			<div class="col-lg-4 text-justify">
				<div class="single-about-box py-4 my-2 punchline">
					<p>Todos os nossos psicólogos online são licenciados e passam por um processo seguro de verificação
						e credenciamento, além de aderirem a rigorosos códigos de ética e sigilo. Os profissionais da
						Psiconet são capacitados a ajudá-lo a fazer mudanças positivas em sua vida.</p>
				</div>
			</div>
		</div>
		<div id="porque-usar"></div>
	</div>
</section><!-- about section end -->
<section class="porque-usar">
	<div class="container text-center">
		<div class="row">
			<div class="col-lg-12 pt-5">
				<div class="sec-title">
					<h2 class="text-white">Por que usar a Psiconet<span
							class="sec-title-border"><span></span><span></span><span></span></span></h2>
					<p class="text-white">A melhor terapia online ao seu alcance acessível em qualquer lugar</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="d-flex flex-wrap justify-content-around mx-5 px-2">
				<div class="col-lg-5  card mb-4">
					<div class="card-header text-center">
						<h4>Acessibilidade</h4>
					</div>
					<div class="card-body">
						<p class="card-text">Terapia online é bastante acessível e conveniente. Uma vez que você tem a
							possibilidade de
							conversar com seu psicólogo do conforto da sua própria casa. Agendar suas sessões de terapia
							para os horários mais convenientes para você.</p>
					</div>
				</div>
				<div class="col-lg-5   card mb-4">
					<div class="card-header text-center">
						<h4>Psicólogo Ideal</h4>
					</div>
					<div class="card-body">
						<p class="card-text">Você tem acesso a profissionais qualificados independente da distância.
							Encontre o Psicólogo
							mais adequado para sua necessidade.Faça a pesquisa e escolha o que mais se encaixa para seu
							perfil.</p>
					</div>
				</div>
				<div class="col-lg-5  card mb-4">
					<div class="card-header text-center">
						<h4>Preço acessível</h4>
					</div>
					<div class="card-body">
						<p class="card-text">Você não precisa pagar caro para se cuidar. Fale com um psicólogo on-line,
							sem pesar no
							bolso. Disponibilizamos planos acessíveis para atender suas necessidades.</p>
					</div>
				</div>
				<div class="col-lg-5  card mb-4">
					<div class="card-header text-center">
						<h4>Horário Flexivel</h4>
					</div>
					<div class="card-body">
						<p class="card-text">Quem tem uma agenda cheia sabe como pode ser difícil marcar uma consulta.
							Porém, por ser
							online, fica muito mais fácil para o psicólogo conseguir te atender em horários como, por
							exemplo, de manhã bem cedo ou até tarde da noite.</p>
					</div>
				</div>

			</div>

		</div>
	</div>

</section>
<section class="testemonials">
	<div class="container">

		<div class="row">
			<div class="col-lg-12 pt-5">
				<div class="sec-title">
					<h2>Depoimentos<span><span></span><span></span><span></span></span></h2>
					<p>Veja o que o nossos clientes estão falando sobre a Psiconet</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="testemonials-box col-lg-3 col-md-6 col-sm-12 text-center">
				<div class="profile d-flex flex-column justify-content-between">
					<img src="{{url('/img/author1.jpg')}}" class="user" alt="">
					<blockquote> " Tive uma experiencia muito boa com o site, obtive a ajuda que precisava e achei as
						funcionalidades e comodidade site muito legal..." </blockquote>
					<h3>Larissa Andrade</h3>
				</div>
			</div>
			<div class="testemonials-box col-lg-3 col-md-6 col-sm-12 text-center">
				<div class="profile d-flex flex-column justify-content-between">
					<img src="{{url('/img/author2.jpg')}}" class="user" alt="">
					<blockquote>" Achei o site muito prático e consegui través da plataforma Psiconet trazer a
						praticidade de ser atendido a distância e não deixar de fazer minha terapia..." </blockquote>
					<h3>Marcos Passos</h3>
				</div>
			</div>
			<div class="testemonials-box col-lg-3 col-md-6 col-sm-12 text-center">
				<div class="profile d-flex flex-column justify-content-between">
					<img src="{{url('/img/author3.jpg')}}" class="user" alt="">
					<blockquote>" Era tudo que eu estava procurando, pois consigo associar minha vida corrida com as
						minhas terapias, posso ser atendida quando e onde quiser, me ajudou muito... obrigado
						Psiconet..." </blockquote>
					<h3>Beatriz Souza</h3>
				</div>
			</div>
			<div class="testemonials-box col-lg-3 col-md-6 col-sm-12 text-center">
				<div class="profile d-flex flex-column justify-content-between">
					<img src="{{url('/img/author4.jpg')}}" class="user" alt="">
					<blockquote>" Recomendo a plataforma pois possuem profissionais muito bons e com alta qualificação,
						acredito que pra quem não tem muito tempo é a plataforma ideal..." </blockquote>
					<h3>Cláudio Moreira</h3>
				</div>
			</div>

		</div>
	</div>
</section>
<!-- Section Psicólogos inicio-->
<!-- team section start -->
<section class="team-area mt-5" id="team">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="sec-title">
					<h2>Conheça o Nosso Time!<span
							class="sec-title-border"><span></span><span></span><span></span></span>
					</h2>
					<p>Trabalhamos com profissionais de know-how no mercado para poder oferecer a melhor experiência
						para os nossos clientes!
					</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3 col-sm-6">
				<div class="single-team-member">
					<div class="team-member-img">
						<img src="img/team1.jpg" alt="team">
						<div class="team-member-icon">
							<div class="display-table">
								<div class="display-tablecell">
									<a href="http://facebook.com"><i class="icofont icofont-social-facebook"></i></a>
									<a href="http://twitter.com"><i class="icofont icofont-social-twitter"></i></a>
									<a href="http://linkedin.com"><i class="icofont icofont-brand-linkedin"></i></a>
									<a href="https://br.pinterest.com/"><i
											class="icofont icofont-social-pinterest"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="team-member-info">
						<a href="#">
							<h4>Maria Joaquina</h4>
						</a>
						<p>Especialista há 15 anos em Psicologia da Saúde</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="single-team-member">
					<div class="team-member-img">
						<img src="{{url('img/team2.jpg')}}" alt="team">
						<div class="team-member-icon">
							<div class="display-table">
								<div class="display-tablecell">
									<a href="http://facebook.com"><i class="icofont icofont-social-facebook"></i></a>
									<a href="http://twitter.com"><i class="icofont icofont-social-twitter"></i></a>
									<a href="#http://linkedin.com"><i class="icofont icofont-brand-linkedin"></i></a>
									<a href="https://br.pinterest.com/"><i
											class="icofont icofont-social-pinterest"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="team-member-info">
						<a href="#">
							<h4>Jaime Palilo</h4>
						</a>
						<p>Especialista conceituado em Psicologia Cognitiva</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="single-team-member">
					<div class="team-member-img">
						<img src="{{url('img/team3.jpeg')}}" alt="team">
						<div class="team-member-icon">
							<div class="display-table">
								<div class="display-tablecell">
									<a ref="http://facebook.com"><i class="icofont icofont-social-facebook"></i></a>
									<a href="http://twitter.com"><i class="icofont icofont-social-twitter"></i></a>
									<a href="http://linkedin.com"><i class="icofont icofont-brand-linkedin"></i></a>
									<a href="https://br.pinterest.com/"><i
											class="icofont icofont-social-pinterest"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="team-member-info">
						<a href="#">
							<h4>Marcelina Guerra</h4>
						</a>
						<p>Profissional conceituada em Psicologia de Desenvolvimento</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="single-team-member">
					<div class="team-member-img">
						<img src="img/team4.jpg" alt="team">
						<div class="team-member-icon">
							<div class="display-table">
								<div class="display-tablecell">
									<a href="http://facebook.com"><i class="icofont icofont-social-facebook"></i></a>
									<a href="http://twitter.com"><i class="icofont icofont-social-twitter"></i></a>
									<a href="http://linkedin.com"><i class="icofont icofont-brand-linkedin"></i></a>
									<a href="https://br.pinterest.com/"><i
											class="icofont icofont-social-pinterest"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="team-member-info">
						<a href="#">
							<h4>Daniel Zapata</h4>
						</a>
						<p> Há 10 anos atuando no mercado de Psicologia Social</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section><!-- team section end -->
<a href="/login" class="d-flex justify-content-center">
	<button type="button" class="btn btn-primary btn-block py-2 my-5 badge-pill col-md-4 button-form"><h4 class="text-white">Consulte-se</h4></button>
</a>
@endsection