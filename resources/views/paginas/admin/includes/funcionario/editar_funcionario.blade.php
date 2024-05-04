@include('errors.alerta')
@extends('paginas.admin.paginaAdministrador')
@section('conteudo__dinamico')

     
 <div class="card mt-5 col-md-9 container">
     <div class="card-title mt-3 text-center text-uppercase  mx-5">
        <h2>Editar Funcionario!</h2>
     </div>

     <!-- Apresentação de mensagens de Alerta -->
      @if(Session::has('alerta_sucesso'))      
     <div class="alert alert-success text-center container mt-4 col-md-8">{{ Session::get('alerta_sucesso') }} </div>                
     @endif    

<!-- Fim Apresentação de mensagens de Alerta -->

    <form action="/painel/administrativo/atualizar/funcionario/{{ $editar->cod_padeiro }}" method="post" enctype="multipart/form-data">
    @csrf
         
         <div class="card-body">
    
            <div class=" col-md-11 container">
                <div class="form-group">
                    <label class="form-label" for="">Funcionário:</label>
                    <input class="form-control" type="text" name="nome" placeholder="nome do funcionario" value="{{ $editar->nome ?? '' }} ">
                </div>
                <div class="form-group">
                    <label class="form-label" for="">Preço:</label>
                    <input class="form-control " type="text" name="cargo" placeholder="preço do produto" value="{{ $editar->cargo ?? '' }} ">
                </div>
                      
    
                <div class="form-group">
                    <label class="form-label" for="">Foto:</label>
                    <input class="form-control" type="file" name="foto" value="{{ $editar->foto ?? '' }} " required>
                </div>
    
                 

                <!--Botão -->
                    <div>                    
                        <input class="btn btn-primary" type="submit" value="Salvar">
                        <a href="{{ route('lista/produtos') }}" class="btn btn-primary">Lista de produtos</a>
                    </div>
                <!--Botão -->

            </div> 
             
         </div>
     
    </form>

 </div>



@endsection

