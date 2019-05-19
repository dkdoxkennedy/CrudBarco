@extends("template.MenuPrincipal")

@section("content")



    <div id="main" class="container-fluid">

        <h3 class="page-header">Alterar Item</h3>

        <form  action="{{url('/barcos/update') }}" method="POST">
            {{csrf_field()}}
            <div class="row">
                <div class="form-group col-md-3 {{$errors->has('nameBoat') ? 'has-error' : ''}}">
                    <label >Nome</label>
                    <input type="hidden" value="{{ $boats->id }}" name="id">
                    <input type="text" value="{{ $boats->nameBoat }}" name="nameBoat" class="form-control"  placeholder="Digite o Nome"/>
                    @if($errors->has('nameBoat'))
                        <span class="help-block">
                            {{$errors->first('nameBoat')}}
                        </span>
                    @endif
                </div>
                <div class="form-group col-md-3" {{$errors->has('price') ? 'has-error' : ''}}>
                    <label >Digite Valor</label>
                    <input type="text" value="{{ $boats->price }}" name="price" class="form-control" placeholder="Digite o valor"/>
                    @if($errors->has('price'))
                        <span class="help-block">
                            {{$errors->first('price')}}
                        </span>
                    @endif
                </div>
                <div class="form-group col-md-3" {{$errors->has('cidade') ? 'has-error' : ''}}>
                    <label >Digite Cidade</label>
                    <input type="text" value="{{ $boats->cidade }}" name="cidade" class="form-control" placeholder="Digite o cidade"/>
                    @if($errors->has('cidade'))
                        <span class="help-block">
                            {{$errors->first('cidade')}}
                        </span>
                    @endif
                </div>
                <div class="form-group col-md-3" {{$errors->has('boatSize') ? 'has-error' : ''}}>
                    <label >Digite a Tamanho</label>
                    <input type="text" value="{{ $boats->boatSize }}" name="boatSize" class="form-control"  placeholder="Digite a tamanho" />
                    @if($errors->has('boatSize'))
                        <span class="help-block">
                            {{$errors->first('boatSize')}}
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group" {{$errors->has('boatDescription') ? 'has-error' : ''}}>
                <label for="comment">Descrição:</label>
                <textarea class="form-control"   name="boatDescription" rows="5" id="comment">{{ $boats->boatDescription }}</textarea>
                @if($errors->has('boatDescription'))
                    <span class="help-block">
                            {{$errors->first('boatDescription')}}
                        </span>
                @endif

            </div>

            <hr />

            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <a  href="{{ url("barcos")}}" class="btn btn-default">Cancelar</a>
                </div>
            </div>


            </div>

        </form>
    </div>


@endsection