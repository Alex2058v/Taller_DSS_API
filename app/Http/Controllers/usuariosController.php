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
        $user->apellidos= $request->apellidos;
        $user->edad= $request->edad;
        $user->salario= $request->salario;
        $user->created_at= $request->created_at;
        $result= $user->save(); //ingresando datos en la bd
        if ($result) {
            return "Los datos han sido ingresado con exito";
        } else {
            return "fail";
        }
    }

    public function show(Usuarios $usuario){
        return response()->json($usuario);
    }

    public function update(Request $request, Usuarios $usuario){
        return update($request->all());
    }

    public function destroy(Usuarios $usuario){
        return delete();
    }
}
