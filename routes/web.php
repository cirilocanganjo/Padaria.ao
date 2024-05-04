<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PadariaController;
use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\Credenciais\CredenciaisController;
use App\Http\Controllers\pdfController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Rota para salvar as credenciais no banco de dados
Route::get("/save/user", [CredenciaisController::class, "storeUser"]);
//Rota para salvar as credenciais no banco de dados



Route::controller(PadariaController::class)->group(function(){ 
    
//Rota principal do sistema
Route::get('/', 'index');

});

Route::controller(UsuarioController::class)->group(function(){ 

//Rota para realização de login
Route::get('/usuario/entrar', 'pagina_login')->name('/usuario/entrar');
Route::post('/usuario/autenticar','usuario_autenticar');
Route::get('/terminar/sessao','logout');

Route::get('/pdf',[pdfController::class, 'gerarPDF'])->name('/pdf');

});


Route::controller(AdministradorController::class)->group(function(){

    Route::get('/painel/administrativo', 'pagina_administrativa');
    Route::get('/painel/administrativo/produtos', 'pagina_cadastro_produto')->name('adicionar/produto');
    Route::post('/painel/administrativo/cadastro/produtos', 'cadastrar_produto')->name('produto/cadastrado');
    Route::get('/painel/administrativo/lista/produtos', 'lista_produto')->name('lista/produtos');
    Route::get('/painel/administrativo/apagar/produto/{id}', 'apagar_produto')->name('apagar/produto');
    Route::get('/painel/administrativo/editar/produto/{id}', 'editar_produto')->name('editar/produto');
    Route::post('/painel/administrativo/atualizar/produto/{id}', 'atualizar_produto')->name('atualizar/produto');
    
    
    Route::get('/painel/administrativo/usuarios', 'listagem_usuarios')->name('listagem/usuarios');
    Route::get('/painel/administrativo/apagar/usuario/{id}', 'apagar_usuario')->name('apagar/usuario');
    
    
    Route::get('/painel/administrativo/lista/funcionarios', 'lista_funcionarios')->name('lista/funcionarios');
    Route::get('/painel/administrativo/cadastro/funcionarios', 'cadastro_funcionarios')->name('cadastro/funcionarios');
    Route::post('/painel/administrativo/cadastrar/funcionario', 'cadastrar_funcionario')->name('cadastrar/funcionario');
    Route::get('/painel/administrativo/apagar/funcionario/{id}', 'apagar_funcionario');
    Route::get('/painel/administrativo/editar/funcionario/{id}', 'editar_funcionario');
    Route::post('/painel/administrativo/atualizar/funcionario/{id}', 'atualizar_funcionario');

    //Conta do Admin

    Route::get('/admin/criar/conta','criar_conta')->name('adicionar/usuario');
    Route::post('/admin/conta/criada','conta_salva');

});


Route::controller(ClienteController::class)->group(function(){

    Route::get('/criar/conta','criar_conta');
    Route::post('/conta/criada','conta_salva');
    Route::post('/efectuar/pedido','efetuar_pedido')->name('/efectuar/pedido');
    
});

//Rota para acessar o métoto de salvar as credenciais do Admin
    Route::get("/admin/store/credentials/" , [UsuarioController::class, "createAdminCredentials"]);
