<?php

namespace App\Http\Controllers;
use App\Loja;

use Illuminate\Http\Request;

class LojaController extends Controller
{
    public function cadastroloja(){//apenas retorna o form de cadastro da loja
        return view('aplicacao.cadastroloja');
    }

    public function salvarloja(Request $request){// salva a loja 
        $loja = new Loja();
        $loja->nomeloja = $request->input('nomeloja');
        $loja->numerodaloja = $request->input('numerodaloja');
        $loja->faixadeip =  $request->input('faixadeip');
        $loja->gateway =  $request->input('gateway');
        $loja->mascara =  $request->input('mascara'); 
        $loja->save();     
    
         return redirect('/lojas');

    }
    public function listalojas(){//lista as lojas já cadastradas
        $loja = Loja::all();
      return view('aplicacao.listaloja',compact('loja'));
    }
}
