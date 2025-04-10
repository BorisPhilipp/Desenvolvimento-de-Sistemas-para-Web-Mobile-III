<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>03 - Revisao - Cadastro</title>
</head>
<body>
    <form method="POST">
        <label>Nome:</label><br>
        <input type="text" name="usuario" placeholder="Seu Nome"><br>
        <label>Senha:</label><br>
        <input type="text" name="senha" placeholder="Sua Senha"><br>
        <label>E-Mail:</label><br>
        <input type="email" name="email" placeholder="Seu E-Mail"><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>

<?php
    if($_SERVER['REQUEST_METHOD'] === "POST"){              //htmlspecialchars converte caracteres especiais em entidades HTML. (<, >, ", &) -> HTML.
        $nome = htmlspecialchars(trim($_POST['usuario'])); //htmlspecialchars altera para que os campos não "renderizem" totalmente o que o usuario ponhe
        $senha = htmlspecialchars(trim($_POST['senha']));   //por exemplo "<script>", o htmlspecialchars não ira ler o "<script>" como codigo Javascript
        $email = htmlspecialchars(trim($_POST['email']));   // mas ira ler como apenas um texto, livrando de qualquer tentativa de invasao ou injecao XSS.
                                                            // e trim apenas remove os espaços em branco de uma string, por exemplo: "     carro" se torna "carro".
        if(empty($nome) || empty($senha) || empty($email)){ //empty verifica se o campo está vazio.
            echo "Preencha os campos.";
            exit;
        }

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){ //FILTER_VALIDATE_EMAIL verifica se o email possui um nome de usuario, um @ e o dominio (@gmail, @email, @outlook) logo após.
            echo "E-Mail Invalido.";
            exit;
        }

        echo "Usuario cadastrado com sucesso. <br>";
        echo "Nome: $nome <br>";
        echo "E-Mail: $email <br>";
    } else {
        echo "Acesso Invalido.";
    }
?>

<!-- Criar um formulário PHP para cadastro de usuários com validação básica. -->