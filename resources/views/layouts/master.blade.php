<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OrcaObra</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <nav class="nav navbar navbar-expand-lg " data-bs-theme="dark" style="background-color: rgba(16, 43, 18, 0.949)">

        <div class="container-fluid" style="text-align:right">

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="{{ route('etapas.index') }}">Etapas</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('servicos.index') }}">Serviços</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link"  href="{{ route('fases.index') }}">Fases</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="{{ route('insumos.index') }}">Insumos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Composições</a>
                  </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Consultas
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Composições</a></li>
                    <li><a class="dropdown-item" href="#">Fases</a></li>
                    <li><a class="dropdown-item" href="#">Curva ABC</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>

      </nav>
</head>
<body>
    <div class="container">

    @yield('main')
</div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
