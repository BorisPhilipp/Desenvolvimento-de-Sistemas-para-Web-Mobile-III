@extends('layouts.main')

@section('content')
    <h1>Criar exame para paciente</h1>
    
    <form action="{{ route('exames.store') }}" method="post">
        @csrf
        <input type="text" name="nome" placeholder="Nome do Paciente" required>
        <select name="tipo_exame" id="tipo_exame" required>
            <option value="">Selecione o tipo de exame</option>
            <option value="Sequenciamento" {{ old('tipo_exame') == 'Sequenciamento' ? 'selected' : '' }}>Sequenciamento</option>
            <option value="PCR" {{ old('tipo_exame') == 'PCR' ? 'selected' : '' }}>PCR</option>
            <option value="Microarray" {{ old('tipo_exame') == 'Microarray' ? 'selected' : '' }}>Microarray</option>
        </select>
        <input type="select" name="laudo" placeholder="Laudo">
        <input type="date" name="data_coleta" required>
        <button type="submit">Criar Exame</button>
    </form>
@endsection