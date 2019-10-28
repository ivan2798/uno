@extends('layouts.form') 
@section('contactame')

<section id="contact" class="section-bg wow fadeInUp">

<div class="container">  

   <div class="section-header">
      <h2>Registrarse para ser lider</h2>
      <p>Escoge el elemento que usaras</p>
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
          <h3>MONOTYPE</h3>
          <address>AGUA</address>
        </div>
      </div>

      <div class="col-md-4">
        <div class="contact-email">
          <i class="ion-ios-email-outline"></i>
          <h3>LIDER</h3>
          <address>DEVA</address>
        </div>
      </div>    

      </div>
  
 <div class="form"> 
    @if(isset($lideres))  
      <form action="{{route('lideres.update',$lideres->id)}}" method="POST"  > 
      @method('PATCH')
    @else 
      <form action="{{route('lideres.store')}}" method="POST" > 
    @endif 
    @csrf
      <div class="form-row">
        <div class="form-group col-md-6">  
          <input type="text" name="nombre" value="{{$lideres->nombre ?? ''}}" class="form-control" id="nombre" placeholder="Nombre">  
        </div>
        <div class="form-group col-md-6"> 
          <input type="text" name="region" value="{{$lideres->region ?? ''}}" class="form-control" id="region" placeholder="Region">
        </div>
      </div>
      <div class="form-group">
        <input type="text" name="elemento" value="{{$lideres->elemento ?? ''}}" class="form-control" id="elemento" placeholder="Elemento">
      </div> 

      <div class="text-center"><button type="submit">ENVIAR</button></div> 
      </div>
    </form>
  
  </div>
 
 
</div>
</section><!-- #contact -->
@endsection 


    