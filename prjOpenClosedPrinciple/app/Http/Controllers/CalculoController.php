<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClasesPrincipios\Circulo;
use App\ClasesPrincipios\Rectangulo;

class CalculoController extends Controller
{
    //
    public function calculoAreaCirculo(Request $request){
        $circulo = new Circulo();
        $circulo->setRadio($request->radio);
        return View("Resultado")->with('figura',$circulo);
    }

    public function calculoAreaRectangulo(Request $request){
        $rectangulo = new Rectangulo();
        $rectangulo->setLado1($request->lado1);
        $rectangulo->setLado2($request->lado2);
        return View("Resultado")->with('figura',$rectangulo);
    }
}
