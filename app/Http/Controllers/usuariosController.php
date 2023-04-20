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
        //return response()->json($usuario);
    }

    public function store(Request $request){
        return Usuarios::create($request->all());
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
