
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>07 - Revisao - Herança</title>
</head>
<body>
    
</body>
</html>

<?php
    class Usuario{
        public $nome;
        public $email;

        public function __construct($nome, $email){
            $this->nome = $nome;
            $this->email = $email;
        }

        public function exibirInfo(){
            echo "Nome: $this->nome <br>";
            echo "E-Mail: $this->email <br><br>";
        }
    }

    class Administrador extends Usuario{
        public $acesso;

        public function __construct($nome, $email, $acesso){
            parent::__construct($nome, $email); //chama o construtor da classe pai
            $this->acesso = $acesso;
        }

        public function exibirInfoADM(){
            echo "Painel de Admin: <br>";
            echo "Seu nivel de acesso é: $this->acesso";
        }
    }

    $user_comum = new Usuario("Tyler", "creator@email.com");
    $user_Admin = new Administrador("Travis", "scott@email.com", "superadmin");

    $user_comum->exibirInfo();
    $user_Admin->exibirInfo();
    $user_Admin->exibirInfoADM();
?>

<!-- Criar um sistema básico de gerenciamento de usuários usando herança. -->
