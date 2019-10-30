@extends('layouts.form') 
@section('contactame')

<section id="contact" class="section-bg wow fadeInUp">

<div class="container">  

   <div class="section-header">
      <h2>Agregar gimnasio</h2>
      <p>Escoge las reglas</p>
    </div>

    <div class="row contact-info">

      <div class="col-md-4">
        <div class="contact-address">
          <i class="ion-ios-location-outline"></i>
          <h3>NOMBRE</h3>
          <address>LUMINEON</address>
        </div>
      </div>

      <div class="col-md-4">
        <div class="contact-phone">
          <i class="ion-ios-telephone-outline"></i>
          <h3>HORAS</h3>
          <address>4</address>
        </div>
      </div>

      <div class="col-md-4">
        <div class="contact-email">
          <i class="ion-ios-email-outline"></i>
          <h3>VS</h3>
          <address>3</address>
        </div>
      </div>    

      </div>
  
 <div class="form"> 
    @if(isset($lideres))  
      <form action="{{route('gimnasios.update',$gimnasios->id)}}" method="POST"  > 
      @method('PATCH')
    @else 
      <form action="{{route('gimnasios.store')}}" method="POST" > 
    @endif 
    @csrf
      <div class="form-row">
        <div class="form-group col-md-6">  
          <input type="text" name="nombre" value="{{$gimnasios->nombre ?? ''}}" class="form-control" id="nombre" placeholder="Nombre">  
        </div>
        <div class="form-group col-md-6"> 
          <input type="number" name="hora" value="{{$gimnasios->hora ?? ''}}" class="form-control" id="hora" placeholder="Hora">
        </div>
      </div>
      <div class="form-group">
        <input type="number" name="vs" value="{{$gimnasios->vs ?? ''}}" class="form-control" id="vs" placeholder="VS">
      </div> 

      <div class="text-center"><button type="submit">ENVIAR</button></div> 
      </div>
    </form>
  
  </div>
 
 
</div>
</section><!-- #contact -->
@endsection 


    