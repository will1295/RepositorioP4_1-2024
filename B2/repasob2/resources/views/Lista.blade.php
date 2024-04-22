<div>
    <!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->
</div>

<table style="border:2px solid black">
    <tr>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Precio</th>
    </tr>
    @foreach($material as $materia)
    <tr style="border:2px solid black">
       <td style="border:2px solid black">{{$materia['nombre']}}</td> 
       <td style="border:2px solid black">{{$materia['descripcion']}}</td> 
       <td style="border:2px solid black">$ {{$materia['precio']}}</td> 
    </tr>
    @endforeach


    </tr>
    
</table>


{{--
<table style="border:2px solid black">
    <tr>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Precio</tr>
    </tr>
    @foreach($material as $materia)
    <tr style="border:2px solid black">
    @foreach($materia as $producto)
       <td style="border:2px solid black">{{$producto}}</td> 
    @endforeach
    </tr>
@endforeach


    </tr>
    
</table>

--}}