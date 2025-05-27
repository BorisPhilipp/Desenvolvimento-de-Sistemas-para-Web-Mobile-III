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

    <ul>
        @foreach($exames as $lab)
            <li>{{ $lab->nome }} - {{ $lab->tipo_exame }} - {{ $lab->data_coleta }} - {{ $lab->laudo ?? 'Sem Laudo' }}</li>
        @endforeach
    </ul>
@endsection