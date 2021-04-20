<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maejang</title>

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <!-- Header -->
    <header class="header">
      @yield("header")
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="#navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand js-scroll-trigger">Panel Administrativo</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="{{route('pedidos.index')}}">Pedidos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('productos.index')}}">Productos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="{{route('clientes.index')}}">Clientes</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('vendedores.index')}}">Vendedores</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
    </header>

    <div>
      @yield("contenido")
    </div>

      <!-- Footer -->
    <footer class="py-5 bg-dark" id="footer1">
    @yield("footer")
        <div class="container">        
            <p class="m-0 text-center text-white">by Daniela Márquez Galindo</p>
        </div>
    </footer>
</body>
</html>