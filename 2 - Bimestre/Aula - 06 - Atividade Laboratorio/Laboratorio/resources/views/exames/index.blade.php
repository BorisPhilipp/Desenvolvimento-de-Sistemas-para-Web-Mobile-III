@extends('layouts.main')

@section('content')
    <h1>Lista de Exames</h1>

    @if(session('sucesso'))
        <p style="color:green;">{{ session('sucesso') }}</p>
    @endif

    <a href="{{ route('exames.create') }}">Criar Exame</a>

    <div class="container-index">
        <ul>
            @foreach($exames as $exame)
            <li>
                <div class="box-index">
                    <p><strong>Nome do Paciente:</strong> {{ $exame->nome }}
                    <strong>Tipo de Exame:</strong> {{ $exame->tipo_exame }}
                    <strong>Data Marcada:</strong> {{ $exame->data_coleta }}
                    <strong>Laudo do Paciente:</strong> {{ $exame->laudo ?? 'Sem Laudo' }}</p>
                    
                    <a href="{{ route('exames.edit', $exame) }}">Editar Exame</a>
                    
                    <form action="{{ route('exames.destroy', $exame) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Excluir Exame</button>
                    </form>        
                </div>
            </li>
            @endforeach
        </ul>
    </div>
@endsection