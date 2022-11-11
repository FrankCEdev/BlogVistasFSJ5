
@extends('plantilla')

@section('content')
    <div class="content-wrapper" style="min-height:247px">
        <h1>Seccion de Administradores</h1>
        <a href="{{ url('/formularioRegistro') }}" class="btn btn-success">Registrar Administradores</a><br>

        <table class="table table-dark">
            <thead> 
                <th>Nombre</th>
                <th>Correo</th>
                <th>Direccion</th>
                <th>Fecha</th>
            </thead>
        
            <tbody>
                @foreach ($administradores as $item)
                    <tr>
                        <td>{{$item->nombre_admin}}</td>
                        <td>{{$item->correo_admin}}</td>  
                        <td>{{$item->direccion_admin}}</td>  
                        <td>{{$item->fecha_admin}}</td>
                        <td>
                            <form action="{{ route('formulario.actualizar',$item->id) }}" method="POST">
                                @method('GET')
                                @csrf
                                <button class="btn btn-info">Actualizar</button>
                            </form>
                            
                        </td>
                        <td>
                            <form action="{{ route('eliminarAdmin', $item->id)}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger">Eliminar</button>
                            </form>
                            
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

