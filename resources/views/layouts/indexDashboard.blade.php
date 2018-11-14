<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}" defer></script>

	<!-- Fonts -->
	<link rel="dns-prefetch" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
</head>
<body> 
	@auth
	<nav class="navbar navbar-dark  navbar-expand-lg fixed-top bg-dark flex-md-nowrap p-0 shadow">
		<a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Company name</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav form-inline">
				<li class="nav-item">
					<a class="nav-link">
						Seja bem vindo {{ Auth::user()->name }}
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
						{{ __('Sair') }}
					</a>
					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						@csrf
					</form>
				</li>
			</ul>
		</div>
	</nav>
	
	<div class="container-fluid">
		<div class="row">
			<nav class="col-md-2 d-none d-md-block bg-light sidebar">
				<div class="sidebar-sticky">
					<ul class="nav flex-column">
						<li class="nav-item">
							<a class="nav-link" href="/home">
								<span data-feather="home"></span>
								Inicio<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/contato">
								<span data-feather="file"></span>
								Contatos
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/servico">
								<span data-feather="shopping-cart"></span>
								Serviços
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/solicitacao">
								<span data-feather="users"></span>
								Solicitações de Serviços
							</a>
						</li>
					</ul>

					<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
						<span>Escola</span>
						<a class="d-flex align-items-center text-muted" href="#">
							<span data-feather="plus-circle"></span>
						</a>
					</h6>
					<ul class="nav flex-column mb-2">
						<li class="nav-item">
							<a class="nav-link" href="/curso">
								<span data-feather="file-text"></span>
								Cursos
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/professor">
								<span data-feather="file-text"></span>
								Professores
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/turma/aberta">
								<span data-feather="file-text"></span>
								Turmas Abertas
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/turma/fechada">
								<span data-feather="file-text"></span>
								Turmas Fechadas
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/aluno/matriculado">
								<span data-feather="file-text"></span>
								Alunos Matriculados
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/aluno/pre_matriculado">
								<span data-feather="file-text"></span>
								Alunos Pré-Matriculados
							</a>
						</li>
					</ul>
				</div>
			</nav>

			<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
				@yield('content')

			</main>
		</div>
	</div>





	@else
	<div class="container">
		<h1 class="text-center">Acesso negado! Faça <a href="{{ route('login') }}">{{ __('Login') }} para continuar</a></h1>

	</div>
	@endauth

	<script src="{{ asset('js/app.js') }}" type="text/js"></script>

</body>
</html>