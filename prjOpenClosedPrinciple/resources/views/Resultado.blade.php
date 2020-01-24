@extends('Layouts.Portada')
@section('content')
<p style="font-size: 25px">
    <?php 
    if ($figura->getClass() == "Rectangulo") {
        echo "El área del rectangulo con lado1: ".$figura->getLado1()." y lado2: ".$figura->getLado2()." es igual a: ".$figura->calcularArea();
      } else{
        echo "El área del circulo con radio: ".$figura->getRadio()." es igual a: ".$figura->calcularArea();
      }
      
    ?>

 </p>

@stop    
