@extends('layout.principal')
@section('conteudo')

<h2>{{ $p->nome }}</h2>
<ul>
    <li>
        <b>Valor: R$ {{ $p->preco }} </b>
    </li>
    <li>
        <b>Descrição: {{ $p->descricao }}</b>
    </li>
</ul>
@stop
