@extends('layouts.main')

@section('content')
    <h1>Lista de Exames</h1>

    @if(session('sucesso'))
        <p style="color:green;">{{ session('sucesso') }}</p>
    @endif

    <a href="{{ route('exames.create') }}">Criar Exame</a>

    <ul>
        @foreach($exames as $exame)
            <li>
                <strong>Nome do Paciente:</strong> {{ $exame->nome }} - 
                <strong>Tipo de Exame:</strong> {{ $exame->tipo_exame }} - 
                <strong>Data Marcada:</strong> {{ $exame->data_coleta }} - 
                <strong>Laudo do Paciente:</strong> {{ $exame->laudo ?? 'Sem Laudo' }}

                    <a href="{{ route('exames.edit', $exame) }}">Editar Exame</a>

                    <form action="{{ route('exames.destroy', $exame) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Excluir Exame</button>
                    </form>        
            </li>
        @endforeach
    </ul>
@endsection