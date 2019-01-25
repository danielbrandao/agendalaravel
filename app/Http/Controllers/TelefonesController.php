<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Telefone;

class TelefonesController extends Controller
{
    public function store(Telefone $telefone){
        try{
            $telefone->save();
        }catch(\Exception $e){
            return "Erro: " . $e->getMessage();
        }
    }
}
