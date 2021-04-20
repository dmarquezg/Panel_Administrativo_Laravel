@extends("layout/plantilla")
@section("header")
@endsection

@section("contenido")
<section id="pedidoshow">
            <div class="container">
                <h2>Informacion del Pedido</h2>
            </div>
            <div class="table-responsive">
            <table class="table table-striped table-sm text-center">
                    <thead>
                        <tr>
                        <th>ID pedido</th>
                        <th>Fecha pedido</th>
                        <th>Estatus</th>
                        <th>Fecha envío</th>
                        <th>Código producto</th>
                        <th>Código cliente</th>
                        <th>Código vendedor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>DM-P-{{$pedidos -> id}}</td>
                            <td>{{$pedidos -> fechapedido}}</td>
                            <td>{{$pedidos -> estatus}}</td>
                            <td>{{$pedidos -> fecha_envio}}</td>
                            <td>{{$pedidos -> codigo_producto}}</td>
                            <td>{{$pedidos -> cliente_id}}</td>
                            <td>{{$pedidos -> vendedor_id}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
@endsection

@section("footer")
@endsection