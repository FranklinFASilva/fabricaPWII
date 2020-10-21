@extends('admin.layouts.principal')

@section('conteudo-principal')

    <section class='section'>

        <form action="{{$action}}" method="POST">

            {{-- cross-site --}}
            @csrf
            @isset($chocolate)
                @method('PUT')
            @endisset

            <div class="input-field">
                <input type="text" name="nome" id="nome" value="{{old('nome', $chocolate->nome ?? '')}}"/>
                <label for="nome">Nome</label>
                @error('nome')
                    <span class="red-text text-accent-3"><small>{{$message}}</small></span>
                @enderror
            </div>

            <div class="input-field">
                <input type="text" name="amargor" id="amargor" value="{{old('amargor', $chocolate->amargor ?? '')}}"/>
                <label for="amargor">Amargor</label>
                @error('amargor')
                    <span class="red-text text-accent-3"><small>{{$message}}</small></span>
                @enderror
            </div>


            <div class="right-align">
            <a class="btn-flat waves-effect" href="{{route('admin.chocolates.index')}}">Cancelar</a>
            <button class="btn waves-effect waves-light" type="submit">
                Salvar
            </button>
            </div>
        </form>
    </section>

@endsection
