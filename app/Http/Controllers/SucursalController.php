<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SucursalController extends Controller
{
    public function index() {
        $depas = Departamento::all();

        $res = Array();

        $markers = Array();

        foreach($depas as $depa) {
            $sucursales = DB::table('sucursal')->where('departamento', $depa->nombre)->get();

            $array = Array();
            $marcadorp =Array();

            foreach($sucursales as $sucursal) {
                $tempo['name'] = $sucursal->titulo;
                $tempo['direccion'] = $sucursal->direccion;
                $tempo['telefono'] = $sucursal->telefono_primario.' / '.$sucursal->telefono_secundario.' / '.$sucursal->celular_primario;
                $tempo['email'] = $sucursal->correo;
                $tempo['horario'] = $sucursal->horario;
                $tempo['envios'] = $sucursal->detalles;
                $tempo['lat'] = $sucursal->latitud;
                $tempo['lng'] = $sucursal->longitud;

                $marker['lat'] = $sucursal->latitud;
                $marker['lng'] = $sucursal->longitud;

                array_push($markers, $marker);
                array_push($marcadorp, $marker);

                array_push($array, $tempo);
            }
            $temp['name'] = $depa->nombre;
            $temp['sucursales'] = $array;
            $temp['markers'] = $marcadorp;
            $temp['latitud'] = $depa->latitud;
            $temp['longitud'] = $depa->longitud;

            array_push($res, $temp);
        }

        $final['res'] = $res;
        $final['markers'] = $markers;

        return json_encode($final);
    }

    public function depas(){
        $depas = DB::table('sucursal')->distinct()->get('departamento');

        foreach($depas as $depa) {
            $departamento = new Departamento();
            $departamento->nombre = $depa->departamento;
            $departamento->save();
        }

        $res = Departamento::all();

        return json_encode($res);
    }

    public function titulo_sucursal() {
        $sucursal = DB::table('sucursal')->get(['id','titulo']);

        return json_encode($sucursal);
    }
}
