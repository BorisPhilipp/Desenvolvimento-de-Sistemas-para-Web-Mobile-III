@extends('layouts.main')

@section('content')
    <h1>Editar Exame</h1>

    <form action="{{ route('exames.update', $exame) }}" method="post">
        @csrf
        @method('PUT')
        <input type="text" name="nome" value={{ $exame->nome }} required>
        <select name="tipo_exame" id="tipo_exame" class="form-control">
            @foreach(['Sequenciamento', 'PCR', 'Microarray'] as $tipo)
                <option value="{{ $tipo }}" {{ $exame->tipo_exame == $tipo ? 'selected' : '' }}>
                    {{ $tipo }}
                </option>
            @endforeach
        </select>
        <input type="select" name="laudo" value="{{ $exame->laudo }}">
        <input type="date" name="data_coleta" value="{{ $exame->data_coleta }}" required>
        <button type="submit">Editar Exame</button>
    </form>
@endsection