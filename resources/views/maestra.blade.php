<!doctype html>
<html lang="es">
<!--
https://parzibyte.me/blog
-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{env("APP_NAME")}}">
    <meta name="author" content="Parzibyte">
    <title>@yield("titulo") - {{env("APP_NAME")}}</title>
    <link href="{{url("/css/bootstrap.min.css")}}" rel="stylesheet">
    <link href="{{url("/css/all.min.css")}}" rel="stylesheet">
    <style>
        body {
            padding-top: 70px;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" target="_blank" href="//parzibyte.me/blog">{{env("APP_NAME")}}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#miNavbar" aria-controls="miNavbar"
            aria-expanded="false" aria-label="Mostrar u ocultar menú">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="miNavbar">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{route("productos.index")}}">Productos&nbsp;<i class="fa fa-box"></i></a>
            </li>
        </ul>
    </div>
</nav>
<main class="container-fluid">
    @yield("contenido")
</main>
</body>
</html>
