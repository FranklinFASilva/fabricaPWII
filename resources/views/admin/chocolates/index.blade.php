@extends('admin.layouts.principal')

@section('conteudo-principal')

    <section class="section">
        <table class="highlight">
            <thead>
                <tr>
                    <th>Chocolate</th>
                    <th>amargor</th>
                    <th>categoria</th>
                    <th class="right-align">opções</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($chocolates as $chocolate)
                    <tr>
                        <td>{{$chocolate->nome}}</td>
                        <td>{{$chocolate->amargor}}%</td>
                        <td>{{$chocolate->categoria}}</td>
                        <td class="right-align">Exluir - Remover</td>

                        <a href="{{route('admin.chocolates.edit', $chocolate->id)}}">
                            <span>
                                <i class="material-icons blue-text text-accent-2">edit</i>
                            </span>
                        </a>

                        <form action="{{route('admin.chocolates.destroy', $cidade->id)}}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')

                            <button type="submit" style="border:0;background:transparent;">
                                <span style="cursor:pointer">
                                    <i class="material-icons red-text text-accent-3">delete_forever</i>
                                </span>
                            </button>
                        </form>


                    </td>
                </tr>

            @empty
                <tr>
                    <td colspan= '2'>Não existem chocolates cadastrados.</td>
                </tr>
            @endforelse

        </tbody>
    </table>

    <div class="fixed-action-btn">
        <a class="btn-floating btn-large waves-effect waves-light" href="{{route('admin.chocolates.create')}}">
            <i class="large material-icons">add</i>
        </a>
    </div>
</section>

@endsection
