<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>04 - Revisao - Calculadora IMC</title>
</head>
<body>
    <form method="POST">
        <label>Peso:</label><br>
        <input type="number" name="peso" placeholder="Seu Peso" step="0.01" required><br>
        <label>Altura (em cms):</label><br>
        <input type="number" name="altura" placeholder="Sua Altura" step="0.01" required><br><br>
        <button type="submit">Enviar</button><br><br>
    </form>
</body>
</html>

<!-- IMC = Peso / altura² ou altura*altura -->

<?php
    function calcular_IMC($peso, $altura){
        return round($peso / ($altura * $altura), 2); //arredonda para 2 casas decimais
    }

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];

        $imc = calcular_IMC($peso, $altura);
        echo "Seu IMC é " . $imc;
    }
?>

<!-- Criar uma função PHP que calcula o IMC e exibe uma mensagem
personalizada. -->