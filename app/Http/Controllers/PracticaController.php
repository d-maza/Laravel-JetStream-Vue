<?php

namespace App\Http\Controllers;

use App\Models\Practica;
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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