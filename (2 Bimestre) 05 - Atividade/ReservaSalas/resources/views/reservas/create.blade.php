<form action="{{ route('reservas.store') }}" method="POST">
    @csrf

    <label for="sala_id">Sala:</label>
    <select name="sala_id" id="sala_id" required>
        @foreach($salas as $sala)
            <option value="{{ $sala->id }}">{{ $sala->nome }}</option>
        @endforeach
    </select>

    <label for="usuario">Usuário:</label>
    <input type="text" name="usuario" id="usuario" required>

    <label for="data">Data:</label>
    <input type="date" name="data" id="data" required>

    <label for="horario">Horário:</label>
    <input type="time" name="horario" id="horario" required>

    <button type="submit">Reservar</button>
</form>
