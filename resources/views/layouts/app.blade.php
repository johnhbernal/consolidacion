<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Carval') }}</title>

<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/login.css') }}" rel="stylesheet">
<link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/navbar.js') }}"></script>
<!-- Scripts -->

<nav class="navbar navbar-default navbar-static-top" id="navProyect">
	<div class="navbar-header">

		<!-- Branding Image -->
		<a class="navbar-brand" href="{{ url('/') }}"> <span
			class="glyphicon glyphicon-home"> <!-- {{config('app.name', 'Carval') }}-->
		</span></a>

	</div>
	<ul class="nav navbar-nav navbar-left">
		@if (Auth::guest()) @else @if (Auth::guard('admin')->check())
		<li class="dropdown"><a href="#" class="dropdown-toggle"
			data-toggle="dropdown" role="button" aria-expanded="false"> <i
				class="pe-7s-user"></i> <strong>Opciones de Administrador</strong><span
				class="caret"></span>
		</a>
			<ul class="dropdown-menu">
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Opciones
						de Usuario<b class="caret"></b>
				</a>
					<ul class="dropdown-menu">
						<li><a href="{{route('usuarios.index')}}">Listar Usuarios</a></li>
						<li><a href="{{route('usuarios.create')}}">Nuevo Usuario</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link [Menu 2.4]</a></li>

					</ul></li>
				<li><a href="{{route('usuarios.index')}}">Listar Usuarios</a></li>
				<li><a href="{{route('usuarios.create')}}">Nuevo Usuario</a></li>
				<li class="divider"></li>
				<li><a href="#">Separated link</a></li>
			</ul></li> @else @endif @if (Auth::guard('web')->check())
		<li class="dropdown"><a href="#" class="dropdown-toggle"
			data-toggle="dropdown" role="button" aria-expanded="false"> <i
				class="pe-7s-user"></i> <strong>Opciones de usuario</strong><span
				class="caret"></span>
		</a>
			<ul class="dropdown-menu">
				<li><a href="#">Action</a></li>
				<li><a href="#">Another action</a></li>
				<li><a href="#">Something else here</a></li>
				<li class="divider"></li>
				<li><a href="#">Separated link</a></li>
			</ul></li> @else @endif @endif
	</ul>
	<div class="collapse navbar-collapse" id="app-navbar-collapse">
		<!-- Left Side Of Navbar -->
		<ul class="nav navbar-nav">&nbsp;
		</ul>

		<!-- Right Side Of Navbar -->
		<ul class="nav navbar-nav navbar-right">
			@if (Auth::guest())
			<li><a href="{{ route('login') }}">Login</a></li>
			<li><a href="{{ route('register') }}">Register</a></li> @else
			<li class="dropdown"><a href="#" class="dropdown-toggle"
				data-toggle="dropdown" role="button" aria-expanded="false"><span
					class="glyphicon glyphicon-user"></span> {{ Auth::user()->name }} <span
					class="caret"></span> </a>

				<ul class="dropdown-menu" role="menu">
					<li><a href="{{ route('logout') }}"
						onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
							<span class="glyphicon glyphicon-off"></span> Logout
					</a>

						<form id="logout-form" action="{{ route('logout') }}"
							method="POST" style="display: none;">{{ csrf_field() }}</form></li>
				</ul></li> @endif
		</ul>
	</div>

</nav>
</head>

@yield('content')
</html>