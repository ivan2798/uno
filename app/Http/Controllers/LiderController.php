<?php

namespace App\Http\Controllers;

use App\Lider;
use Illuminate\Http\Request;

class LiderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lideres = Lider::all();  
        return view('lideres.lideresIndex', compact('lideres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lideres.lideresForm');
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
            'elemento' => 'required|string|min:1|max:20'
  
          )]; 
        Lider::create($request->all()); 
        return redirect()->route('lideres.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lider  $lider
     * @return \Illuminate\Http\Response
     */
    public function show(Lider $lideres) //tener el nombre de mi url
    {
        return view('lideres.lideresShow',compact('lideres'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lider  $lider
     * @return \Illuminate\Http\Response
     */
    public function edit(Lider $lideres)
    {
        return view('lideres.lideresForm',compact('lideres'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lider  $lider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lider $lideres)
    { 
        $request->validate[( 
            'nombre' => 'required|string|min:1|max:20',
            'region' => 'required|string|min:1|max:20',
            'elemento' => 'required|string|min:1|max:20'
  
          )]; 
        $lideres->nombre = $request->nombre; 
        $lideres->region = $request->region; 
        $lideres->elemento = $request->elemento; 

        $lideres->save(); 
        return redirect()->route('lideres.show',$lideres->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lider  $lider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lider $lideres)
    {
        $lideres->delete(); 
        return redirect()->route('lideres.index');
    }
}
