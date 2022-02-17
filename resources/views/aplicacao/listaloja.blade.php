@extends('aplicacao.index')
@section('conteudo')



<form action="/cadastroloja">
    <input type="submit" value="Nova loja" class="btn-success">

</form>






<p>Lojas cadastradas:</p>
<table class="table table-striped table-dark">
    <thead>
      <tr>
        <th scope="col">Nome loja</th>
        <th scope="col">Numero loja</th>
        <th scope="col">Faixa ip</th>
       
      </tr>
    </thead>
    <tbody>
        @foreach ($loja as $l)
      <tr>
        <td>{{$l->nomeloja}}</td>
        <td>{{$l->numerodaloja}}</td>
        <td>192.168.{{$l->faixadeip}}.1</td>  
      </tr>      
      @endforeach
    </tbody>
  </table>
@endsection