@extends('lideres.planta') 
@section('cuerpo')

@if(isset($lideres))  
  <form action="{{route('lideres.update',$lideres->id)}}" method="POST"> 
  @method('PATCH')
@else 
  <form action="{{route('lideres.store')}}" method="POST"> 
@endif 
 @csrf
  
<label for = "nombre" >NOMBRE</label> 
<input type="text" name="nombre" value="{{$lideres->nombre ?? ''}}" class="form-control" id="nombre">

<label for = "region" >REGION</label> 
<input type="text" name="region" value="{{$lideres->region ?? ''}}" class="form-control" id="region">

<label for = "elemento" >ELEMENTO</label> 
<input type="text" name="elemento" value="{{$lideres->elemento ?? ''}}" class="form-control" id="elemento">

<button type="submit" class="btn btn-primary">Enviar</button>

@endsection