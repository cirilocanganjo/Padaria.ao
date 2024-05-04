{{-- <!-- @include('errors.alerta') -->  --}}
@extends('paginas.admin.paginaAdministrador')
 @section('conteudo__dinamico')

 <div class="card mt-5 col-md-9 container">

    <div class="card-title mt-3 text-center text-uppercase  mx-5">
        <h2>Cadastro de Admin!</h2>
     </div>

     <!-- Apresentação de mensagens de Alerta -->
      @if(Session::has('alerta_sucesso'))      
     <div class="alert alert-success text-center container mt-4 col-md-8">{{ Session::get('alerta_sucesso') }} </div>                
     @endif 


<form action="/admin/conta/criada" method="post">
    @csrf
        <div class="card-body d-flex">
             
            <!-- Div-Principal-1 -->
            <div class="div-principal-1 col-md-6">

                <div class="form-group mt-3">
                    <label class="form-label" for="">Nome:</label>
                    <input placeholder="Digite o seu nome completo" class="form-control" type="text" name="nome" value="{{ old('nome') }}"> 
                    @error('nome')<span class="text-danger">{{ $message }}</span> @enderror                                 
                </div>

                <div class="form-group mt-3">
                    <label class="form-label" for="">E-mail:</label>
                    <input placeholder="Digite o seu e-mail" class="form-control" type="text" name="email" value="{{ old('email') }}"> 
                    @error('email')<span class="text-danger">{{ $message }}</span> @enderror                                 

                </div>

                <div class="form-group mt-3">
                    <label class="form-label" for="">Telefone:</label>
                    <input placeholder="número de telefone " class="form-control" type="number" name="telefone" value="{{ old('telefone') }}"> 
                    @error('telefone')<span class="text-danger">{{ $message }}</span> @enderror                                 

                </div>

                 <!-- Botão -->
                 <div class="form-grup mt-3">  
                    <input class="btn btn-primary text-light" type="submit" value="Salvar">                                   

                </div>

                <!-- Fim Botão -->
                
            </div>
            <!-- Fim Div-Principal-1 -->
            
            <!-- Div-Principal-2 -->
            <div class="div-principal-2 col-md-6">

                <div class="form-grup mt-3">  
                    <label class="form-label" for="">Data de nascimento:</label>
                    <input  class="form-control" type="date" name="data_nascimento" value="{{ old('data_nascimento') }}"> 
                    @error('data_nascimento')<span class="text-danger">{{ $message }}</span> @enderror                                 


                </div>
                
                <div class="form-grup mt-3">  
                    <label class="form-label" for="">Palavra-passe:</label>
                    <input placeholder="Digite a sua palavra-passe" class="form-control" type="password" name="password" value="{{ old('password') }}">                                   
                    @error('password')<span class="text-danger">{{ $message }}</span> @enderror                               
                    
                </div>
                
                <div class="form-grup mt-3">  
                    <label class="form-label" for="">Confirmar palavra-passe:</label>
                    <input placeholder="Confirmar palavra-passe" class="form-control" type="password" name="confirmar_password" value="{{ old('confirmar_password') }}">                                   
                    @error('confirmar_password')<span class="text-danger">{{ $message }}</span> @enderror                               
                    
                </div>

                <!-- Atributos ocultos tanto do Admin como do Cliente -->
                <input type="hidden" name="administrador" value="1">
                <input type="hidden" name="cliente" value="0">
                <!-- Fim Atributos ocultos tanto do Admin como do Cliente -->
                
               

            </div>
            <!-- Fim Div-Principal-1 -->


        </div>

    </form>

        

<!-- Fim Apresentação de mensagens de Alerta -->

    

 </div>



@endsection

