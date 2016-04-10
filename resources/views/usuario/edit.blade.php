@extends('layouts.admin')
	@section('content')
		@include('alerts.request')
		<!-- llena el formulario que esta basado en un modelo usuario y se ajusta a cada
		valor del campo  para editar-->
		<div class="panel-heading"><h1>EDITAR USUARIO: {{$user->name}}</h1></div>
		{!!Form::model($user,['route'=>['usuario.update',$user->id],'method'=>'PATCH'])!!}
			
	 <!--incluye el contedido del archivo usr-->
			@include('usuario.forms.usr')

			{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}

	<!--valores del campo para eliminar usuario-->
	{!!Form::open(['route'=>['usuario.destroy', $user], 'method' => 'DELETE'])!!}
			{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
		{!!Form::close()!!}
	@endsection