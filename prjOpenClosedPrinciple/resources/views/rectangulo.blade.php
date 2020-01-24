@extends('Layouts.Portada')
@section('content')
<p style="font-size: 25px">Indique los parametros del rectángulo:</p>

<form action="{{ route('Rectangulo') }}" method="post">
        @csrf
        
        Ingrese el Lado1: <input type="text" name="lado1" placeholder="Ejm: 3">
        Ingrese el Lado2: <input type="text" name="lado2" placeholder="Ejm: 4">
        <br>
        <button type="submit" action="{{ route('Rectangulo') }}" >Calcular</button>
    </form>

@stop    
