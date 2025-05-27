@extends('layouts.main')

@section('title', 'Criando Exame')

@section('content')
    <h1>Criar exame para paciente</h1>
    
    @if($errors->any())
        <ul style="color:red;"> <!-- se houver algum erro, será listado o erro personalizado -->
            @foreach($errors->all() as $error) <!-- erro do tipo exame esta saindo em inglês não sei por que. -->
                <li><u>{{ $error }}</u></li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('exames.store') }}" method="post">
        @csrf
        <input type="text" name="nome" placeholder="Nome do Paciente">
        <select name="tipo_exame" id="tipo_exame">
            <option value="">Selecione o tipo de exame</option>
            <option value="Sequenciamento" {{ old('tipo_exame') == 'Sequenciamento' ? 'selected' : '' }}>Sequenciamento</option>
            <option value="PCR" {{ old('tipo_exame') == 'PCR' ? 'selected' : '' }}>PCR</option>
            <option value="Microarray" {{ old('tipo_exame') == 'Microarray' ? 'selected' : '' }}>Microarray</option>
        </select>
        <input type="select" name="laudo" placeholder="Laudo">
        <input type="date" name="data_coleta">
        <button type="submit">Criar Exame</button>
    </form>
@endsection