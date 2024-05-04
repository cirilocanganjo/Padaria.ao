<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pedido;
use PDF;

class pdfController extends Controller
{
        public function gerarPDF(){
                $usuarios = User::all();
                $pedidos = Pedido::all();

                $pdf = PDF::loadView('pdf',compact('usuarios','pedidos'));
                return $pdf->setPaper('a4')->stream('Usuarios.pdf');
         }

}
