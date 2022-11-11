<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    /** Metodo que obtiene las Categorias de la base de datos y los retorna en una vista */
    public function index(){
        /** select * from categorias */
        $categorias = Categorias::all();
        return view("paginas.categorias", array("categorias" => $categorias));
    }

    /** Retorna en la vista registrarCategoria */
    public function getFormularioRegistro(){
        return view("paginas.registrarCategoria");
    }

    /** Guardando el Registro de Categorias */
    public function store(Request $request){
        $categorias = new Categorias();
        $categorias->titulo_categoria= $request->post('titulo');
        $categorias->descripcion_categoria = $request->post('descripcion');
        $categorias->ruta_categoria = $request->post('ruta');
        $categorias->p_claves_categoria = $request->post('claves');
        $categorias->img_categoria = $request->post('imagen');
        $categorias->fecha_categoria = $request->post('fecha'); /** now() Fecha y hora capturada */
        $categorias->save();
        
        /**Redirecciona a la tabla con el nombre de la ruta */
        return redirect()->route('getCategorias');
    }

    /** Retorna a la vista actualizarCategoria con su id */
    public function getFormularioActualizar($id){
        /** select * from administradores where id =? */
        $categorias = Categorias::find($id);

        return view("paginas.actualizarcategorias", array("categorias" => $categorias ));
    }

    /** Actualizar categoria */
    public function update(Request $request, $id){
        $categorias = Categorias::find($id);
        $categorias->titulo_categoria= $request->post('titulo');
        $categorias->descripcion_categoria = $request->post('descripcion');
        $categorias->ruta_categoria = $request->post('ruta');
        $categorias->p_claves_categoria = $request->post('claves');
        $categorias->img_categoria = $request->post('imagen');
        $categorias->update();

        return redirect() ->route('getCategorias');
    }
    
    /** Eliminar categoria*/
    public function eliminar($id){
        $categorias = Categorias::where("id","=",$id)->delete();
        return redirect()->route('getCategorias');
    }
}
