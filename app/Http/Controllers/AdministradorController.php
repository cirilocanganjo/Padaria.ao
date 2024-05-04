<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\User;
use App\Models\Produto;
use App\Models\Funcionario;

class AdministradorController extends Controller
{
    public function pagina_administrativa(){

        $usuarios = User::all();
        $pedido = Pedido::orderBY('cod_pedido', 'DESC')->paginate(5);
        $produtos = Produto::all();
        $funcionarios = Funcionario::all();
        $todos_pedido = Pedido::all();



        return view('paginas.admin.paginaAdministrador',
        [ 
        'pedido' => $pedido,
        'usuarios' => $usuarios,
        'produtos' => $produtos,
        'funcionarios' => $funcionarios,
        'todos_pedido' => $todos_pedido
        
        
        ]); 
     
    
    
    
    }
    
    public function pagina_cadastro_produto(){

        $usuarios = User::all();
        $pedido = Pedido::orderBY('cod_pedido', 'DESC')->paginate(5);
        $produtos = Produto::all();
        $funcionarios = Funcionario::all();
        $todos_pedido = Pedido::all();
        

         
        return view('paginas.admin.includes.produto.cadastro_produtos',  
        [ 
            'pedido' => $pedido,
            'usuarios' => $usuarios,
            'produtos' => $produtos,
            'funcionarios' => $funcionarios,
            'todos_pedido' => $todos_pedido
            
            
            ]); 
    }

    public function cadastrar_produto(Request $request){
    
   
    $dados_pessoais = $request->all();
    
    $foto = $request->foto;
    $extensao = $foto->extension();
    $nomeImagem = md5($foto->getClientOriginalName() . strtotime("now")) . ".". $extensao;
    $foto->move(public_path('Produtos'), $nomeImagem);
    $dados_pessoais['foto'] = $nomeImagem;


    $produto = Produto::create($dados_pessoais);

    if($produto){

        return back()->with('alerta_sucesso', 'Produto salvo com sucesso!');

    }
    
    }



    public function lista_produto(){

        $usuarios = User::all();
        $pedido = Pedido::orderBY('cod_pedido', 'DESC')->paginate(5);
        $produtos = Produto::orderBY('cod_produto', 'ASC')->paginate(7);
        $funcionarios = Funcionario::all();
        $todos_pedido = Pedido::all();
        

        return view('paginas.admin.includes.produto.lista_produtos', [  
        
            'pedido' => $pedido,
            'usuarios' => $usuarios,
            'produtos' => $produtos,
            'funcionarios' => $funcionarios,
            'todos_pedido' => $todos_pedido
            
            
            ]); 

    }

    public function apagar_produto($id){

        $produto = Produto::FindOrFail($id);
        $produto->delete();

        return  redirect()->back();
    }



     

    public function editar_produto($id){

        $editar = Produto::find($id);

        $usuarios = User::all();
        $pedido = Pedido::orderBY('cod_pedido', 'DESC')->paginate(5);
        $produtos = Produto::orderBY('cod_produto', 'ASC')->paginate(7);
        $funcionarios = Funcionario::all();
        $todos_pedido = Pedido::all();

 
        return view('paginas.admin.includes.produto.editar_produto', [
        'editar' => $editar,    
        'pedido' => $pedido,
        'usuarios' => $usuarios,
        'produtos' => $produtos,
        'funcionarios' => $funcionarios,
        'todos_pedido' => $todos_pedido
    
    
    
    ]);

         

    }

    public function atualizar_produto(Request $request, $id)
    {

        $dados_produto = $request->all();
       

        $foto = $request->foto;
        $extensao = $foto->extension();
        $nomeImagem = md5($foto->getClientOriginalName() . strtotime("now")) . ".". $extensao;
        $foto->move(public_path('Produtos'), $nomeImagem);
        $dados_produto['foto'] = $nomeImagem;

        $editar = Produto::find($id)->update($dados_produto);
        
          

        return back()->with('alerta_sucesso', 'Produto atualizado!');

    }

    public function listagem_usuarios(){

        $usuarios = User::orderBY('id_usuario', 'ASC')->paginate(7);
        $pedido = Pedido::orderBY('cod_pedido', 'DESC')->paginate(5);
        $produtos = Produto::orderBY('cod_produto', 'ASC')->paginate(7);
        $funcionarios = Funcionario::all();
        $todos_pedido = Pedido::all();

        return view('paginas.admin.includes.usuario.lista_usuarios', [
            'pedido' => $pedido,
                    'usuarios' => $usuarios,
                    'produtos' => $produtos,
                    'funcionarios' => $funcionarios,
                    'todos_pedido' => $todos_pedido
        ]);


       
    
    }

