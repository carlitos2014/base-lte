<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.3/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class AuditoriaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Muestra formulario para generar plan de auditorias formato GQ-FR-08.
     *
     * @return Response
     */
    public function programacion()
    {
        return view('auditorias.programacion');
    }
    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function programacionBuildPdf()
    {
        return view('adminlte::home');
    }
}