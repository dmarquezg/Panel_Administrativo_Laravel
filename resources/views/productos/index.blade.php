@extends("layout/plantilla")
@section("header")
@endsection

@section("contenido")
<div class="mx-auto text-center">
        <a class="btn btn-outline-primary" id="btn-prod" href="{{route('productos.create')}}">Añadir producto</a>
    </div> 
    <div class="table-responsive">
        <table class="table table-striped text-center">
        <thead>
            <tr>
                <th scope="col">ID producto</th>
                <th scope="col">Nombre del producto</th>
                <th scope="col">Descripción</th>
                <th scope="col">Precio</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>

        <tbody>
        @foreach ($productos as $productos)
            <tr>
                <td>DM-Pr-{{$productos -> id}}</td>
                <td>{{$productos -> nombre}}</td>
                <td>{{$productos -> descripcion}}</td>
                <td>${{$productos -> precio}}</td>
                <td>
                    <a href="{{route('productos.edit', $productos -> id)}}" class="btn btn-success">Opciones</button>
                <td>
            </tr>
        @endforeach
        </tbody>
        </table>
    </div>
@endsection

@section("footer")
@endsection