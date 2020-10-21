@extends('admin.layouts.principal')

@section('conteudo-principal')

    <section class="section">

        <table class="highlight">
            <thead>
                <tr>
                    <th>Chocolate</th>
                    <th>Tipo</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($tipos as $tipo)
                    <tr>
                        <td>{{$tipo->chocolate->nome}}</td>
                        <td>{{$tipo->nome}}</td>
                        <td>
                            Editar - Remover
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">Não existem imóveis cadastrados</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="fixed-action-btn">
            <a class="btn-floating btn-large waves-effect waves-light" href="{{route('admin.tipos.create')}}">
                <i class="large material-icons">add</i>
            </a>
        </div>

    </section>
@endsection
