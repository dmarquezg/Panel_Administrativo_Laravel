@extends("layout/plantilla")
@section("header")
@endsection

@section("contenido")
<form action="" method="POST">
    <label>Nombre del cliente:</label>
        <input type="text" name="Nombre">
    <br>
    <label>Apellido paterno:</label>
        <input type="text" name="Descripcion">
    <br>
    <label>Apellido materno:</label>
        <input type="text" name="Precio">
    <br>
        <input type="submit" value="Enviar" name="Enviar">
</form>
@endsection

@section("footer")
@endsection

