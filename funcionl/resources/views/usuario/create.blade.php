
@extends('layouts.admin')
	@section('content')
		<form action="">
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
			
		</form>
	@endsection