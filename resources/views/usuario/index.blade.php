@extends('layouts.admin')
	<!--genera un mensaje de alerta-->
	@if(Session::has('message'))
		<div class="alert alert-success alert-dismissible" role="alert">
	  	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  	<!--entrega el mensaje-->
	  {{Session::get('message')}}
	</div>
	@endif

	@section('content')
		<table class="table">
		<thead>
			<th>Nombre</th>
			<th>Correo</th>
			<th>Contraseña/encriptada</th>
			<th>Operacion</th>
		</thead>
		@foreach($users as $user)
			<tbody>
				<!-- muestra la informacion solicitada-->
				<td>{{$user->name}}</td>
				<td>{{$user->email}}</td>
				<td>{{$user->password}}</td>
				<td>
					{!!link_to_route('usuario.edit', $title = 'Editar', $parameters = $user->id, $attributes = ['class'=>'btn btn-primary'])!!}
				</td>

			</tbody>
		@endforeach
	</table>

	<!--crea el visor para pasar las paginas de la lista de elementos -->
	{!!$users->render()!!}
	@endsection