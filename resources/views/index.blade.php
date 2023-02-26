<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Restaurante</title>
</head>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
    <a class="navbar-brand" href="{{route('index')}}"><img src="{{ asset('img/logo_restaurante.png') }}" width="125" height="80"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('index')}}">Inicio</a>
            </li> <!--
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
            </li>
            <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">P</a>
            </li> -->
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('ofertas')}}">Ofertas</a>
            </li>            
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('promo')}}">Promociones</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('ubicacion_restaurante')}}">Ubicación</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('contact')}}">Contactenos</a>
            </li>
        </ul>
    </div>
    </nav>
</header>
<body>
    <h1>Nuestros Productos</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
        <div class="card h-100" style="width: px;">
        <img src="{{ asset('img/pizza.png') }}" class="card-img-top" height="245">
        <div class="card-body">
            <h5 class="card-title">Pizzas</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100">
        <img src="{{ asset('img/hamburgesas.jpg') }}" class="card-img-top" height="245">
        <div class="card-body">
            <h5 class="card-title">Hamburgesas</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
        </div>

        </div>
    </div>
    <div class="col">
        <div class="card h-100">
        <img src="{{ asset('img/perro.jpg') }}" class="card-img-top" height="245">
        <div class="card-body">
            <h5 class="card-title">Perros</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
        </div>

        </div>
    </div>
    </div>
</body>
<footer>

</footer>
</html>