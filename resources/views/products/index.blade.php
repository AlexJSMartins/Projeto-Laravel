@extends('products.layout')

@section('content')


<div class="row">
    <div class="col-lg-12 margin-tb topo">
        <div class="pull-left">
            <h2>Bem Vindo a Tela Inicial do Sistema</h2>
        </div>


        <div class="logout" style="list-style: none;">
            <a class="pull-right btn btn-primary" style=" margin-left: 30px;" href="{{ route('logout') }}">Sair</a>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('products.create') }}"> Adicionar Produto</a>
        </div>
    </div>

</div>






<div class="hstack gap-3">
  <input class="form-control me-auto" type="text" placeholder="Procure pelo nome do produto ou seu codigo" aria-label="Procure pelo nome do produto ou seu codigo">
  <button type="button" class="btn btn-success">Buscar</button>
  <div class="vr"></div>
  
</div>


<table class="table table-bordered tabela">
    <tr>


        <th>Id</th>
        <th>Nome</th>
        <th>Codigo</th>
        <th>Descrição</th>
        <th width="280px">Validade</th>
    </tr>
    @foreach ($products as $product)
    <tr>
        <td>{{ $product->id }}</td>
        <td>{{ $product->nome }}</td>
        <td>{{ $product->codigo }}</td>
        <td>{{ $product->descricao }}</td>
        <td>{{ $product->validade }}</td>
        <td>
            <form action="{{ route('products.destroy',$product->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Detalhes</a>

                <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Editar</a>



                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">Deletar</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{!! $products->links() !!}

@endsection