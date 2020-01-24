<?php

namespace App\ClasesSinPrincipio;

class Calculo
{
    public function calcularArea($figura){
        if ($figura->getTipo() == 1){
            $result = $this->areaRectangulo($figura);
        } else{
            $result = $this->areaCirculo($figura);
        }
        return $result;
    }

    public function areaRectangulo($rectangulo){
        return ($rectangulo->getLado1()*$rectangulo->getLado2());
    }

    public function areaCirculo($circulo){
        $PI  = 3.14159265358979323846; // pi
        return ($PI*$circulo->getRadio()*$circulo->getRadio());
    }
} 