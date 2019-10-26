@extends('layouts.index') 
@section('tabla')

<div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">

<div class="row schedule-item">
  <div class="col-md-2"><i>0</i></div>
  <div class="col-md-10"> 
    <h4>Nombre <span>  Region<span> </h4>
    <p>Equipo monotype a usar.</p>
  </div>
</div>

@foreach($lideres as $lider)
<div class="row schedule-item">
  <div class="col-md-2"><i>{{ $lider->id}}</i></div>
  <div class="col-md-10">
  <div class="speaker">
  <a href="{{route('lideres.show',$lider->id)}}" >_VER</a>
    </div>
    <h4>{{ $lider->nombre}} <span> {{ $lider->region}}</span></h4>
    <p>{{ $lider->elemento}}</p>
  </div>  
  </div>   
@endforeach


</div> 
@endsection
 

