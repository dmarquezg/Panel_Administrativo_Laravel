@extends("layout/plantilla")
@section("header")
@endsection

@section("contenido")
<div class="mx-auto text-center">
        <a class="btn btn-outline-primary" id="btn-prod" href="{{route('pedidos.create')}}">Añadir pedido</a>
    </div> 
    <div class="table-responsive">
        <table class="table table-striped text-center">
        <thead>
            <tr>
                <th scope="col">ID pedido</th>
                <th scope="col">Fecha de pedido</th>
                <th scope="col">Estatus</th>
                <th scope="col">Fecha de envío</th>
                <th scope="col">ID producto</th>
                <th scope="col">ID cliente</th>
                <th scope="col">ID vendedor</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>

        <tbody>
        @foreach ($pedidos as $pedidos)
            <tr>
                <td>DM-P-{{$pedidos -> id}}</td>
                <td>{{$pedidos -> fechapedido}}</td>
                <td>{{$pedidos -> estatus}}</td>
                <td>{{$pedidos -> fecha_envio}}</td>
                <td><a href="{{route('productos.show', $pedidos -> codigo_producto)}}">DM-Pr-{{$pedidos -> codigo_producto}}</a></td>
                <td><a href="{{route('clientes.show', $pedidos -> cliente_id)}}">DM-C-{{$pedidos -> cliente_id}}</a></td>
                <td><a href="{{route('vendedores.show', $pedidos -> vendedor_id)}}">DM-V-{{$pedidos -> vendedor_id}}</a></td>
                <td>
                    <a href="{{route('pedidos.edit', $pedidos -> id)}}" class="btn btn-success">Opciones</button>
                <td>
            </tr>
        @endforeach
        </tbody>
        </table>
    </div>
@endsection

@section("footer")
@endsection