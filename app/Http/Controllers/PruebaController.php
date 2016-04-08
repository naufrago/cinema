<?php namespace cinema\Http\Controllers;

class PruebaController extends Controller {

	

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return 'hola desde controlador';
	}

	public function nombre($nombre)
	{
		return 'hola desde el controlador  mi nombre es :'.$nombre;
	}



}