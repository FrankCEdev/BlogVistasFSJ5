@extends('plantilla')

@section('content')
    <div class="content-wrapper" style="min-height:247px">
        <h1>Actualizar Categorias</h1>

        <form action="{{ route('actualizar', $categorias->id) }}" method="POST">
            @method('PUT')
            @csrf
            <label for="">Titulo Categoria</label>
            <input type="text" name="titulo" value="{{ $categorias->titulo_categoria }}"><br>
            <label for="">Descripcion Categoria<</label>
            <input type="text" name="descripcion" value="{{ $categorias->descripcion_categoria }}"><br>
            <label for="">Palabras Clave de la Categoria<</label>
            <input type="text" name="claves" value="{{ $categorias->p_claves_categoria }}"><br>
            <label for="">Ruta Imagen Categoria<</label>
            <input type="text" name="imagen" value="{{ $categorias->img_categoria }}"><br>
            <label for="">Ruta Categoria<</label>
            <input type="text" name="ruta" value="{{ $categorias->ruta_categoria }}"><br><br>

            <input type="submit" name="guardar" class="btn btn-success">           
        </form>
        
        
    </div>
@endsection