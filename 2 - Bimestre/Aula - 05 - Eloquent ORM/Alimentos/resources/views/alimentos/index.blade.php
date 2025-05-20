@extends('layouts.main')

@section('content')
    <h1>Lista de Alimentos</h1>

    @if(session('sucesso'))
        <p style="color:green;">{{ session('sucesso') }}</p>
    @endif

    <a href="{{ route('alimentos.create') }}">Adicionar Novo Alimento</a>

    <ul>
        @foreach($alimentos as $alimento)
            <li>
                <strong>{{ $alimento->nome }}</strong> - Quantidade: {{ $alimento->quantidade }} - Validade: {{ $alimento->validade ?? 'Sem validade' }}

                <a href="{{ route('alimentos.edit', $alimento) }}">Editar</a>

                <form action="{{ route('alimentos.destroy', $alimento) }}" method="post" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Excluir</button>
                </form>

                @if($alimento->quantidade < 10)
                    <span style="color: red; font-weight: bold;">ESTOQUE BAIXO!!</span>
                @endif

            </li>
        @endforeach
    </ul>
@endsection