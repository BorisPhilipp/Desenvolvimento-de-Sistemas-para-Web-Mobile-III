<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>06 - Revisao - Classe de produto</title>
</head>
<body>

</body>
</html>

<?php
    class Produtos{
        public $nome;
        public $preco;

        public function __construct($nome, $preco){
            $this->nome = $nome;
            $this->preco = $preco;
            }

        public function calcularDesconto($porcentagem){
            if($porcentagem < 0 || $porcentagem > 100){
                echo "Porcentágem Inválida para Desconto.";
            }

            $desconto = ($this->preco * $porcentagem) / 100;
            $novoPreco = $this->preco - $desconto;
            return round($desconto, 2);
        }
    }

    $ventilador = new Produtos("Ventilador", 150);

    echo "Produto: ".$ventilador->nome. "<br>";
    echo "Preco antes do Desconto: ".$ventilador->preco. "<br>";

    $PrecocomDesconto = $ventilador->calcularDesconto(15);
    echo "Preco depois do Desconto: ".$PrecocomDesconto. "<br>";

?>


<!-- Criar uma classe Produto com um método para calcular descontos. -->
