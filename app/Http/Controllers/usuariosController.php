<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Usuarios;

class usuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return Usuarios::all();
    }

    public function store(Request $request){
        $user = new Usuarios;
        $user->id= $request->id;
        $user->nombre= $request->nombre;
        $user->apellido= $request->apellido;
        $user->edad= $request->edad;
        $user->salario= $request->salario;
        $user->created_at= $request->created_at;
        $result= $user->save(); //ingresando datos en la bd
        if ($result) {
            return "Los datos han sido ingresado con exito";
        } else {
            return "Error. Los datos no se ingresaron.";
        }
    }

    public function show(Usuarios $usuario, string  $id){
        $usuario = Usuarios::find($id);
        return $usuario;
    }

    public function update(Request $request, string  $id){
        $usuario = Usuarios::find($id);
        $usuario->nombre=$request->nombre;
        $usuario->apellido=$request->apellido;
        $usuario->edad=$request->edad;
        $usuario->salario=$request->salario;
        $result=$usuario->save(); //metodo para executar el request
        if ($result) {
            return "Los datos han sido modificados con exito.";
        } else {
            return "Error. Los datos no se modificaron.";
        }
    }

    public function destroy(string $id){
        $usuario = Usuarios::find($id);
        $result = $usuario->delete();  //metodo para executar el request
        if ($result) {
            return "Los datos se han eliminado con exito.";
        } else {
            return "Error. Los datos no se pudieron eliminar.";
        }
    }
}
?>