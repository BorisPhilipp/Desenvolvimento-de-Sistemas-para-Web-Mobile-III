<?php
require_once "functions.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $aluno = $_POST['aluno'];
    $nota = $_POST['nota'];


    if (cadastrarAlunos($aluno, $nota)) {
        echo "Aluno cadastrado com sucesso!";
    } else {
        echo "Por favor, preencha todos os campos.";
    }
}
?>