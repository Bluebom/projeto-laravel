@extends('app')
@section('titulo', 'Editar Cliente')
@section('conteudo')
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('clientes') }}">Clientes</a></li>
            <li class="breadcrumb-item active" aria-current="page">Atualizar Cliente</li>
        </ol>
    </nav>
    <h2>Atualizar Cliente</h2>
    <div class="row">
        <div class="col-md-8 m-auto">
            <div class="card text-center">
                <div class="card-header">
                    <b>Cliente:</b> {{ $cliente->name }}
                </div>
                <form action="{{ route('cliente.update', $cliente) }}" method="post">
                    <div class="card-body">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-7 mt-2 mx-auto">
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Nome"
                                            value="{{ $cliente->name }}" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="address" name="address"
                                            placeholder="Av. José Americo de Almeida" value="{{ $cliente->endereco }}"
                                            required>
                                    </div>
                                    <div class="mb-3 col-md-12">
                                        <textarea class="form-control" placeholder="Leave a comment here" id="observation"
                                            name="observation" style="height: 50px">{{ $cliente->observacao }}</textarea>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                        <button class="btn btn-primary">Atualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
