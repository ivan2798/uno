<?php

namespace App\Http\Controllers;

use App\Gimnasio;
use Illuminate\Http\Request;

class GimnasioController extends Controller
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
        $request->validate[( 
            'nombre' => 'required|string|min:1|max:20',
            'region' => 'required|string|min:1|max:20',
            'medalla' => 'required|string|min:1|max:20', 
            'liders_id' => 'required|integer|min:1'
  
          )]; 
          //otra forma, le poaso modelo con la info
          //$jugadores = JUgador::find()$request->
          Jugador::create($request->all()); 
          return redirect()->route('jugadores.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gimnasio  $gimnasio
     * @return \Illuminate\Http\Response
     */
    public function show(Gimnasio $gimnasio)
    {
        return view('jugadores.jugadores.Show',compact('jugadores'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gimnasio  $gimnasio
     * @return \Illuminate\Http\Response
     */
    public function edit(Gimnasio $gimnasio)
    {
        return view('jugadores.jugadoresForm',compact('jugadores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gimnasio  $gimnasio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gimnasio $gimnasio)
    {
        $request->validate[( 
            'nombre' => 'required|string|min:1|max:20',
            'hora' => 'required|integer|min:1|max:20',
            'medalla' => 'required|integer|min:1|max:20', 
    
  
          )]; 
        $jugadores->nombre = $request->nombre; 
        $jugadores->region = $request->region; 
        $jugadores->medalla = $request->medalla; 

        $lideres->save(); 
        return redirect()->route('jugadores.show',$jugadores->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gimnasio  $gimnasio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gimnasio $gimnasio)
    {
        $jugadores->delete(); 
        return redirect()->route('jugadores.index');
    }
}
