<?php namespace cinema\Http\Controller;

use cinema\Http\Requests;
use cinema\Http\Controllers\Controller;

use Illuminate\Http\Request;

class FrontController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('index');
	}

	public function contacto()
	{
		return view('contacto');
	}

	public function reviews()
	{
		return view('reviews');
	}
	
	public function admin()
	{
		return view('admin.index');
	}

}
