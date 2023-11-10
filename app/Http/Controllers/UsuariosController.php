<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function  index(){
        return Usuarios::all();
    }
    public function store(Request $request){
        $usuarios= new Usuarios();
        $usuarios->nombre = $request->nombre;
        $usuarios->apellido = $request->apellido;
        $usuarios->correo_electronico = $request->correo_electronico;
        $usuarios->fecha_registro = $request->fecha_registro;
        $usuarios->timestamp = $request->timestamp;
        $usuarios->save();
        return 'usuarios guardado';
    }
    public function update(Request $request,$id){
        $usuarios= Usuarios::find($id);
        $usuarios->nombre = $request->nombre;
        $usuarios->apellido = $request->apellido;
        $usuarios->correo_electronico= $request->correo_electronico;
        $usuarios->fecha_registro = $request->fecha_registro;
        $usuarios->timestamp = $request->timestamp;
        $usuarios->save();
        return 'usuarios actualizado';
    }
    public function delete($id){
        $usuarios= Usuarios::find($id);
        $usuarios->delete();
        return 'usuarios eliminado';
    }
}
