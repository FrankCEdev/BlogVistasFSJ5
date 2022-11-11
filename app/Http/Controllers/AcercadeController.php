<?php

namespace App\Http\Controllers;

use App\Models\Acercade;
use Illuminate\Http\Request;

class AcercadeController extends Controller
{
    public function index(Request $request){
        $buscar = trim ($request->post('buscar'));

        $acercade = Acercade::select('id','nombre_integrante','descripcion_integrante','salario')
                    ->where('nombre_integrante','LIKE','%'.$buscar.'%')->get();
        return view("paginas.acercade", compact('acercade','buscar'));

    }
}
