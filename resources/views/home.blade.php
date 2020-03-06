@extends('maestra')
@section("titulo", "Inicio")
@section('contenido')
    <div class="col-12 text-center">
        <h1>Bienvenido, {{Auth::user()->name}}</h1>
    </div>
    <div class="card-columns">
        <a href="{{route("productos.index")}}" style="color: black;">
            <div class="card text-center">
                <img src="{{url("/img/order.png")}}" class="card-img-top">
                <div class="card-body">
                    <h1 class="card-title">Productos</h1>
                </div>
            </div>
        </a>

        <a style="color: black;" target="_blank" href="https://parzibyte.me/blog/contrataciones-ayuda/">
            <div class="card text-center">
                <img src="{{url("/img/gamer.png")}}" class="card-img-top">
                <div class="card-body">
                    <h1 class="card-title">Soporte</h1>
                </div>
            </div>
        </a>
        <a style="color: black;" href="{{route("vender.index")}}">
            <div class="card text-center">
                <img src="{{url("/img/sales.png")}}" class="card-img-top">
                <div class="card-body">
                    <h1 class="card-title">Vender</h1>
                </div>
            </div>
        </a>
        <a style="color: black;" href="{{route("acerca_de")}}">
            <div class="card text-center">
                <img src="{{url("/img/about.png")}}" class="card-img-top">
                <div class="card-body">
                    <h1 class="card-title">Acerca de</h1>
                </div>
            </div>
        </a>
        <a style="color: black;" href="{{route("ventas.index")}}">
            <div class="card text-center">
                <img src="{{url("/img/coupon.png")}}" class="card-img-top">
                <div class="card-body">
                    <h1 class="card-title">Ventas</h1>
                </div>
            </div>
        </a>
    </div>
@endsection
