@extends('admin.layouts.principal')

@section('conteudo-principal')

<section class="section">

    <form action="{{$action}}" method="POST">
        @csrf


        {{--chocolate--}}
        <div class="row">
            <div class="input-field col s12">
                <select name="cidade_id" id="cidade_id">
                    <option value="" disable selected>Selecione um chocolate</option>

                    @foreach ($chocolates as $chocolate)

                        <option value="{{$chocolate->id}}"
                            {{old('cidade_id') == $chocolate->id ? 'selected' : ''}}
                        >{{$chocolate->nome}}</option>

                    @endforeach
                </select>
                <label for="chocolate_id">Chocolate</label>
                @error('chocolate_id')
                    <span class="red-text text-accent-3"><small>{{$message}}</small></span>
                @enderror
            </div>
        </div>

        {{--tipo--}}
        <div class="row">
            <div class="input-field col s12">
                <select name="nome" id="nome">
                    <option value="" disable selected>Selecione um tipo de chocolate</option>

                    @foreach ($tipos as $tipo)

                        <option value="{{$tipo->id}}"
                            {{old('nome') == $tipo->id ? 'selected' : ''}}
                        >{{$tipo->nome}}</option>

                    @endforeach
                </select>
                <label for="nome">Tipo de chocolate</label>
                @error('nome')
                    <span class="red-text text-accent-3"><small>{{$message}}</small></span>
                @enderror
            </div>
        </div>

        <div class="right-align">
            <a class="btn-flat waves-effect" href="{{route('admin.imoveis.index')}}">Cancelar</a>
            <button class="btn waves-effect waves-light" type="submit">
                Salvar
            </button>
            </div>

    </form>

</section>

@endsection
