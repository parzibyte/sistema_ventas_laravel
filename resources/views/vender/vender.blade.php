@extends("maestra")
@section("titulo", "Realizar venta")
@section("contenido")
    <div class="row">
        <div class="col-12">
            <h1>Nueva venta <i class="fa fa-cart-plus"></i></h1>
            @include("notificacion")
            <form action="{{route("agregarProductoVenta")}}" method="post">
                @csrf
                <div class="form-group">
                    <input required autofocus name="codigo" type="text" class="form-control"
                           placeholder="Código de barras">
                </div>
            </form>
            @if(session("productos") !== null)
                <div class="form-group">
                    <div class="row">
                        <div class="col-auto">
                            <form action="{{route("terminarVenta")}}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-success">Terminar venta</button>
                            </form>
                        </div>
                        <div class="col-auto">
                            <form action="{{route("cancelarVenta")}}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-danger">Cancelar venta</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endif
            @if(session("productos") !== null)
                <h2>Total: ${{number_format($total, 2)}}</h2>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Código de barras</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Quitar</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach(session("productos") as $producto)
                        <tr>
                            <td>{{$producto->codigo_barras}}</td>
                            <td>{{$producto->descripcion}}</td>
                            <td>${{number_format($producto->precio_venta, 2)}}</td>
                            <td>{{$producto->cantidad}}</td>
                            <td>
                                <form action="{{route("quitarProductoDeVenta")}}" method="post">
                                    @method("delete")
                                    @csrf
                                    <input type="hidden" name="indice" value="{{$loop->index}}">
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                <h2>Aquí aparecerán los productos de la venta
                    <br>
                    Escanea el código de barras o escribe y presiona Enter</h2>
            @endif
        </div>
    </div>
@endsection
