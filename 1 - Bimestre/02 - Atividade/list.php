<?php
require_once "functions.php";
$alunos = listarAlunos();

echo "<h1>Lista de Alunos e Notas</h1>";

if (count($alunos) > 0) {
    echo "<ul>";
    foreach ($alunos as $aluno) {
        echo "<li>{$aluno['nome']}: {$aluno['nota']}</li>";
    }
    echo "</ul>";

    $media = calcularMedia($alunos);
    echo "<h2>Média das Notas: " . number_format($media, 2) . "</h2>";
} else {
    echo "<p>Nenhum aluno cadastrado.</p>";
}
?>