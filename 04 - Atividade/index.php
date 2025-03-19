<?php
	class Produto{
		private $nome;
		private $preco;
		private $quantidade;
		
		public function __construct($nome,$preco,$quantidade){
			$this->nome = $nome;
			$this->preco = $preco;
			$this->quantidade = $quantidade;
		}

		public function getNome(){
			return $this->nome;
		}

		public function getPreco(){
			return $this->preco;
		}

		public function getQuantidade(){
			return $this->quantidade;
		}

		public function setNome($novoNome){
			$this->nome = $novoNome;
		}

		public function setPreco($novoPreco){
			$this->preco = $novoPreco;
		}

		public function setQuantidade($novoQuantidade){
			$this->quantidade = $novoQuantidade;
		}

		public function aplicarDesconto($quantia){
			$novoPreco = $this->getPreco() * (100 - $quantia);
			$this->setPreco($novoPreco);
		}
	}

	class Estoque{
		private estoque;
		private valorEstoque;

		public function __construct(){
			$this->estoque = [];
			$this->valorEstoque = 0;
		}

		
	}


?>

<!-- Métodos para:
• Exibir as informações do produto.
• Aplicar um desconto no preço do produto.
• Atualizar a quantidade em estoque. -->

<!-- Crie uma classe Estoque que gerencie múltiplos produtos:
• Método para adicionar produtos ao estoque.
• Método para listar os produtos disponíveis.
• Método para calcular o valor total do estoque.
• Instancie alguns produtos e teste o sistema. -->

<!-- Exercício
1. Criar a classe Produto com os atributos e métodos necessários.
2. Criar a classe Estoque para gerenciar múltiplos produtos.
3. Criar objetos dessas classes e testar todas as funcionalidades.
Dica: Utilize conceitos como encapsulamento (modificadores de acesso private,
public), métodos construtores (__construct), e arrays para armazenar produtos. -->

<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>OOP</title>
</head>
<body>
	<h1>Sistema de Gestão de Produtos</h1>
	<nav>
		<form action="post">
			<input type="text" name="nome" placeholder="Nome do Produto" required><br>
			<input type="number" name="preco" placeholder="Preço do Produto" required><br>
			<input type="number" name="quantidade" placeholder="Quantidade" min="0" max="any" required><br>
			<button type="submit">enviar</button>
		</form>


	</nav>


</body>
</html>
