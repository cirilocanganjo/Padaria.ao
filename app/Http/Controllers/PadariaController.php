<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Funcionario;

class PadariaController extends Controller
{
    public function index()
{    
    $produto = Produto::all();
    $funcionario = Funcionario::orderBY('cod_padeiro', 'ASC')->paginate(6);


     return view('index', [
         'produto' => $produto,
         'funcionario' => $funcionario
    ]);
     
}
}
