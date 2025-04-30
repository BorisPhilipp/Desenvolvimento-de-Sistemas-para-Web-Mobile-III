<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Criar Reserva</title>
</head>
<body>
    <h1>Nova Reserva</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('reservas.store') }}" method="POST">
        @csrf

        <label for="sala_id">Sala:</label>
        <select name="sala_id" id="sala_id" required>
            @foreach($salas as $sala)
                <option value="{{ $sala->id }}">{{ $sala->nome }}</option>
            @endforeach
        </select><br><br>

        <label for="usuario">Usuário:</label>
        <input type="text" name="usuario" id="usuario" required><br><br>

        <label for="data">Data:</label>
        <input type="date" name="data" id="data" required><br><br>

        <label for="horario">Horário:</label>
        <input type="time" name="horario" id="horario" required><br><br>

        <button type="submit">Reservar</button><br><br>
    </form>

    <p><a href="/reservas/">Salas Reservadas</a></p>

</body>
</html>
