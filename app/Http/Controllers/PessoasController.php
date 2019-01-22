<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pessoa;

class PessoasController extends Controller
{
    public function index(){
        $list_pessoas = Pessoa::all();
        return view('pessoas.index', [
            'pessoas' => $list_pessoas
        ]);
    }
}
