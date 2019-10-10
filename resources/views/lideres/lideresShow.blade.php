@extends('lideres.planta') 
@section('cuerpo')
<a href="{{route('lideres.index')}}" class="btn btn-default btn-sm">LISTADO DE PROGRAMAS</a> 
<table class="table"> 
   <thead>  
   <tr>  <th>ID</th> <th>NOMBRE</th> <th>REGION</th> <th>ELEMENTO</th> <th>ACCIONES</th>    </tr>
   </thead>  
   <tbody>  
       <td>{{ $lideres->id}}</td>              
       <td>{{ $lideres->nombre}}</td>
       <td>{{ $lideres->region}}</td>
       <td>{{ $lideres->elemento}}</td>
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