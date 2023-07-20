<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Clientes extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //Autenticamos para entrar por medio de un middleware
    public function __construct()
    {
        $this->middleware(['auth'])->only(['index']);
    }
    public function index()
    {
        return view('modules/clientes/index');
    }
}
