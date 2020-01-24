@extends('Layouts.Portada')
@section('content')
<p style="font-size: 25px">Indique la figura para calcular el área:</p>

<button type="submit" onclick="location.href='{{ url('circulo') }}'" >Círculo</button>
<button type="submit"  onclick="location.href='{{ url('rectangulo') }}'" >Rectángulo</button>
@stop    
