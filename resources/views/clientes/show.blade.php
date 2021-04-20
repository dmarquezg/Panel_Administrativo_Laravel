@extends("layout/plantilla")
@section("header")
@endsection

@section("contenido")
<section id="clienteshow">
    <div class="col-auto p-5 text-center">
        <h2>Datos del Cliente</h2>
        <hr>
    </div>
            <div class="table-responsive">
            <table class="table table-striped table-sm text-center">
                    <thead>
                        <tr>
                        <th>ID cliente</th>
                        <th>Nombre cliente</th>
                        <th>Apellido paterno</th>
                        <th>Apellido materno</th>
                 
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>DM-C-{{$clientes -> id}}</td>
                            <td>{{$clientes -> nombre}}</td>
                            <td>{{$clientes -> apellido_paterno}}</td>
                            <td>{{$clientes -> apellido_materno}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
</section>
@endsection

@section("footer")
@endsection