@extends("template.MenuPrincipal")

@section("content")

<title>Delete barco</title>
    <div class="col-md-6 well">
        <div class="col-md-12">
            <h3>Deseja excluir esse contato</h3>
            <div style="float: right"></div>
            <a class="btn btn-default  btn-sm" href="{{ url("barcos")}}">

                &nbsp;Voltar

            </a>
            <a class="btn btn-default  btn-sm" href="{{ url("barcos/$boats->id/destroy ")}}">

                &nbsp;Excluir

            </a>

        </div>


    </div>


<div class="col-md-3">
    <div class="panel bg-dark panel-danger ">
        <input type="hidden" value="{{ $boats->id }}" name="id">
        <div class="panel-heading">{{ $boats->nameBoat }}</div>
        <div class="panel-body">{{ $boats->price }}</div>
    </div>

</div>




@endsection