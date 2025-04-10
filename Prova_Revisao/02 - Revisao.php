<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>02 - Revisao - Tabela de Multiplicação</title>
</head>
<body>
    <form method="POST">
        <label>Insira um numero para sua tabela de multiplicação aparecer:</label><br>
        <input type="number" name="numero" placeholder="Numero Multiplicado" required><br>
        <button type="submit">Enviar</button>
    </form><br>
</body>
</html>

<?php
    if($_SERVER['REQUEST_METHOD'] === "POST"){
        $numero = $_POST['numero'];

        echo "Tabela de multiplicação <br>";
        for($i=0; $i<11; $i++){
            $resultado = $numero*$i;
            echo "$numero x $i = $resultado <br>";
        }
    }
?>

<!-- Criar um script PHP que gera uma tabela de multiplicação com base em um
número fornecido pelo usuário. -->