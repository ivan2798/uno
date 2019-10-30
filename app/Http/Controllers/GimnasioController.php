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
        $gimnasios = Gimnasio::all(); 
        return view('gimnasios.gimnasiosIndex',compact('gimnasios'))
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        
        $gimnasios = Gimnasio::all();
        return view('gimnasios.gimnasiosForm',compact('gimnasios'));
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
          Gimnasio::create($request->all()); 
          return redirect()->route('gimnasios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gimnasio  $gimnasio
     * @return \Illuminate\Http\Response
     */
    public function show(Gimnasio $gimnasio)
    {
        return view('gimnasios.gimnasiosShow',compact('gimnasios'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gimnasio  $gimnasio
     * @return \Illuminate\Http\Response
     */
    public function edit(Gimnasio $gimnasio)
    {
        return view('gimnasios.gimnasiosForm',compact('gimnasios'));
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
        $gimnasios->nombre = $request->nombre; 
        $gimnasios->hora = $request->hora; 
        $gimnasios->vs = $request->vs; 

        $gimnasios->save(); 
        return redirect()->route('gimnasios.show',$gimnasios->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gimnasio  $gimnasio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gimnasio $gimnasio)
    {
        $gimnasios->delete(); 
        return redirect()->route('gimnasios.index');
    }
}
