@extends('layouts.index') 
@section('tabla')

<div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">

<div class="row schedule-item">
  <div class="col-md-2"><i>0</i></div>
  <div class="col-md-10"> 
    <h4>Nombre <span>  VS<span> </h4>
    <p>HORAS</p>
  </div>
</div>

@foreach($gimnasios as $gimnasio)
<div class="row schedule-item">
  <div class="col-md-2"><i>{{ $gimnsaio->id}}</i></div>
  <div class="col-md-10">
  <div class="speaker">
  <a href="{{route('jugadores.show',$jugador->id)}}" >_VER</a>
    </div>
    <h4>{{ $gimnasio->nombre}} <span> {{ $gimnasio->vs}}</span></h4>
    <p>{{ $gimnasio->hora}}</p>
  </div>  
  </div>   
@endforeach


</div> 
@endsection