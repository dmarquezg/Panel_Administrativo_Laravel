@extends("layout/plantilla")
@section("header")
@endsection

@section("contenido")
<section id="editcliente" class="m-0 row justify-content-center">
<div class="col-auto p-5 text-center">
        <h2 class="display-4">Información del cliente</h2>
        <hr>
    </div>
    <div class="col-lg-7 mx-auto">
    
    <form method="POST" action="/clientes/{{$clientes -> id}}">
        <div class="row form-group">
            <label for="nombre" class="col-form-label col-md-4 col-sm-2">Nombre del cliente:</label>
                <div class="col-md-8">
                    <input type="text" formControlName="name" class="form-control" id="nombreC" placeholder="Ingrese el nombre del cliente" name="nombre" value="{{$clientes -> nombre}}">
                </div>
        </div>
            <br>
        <div class="row form-group">
            <label for="apellidoP" class="col-form-label col-md-4 col-sm-2">Apellido paterno:</label>
                <div class="col-md-8">
                    <input type="text" formControlName="name" class="form-control" id="apellidoP" placeholder="Ingrese el apellido paterno" name="apellido_paterno" value="{{$clientes -> apellido_paterno}}">
                </div>
        </div>
            <br>
        <div class="row form-group">
            <label for="apellidoM" class="col-form-label col-md-4 col-sm-2">Apellido materno:</label>
                <div class="col-md-8">
                    <input type="text" formControlName="name" class="form-control" id="apellidoM" placeholder="Ingrese el apellido materno" name="apellido_materno" value="{{$clientes -> apellido_materno}}">
                </div>
        </div>    

        <br>

        <div div class="mx-auto text-center">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="PUT">
            <input class="btn btn-warning m-2" type="submit" value="Actualizar cliente">
        </div>
    </form>
    
    <form method="POST" action="/clientes/{{$clientes -> id}}">
        <div div class="mx-auto text-center">
            {{csrf_field()}}
                <input type="hidden" name="_method" value="DELETE">
                <input class="btn btn-danger" type="submit" value="Eliminar cliente">
        </div>
    </form>

</section>
@endsection

@section("footer")
@endsection