@extends("layout/plantilla")
@section("header")
@endsection

@section("contenido")

<section id="vendedorcreate" class="m-0 row justify-content-center">
    <div class="col-auto p-5 text-center">
        <h2 class="display-4">Añadir un nuevo vendedor</h2>
        <hr>
    </div>
    <div class="col-lg-7 mx-auto">
    
    <form method="POST" action="/vendedores">
        <div class="row form-group">
            <label for="nombre" class="col-form-label col-md-4 col-sm-2">Nombre del vendedor:</label>
                <div class="col-md-8">
                    <input type="text" formControlName="name" class="form-control" id="nombreV" placeholder="Ingrese el nombre del vendedor" name="nombre">
                </div>
        </div>
            <br>
        <div class="row form-group">
            <label for="apellidoP" class="col-form-label col-md-4 col-sm-2">Apellido paterno:</label>
                <div class="col-md-8">
                    <input type="text" formControlName="name" class="form-control" id="apellidoP" placeholder="Ingrese el apellido paterno" name="apellido_paterno">
                </div>
        </div>
            <br>
        <div class="row form-group">
            <label for="apellidoM" class="col-form-label col-md-4 col-sm-2">Apellido materno:</label>
                <div class="col-md-8">
                    <input type="text" formControlName="name" class="form-control" id="apellidoM" placeholder="Ingrese el apellido materno" name="apellido_materno">
                </div>
        </div>
        
        {{csrf_field()}}

        <br>
        <div class="mx-auto text-center">
            <input class="btn btn-success" type="submit" value="Añadir" name="Enviar">
        </div>

    </form>
</div>
</section>


@endsection

@section("footer")
@endsection