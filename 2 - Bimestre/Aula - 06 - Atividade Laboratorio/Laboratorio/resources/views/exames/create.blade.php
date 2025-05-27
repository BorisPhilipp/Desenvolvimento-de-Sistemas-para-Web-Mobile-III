@extends('layouts.main')

@section('content')
    <h1>Criar exame para paciente</h1>
    
    <form action="{{ route('exames.store') }}" method="post">
        @csrf
        <input type="text" name="nome" placeholder="Nome do Paciente" required>
        <input type="text" name="tipo_exame" placeholder="Tipo de exame" required>
        <input type="text" name="laudo" placeholder="Laudo" required>
        <input type="date" name="data_coleta" required>
        <button type="submit">Criar Exame</button>
    </form>
@endsection