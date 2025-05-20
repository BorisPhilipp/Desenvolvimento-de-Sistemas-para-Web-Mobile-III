@extends('layouts.main')

@section('conteudo')
    <h1>Editar Medicamentos</h1>

    <form action="{{ route('medicamentos.update', $medicamento) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="nome" placeholder="Nome do Medicamento" value="{{ $medicamento->nome }}" required>
        <textarea name="descricao" placeholder="Descrição (opcional)">{{ $medicamento->descricao }}</textarea>
        <input type="text" name="quantidade" placeholder="Quantidade" value="{{ $medicamento->quantidade }}" required>
        <button type="submit">Salvar</button>
    </form>
@endsection

<!-- Blade para editar/Atualizar os campos do medicamento -->