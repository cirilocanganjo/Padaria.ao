@extends('paginas.admin.paginaAdministrador')
@section('conteudo__dinamico')

     
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h4 class="m-0 font-weight-bold text-dark text-uppercase">Funcionários</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover " id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Cargo</th>                                                
                        <th class="text-center">Foto</th>                                                
                        <th>Opção</th>                                                
                         
                    </tr>
                </thead>

                <div class="mb-2 text-center d-flex justify-content-center">
                    <a href="{{ route('cadastro/funcionarios') }}" class="btn btn-primary"><i class="fa fa-plus"></i> 
                        Adicionar funcionário                        
                   </a>
               </div>
                
               @foreach ($funcionarios as $funcionario)
                 <tbody>
                      <td>{{ $funcionario->cod_padeiro }}</td>   
                      <td>{{ $funcionario->nome }}</td>   
                      <td>{{ $funcionario->cargo }}</td>                      
                      <td >
                        <span>{{ $funcionario->foto }}</span>
                     </td>
                     <td>   
                        <a href="/painel/administrativo/apagar/funcionario/{{ $funcionario->cod_padeiro }}" class=" btn btn-sm btn-danger mx-1">Apagar</a>
                     </td>   
                </tbody>
                @endforeach
            </table>
            {{ $funcionarios->links() }}
        </div>
    </div>
</div>







@endsection