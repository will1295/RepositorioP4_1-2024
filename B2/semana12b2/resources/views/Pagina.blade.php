@section('titulo')
<title>Calculadora</title>
@endsection
@extends('Template')

@section('seccion1')
<form action="/" method="post">
    @csrf
    <label for="n1">Primer Numero</label>
    <input type="number" name="n1" id="n1">
    <label for="n1">Segundo Numero</label>
    <input type="number" name="n2" id="n2">
    <input type="submit" value="Calcular">
</form>
@endsection
