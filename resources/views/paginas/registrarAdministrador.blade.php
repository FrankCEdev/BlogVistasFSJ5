
@extends('plantilla')

@section('content')
    <div class="content-wrapper" style="min-height:247px">
        <h1>Registro de administradores</h1>

        <form action="{{ route('guardar') }}" method="POST">
            @csrf
            <label for="">Nombre Completo</label>
            <input type="text" name="nombre"><br>
            <label for="">Correo electronico</label>
            <input type="text" name="correo"><br>
            <label for="">Direccion</label>
            <input type="text" name="direccion"><br><br>

            <input type="submit" name="guardar" class="btn btn-success">           
        </form>
        
        
    </div>
@endsection