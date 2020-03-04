@if(session("mensaje"))
    <div class="alert alert-{{session('tipo') ? session("tipo") : "info"}}">
        {{session('mensaje')}}
    </div>
@endif
