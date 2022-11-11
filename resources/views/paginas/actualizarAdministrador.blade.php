@extends('plantilla')

@section('content')
    <div class="content-wrapper" style="min-height:247px">
        <h1>Actualizar Administradores</h1>

        <form action="{{ route('actualizar', $administrador->id) }}" method="POST">
            @method('PUT')
            @csrf
            <label for="">Nombre Completo</label>
            <input type="text" name="nombre" value="{{ $administrador->nombre_admin }}"><br>
            <label for="">Correo electronico</label>
            <input type="text" name="correo" value="{{ $administrador->correo_admin }}"><br>
            <label for="">Direccion</label>
            <input type="text" name="direccion" value="{{ $administrador->direccion_admin }}"><br><br>

            <input type="submit" name="guardar" class="btn btn-success">           
        </form>
        
        
    </div>
@endsection