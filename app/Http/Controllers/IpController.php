<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ip;
use App\Loja;

class IpController extends Controller
{
    public function ipbuscar(){
        $loja = Loja::all();
        return view('aplicacao.indexip',compact('loja'));
    }

    public function insereip(Request $request){
       $idloja= $request->input('buscar');

        $faixa = Loja::where('id',$request->input('buscar'))->select('faixadeip')->first()->faixadeip;
        $loja = Loja::where('id',$request->input('buscar'))->select('id')->first()->id;

       
        
       $busca = Ip::where('id_loja',$idloja)->count();
       if($busca > 0){
          $ips = Ip::where('id_loja',$loja)->get();
          return view('aplicacao.listaip',compact('ips'));
       }else{
           for($i=1;$i<=258;$i++){
           $ip = new Ip();
           $ip->id_loja = $loja;
           $ip->utilizado = 0;
           $ip->ip = '192.168.'.$faixa.'.'.$i;
           $ip->save();
          
           
           }
       }
       $ips = Ip::where('id_loja',$loja)->get();

      return view('aplicacao.listaip',compact('ips'));

    }

    public function alterarip(Request $request){
       
        $ips = Ip::where('id',$request->input('alterar'))->get();
        return view('aplicacao.alteraip',compact('ips'));

    }
    public function updateip(Request $request){
       
        $ips = Ip::where('id',$request->input('id'))->update(['equipamento' => $request->input('equipamento'),'utilizado' => $request->input('utilizado'),'usuario' => $request->input('usuario'),'senha' => $request->input('senha')]);
        $ips = Ip::where('id_loja',$request->input('id_loja'))->get();
        return view('aplicacao.listaip',compact('ips'));

    }
}
