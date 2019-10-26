@extends('layouts.form') 
@section('contactame')

<section id="contact" class="section-bg wow fadeInUp">

<div class="container">  

   <div class="section-header">
      <h2>Registrar gimnasio para LIGA POKEMON</h2>
      <p>EVENTO PARA DEMOSTRAR QUE RES UN MAESTRO POKEMON</p>
    </div>

    <div class="row contact-info">

      <div class="col-md-4">
        <div class="contact-address">
          <i class="ion-ios-location-outline"></i>
          <h3>VS</h3>
          <address>6 VS 6</address>
        </div>
      </div>

      <div class="col-md-4">
        <div class="contact-phone">
          <i class="ion-ios-telephone-outline"></i>
          <h3>CON UN TIEMPO LIMITE DE</h3>
          <address>2 HORAS</address>
        </div>
      </div>

      <div class="col-md-4">
        <div class="contact-email">
          <i class="ion-ios-email-outline"></i>
          <h3>NOMBRE DEL GIMNASIO</h3>
          <address>FENIX</address>
        </div>
      </div>   
  
 <div class="form"> 
    @if(isset($lideres))  
      <form action="{{route('gimnasios.update',$gimnasios->id)}}" method="POST"  >   
        <!--   {!!Form::model($jugadores,['route' => ['jugadores.update', $jugadores]]) !!}    -->  
      @method('PATCH')
    @else 
      <form action="{{route('gimnasios.store')}}" method="POST" >  
        <!--   {!!Form::open(['route' => 'jugadores.store']) !!}    -->  
    @endif 
    @csrf
      <div class="form-row">
        <div class="form-group col-md-6">  
          <input type="text" name="nombre" value="{{$gimnasios->nombre ?? ''}}" class="form-control" id="nombre" placeholder="Nombre">  
          <!--   {!!Form::text('nombre',null,[class => $errors->has('nombre') ? 'form-control is-invalid' : 'form-control']) !!}    -->  
        </div>
        <div class="form-group col-md-6"> 
          <input type="number" name="vs" value="{{$gimnasios->vs ?? ''}}" class="form-control" id="vs" placeholder="Vs">
          <!--   {!!Form::text('region',null,[class => $errors->has('region') ? 'form-control is-invalid' : 'form-control']) !!}    -->  
        </div>
      </div>
      <div class="form-group">
        <input type="number" name="hora" value="{{$gimnasios->hora ?? ''}}" class="form-control" id="hora" placeholder="Hora">
          <!--   {!!Form::text('medalla',null,[class => $errors->has('medalla') ? 'form-control is-invalid' : 'form-control']) !!}    -->
      </div> 

      <div class="text-center"><button type="submit">ENVIAR</button></div>
    </form>
  
  </div>
 
 
</div>
</section><!-- #contact -->
@endsection 