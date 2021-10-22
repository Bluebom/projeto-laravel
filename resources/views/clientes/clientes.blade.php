@extends('app')
@section('titulo', 'Lista de Clientes')
@section('conteudo')
    <table class="table mt-2">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Endereco</th>
                <th scope="col">Observação</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @if (!empty($clientes))
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Clientes</li>
                    </ol>
                </nav>
                @foreach ($clientes as $cliente)
                    <tr>
                        <th scope="row">{{ $cliente->id }}</th>
                        <td><a href="{{ route('cliente.show', $cliente) }}">{{ $cliente->name }}</a></td>
                        <td>{{ $cliente->endereco }}</td>
                        <td>{{ $cliente->observacao }}</td>
                        <td>&times;</td>
                    </tr>
                @endforeach
            @elseif (!empty($cliente))
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('clientes') }}">Clientes</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $cliente->name }}</li>
                    </ol>
                </nav>
                <tr>
                    <th scope="row">{{ $cliente->id }}</th>
                    <td>{{ $cliente->name }}</td>
                    <td>{{ $cliente->endereco }}</td>
                    <td>{{ $cliente->observacao }}</td>
                    <td>&times;</td>
                </tr>
            @endif

        </tbody>
    </table>
    <div class="w-100 text-end">
        <a href="{{ route('cliente.create') }}" class="plus-btn text-left btn btn-success fs-6">
            Adicionar Cliente <i class="fas fa-plus-square fs-6 ms-2"></i>
        </a>
    </div>
@endsection
