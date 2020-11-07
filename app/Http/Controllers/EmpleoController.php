<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmpleoController extends Controller
{
    //
    public function index (){
        $empleos = DB::table('convocatoria')->get();

        $res = Array();

        foreach($empleos as $empleo){
            $tempo['puesto'] = $empleo->cargo;
            $tempo['codigo'] = $empleo->code;
            $tempo['sucursal'] = $empleo->lugar;

            array_push($res, $tempo);
        }

        $final['res'] = $res;

        return json_encode($final);

    }

}
