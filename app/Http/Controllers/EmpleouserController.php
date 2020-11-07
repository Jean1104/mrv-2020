<?php

namespace App\Http\Controllers;

use App\Models\Empleouser;
use Illuminate\Http\Request;

class EmpleouserController extends Controller
{
    //
    public function postular_empleo(Request $request) {

        $path_file = $request->file('files')->store('cv_empleos');

        $empleouser = new Empleouser();
        $empleouser->codigo = intval($request->codigo);
        $empleouser->nombre = $request->nombre;
        $empleouser->telefono = $request->telefono;
        $empleouser->correo = $request->correo;
        $empleouser->edad = intval($request->edad);
        $empleouser->direccion = $request->direccion;
        $empleouser->salario = intval($request->salario);
        $empleouser->files = $path_file;
        $empleouser->save();

        return json_encode($empleouser);
    }
}
