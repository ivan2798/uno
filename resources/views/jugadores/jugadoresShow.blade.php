@extends('lideres.planta') 
@section('cuerpo')
<a href="{{route('jugadores.index')}}" class="btn btn-default btn-sm">LISTADO DE PROGRAMAS</a> 
<table class="table"> 
   <thead>  
   <tr>  <th>ID</th> <th>NOMBRE</th> <th>REGION</th> <th>MEDALLA</th> <th>ACCIONES</th>    </tr>
   </thead>  
   <tbody>  
       <td>{{ $jugadores->id}}</td>              
       <td>{{ $jugadores->nombre}}</td>
       <td>{{ $jugadores->region}}</td>
       <td>{{ $jugadores->elemento}}</td>
       <td> 
            <a href="{{route('jugadores.edit',$jugadores->id)}}" class="btn btn-sm btn-warning">EDITAR</a> 
            <form action="{{route('jugadores.destroy',$jugadores->id)}}" method="POST">  
                @csrf
                @method('DELETE') 
                
                <button type = "submit" class = "btn  btn-danger">ELIMINAR</button>
            </form>
       </td> 
       <ul>  
         <!-- @foreach($jugadores->lideres as $lider) 
             <li>{{ $lider->nombre}}</li> 
          @endforeach 
           -->
       </ul>
   </tbody>
</table> 

@endsection