@extends('layouts.app') 
@section('content')

<div class="col-sm-10">
@include('usuarios.fragment.aside')
	<h2 align="center">
		Nuevo usuario <a href="{{route('usuarios.index')}}"
			class="btn btn-default pull-right">Listar usuarios</a>
	</h2>
	{!! Form::open(['route' =>
	'usuarios.store','id'=>'formUsuario','files'=>true]) !!}
	@include('usuarios.fragment.form') {!! Form::close() !!}

</div>
@endsection