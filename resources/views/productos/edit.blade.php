@extends("layout/plantilla")
@section("header")
@endsection

@section("contenido")
<section id="editcliente" class="m-0 row justify-content-center">
<div class="col-auto p-5 text-center">
        <h2 class="display-4">Información del producto</h2>
        <hr>
    </div>
    <div class="col-lg-7 mx-auto">
    
    <form method="POST" action="/productos/{{$productos -> id}}">
        <div class="row form-group">
            <label for="nombreP" class="col-form-label col-md-4 col-sm-2">Nombre del producto:</label>
                <div class="col-md-8">
                    <input type="text" formControlName="name" class="form-control" id="nombreP" placeholder="Ingrese el nombre del producto" name="nombre" value="{{$productos -> nombre}}">
                </div>
        </div>
            <br>
        <div class="row form-group">
            <label for="desc" class="col-form-label col-md-4 col-sm-2">Descripción del producto:</label>
                <div class="col-md-8">
                    <input type="text" formControlName="name" class="form-control" id="desc" placeholder="Ingrese la descripción" name="descripcion" value="{{$productos -> descripcion}}">
                </div>
        </div>
            <br>
        <div class="row form-group">
            <label for="precio" class="col-form-label col-md-4 col-sm-2">Precio del producto:</label>
                <div class="col-md-8">
                    <input type="number" formControlName="name" class="form-control" id="precio" placeholder="Ingrese el precio" name="precio" value="{{$productos -> precio}}">
                </div>
        </div>    

        <br>

        <div div class="mx-auto text-center">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="PUT">
            <input class="btn btn-warning m-2" type="submit" value="Actualizar producto">
        </div>
    </form>
    
    <form method="POST" action="/productos/{{$productos -> id}}">
        <div div class="mx-auto text-center">
            {{csrf_field()}}
                <input type="hidden" name="_method" value="DELETE">
                <input class="btn btn-danger" type="submit" value="Eliminar producto">
        </div>
    </form>

</section>
@endsection

@section("footer")
@endsection