@extends('aplicacao.index')
@section('conteudo')

<form method="post" action="/Salvar">
    @csrf
    <div class="form-group">
        <label>Nome da loja:</label>
        <input type="text" class="form-control" name="nomeloja">
        <label>Numero da loja:</label>
        <input type="text" class="form-control" name="numerodaloja">
        <label>Faixa de ip: 192.168.</label>
        <input type="text" class="form-control" name="faixadeip">
        <label>Gatware padrão:</label>
        <input type="text" class="form-control" name="gateway">
        <label>Mascara:</label>
        <input type="text" class="form-control" name="mascara">
        <input type="submit" value="Salvar">

    </div>
    
@endsection