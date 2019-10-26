@extends('layouts.form') 
@section('contactame')

<section id="contact" class="section-bg wow fadeInUp">

<div class="container">  

   <div class="section-header">
      <h2>Registrarse para ser jugador</h2>
      <p>Escoge la medalla que desses</p>
    </div>

    <div class="row contact-info">

      <div class="col-md-4">
        <div class="contact-address">
          <i class="ion-ios-location-outline"></i>
          <h3>REGION</h3>
          <address>KALOS</address>
        </div>
      </div>

      <div class="col-md-4">
        <div class="contact-phone">
          <i class="ion-ios-telephone-outline"></i>
          <h3>MEDALLA</h3>
          <address>COLMENA-PLUMA-VOLCAN-</address>
        </div>
      </div>

      <div class="col-md-4">
        <div class="contact-email">
          <i class="ion-ios-email-outline"></i>
          <h3>JUGADOR</h3>
          <address>Gary</address>
        </div>
      </div>   
  
 <div class="form"> 
    @if(isset($lideres))  
      <form action="{{route('jugadores.update',$jugadores->id)}}" method="POST"  >   
        <!--   {!!Form::model($jugadores,['route' => ['jugadores.update', $jugadores]]) !!}    -->  
      @method('PATCH')
    @else 
      <form action="{{route('jugadores.store')}}" method="POST" >  
        <!--   {!!Form::open(['route' => 'jugadores.store']) !!}    -->  
    @endif 
    @csrf
      <div class="form-row">
        <div class="form-group col-md-6">  
          <input type="text" name="nombre" value="{{$jugadores->nombre ?? ''}}" class="form-control" id="nombre" placeholder="Nombre">  
          <!--   {!!Form::text('nombre',null,[class => $errors->has('nombre') ? 'form-control is-invalid' : 'form-control']) !!}    -->  
        </div>
        <div class="form-group col-md-6"> 
          <input type="text" name="region" value="{{$jugadores->region ?? ''}}" class="form-control" id="region" placeholder="Region">
          <!--   {!!Form::text('region',null,[class => $errors->has('region') ? 'form-control is-invalid' : 'form-control']) !!}    -->  
        </div>
      </div>
      <div class="form-group">
        <input type="text" name="medalla" value="{{$jugadores->medalla ?? ''}}" class="form-control" id="medalla" placeholder="Medalla">
          <!--   {!!Form::text('medalla',null,[class => $errors->has('medalla') ? 'form-control is-invalid' : 'form-control']) !!}    -->
      </div> 

      <div class="text-center"><button type="submit">ENVIAR</button></div>
    </form>
  
  </div>
 
 
</div>
</section><!-- #contact -->
@endsection 
