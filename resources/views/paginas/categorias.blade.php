
@extends('plantilla')

@section('content')
    <div class="content-wrapper" style="min-height:247px">
        <h1>Lista de Categorias</h1>
        <a href="{{ url('/formularioRegistro') }}" class="btn btn-primary">Registrar Categoria</a><br>

        <table class="table table-info">
            <thead class="table table-dark"> 
                <th>Titulo</th>
                <th>Descripcion</th>
                <th>Palabras clave</th>
                <th>Imagen</th>
                <th>Ruta</th>
                <th>Fecha</th>
                <th></th>
                <th></th>
            </thead>
        
            <tbody>
                @foreach ($categorias as $item)
                    <tr>
                        <td>{{$item->titulo_categoria}}</td>
                        <td>{{$item->descripcion_categoria}}</td> 
                        <td>{{$item->p_claves_categoria}}</td>
                        <td>{{$item->img_categoria}}</td>   
                        <td>{{$item->ruta_categoria}}</td>  
                        <td>{{$item->fecha_categoria}}</td>
                        <td>
                            <form action="{{ route('formulario.actualizar',$item->id) }}" method="POST">
                                @method('GET')
                                @csrf
                                <button class="btn btn-success">Actualizar</button>
                            </form>
                            
                        </td>
                        <td>
                            <form action="{{ route('eliminarCategoria', $item->id)}}" method="POST">
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
