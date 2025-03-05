<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>PHP - Cadastro de Alunos e Notas</title>
</head>
<body>
    <h1>Atividade 02 - Mão na Massa</h1>
    <h1>Cadastrar Aluno</h1>
    <form method="post" action="process.php">
        <label for="nome">Nome do Aluno:</label>
        <input type="text" id="aluno" name="aluno" required>
        <br>
        <label for="nota">Nota do Aluno:</label>
        <input type="number" id="nota" name="nota" min="0" max="10" required>
        <br>
        <button type="submit">Cadastrar</button>
    </form>
    <br>
    <a href="list.php">Listar Alunos e Calcular Média</a>
</body>
</html>