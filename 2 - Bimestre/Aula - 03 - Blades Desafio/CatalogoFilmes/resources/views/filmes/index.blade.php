@extends('layouts.main')

@section('titulo', 'Catalogo de Filmes')

@section('titulo_pagina', 'Lista de Filmes')

@section('conteudo')

    <!-- Exibe mensagens de erro -->
    @error('titulo')
       <p style="color:red;">Erro: {{ $message }}</p>
    @enderror
    @error('genero')
       <p style="color:red;">Erro: {{ $message }}</p>
    @enderror
    @error('avaliacao') <!-- Erro ao não ser atribuido um valor para a avaliação -->
       <p style="color:red;">Erro: {{ $message }}</p>
    @enderror

    <!-- Exibe mensagens de sucesso -->
    @if(session('sucesso'))
        <p style="color:green;">{{ session('sucesso') }}</p>
    @endif

    <!-- Formulário para adicionar filmes -->
    <form method="POST" action="{{ route('filmes.store') }}">
       @csrf
       <input type="text" name="titulo" placeholder="Título do Filme">
       <input type="text" name="genero" placeholder="Gênero">
       <input type="number" name="avaliacao" step=0.1 placeholder="Avaliação">
       <button type="submit">Adicionar</button>
    </form>

    <!-- Loop para exibir filmes -->
    @foreach($filmes as $filme)
        <x-card-filme 
            :titulo="$filme['titulo']"
            :genero="$filme['genero']"
            :avaliacao="$filme['avaliacao']"
        />
    @endforeach

@endsection