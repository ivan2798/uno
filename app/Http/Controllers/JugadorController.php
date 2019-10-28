<?php

namespace App\Http\Controllers;

use App\Jugador; 
use App\Lider;
use Illuminate\Http\Request;

class JugadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jugadores = Jugador::all();  
        return view('jugadores.jugadoresIndex', compact('jugadores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $lideres = Lider::all();
        return view('jugadores.jugadoresForm',compact('lideres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        //otra forma, le poaso modelo con la info
        //$jugadores = JUgador::find()$request->
        Jugador::create($request->all()); 
        return redirect()->route('jugadores.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Jugador  $jugador
     * @return \Illuminate\Http\Response
     */
    public function show(Jugador $jugadores)
    {
        return view('jugadores.jugadores.Show',compact('jugadores'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jugador  $jugador
     * @return \Illuminate\Http\Response
     */
    public function edit(Jugador $jugadores)
    {
        return view('jugadores.jugadoresForm',compact('jugadores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jugador  $jugador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jugador $jugadores)
    { 
       
        $jugadores->nombre = $request->nombre; 
        $jugadores->region = $request->region; 
        $jugadores->medalla = $request->medalla; 

        $lideres->save(); 
        return redirect()->route('jugadores.show',$jugadores->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jugador  $jugador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jugador $jugadores)
    {
        $jugadores->delete(); 
        return redirect()->route('jugadores.index');
    }
}
