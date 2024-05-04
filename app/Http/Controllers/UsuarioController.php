<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\{User};
class UsuarioController extends Controller
{

    public function pagina_login(){
        return view('paginas.login.pagina__login');
    }

    public function usuario_autenticar(Request $request){

        /*Validação para os campos obrigatorios bem como atribuição
        a variavel de credenciais os dados que virão do email e password.
        */


    $credenciais = $request->validate([

    'email' => ['required', 'email'],
    'password' =>  ['required']
        
    ]); 

        /* Verifica se os dados digitados são os mesmos na tabela do User 
        e se é Admin ou Cliente. */
   
        if(Auth::attempt($credenciais)){
        
            $request->session()->regenerate();
            
            if(Auth::user()->cliente){

                return redirect()->intended('/');
                
            }else if(Auth::user()->administrador){
                
                return redirect()->intended('/painel/administrativo');
            }
                
            }else{
                return back()->with('erro','Palavra passe ou senha errada');
            } 

        }
        
        
        /* Terminar a sessã do Usuário */
        public function logout(Request $request){
            
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect('/');            

        } 

        //Abaixo está sendo criada uma função para salvar as credenciais do Admin
        public function createAdminCredentials(){
            $admin = new User();
            $admin->nome = "Goufram Dos Prazeres";
            $admin->email = "goshbaiao3@gmail.com";
            $admin->data_nascimento = '1997-06-14';
            $admin->telefone = '933266375';
            $admin->administrador = '1';
            $admin->cliente = '0';
            $admin->password = \Hash::make("12345");
            $admin->save();
            echo "saved";


        }

        
    }


