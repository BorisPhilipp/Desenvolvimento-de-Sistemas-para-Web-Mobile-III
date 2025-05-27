<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exames</title>
</head>
</html>

@extends('layouts.main')

@section('content')
    <h1>Lista de Exames</h1>
    <a href="{{ route('exames.create') }}">Criar Exame</a>

    <ul>
        @foreach($exames as $lab)
            <li> <strong>Nome do Paciente:</strong> {{ $lab->nome }} - <strong>Tipo de Exame:</strong> {{ $lab->tipo_exame }} - <strong>Data Marcada:</strong> {{ $lab->data_coleta }} - <strong>Laudo do Paciente:</strong> {{ $lab->laudo ?? 'Sem Laudo' }}</li>
        @endforeach
    </ul>
@endsection