<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>06 - Revisao - Classe de produto</title>
</head>
<body>
    <form method="POST">
        <label>Nome do Produto:</label><br>
        <input type="text" name="produto" placeholder="Produto"><br>
        <label>Preço do Produto:</label><br>
        <input type="number" name="produto" step="0.01" placeholder="Produto"><br><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>

<?php
    class Produtos{
        public $nome;
        public $preco;

        public function __construct($nome, $preco){
            return $this->nome;
            return $this->preco;
        }

        public function getNome(){
            return $this->nome;
        }

        public function getPreco(){
            return $this->preco;
        }

        public function setNome($novoNome){
            $this->nome = $novoNome;
        }
    }

?>


<!-- Criar uma classe Produto com um método para calcular descontos. -->