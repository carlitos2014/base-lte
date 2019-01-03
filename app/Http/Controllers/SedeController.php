<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Sede;

class SedeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sedes = Sede::all();
        return view('sede/index', compact('sedes'));
    }

  
}