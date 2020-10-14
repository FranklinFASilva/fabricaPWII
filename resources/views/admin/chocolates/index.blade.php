@extends('admin.layouts.principal')

@section('conteudo-principal')

    <section class="section">
        <table class="highlight">
            <thead>
                <tr>
                    <th>chocolate</th>
                    <th>amargor</th>
                    <th class="right-align">opções</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($chocolates as $chocolate)
                    <tr>
                        <td>{{$chocolate->nome}}</td>
                        <td>{{$chocolate->amargor}}%</td>
                        <td class="right-align">Exluir - Remover</td>
                    </tr>

                @empty
                    <tr>
                        <td colspan= '2'>Não existem chocolates cadastrados.</td>
                    </tr>
                @endforelse

            </tbody>
        </table>

        <div class="fixed-action-btn">
            <a class="btn-floating btn-large waves-effect waves-light" href="{{route('admin.chocolates.form')}}">
                <i class="large material-icons">add</i>
            </a>
        </div>

    </section>

@endsection
