<?php

namespace App\ClasesSinPrincipio;

class Figura
{
    private $tipo;

    public function getTipo(){
        return $this->tipo;
    }

    public function setTipo($tipo){
        return $this->tipo = $tipo;
    }
} 