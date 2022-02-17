@extends('aplicacao.index')
@section('conteudo')
<form method="post" action="/listaip/salvar">
    @csrf
    <div class="form-group">
@foreach ($ips as $ip)    

   
        <label>IP:</label>
        <input type="text" readonly class="form-control" name="ip" value="{{$ip->ip}}">
        <label>Equipamento:</label>
        <input type="text" class="form-control" name="equipamento" value="{{$ip->equipamento}}">
        <label>Usuario:</label>
        <input type="text" class="form-control" name="usuario" value="{{$ip->usuario}}">
        <label>Senha:</label>
        <input type="text" class="form-control" name="senha" value="{{$ip->senha}}">
        <select name="utilizado">
            <option value="0" selected>Livre</option>
            <option value="1" >Ocupado</option>
        </select>
        <input type="hidden" name="id" value="{{$ip->id}}">
        <input type="hidden" name="id_loja" value="{{$ip->id_loja}}">
        
        <input type="submit" value="Salvar">

    
@endforeach
</div>

@endsection