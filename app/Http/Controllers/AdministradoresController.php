<?php

namespace App\Http\Controllers;

use App\Models\Administradores;
use Illuminate\Http\Request;

class AdministradoresController extends Controller
{
    /** Metodo que obtiene los administradores de la base de datos y los retorna en una vista */
    public function index(){
        /** select * from administradores */
        $administradores = Administradores::all();
        return view("paginas.administradores", array("administradores" => $administradores));
    }

    /** Retorna en la vista RegistrarAdministrador */
    public function getFormularioRegistro(){
        return view("paginas.registrarAdministrador");
    }

    /** Guradando el Registro de Administrador */
    public function store(Request $request){
        $administrador = new Administradores();
        $administrador->nombre_admin = $request->post('nombre');
        $administrador->correo_admin = $request->post('correo');
        $administrador->direccion_admin = $request->post('direccion');
        $administrador->fecha_admin = now(); /**Fecha y hora capturada */
        $administrador->save();
        
        /**Redirecciona a la tabla con el nombre de la ruta */
        return redirect()->route('getAdmin');
    }

    /** Retorna a la vista actualizarAdministrador con su id */
    public function getFormularioActualizar($id){
        /** select * from administradores where id =? */
        $administrador = Administradores::find($id);

        return view("paginas.actualizarAdministrador", array("administrador" => $administrador ));
    }

    /** Actualizar administrador */
    public function update(Request $request, $id){
        $administrador = Administradores::find($id);
        $administrador->nombre_admin = $request->post('nombre');
        $administrador->correo_admin = $request->post('correo');
        $administrador->direccion_admin = $request->post('direccion');
        $administrador->update();

        return redirect() ->route('getAdmin');
    }
    
    /** Eliminar administrador*/
    public function eliminar($id){
        $administrador = Administradores::where("id","=",$id)->delete();
        return redirect()->route('getAdmin');
    }
}
