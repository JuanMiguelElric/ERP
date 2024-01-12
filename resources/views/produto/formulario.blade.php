@extends('layout.principal')
@section('conteudo')
<h1>Novo produto</h1>
<form >
    <label >Nome:</label>
    <input type="text">
    <label for="">Descrição</label>
    <input type="text">
    <label for="">Valor</label>
    <input type="text">
    <button type="submit">Adicionar</button>

</form>
@stop