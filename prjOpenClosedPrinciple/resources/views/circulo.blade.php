@extends('Layouts.Portada')
@section('content')

<p style="font-size: 25px">Indique los parametros del círculo:</p>
<form action="{{ route('Circulo') }}" method="post">
        @csrf
        
        Ingrese el radio: <input type="text" name="radio" placeholder="Ejm: 3">
        <br>
        <button type="submit" action="{{ route('Circulo') }}" >Calcular</button>
    </form>
@stop    
