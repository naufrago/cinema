<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;
use Cinema\Http\Requests;
use Cinema\Http\Requests\UserCreateRequest;
use Cinema\Http\Requests\UserUpdateRequest;
use Cinema\Http\Controllers\Controller;
use Cinema\User;
use Session;
use Redirect;

class UsuarioBController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    public function index()
    {
        //muestra solo los elementos borrados
        $users = User::onlytrashed()->paginate(5);
        return view('usuario.borrados',compact('users'));
        
    }

    
	
}

