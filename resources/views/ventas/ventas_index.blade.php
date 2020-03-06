@extends("maestra")
@section("titulo", "Ventas")
@section("contenido")
    <div class="row">
        <div class="col-12">
            <h1>Ventas <i class="fa fa-list"></i></h1>
            @include("notificacion")
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Total</th>
                    <th>Ticket de venta</th>
                    <th>Detalles</th>
                    <th>Eliminar</th>
                </tr>
                </thead>
                <tbody>
                @foreach($ventas as $venta)
                    <tr>
                        <td>{{$venta->created_at}}</td>
                        <td>${{number_format($venta->total, 2)}}</td>
                        <td>
                            <a class="btn btn-info" href="{{route("ventas.ticket", ["id"=>$venta->id])}}">
                                <i class="fa fa-print"></i>
                            </a>
                        </td>
                        <td>
                            <a class="btn btn-success" href="{{route("ventas.show", $venta)}}">
                                <i class="fa fa-info"></i>
                            </a>
                        </td>
                        <td>
                            <form action="{{route("ventas.destroy", [$venta])}}" method="post">
                                @method("delete")
                                @csrf
                                <button type="submit" class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection
