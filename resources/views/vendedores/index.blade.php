@extends("layout/plantilla")
@section("header")
@endsection

@section("contenido")
<div class="mx-auto text-center">
        <a class="btn btn-outline-primary" id="btn-prod" href="{{route('vendedores.create')}}">Añadir vendedor</a>
    </div> 
    <div class="table-responsive">
        <table class="table table-striped text-center">
        <thead>
            <tr>
                <th scope="col">ID vendedor</th>
                <th scope="col">Nombre del vendedor</th>
                <th scope="col">Apellido paterno</th>
                <th scope="col">Apellido materno</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>

        <tbody>
        @foreach ($vendedores as $vendedores)
            <tr>
                <td>DM-V-{{$vendedores -> id}}</td>
                <td>{{$vendedores -> nombre}}</td>
                <td>{{$vendedores -> apellido_paterno}}</td>
                <td>{{$vendedores -> apellido_materno}}</td>
                <td>
                    <a href="{{route('vendedores.edit', $vendedores-> id)}}" class="btn btn-success">Opciones</button>
                <td>
            </tr>
        @endforeach
        </tbody>
        </table>
    </div>
@endsection

@section("footer")
@endsection