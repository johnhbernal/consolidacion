@extends('layouts.app') 
@section('content')
<script src="{{ asset('js/user/show.js') }}"></script>
@include('usuarios.fragment.error')

<div class="col-md-10 col-md-offset-1">@include('usuarios.fragment.aside')</div>
<div class="col-sm-8">

	<h2>
		<a href="{{route('usuarios.index')}}"
			class="btn btn-default pull-right">Listar usuarios</a>
	</h2>



	{!! Form::model($usuario, ['route' => ['usuarios.update',
	$usuario->id], 'method' =>
	'PUT','id'=>'formUsuarioEdit','files'=>true]) !!}

	@include('usuarios.fragment.form') {!! Form::close() !!}

</div>
@endsection



