@extends('layout.principal')

@section('conteudo')
    <h1>Listar produtos</h1>

    @if(empty($produtos))
        <div class="alert alert-danger">
            Você não tem nenhum produto cadastrado.
        </div>
    @else
        <table>
            @foreach($produtos as $p)
                <tr>
                    <td>{{ $p->nome }}</td>
                    <td><a href="/produto/mostra/{{ $p->id }}">Visualizar</a></td>
                    <td>{{ $p->descricao }}</td>
                    <td>{{ $p->preco }}</td>
                    <td>{{ $p->tamanho }}</td>
                </tr>
            @endforeach
        </table>
    @endif
@stop
