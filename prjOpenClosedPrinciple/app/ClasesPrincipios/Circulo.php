<?php

namespace App\ClasesPrincipios;

class Circulo implements Ifigura
{
    private $radio;

    public function getRadio(){
        return $this->radio;
    }

    public function setRadio($radio){
        return $this->radio = $radio;
    }

    public function calcularArea(){
        $PI  = 3.14159265358979323846; // pi
        return $this->radio*$this->radio*$PI;
    }

    public function getClass()
    {
        $path = explode('\\', __CLASS__);
        return array_pop($path);
    }
    
} 