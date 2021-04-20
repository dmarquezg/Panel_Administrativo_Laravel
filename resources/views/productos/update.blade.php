@extends("layout/plantilla")
@section("header")
@endsection

@section("contenido")
<form action="" method="POST">
    <label>Nombre del producto:</label>
        <input type="text" name="Nombre">
    <br>
    <label>Descripción del producto:</label>
        <input type="text" name="Descripcion">
    <br>
    <label>Precio del producto:</label>
        <input type="text" name="Precio">
    <br>
        <input type="submit" value="Enviar" name="Enviar">
</form>
@endsection

@section("footer")
@endsection

