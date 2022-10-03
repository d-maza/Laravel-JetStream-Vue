<?php

namespace App\Http\Controllers;

use App\Models\Practica;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;

class PracticaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $practicas = Practica::all();
        // return Inertia::render('node' ,[ 'practicas' => $practicas]);
        $practicas = DB::select('select * from practicas');
        return Inertia::render('node',compact('practicas'));
    }
    public function index2()
    {
       // $practicas = DB::select('select * from practicas');
       return Inertia::render('Practica');
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $titulo = htmlentities($_POST["titulo"]);
		$subtitulo = htmlentities($_POST["subtitulo"]);
		$parrafo= htmlentities($_POST["parrafo"]);
		$enlace = htmlentities($_POST["enlace"]);
		$skills = htmlentities($_POST["skills"]);
        
        $practicas = DB::select("INSERT INTO `practicas` (titulo, subtitulo , parrafo, enlace, skills) VALUES ('$titulo', '$subtitulo', '$parrafo','$enlace', '$skills')");

        //  return ('<h1 style="margin-top: 1cm; margin-left: 1cm; color: brown ; font-family: monospace;"> Dato creado satifactotiamente voler a: <a href="http://127.0.0.1:8000/bbdd">Base de Datos</a></h1> ');
        
        $msg = 'Dato creado corretamente';
        return Inertia::render('Practica',['msg' => $msg ]);
    }   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Practica  $practica
     * @return \Illuminate\Http\Response
     */
    public function show(Practica $practica)
    {
                $practicas = DB::select('select * from practicas');
                return Inertia::render('bbdd',compact('practicas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Practica  $practica
     * @return \Illuminate\Http\Response
     */
    public function edit(Practica $practica)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Practica  $practica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Practica $practica)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Practica  $practica
     * @return \Illuminate\Http\Response
     */
    public function destroy(Practica $practica)
    {
        //
    }
}