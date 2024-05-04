@extends('paginas.admin.paginaAdministrador')
@section('conteudo__dinamico')


<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h4 class="m-0 font-weight-bold text-dark text-uppercase">Usuários</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <!-- Olhar aqui -->
            <table class="table table-hover " id="dataTable" width="100%" cellspacing="0">
                <!-- Olhar aqui-->
                <thead class="table-dark text-uppercase text-center">
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>Data</th>
                        <th>Acesso</th>
                        <th>Opção</th>

                    </tr>
                </thead>

                <div class="mb-2 text-center d-flex justify-content-center">
                    <a href="{{ route('adicionar/usuario') }}" class="btn btn-primary"><i class="fa fa-plus"></i>
                       Adicionar Usuários
                   </a>
               </div>
                 @foreach ($usuarios as $usuario)
                  <tbody>
                    <td>{{ $usuario->id_usuario }}</td>
                    <td>{{ $usuario->nome }}</td>
                    <td>{{ $usuario->email }}</td>
                    <td>{{ $usuario->telefone }}</td>
                    <td>{{ $usuario->data_nascimento }}</td>
                    <td>{{$usuario->administrador ? 'Funcionário' : 'Cliente'}}</td>
                    <td class="text-center">
                        <a href="/painel/administrativo/apagar/usuario/{{ $usuario->id_usuario }}" class="btn btn-sm btn-danger {{$usuario->administrador ?  "disabled" : "" }}">Apagar</a>

                    </td>

                 </tbody>
                 @endforeach
            </table>
            {{ $usuarios->links() }}
        </div>
    </div>
</div>







@endsection
