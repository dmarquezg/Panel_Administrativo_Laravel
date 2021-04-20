@extends("layout/plantilla")
@section("header")
@endsection

@section("contenido")
<section id="vendedorshow">
    <div class="col-auto p-5 text-center">
        <h2>Datos del Vendedor</h2>
        <hr>
    </div>
        <div class="table-responsive">
            <table class="table table-striped table-sm text-center">
                <thead>
                    <tr>
                        <th>ID vendedor</th>
                        <th>Nombre del vendedor</th>
                        <th>Apellido paterno</th>
                        <th>Apellido materno</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>DM-V-{{$vendedores -> id}}</td>
                        <td>{{$vendedores -> nombre}}</td>
                        <td>{{$vendedores -> apellido_paterno}}</td>
                        <td>{{$vendedores -> apellido_materno}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
</section>
@endsection

@section("footer")
@endsection