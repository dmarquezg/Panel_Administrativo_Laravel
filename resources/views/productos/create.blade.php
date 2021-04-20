@extends("layout/plantilla")
@section("header")
@endsection

@section("contenido")

<section id="productoscreate" class="m-0 row justify-content-center">
    <div class="col-auto p-5 text-center">
        <h2 class="display-4">Añadir un nuevo producto</h2>
        <hr>
    </div>
    <div class="col-lg-7 mx-auto">
    
    <form method="POST" action="/productos">
        <div class="row form-group">
            <label for="nombre" class="col-form-label col-md-4 col-sm-2">Nombre del producto:</label>
                <div class="col-md-8">
                    <input type="text" formControlName="nameP" class="form-control" id="nombreP" placeholder="Ingrese el nombre del producto" name="nombre">
                </div>
        </div>
            <br>
        <div class="row form-group">
            <label for="desc" class="col-form-label col-md-4 col-sm-2">Descripción:</label>
                <div class="col-md-8">
                    <input type="text" formControlName="descrip" class="form-control" id="desc" placeholder="Ingrese una descripcion" name="descripcion">
                </div>
        </div>
            <br>
        <div class="row form-group">
            <label for="precio" class="col-form-label col-md-4 col-sm-2">Precio:</label>
                <div class="col-md-8">
                    <input type="text" formControlName="" class="form-control" id="precio" placeholder="Ingrese el precio" name="precio">
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