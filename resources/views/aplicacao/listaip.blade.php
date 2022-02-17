@extends('aplicacao.index')
@section('conteudo')


<table class="table table-hover table-dark">
    <thead>
      <tr>
        <th scope="col">IP</th>
        <th scope="col">Status</th>
        <th scope="col">Equipamento</th>
        <th scope="col">Usuario</th>
        <th scope="col">Senha</th>
        <th scope="col">Alterar/excluir</th>
      </tr>
    </thead>
    <tbody>
@foreach ($ips as $ip)

      <tr>
       <td>{{$ip->ip}}</td>
        <td>@if ($ip->utilizado == 0)
            Livre 
            @else
            Ocupado            
        @endif</td>
        <td>{{$ip->equipamento}}</td>
        <td>{{$ip->usuario}}</td>
        <td>{{$ip->senha}}</td>
            <form action="/listaip/alterar" method="post">
                @csrf
                <input type="hidden" name="alterar" value="{{$ip->id}}">
                <td><input type="submit" value="Alterar">
            </form>
           

        
      </tr> 
      @endforeach    
    </tbody>
  </table>
    

@endsection