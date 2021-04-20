@extends("layout/plantilla")
@section("header")
@endsection

@section("contenido")

<section id="pedidoscreate" class="m-0 row justify-content-center">
    <div class="col-auto p-5 text-center">
        <h2 class="display-4">Añadir un nuevo pedido</h2>
        <hr>
    </div>
    <div class="col-lg-7 mx-auto">
    
    <form method="POST" action="/pedidos">
        <div class="row form-group">
            <label for="nombre" class="col-form-label col-md-4 col-sm-2">Fecha del pedido:</label>
                <div class="col-md-8">
                    <input type="date" formControlName="fechap" class="form-control" id="fechaP" name="fechapedido">
                </div>
        </div>
            <br>
        <div class="row form-group">
            <label for="desc" class="col-form-label col-md-4 col-sm-2">Estatus:</label>
                <div class="col-md-8">
                    <select class="form-control" id="exampleFormControlSelect1" name="estatus">
                        <option value="Pendiente">Pendiente</option>
                        <option value="Entregado">Entregado</option>
                        <option value="Cancelado">Cancelado</option>
                    </select>
                </div>
        </div>
            <br>
        <div class="row form-group">
            <label for="fechaenvio" class="col-form-label col-md-4 col-sm-2">Fecha de envío:</label>
                <div class="col-md-8">
                    <input type="date" formControlName="" class="form-control" id="fechaE" placeholder="Ingrese el fecha envío" name="fecha_envio">
                </div>
        </div>
            <br>
        <div class="row form-group">
            <label for="codigo_producto" class="col-form-label col-md-4 col-sm-2">Código producto:</label>
                <div class="col-md-8">
                    <input type="number" formControlName="" class="form-control" id="codigoP" placeholder="Ingrese el código del producto" name="codigo_producto">
                </div>
        </div>
            <br>
        <div class="row form-group">
            <label for="cliente_id" class="col-form-label col-md-4 col-sm-2">Código cliente:</label>
                <div class="col-md-8">
                    <input type="number" formControlName="" class="form-control" id="codigoC" placeholder="Ingrese el código del cliente" name="cliente_id">
                </div>
        </div>
            <br>
        <div class="row form-group">
            <label for="vendedor_id" class="col-form-label col-md-4 col-sm-2">Código vendedor:</label>
                <div class="col-md-8">
                    <input type="number" formControlName="" class="form-control" id="codigoV" placeholder="Ingrese el código del vendedor" name="vendedor_id">
                </div>
        </div>
        
        {{csrf_field()}}

        <br>
        <div class="mx-auto text-center">
            <input class="btn btn-success" type="submit" value="Añadir" name="Enviar">
        </div>

    </form>
</section>

@endsection

@section("footer")
@endsection



