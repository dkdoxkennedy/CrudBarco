@extends("template.MenuPrincipal")

@section("content")

    <div class="container">
        <h2>Lista de Barcos</h2>
        <input class="form-control" id="myInput" type="text" placeholder="pesquisar...">
        <br>

        <table class="table table-striped table-bordered table-sm">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Preco</th>
                <th>Cidade</th>
                <th>tamanho</th>
                <th>desdrição</th>
                <th>editar</th>
                <th>deletar</th>
            </tr>
            </thead>
            <tbody id="myTable">
            @foreach($boats as $barcos)
            <tr>

                <td>{{$barcos->nameBoat}}</td>
                <td>{{$barcos->price}}</td>
                <td>{{$barcos->cidade}}</td>
                <td>{{$barcos->boatSize}}</td>
                <td>{{$barcos->boatDescription}}</td>
                <td>

                    <a href="{{url("/barcos/$barcos->id/store")}}" class="btn btn-default btn-sm">
                    <span class="glyphicon glyphicon-pencil" style="padding: 3px;" >Editar</span></a>
                </td>
                <td>
                    <a href="{{url("/barcos/$barcos->id/excluir")}}" class="btn btn-default  btn-sm">
                        <span class="glyphicon glyphicon-remove" style="padding: 3px;">Escluir</span></a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <script>
        $(document).ready(function(){
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>

    @endsection
