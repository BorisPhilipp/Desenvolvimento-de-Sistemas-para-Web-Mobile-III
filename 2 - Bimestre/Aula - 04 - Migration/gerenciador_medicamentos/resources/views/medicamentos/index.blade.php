@extends('layouts.main')

@section('titulo','Lista de Medicamentos')

@section('conteudo')

 <!-- Exibição de mensagens de sucesso -->
 @if(session('sucesso'))
    <p style="color: green;">{{ session('sucesso') }}</p>
 @endif

  <!-- Formulário de adição de medicamento -->
  <form method="POST" action="{{ route('medicamentos.store') }}">
    @csrf
    <input type="text" name="nome" placeholder="Nome do Medicamento" required>
    <textarea name="descricao" placeholder="Descrição (opcional)"></textarea>
    <input type="text" name="quantidade" placeholder="Quantidade" required>
    <button type="submit">Adicionar</button>
  </form>

  <!-- Exibição dos medicamentos -->
   <ul>
    @foreach($medicamentos as $medicamento)
        <li>
            <strong>{{ $medicamento->nome }}</strong> - {{ $medicamento->descricao ?? 'Sem descrição' }} - Quantidade: {{ $medicamento->quantidade }}

            <a href="{{ route('medicamentos.edit', $medicamento) }}">Editar</a>

              <form method="POST" action="{{ route('medicamentos.destroy', $alimento) }}">
                @csrf
                @method('DELETE')
                <button type="submit">Apagar</button>
              </form>

        </li>
    @endforeach
   </ul>

@endsection