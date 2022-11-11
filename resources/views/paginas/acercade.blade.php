@extends('plantilla')

@section('content')
    <div class="content-wrapper" style="min-height:247px">
        <h1>Integrantes Equipo Scrum</h1>

        <form action="{{ route('getAcercade')}}" method="POST">
            @method('GET')
            <label for="">Busqueda</label>
            <input type="text" name="buscar"placeholder="busqueda por integrante" value="{{ $buscar}}">
            <input type="submit" class="btn btn-info" value="Buscar">
        </form>

        <table class="table table-secondary table-hover">
            <thead> 
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Salario USD</th>
            </thead>
        
            <tbody>
                @foreach ($acercade as $value)
                    <tr class="table table-info">
                        <td>{{$value->nombre_integrante}}</td>
                        <td>{{$value->descripcion_integrante}}</td>  
                        <td>{{$value->salario}}</td>  
                
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection