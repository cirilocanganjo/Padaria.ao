<?php

namespace App\Http\Controllers\Credenciais;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class CredenciaisController extends Controller
{
    
    public function storeUser(){
        
        $user = new User();
        $user->nome = "Goufram Dos Prazeres";
        $user->email = "goshbaiao3@gmail.com";
        $user->telefone = "933266375";
        $user->data_nascimento = "1997/06/14";
        $user->administrador = "1";
        $user->cliente = "0";
        $user->password = \Hash::make("12345");
        $user->save();
        return "Os dados foram salvos com sucesso!";
    }
}
