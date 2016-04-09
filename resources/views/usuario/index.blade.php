@extends('layouts.admin')
	<!--genera un mensaje de alerta-->
	<?php $message=Session::get('message')?>

		<!--crea el mensage de guardado despues de ingresar los datos a la base de datos-->
		@if($message == 'store')
		<div class="alert alert-success alert-dismissible" role="alert">
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  Usuario creado exitosamente
		</div>
		@endif
	@section('content')
		<table class="table">
		<thead>
			<th>Nombre</th>
			<th>Correo</th>
			<th>Contraseña/encriptada</th>
		</thead>
		@foreach($users as $user)
			<tbody>
				<!-- muestra la informacion solicitada-->
				<td>{{$user->name}}</td>
				<td>{{$user->email}}</td>
				<td>{{$user->password}}</td>
				<td></td>
			</tbody>
		@endforeach
	</table>
	@endsection