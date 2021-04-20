@extends("layout/plantilla")
@section("header")
@endsection

@section("contenido")
<section id="productoshow">
            <div class="col-auto p-5 text-center">
                <h2>Datos del Producto</h2>
                <hr>
            </div>
            <div class="table-responsive">
            <table class="table table-striped table-sm text-center">
                    <thead>
                        <tr>
                        <th>ID producto</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                 
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>DM-Pr-{{$productos -> id}}</td>
                            <td>{{$productos -> nombre}}</td>
                            <td>{{$productos -> descripcion}}</td>
                            <td>${{$productos -> precio}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
@endsection

@section("footer")
@endsection