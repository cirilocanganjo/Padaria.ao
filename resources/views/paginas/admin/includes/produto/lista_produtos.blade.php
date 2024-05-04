@extends('paginas.admin.paginaAdministrador')
@section('conteudo__dinamico')

     
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h4 class="m-0 font-weight-bold text-dark text-uppercase">Produtos</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Código do produto</th>
                        <th>Produto</th>
                        <th>Preço</th>
                        <th>Foto</th>
                        <th>Opção </th>
                    </tr>
                </thead>
                <div class="mb-2 text-center d-flex justify-content-center">
                     <a href="{{ route('adicionar/produto') }}" class="btn btn-primary"><i class="fa fa-plus"></i> 
                        Adicionar produtos
                    </a>
                </div>
                 @foreach ($produtos as $produto)                     
                 
                 <tbody>
                     <td>{{ $produto->cod_produto }}</td>
                     <td>{{ $produto->produto }}</td>
                     <td>{{ $produto->preco }}</td>
                     <td>{{ $produto->foto }}</td>
                     <td>
                         <a href="/painel/administrativo/apagar/produto/{{$produto->cod_produto}}" class="btn btn-sm btn-danger">Apagar</a>
                      </td>
                   </tbody>
                 @endforeach
                </table>

                {{ $produtos->links('pagination::simple-bootstrap-4') }}
        </div>
    </div>
</div>







@endsection