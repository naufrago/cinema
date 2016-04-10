
@extends('layouts.admin')
	@section('content')
		@include('alerts.request')




		{!!Form::open(['route'=>'usuario.store', 'method'=>'POST'])!!}
		<!-- incluye el contedido del archivo usr-->
			@include('usuario.forms.usr')

		<!--<div class="form-group">
			{!!Form::label('nombre','Nombre:')!!}
			{!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('email','Correo:')!!}
			{!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingresa el Email del usuario'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('password','Contraseña:')!!}
			{!!Form::password('password',['class'=>'form-control','placeholder'=>'Ingresa el Password del usuario'])!!}
		</div>-->
		{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
		{!!Form::close()!!}
		
		<!--<form action="">
			<div class="form-group">
				<label for="">Nombre</label>
				<input type="text" class="form-control"></input>
			</div>

			<div class="form-group">
				<label for="">Correo</label>
				<input type="text" class="form-control"></input>
			</div>

			<div class="form-group">
				<label for="">Contraseña</label>
				<input type="password" class="form-control"></input>
			</div>
			<button class="btn btn-primary">Registrar</button>
			
		</form>-->
	@endsection