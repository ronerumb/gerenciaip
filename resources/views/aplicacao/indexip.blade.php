@extends('aplicacao.index')
@section('conteudo')

<form action="/listaip" method="post">
    @csrf
<select class="form-select" name="buscar" aria-label="Default select example">
    @foreach ($loja as $l)
    <option value="{{$l->id}}">{{$l->nomeloja}}</option>
    @endforeach     
  </select>
  <input type="submit" value="Buscar">
</form>
    
@endsection