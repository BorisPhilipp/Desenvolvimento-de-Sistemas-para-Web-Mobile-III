<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP - Manipulação de Arquivos (Atividade 02)</title>
</head>
<body>
	<h1>Sistema de Notas</h1>
	<form method="POST" action="">
		<input type="text" name="aluno" placeholder="Nome do Aluno" required>
		<br>
		<input type="text" name="nota" placeholder="Nota do Aluno" required>
		<br>
		<button type="submit">Enviar</button>
	</form>

	<h2>Notas dos Alunos:</h1>
	<?php
		$arquivo_notas = fopen("notas.txt", "r");
		while(!feof($arquivo_notas)){
			echo fgets($arquivo_notas) . "<br>";
		}
		fclose($arquivo_notas);
	?>

	<?php
		if($_SERVER['REQUEST_METHOD'] == "POST"){
	
		

		}
	?>

</body>
</html>

