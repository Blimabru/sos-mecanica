@extends('layout')

@section('content')

<div class="container cadastro">
    <h1>LISTAR PESSOAS</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Nome Completo</th>
                <th scope="col">Data de Nascimento</th>
                <th scope="col">E-mail</th>
                <th scope="col">CPF</th>
                <th scope="col">RG</th>
                <th scope="col">Telefone Principal</th>
                <th scope="col">Telefone Secundário</th>
                <th scope="col">Editar</th>
                <th scope="col">Excluir</th>
            </tr>
    </thead>
        <tbody>
            @foreach($pessoas as $pessoa)
            <tr>
            <th scope="row">{{$pessoa->id_pessoa}}</th>
            <td>{{ $pessoa->nome }}</td>
            <td>{{ $pessoa->data_nascimento }}</td>
            <td>{{ $pessoa->email }}</td>
            <td>{{ $pessoa->cpf }}</td>
            <td>{{ $pessoa->rg }}</td>
            <td>{{ $pessoa->telefone_1 }}</td>
            <td>{{ $pessoa->telefone_2 }}</td>
            <td><a href="/pessoas/edit/{{$pessoa->id_pessoa}}" class="btn btn-info">Editar</a></td>
            <td><a href="/pessoas/destroy/{$pessoa->id_pessoa} }}" class="btn btn-danger">Deletar</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection