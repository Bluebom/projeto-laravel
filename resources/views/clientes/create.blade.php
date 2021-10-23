@extends('app')
@section('titulo', 'Novo Cliente')
@section('conteudo')
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('clientes') }}">Clientes</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add Cliente</li>
        </ol>
    </nav>
    <h2>Adicionar Cliente</h2>
    <form action="{{ route('clientes.store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-md-5 mt-4 mx-auto">
                <div class="row">
                    <div class="form-floating mb-3 col-md-6">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nome" required>
                        <label for="name" class="ps-4">Nome</label>
                    </div>
                    <div class="form-floating col-md-6">
                        <input type="text" class="form-control" id="address" name="endereco"
                            placeholder="Av. José Americo de Almeida" required>
                        <label for="address" class="ps-4">Endereço</label>
                    </div>
                    <div class="form-floating mb-3 col-md-12">
                        <textarea class="form-control" placeholder="Leave a comment here" id="observation"
                            name="observacao" style="height: 100px"></textarea>
                        <label for="observation" class="ps-4">Observação</label>
                    </div>
                    <div class="cold-md-12">
                        <button type="submit" class="btn btn-dark w-100">Enviar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
