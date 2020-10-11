@extends('admin.layouts.principal')

@section('conteudo-principal')

    <section class='section'>

        <form action="{{route('admin.chocolates.adicionar')}}" method="POST">

            {{-- cross-site --}}
            @csrf

            <div class="input-field">
                <input type="text" name="nome" id="nome" />
                <label for="nome">Nome</label>
                @error('nome')
                    <span class="red-text text-accent-3"><small>{{$message}}</small></span>
                @enderror
            </div>

            <div class="input-field">
                <input type="text" name="amargor" id="amargor" />
                <label for="amargor">Amargor</label>
                @error('amargor')
                    <span class="red-text text-accent-3"><small>{{$message}}</small></span>
                @enderror
            </div>

            <div class="right-align">
            <a class="btn-flat waves-effect" href="{{url()->previous()}}">Cancelar</a>
            <button class="btn waves-effect waves-light" type="submit">
                Salvar
            </button>
            </div>
        </form>
    </section>

@endsection
