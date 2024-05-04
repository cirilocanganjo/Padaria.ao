<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pedido;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
class ClienteController extends Controller
{
    public function criar_conta(){        
       return view('paginas.login.pagina__criarConta');
    }

    public function conta_salva(Request $request){

        /* Validação para preencher os campos que estiverem ocultos  */
        $request->validate([
            'nome' => 'required',
            'email' => 'required|unique:users',
            'telefone' => 'required',
            'data_nascimento' => 'required',
            'password' => 'required|',
            'confirmar_password' => 'required|same:password' ],

        [
            'confirmar_password.same' => 'Confirme com a senha digitada e ambas devem ser iguais '
        ]
    );
        /* Fim da Validação  */


        /* Criação e preparação das variáveis */
        $currentDate = Carbon::now();
        $dateTypedByUser = Carbon::parse($request->input("data_nascimento"));
        if($dateTypedByUser->gte($currentDate)){
            return redirect()->back()->with("wrongDate", "A sua conta não pode ser criada porque a sua data de nascimento é inválida");
        }else{
            
        $dados_pessoais = $request->all();
        $dados_pessoais['password'] = \Hash::make($request->password);        
        $ususario = User::create($dados_pessoais);
        if($ususario){
            return redirect('/usuario/entrar')->with('alerta', 'A sua conta foi criada com sucesso autentique-se!');
        }        
            
        }



      

    }


    public function efetuar_pedido(Request $request){

    /* As variáveis abaixo criadas armazenam os valores dos campos de textos para os Pedidos */
        $pedido_convidados = $request->numero_convidados;
        $pedido_horaEntrega = $request->hora_entrega;
        $localizacao = $request->localizacao;
        $produto = $request->produto;
        $pedido_mensagem = $request->mensagem;

        if($pedido_convidados == "" OR $pedido_horaEntrega == "" OR $pedido_mensagem == "" OR  $localizacao == "Seleccione" )
        {
            return back()->with('alerta_erro', 'Preencha os campos que estiverem vazios!');

        }else{

            $cliente = $request->all();
            $cliente['id_usuario'] = Auth::user()->id_usuario;
            $pedido_cliente['pedido'] = $request->pedido;
            $pedido_cliente = Pedido::create($cliente);
            if($pedido_cliente){
                return back()->with('alerta_sucesso', 'O seu pedido foi realizado com sucesso!');
            }
        }



        // return back();


    }
}
