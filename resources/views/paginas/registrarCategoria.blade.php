@extends('plantilla')

@section('content')
    <div class="content-wrapper" style="min-height:247px">
        <h1>Registro de Categorias</h1>

        <form action="{{ route('guardar') }}" method="POST">
            @csrf
            <label for="">Titulo Categoria:</label>
            <input type="text" name="titulo"><br>
            <label for="">Descripcion Categoria:</label>
            <input type="text" name="descripcion"><br>
            <label for="">Palabras Claves de la Categoria:</label>
            <input type="text" name="claves"><br>
            <label for="">Ruta de la Imagen:</label><br>
            <input type="text" name="imagen" imagen><br>
            <label for="">Ruta Categoria:</label>
            <input type="text" name="ruta"><br><br>

            <input type="submit" name="guardar" class="btn btn-success">           
        </form>
        
        
    </div>
@endsection