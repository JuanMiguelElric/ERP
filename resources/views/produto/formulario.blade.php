@extends('layout.principal')
@section('conteudo')
<h1>Novo produto</h1>
<form action="/produto/adiciona" method="POST">
    {{ csrf_field() }}
    <label >Nome:</label>
    <input name="nome" type="text">
    <label  for="">Descrição</label>
    <input name="descricao" type="text">
    <label for="">Valor</label>
    <input name="preco">
    <label for="">Tamanho</label>
    <input name="tamanho" type="text">
    <button type="submit">Adicionar</button>

</form>
@stop