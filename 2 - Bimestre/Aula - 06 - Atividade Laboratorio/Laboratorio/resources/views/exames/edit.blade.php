@extends('layouts.main')

@section('content')
    <h1>Editar Exame</h1>

    <form action="{{ route('exames.update', $exame) }}" method="post">
        <input type="text" name="nome" value="{{ $exame->nome }}" required>
        <input type="text" name="tipo_exame" value="{{ $exame->tipo_exame }}" required>
        <input type="text" name="laudo" value="{{ $exame->laudo }}" required>
        <input type="date" value="{{ $exame->data_coleta }}" required>
        <button type="submit">Atualizar Exame</button>
    </form>
@endsection