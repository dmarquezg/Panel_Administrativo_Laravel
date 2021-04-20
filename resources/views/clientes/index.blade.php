@extends("layout/plantilla")
@section("header")
@endsection

@section("contenido")
<div class="mx-auto text-center">
        <a class="btn btn-outline-primary" id="btn-prod" href="{{route('clientes.create')}}">Añadir cliente</a>
    </div> 
    <div class="table-responsive">
        <table class="table table-striped text-center">
            <thead>
                <tr>
                    <th scope="col">ID cliente</th>
                    <th scope="col">Nombre del cliente</th>
                    <th scope="col">Apellido paterno</th>
                    <th scope="col">Apellido materno</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>

            <tbody>
            @foreach ($clientes as $clientes)
                <tr>
                    <td>DM-C-{{$clientes -> id}}</td>
                    <td>{{$clientes -> nombre}}</td>
                    <td>{{$clientes -> apellido_paterno}}</td>
                    <td>{{$clientes -> apellido_materno}}</td>
                    <td>
                        <a href="{{route('clientes.edit', $clientes-> id)}}" class="btn btn-success">Opciones</button>
                    <td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <br>
</div>
@endsection

@section("footer")
@endsection