@extends('layouts.form') 
@section('contactame')

<section id="contact" class="section-bg wow fadeInUp">

<div class="container">  

   <div class="section-header">
      <h2>Registrarse para ser jugador</h2>
      <p>Escoge la medalla que deseas</p>
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
          <address>GARY</address>
        </div>
      </div>    

      </div>
  
 <div class="form"> 
    @if(isset($jugadores))  
      <form action="{{route('jugadores.update',$jugadores->id)}}" method="POST"  > 
      @method('PATCH')
    @else 
      <form action="{{route('jugadores.store')}}" method="POST" > 
    @endif 
    @csrf
      <div class="form-row">
        <div class="form-group col-md-6">  
          <input type="text" name="nombre" value="{{$jugadores->nombre ?? ''}}" class="form-control" id="nombre" placeholder="Nombre">  
        </div>
        <div class="form-group col-md-6"> 
          <input type="text" name="region" value="{{$jugadores->region ?? ''}}" class="form-control" id="region" placeholder="Region">
        </div>
      </div>
      <div class="form-group">
        <input type="text" name="medalla" value="{{$jugadores->medalla ?? ''}}" class="form-control" id="medalla" placeholder="Medalla">
      </div> 
     
           <select>  
           @foreach($lideres as $lider) 
              <option value="{{$jugadores->liders_id ?? ''}}">{{$lider->id}}</option> 
            @endforeach
           </select>
     


      <div class="text-center"><button type="submit">ENVIAR</button></div> 
      </div>
    </form>
  
  </div>
 
 
</div>
</section><!-- #contact -->
@endsection 




