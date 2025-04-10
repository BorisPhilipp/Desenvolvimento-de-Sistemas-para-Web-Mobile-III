<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01 - Revisao - Formulario</title>
</head>
<body>
    <form method="POST" action="">
        <label for="">Nome</label><br>
        <input type="text" name ="nome" placeholder="Nome" required> <br>
        <button type="submit">Enviar</button>
    </form>   
    <br> 
</body>
</html>

<?php
    if($_SERVER['REQUEST_METHOD'] === "POST"){
        $usuario = $_POST['nome'];
        echo "Olá usuário: $usuario!";
    }
?>

<!-- Criar um formulário PHP que receba o nome do usuário e exiba uma
mensagem personalizada. -->