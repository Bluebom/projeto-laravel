@extends('app')
@section('titulo', 'Projeto')
@section('conteudo')
    <table class="table mt-2">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Cliente</th>
                <th scope="col">Orçamento</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Detalhe Projeto</li>
                </ol>
            </nav>
            <tr>
                <th scope="row">{{ $project->id }}</th>
                <td><a href="{{ route('cliente.show', $project) }}">{{ $project->nome }}</a></td>
                <td>{{ $project->cliente->name }}</td>
                <td>R$ {{ $project->orcamento }}</td>
                <td>
                    {{-- <a href="{{ route('project.edit', $project) }}"><i --}}
                    {{-- class="fas fa-pencil-alt btn btn-primary"></i></a> --}}
                    {{-- <a deleteId="{{ $project->id }}" href=""><i deleteId="{{ $project->id }}" --}}
                    {{-- class="fas fa-times btn btn-danger"></i></a> --}}
                </td>
            </tr>
        </tbody>
    </table>
    <div class="w-100 text-end">
        <a href="{{ route('cliente.create') }}" class="plus-btn text-left btn btn-success fs-6">
            Adicionar Cliente <i class="fas fa-plus-square fs-6 ms-2"></i>
        </a>
    </div>
@endsection
