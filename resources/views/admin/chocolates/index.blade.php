@extends('admin.layouts.principal')

@section('conteudo-principal')

    <section class="section">
        <table class="highlight">
            <thead>
                <tr>
                    <th>Chocolate</th>
                    <th class="right-align">Opções</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($chocolates as $chocolate)
                    <tr>
                        <td>{{$chocolate}}</td>
                        <td class="right-align">Exluir - Remover</td>
                    </tr>

                @empty
                    <tr>
                        <td colspan= '2'>Não existem chocolates cadastrados.</td>
                    </tr>
                @endforelse

            </tbody>
        </table>
    </section>

@endsection

@section('conteudo-secundario')
    <p>Texto secundario</p>
@endsection
