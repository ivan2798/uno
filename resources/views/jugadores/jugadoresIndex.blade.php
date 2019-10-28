@extends('layouts.index') 
@section('tabla')

<div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">

<div class="row schedule-item">
  <div class="col-md-2"><i>0</i></div>
  <div class="col-md-10"> 
    <h4>Nombre <span>  Region<span> </h4>
    <p>Competiras por la medalla</p> 
    <i>Contra el lider</i>
  </div>
</div>

@foreach($jugadores as $jugador)
<div class="row schedule-item">
  <div class="col-md-2"><i>{{ $jugador->id}}</i></div>
  <div class="col-md-10">
  <div class="speaker">
  <a href="{{route('jugadores.show',$jugador->id)}}" >_VER</a>
    </div>
    <h4>{{ $jugador->nombre}} <span> {{ $jugador->region}}</span></h4>
    <p>{{ $jugador->medalla}}</p> 
    <i>{{ $jugador->liders_id}}</i>
  </div>  
  </div>   
@endforeach


</div> 
@endsection
 