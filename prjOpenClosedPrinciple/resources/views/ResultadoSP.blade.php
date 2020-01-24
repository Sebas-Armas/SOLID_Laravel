@extends('Layouts.Portada')
@section('content')
<p style="font-size: 25px">
    <?php 
    if ($figura->getTipo() == 1) {
        echo "El área del rectangulo con lado1: ".$figura->getLado1()." y lado2: ".$figura->getLado2()." es igual a: ".$area;
      } else{
        echo "El área del circulo con radio: ".$figura->getRadio()." es igual a: ".$area;
      }
      
    ?>

 </p>

@stop    
