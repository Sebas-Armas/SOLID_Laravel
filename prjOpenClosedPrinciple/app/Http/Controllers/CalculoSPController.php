<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClasesSinPrincipio\Circulo;
use App\ClasesSinPrincipio\Calculo;
use App\ClasesSinPrincipio\Rectangulo;

class CalculoSPController extends Controller
{
    //
    public function areaCirculo(Request $request){
        $circulo = new Circulo();
        $circulo->setTipo(2);
        $circulo->setRadio($request->radio);
        $c1 = new Calculo();
        return View("ResultadoSP")->with('figura',$circulo)
        ->with('area',$c1 -> calcularArea($circulo));
    }

    public function areaRectangulo(Request $request){
        $rectangulo = new Rectangulo();
        $rectangulo->setTipo(1);
        $rectangulo->setLado1($request->lado1);
        $rectangulo->setLado2($request->lado2);
        $c1 = new Calculo();
        return View("ResultadoSP")->with('figura',$rectangulo)
        ->with('area',$c1 -> calcularArea($rectangulo));
    }
}
