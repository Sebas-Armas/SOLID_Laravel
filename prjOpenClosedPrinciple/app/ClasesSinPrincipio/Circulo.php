<?php

namespace App\ClasesSinPrincipio;

class Circulo extends Figura
{
    private $radio;

    public function getRadio(){
        return $this->radio;
    }

    public function setRadio($radio){
        return $this->radio = $radio;
    }
    
} 