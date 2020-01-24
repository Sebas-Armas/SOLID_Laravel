<?php

namespace App\ClasesSinPrincipio;

class Rectangulo extends Figura
{
    private $lado1;
    private $lado2;

    public function getLado1(){
        return $this->lado1;
    }

    public function setLado1($lado1){
        return $this->lado1 = $lado1;
    }

    public function getLado2(){
        return $this->lado2;
    }

    public function setLado2($lado2){
        return $this->lado2 = $lado2;
    }
} 