@extends('layouts.index') 
@section('tabla')

<div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">

<div class="row schedule-item">
  <div class="col-md-2"><i>0</i></div>
  <div class="col-md-10"> 
    <h4>Nombre <span>  HORA<span> </h4>
    <p>VS</p>
  </div>
</div>

@foreach($gimnasios as $gimnasio)
<div class="row schedule-item">
  <div class="col-md-2"><i>{{ $gimnasio->id}}</i></div>
  <div class="col-md-10">
  <div class="speaker">
  <a href="{{route('gimnasios.show',$gimnasio->id)}}" >_VER</a>
    </div>
    <h4>{{ $gimnasio->nombre}} <span> {{ $gimnasio->hora}}</span></h4>
    <p>{{ $gimnasio->vs}}</p>
  </div>  
  </div>   
@endforeach


</div> 
@endsection