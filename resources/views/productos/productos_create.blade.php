@extends("maestra")
@section("titulo", "Agregar producto")
@section("contenido")
    <div class="row">
        <div class="col-12">
            <form method="POST" action="{{route("productos.store")}}">
                @csrf
                <div class="form-group">
                    <label class="label">Código de barras</label>
                    <input required autocomplete="off" name="codigo_barras" class="form-control"
                           type="text" placeholder="Código de barras">
                </div>
                <div class="form-group">
                    <label class="label">Descripción</label>
                    <input required autocomplete="off" name="descripcion" class="form-control"
                           type="text" placeholder="Descripción">
                </div>
                <div class="form-group">
                    <label class="label">Precio de compra</label>
                    <input required autocomplete="off" name="precio_compra" class="form-control"
                           type="decimal(9,2)" placeholder="Precio de compra">
                </div>
                <div class="form-group">
                    <label class="label">Precio de venta</label>
                    <input required autocomplete="off" name="precio_venta" class="form-control"
                           type="decimal(9,2)" placeholder="Precio de venta">
                </div>
                <div class="form-group">
                    <label class="label">Existencia</label>
                    <input required autocomplete="off" name="existencia" class="form-control"
                           type="decimal(9,2)" placeholder="Existencia">
                </div>

                @include("notificacion")
                <button class="btn btn-success">Guardar</button>
                <a class="btn btn-primary" href="{{route("productos.index")}}">Volver al listado</a>
            </form>
        </div>
    </div>
@endsection
