@extends("layout/plantilla")
@section("header")
@endsection

@section("contenido")
<section id="editvendedor" class="m-0 row justify-content-center">
<div class="col-auto p-5 text-center">
        <h2 class="display-4">Información del vendedor</h2>
        <hr>
    </div>
    <div class="col-lg-7 mx-auto">
    
    <form method="POST" action="/vendedores/{{$vendedores -> id}}">
        <div class="row form-group">
            <label for="nombre" class="col-form-label col-md-4 col-sm-2">Nombre del vendedor:</label>
                <div class="col-md-8">
                    <input type="text" formControlName="name" class="form-control" id="nombreV" placeholder="Ingrese el nombre" name="nombre" value="{{$vendedores -> nombre}}">
                </div>
        </div>
            <br>
        <div class="row form-group">
            <label for="apellidoP" class="col-form-label col-md-4 col-sm-2">Apellido paterno:</label>
                <div class="col-md-8">
                    <input type="text" formControlName="lastname" class="form-control" id="apellidoPV" placeholder="Ingrese el apellido paterno" name="apellido_paterno" value="{{$vendedores -> apellido_paterno}}">
                </div>
        </div>
            <br>
        <div class="row form-group">
            <label for="apellidoM" class="col-form-label col-md-4 col-sm-2">Apellido materno:</label>
                <div class="col-md-8">
                    <input type="text" formControlName="lastname2" class="form-control" id="apellidoMV" placeholder="Ingrese el apellido materno" name="apellido_materno" value="{{$vendedores -> apellido_materno}}">
                </div>
        </div>    

        <br>

        <div div class="mx-auto text-center">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="PUT">
            <input class="btn btn-warning m-2" type="submit" value="Actualizar vendedor">
        </div>
    </form>
    
    <form method="POST" action="/vendedores/{{$vendedores -> id}}">
        <div div class="mx-auto text-center">
            {{csrf_field()}}
                <input type="hidden" name="_method" value="DELETE">
                <input class="btn btn-danger" type="submit" value="Eliminar vendedor">
        </div>
    </form>

</section>
@endsection

@section("footer")
@endsection