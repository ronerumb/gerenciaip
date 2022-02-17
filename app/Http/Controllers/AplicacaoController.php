<?php

namespace App\Http\Controllers;
use App\Ip;
use App\Loja;

use Illuminate\Http\Request;

class AplicacaoController extends Controller
{
    public function index(){//nada ainda
       return view('aplicacao.index');
    }
}
