<?php

namespace App\Http\Controllers;

use App\Models\Cotizaruser;
use Illuminate\Http\Request;

class CotizaruserController extends Controller
{
    //
    public function cotizacion(Request $request) {
        //dd($request->file('imagen'));
        if($request->file('imagen') != null){
            $path_imagen = $request->file('imagen')->store('cotizaciones');
        }

        $cotizaruser = new Cotizaruser();
        $cotizaruser->nombre = $request->nombre;
        $cotizaruser->telefono = $request->telefono;
        $cotizaruser->correo = $request->correo;
        $cotizaruser->origen = $request->origen;
        $cotizaruser->destino = $request->destino;
        $cotizaruser->cantidad = $request->cantidad;
        $cotizaruser->unidad = $request->unidad;
        $cotizaruser->peso = $request->peso;
        $cotizaruser->largo = $request->largo;
        $cotizaruser->ancho = $request->ancho;
        $cotizaruser->alto = $request->alto;
        $cotizaruser->descripcion = $request->descripcion;
        if($request->file('imagen') != null){
            $cotizaruser->imagen = $path_imagen;
        }
        $cotizaruser->save();

        return json_encode($cotizaruser);
    }
}
