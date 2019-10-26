@extends('lideres.planta') 
@section('cuerpo')
<a href="{{route('lideres.index')}}" class="btn btn-default btn-sm">LISTADO DE PROGRAMAS</a> 
<table class="table"> 
   <thead>  
   <tr>  <th>ID</th> <th>NOMBRE</th> <th>VS</th> <th>HORA</th>  </tr>
   </thead>  
   <tbody>  
       <td>{{ $gimnasios->id}}</td>              
       <td>{{ $gimnasios->nombre}}</td>
       <td>{{ $gimnasios->vs}}</td>
       <td>{{ $gimnasios->hora}}</td> 
       <!--<td>{{ $lideres->'nombre de la funcion en mi modelo belong'->nombre}} -->
       <td> 
            <a href="{{route('lideres.edit',$lideres->id)}}" class="btn btn-sm btn-warning">EDITAR</a> 
            <form action="{{route('lideres.destroy',$lideres->id)}}" method="POST">  
                @csrf
                @method('DELETE') 
                
                <button type = "submit" class = "btn  btn-danger">ELIMINAR</button>
            </form>
       </td>
   </tbody>
</table> 

@endsection