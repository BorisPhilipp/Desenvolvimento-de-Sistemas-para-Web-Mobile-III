<?php
	class Produto{
		private $nome;
		private $preco;
		private $quantidade;
		
		public function __construct($nome,$preco,$quantidade, $desconto = 0){
			$this->nome = $nome;
			$this->preco = $preco;
			$this->quantidade = $quantidade;

			if($desconto > 0 && $desconto <= 100){
				$this->preco -= ($this->preco * ($desconto / 100));
			}
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
			$novoPreco = $this->getPreco() * ((100 - $quantia) / 100);
			$this->setPreco($novoPreco);
		}
	}

	class Estoque{
		private $estoque;
		private $valorEstoque;

		public function __construct(){
			$this->estoque = [];
			$this->valorEstoque = 0;
		}

		public function setEstoque($produto){
			foreach($this->estoque as $item){
				if($item->getNome() === $produto->getNome()){
					return;
				}
			}
			$this->estoque[] = $produto;
			$this->valorEstoque += $produto->getPreco() * $produto->getQuantidade();
		}

		public function getEstoque(){
			foreach($this->estoque as $produto){
				echo "<p>Nome do Produto: " . $produto->getNome() . "<br>Preço do Produto: R$" . $produto->getPreco() . "<br>Quantidade: " . $produto->getQuantidade() . "</p>";
			}
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
		<form method="post">
			<input type="text" name="nome" placeholder="Nome do Produto" required><br>
			<input type="number" name="preco" placeholder="Preço do Produto" min="0" required><br>
			<input type="number" name="quantidade" placeholder="Quantidade" min="0" step="any" required><br>
			<input type="number" name="desconto" placeholder="Desconto (%)" min="0" max="100" required><br>
			<button type="submit">Enviar</button>
		</form>
	</nav>
</body>
</html>

<?php
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$nome = $_POST['nome'];
		$preco = floatval($_POST['preco']);
		$quantidade = intval($_POST['quantidade']);
		$desconto = isset($_POST['desconto']) ? floatval($_POST['desconto']) : 0;

		$produto = new Produto($nome, $preco, $quantidade, $desconto);
		$estoque = new Estoque();
		$estoque->setEstoque($produto);

		echo "<h2>Produto cadastrado com sucesso.</h2>";
		$estoque->getEstoque();
	}


?>
