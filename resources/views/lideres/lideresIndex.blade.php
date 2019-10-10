@extends('lideres.planta') 
@section('cuerpo')

<a href = "{{ route('lideres.create') }}" class="btn btn-succes"> AGREGAR LIDER</a> 
 <table class="table"> 
    <thead>  
      <tr>  <th>ID</th> <th>NOMBRE</th> <th>REGION</th> <th>ELEMENTO</th> <th>ACCIONES</th>    </tr>
    </thead>  
    <tbody>  
        @foreach($lideres as $lider) 
            <tr>  
              <td>{{ $lider->id}}</td>              
              <td>{{ $lider->nombre}}</td>
              <td>{{ $lider->region}}</td>
              <td>{{ $lider->elemento}}</td>
              <td> 
                 <a href="{{route('lideres.show',$lider->id)}}" class="btn btn-sm btn-info">VER DETALLE</a>
              </td>
            </tr>
        @endforeach
    </tbody>

 </table>   
@endsection
 