<div>
   Waste no more time arguing what a good man should be, be one. - Marcus Aurelius 
</div>

<table>
    @foreach($productos as $registros)
    <tr>
        @foreach($registros as $producto)
        <td>{{$producto}}</td>
        @endforeach
    </tr>
    @endforeach
</table>


<button><a href="{{route('Home')}}">Regresar</a></button>