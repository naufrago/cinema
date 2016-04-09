<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;

use Cinema\Http\Requests;

class UsuarioController extends Controller
{
    public function create()
	{
		return view('usuario.create');
	}
}
