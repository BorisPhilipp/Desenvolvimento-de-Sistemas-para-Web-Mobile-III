<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulário PHP</title>
</head>
<body>
<!--  	<h2>Digite seu nome:<h2>
		<form method="POST" action="">
			<input type="text" name="nome" placeholder="Seu nome" required>
			<input type="number" name="idade" placeholder="Ano de Nascimento" required>
			<button type="submit">Enviar</button>
		</form>-->
		<?php
			//Verificar se o formulário enviado
/* 			if($_SERVER['REQUEST_METHOD'] == "POST"){
				$nome = $_POST['nome'];
				$ano = 2025 - abs($_POST['idade']);
				echo "<h3>Olá, $nome! Seja bem-vindo(a)!</h3><br><h4>Sua Idade é: $ano</h4>";
			} */
		?>

		<h3>Questão 1</h3> <!--Substitua todas as vogais em uma string por asteriscos-->
		<form method="POST" action="">
			<input type="text" name="vogal" placeholder="Digite sua Vogal" required>
			<button type="submit">Enviar</button>
		</form>
		<?php
			if($_SERVER['REQUEST_METHOD'] == "POST"){
				$texto = $_POST['vogal'];
				echo str_replace(['a','e','i','o','u'],"*", $texto);
			}
		?>

		<h3>Questão 2</h3> <!--Verifique se um número é primo ou não.-->
		<form method="POST" action="">
			<input type="number" name="primo" placeholder="Digite um numero" required>
			<button type="submit">Enviar</button>
		</form>
		<?php
			if($_SERVER['REQUEST_METHOD'] == "POST"){
				$numero = $_POST['primo'];

				function primo_nao($numero){
					if($numero < 2){
						return false;
					}

					for ($i = 2; $i < sqrt($numero); $i++){
						if($numero % $i === 0){
							return false;
						}
					}

					return true;
				}

				if (primo_nao($numero)){
					echo "<h3>Seu número é Primo.</h3>";
				} else {
					echo "<h3>Seu número não é Primo.</h3>";
				}
			}
		?>

		<h3>Questão 3</h3> <!--Inverta uma string sem usar a função strrev().-->
		<form method="POST" action="">
			<input type="text" name="invert" placeholder="Inverter String" required>
			<button type="submit">Enviar</button>
		</form>
		<?php
			if($_SERVER['REQUEST_METHOD'] == "POST"){
				$inverter = $_POST['invert'];
				$reverso = '';
				$i = 0;

				while(!empty($inverter[$i])){
					$reverso = $inverter[$i].$reverso;
					$i++;
				}
				echo "<h3>$reverso</h3>";
			}
		?>

		<h3>Questão 4</h3> <!--Crie uma função que receba um número e retorne se é positivo, negativo ou zero.-->
		<form method="POST" action="">
			<input type="number" name="pos_num" placeholder="Positivo ou Negativo" required>
			<button type="submit">Enviar</button>
		</form>
		<?php
			if($_SERVER['REQUEST_METHOD'] == "POST"){
				$pos = $_POST['pos_num'];

				function verificador($pos){
					if($pos > 1){
						return true;
					} else {
						return false;
					}
				}

				if (verificador($pos)){
					echo "<h3>Positivo</h3>";
				} elseif($pos ==0 ){
					echo "<h3>Seu Numero é Zero</h3>";
				} else {
					echo "<h3>Negativo</h3>";
				}
			}
		?>

		<h3>Questão 5</h3> <!--Conte o número de palavras em uma frase e imprima cada palavra em uma nova linha.-->
		<form method="POST" action="">
			<input type="text" name="num_cont" placeholder="Contador" required>
			<button type="submit">Enviar</button>
		</form>
		<?php
			if($_SERVER['REQUEST_METHOD'] == "POST"){
				$num_cont_palavra = $_POST['num_cont'];
				$qnt_palavra = str_word_count($num_cont_palavra); 

				$separador = explode(" ", $num_cont_palavra);
				foreach($separador as $separado){
					echo "<h3>$separado</h3>";
				}
				echo "<h3>Sua Frase possui $qnt_palavra Palavras.</h3>";
			}
		?>

		<h3>Questão 6</h3> <!--Crie uma função que verifique se uma palavra é um palíndromo.-->
		<form method="POST" action="">
			<input type="text" name="tenet" placeholder="Palindromo ou Não?" required>
			<button type="submit">Enviar</button>
		</form>
		<?php
			if($_SERVER['REQUEST_METHOD'] == "POST"){
				$palindromo = $_POST['tenet'];

				if (strrev(strtolower($palindromo)) === strtolower($palindromo)){
					echo "<h3>É um Palíndromo</h3>";
				} else {
					echo "<h3>Não é um Palídromo</h3>";
				}
			}
		?>

		<h3>Questão 7</h3> <!--Crie um programa que imprima os números de 1 a 20, substituindo múltiplos de 3
		por.-->
		<?php
				for($i = 1; $i <= 20; $i++){
					if($i % 3 === 0){
						echo ". ";
					} else {
						echo "$i ";
					}
				}
		?>

	<h3>Questão 8</h3> <!--Crie uma função que remova os espaços em branco de uma string.-->
		<form method="POST" action="">
			<input type="text" name="remover" placeholder="Digite uma Frase" required>
			<button type="submit">Enviar</button>
		</form>
		<?php
			if($_SERVER['REQUEST_METHOD'] == "POST"){
				$string = $_POST['remover'];
				$formatado = str_replace(' ', '', $string);
				echo "<h3>$formatado</h3>";
			}
		?>

	<h3>Questão 9</h3> <!--Crie um programa que calcule e imprima os números Fibonacci até o décimo termo.-->
		<?php
			function fibonacci($n){
				if($n<=0){
					return 0;
				}elseif($n==1){
					return 1;
				}

				$fibo_penultimo =0;
				$fibo_ultimo =1;

				for($o=2; $o <= $n; $o++){
					$fibo_atual = $fibo_ultimo + $fibo_penultimo;
					$fibo_penultimo = $fibo_ultimo;
					$fibo_ultimo = $fibo_atual;
				}
				return $fibo_penultimo;
			}

			echo "Decimo Termo de Fibonacci é: ".fibonacci(10);
		?>

	<h3>Questão 10</h3> <!---Crie uma função que receba um texto e retorne se é um pangrama (contém todas as letras do alfabeto pelo menos uma vez)--->
	<form method="POST" action="">
			<input type="text" name="antes_pangram" placeholder="É um Pangrama?" required>
			<button type="submit">Enviar</button>
		</form>
		<?php
			if($_SERVER['REQUEST_METHOD'] == "POST"){
				$frase = $_POST['antes_pangram'];
				$frase = strtolower($frase);

				function is_pangram($frase){
					$frase = preg_replace("/[^a-z]/", "", $frase); //remove tudo o que não é letras
					$alfabeto = range('a','z');
					foreach($alfabeto as $letra){
						if(strpos($frase, $letra) === false){
							return false;
						}
					}
				return true;
				}

				if(is_pangram($frase)){
					echo "É um Pangrama.";
				} else{
					echo "Não é um Pangrama.";
				}
			}		
		?>
</body>
</html>