    public function apagar_usuario($id){

        $usuario = User::FindOrFail($id);
        $usuario->delete();

        return back();
    }


    public function lista_funcionarios()
    {
        
        $usuarios = User::all();
        $pedido = Pedido::orderBY('cod_pedido', 'DESC')->paginate(5);
        $produtos = Produto::orderBY('cod_produto', 'ASC')->paginate(7);
        $funcionarios = Funcionario::orderBY('cod_padeiro', 'ASC')->paginate(7);

        $todos_pedido = Pedido::all();

        return view('paginas.admin.includes.funcionario.lista_funcionarios',
    
        [
            'pedido' => $pedido,
            'usuarios' => $usuarios,
            'produtos' => $produtos,
            'funcionarios' => $funcionarios,
            'todos_pedido' => $todos_pedido
        ]);
        
    }

    public function cadastro_funcionarios(){

        $usuarios = User::all();
        $pedido = Pedido::orderBY('cod_pedido', 'DESC')->paginate(5);
        $produtos = Produto::all();
        $funcionarios = Funcionario::all();
        $todos_pedido = Pedido::all();
        

         
        return view('paginas.admin.includes.funcionario.cadastro_funcionarios',  
        [ 
            'pedido' => $pedido,
            'usuarios' => $usuarios,
            'produtos' => $produtos,
            'funcionarios' => $funcionarios,
            'todos_pedido' => $todos_pedido
            
            
            ]); 
    }

    public function cadastrar_funcionario(Request $request){
    
   
        $dados_pessoais = $request->all();
        
        $foto = $request->foto;
        $extensao = $foto->extension();
        $nomeImagem = md5($foto->getClientOriginalName() . strtotime("now")) . ".". $extensao;
        $foto->move(public_path('Funcionarios'), $nomeImagem);
        $dados_pessoais['foto'] = $nomeImagem;
    
    
        $funcionario = Funcionario::create($dados_pessoais);
    
        if($funcionario){
    
            return back()->with('alerta_sucesso', 'Funcionario salvo com sucesso!');
    
        }
        
        }


        public function apagar_funcionario($id){

            $funcionarios = Funcionario::FindOrFail($id);
            $funcionarios->delete();
    
            return back();
        }


        public function editar_funcionario($id){

            $editar = Funcionario::find($id);
    
            $usuarios = User::all();
            $pedido = Pedido::orderBY('cod_pedido', 'DESC')->paginate(5);
            $produtos = Produto::orderBY('cod_produto', 'ASC')->paginate(7);
            $funcionarios = Funcionario::all();
            $todos_pedido = Pedido::all();
    
     
            return view('paginas.admin.includes.funcionario.editar_funcionario', [
            'editar' => $editar,    
            'pedido' => $pedido,
            'usuarios' => $usuarios,
            'produtos' => $produtos,
            'funcionarios' => $funcionarios,
            'todos_pedido' => $todos_pedido
        
        
        
        ]);

        


    }

    public function atualizar_funcionario(Request $request, $id)
    {

        $dados_funcionario = $request->all();
       

        $foto = $request->foto;
        $extensao = $foto->extension();
        $nomeImagem = md5($foto->getClientOriginalName() . strtotime("now")) . ".". $extensao;
        $foto->move(public_path('Funcionários'), $nomeImagem);
        $dados_funcionario['foto'] = $nomeImagem;

        $editar = Funcionario::find($id)->update($dados_funcionario);
        
          

        return back()->with('alerta_sucesso', 'Funcionário atualizado!');

    }

    //Conta do Admin

    public function criar_conta(){

        $usuarios = User::all();
        $pedido = Pedido::orderBY('cod_pedido', 'DESC')->paginate(5);
        $produtos = Produto::all();
        $funcionarios = Funcionario::all();
        $todos_pedido = Pedido::all();

        return view('paginas.admin.includes.criar_contaAdmin',[


            'pedido' => $pedido,
            'usuarios' => $usuarios,
            'produtos' => $produtos,
            'funcionarios' => $funcionarios,
            'todos_pedido' => $todos_pedido




        ]);
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
        $dados_pessoais = $request->all();
        $dados_pessoais['password'] = \Hash::make($request->password);
        
        /* Armazenar os Dados no banco de dados na tabela User */
        $ususario = User::create($dados_pessoais);
        if($ususario){

            return back()->with('alerta_sucesso', 'A sua conta foi criada com sucesso autentique-se!');
        
        }
    }


}