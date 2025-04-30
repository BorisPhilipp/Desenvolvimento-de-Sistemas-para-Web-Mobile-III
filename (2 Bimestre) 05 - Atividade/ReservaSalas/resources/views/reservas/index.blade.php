<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Reservas</title>
</head>
<body>
    <h1>Lista de Reservas</h1>

    @if ($reservas->isEmpty())
        <p>Nenhuma reserva encontrada.</p>
    @else
        <table border="1" cellpadding="10">
            <thead>
                <tr>
                    <th>Sala</th>
                    <th>Usuário</th>
                    <th>Data</th>
                    <th>Horário</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reservas as $reserva)
                    <tr>
                        <td>{{ $reserva->sala->nome }}</td>
                        <td>{{ $reserva->usuario }}</td>
                        <td>{{ \Carbon\Carbon::parse($reserva->data)->format('d/m/Y') }}</td>
                        <td>{{ $reserva->horario }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    <p><a href="/reservas/criar">Reservar salas</a></p>
</body>
</html>
