<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Classes Atividade 03</title>
</head>
<body>
    <h1>Atividade 03 - Mão na Massa</h1>


    <?php
        class Alunos{
            public $nome;
            public $matricula;
            public $curso;

            public function __construct($nome,$matricula,$curso){
                $this->nome = $nome;
                $this->matricula = $matricula;
                $this->curso = $curso;
            }

            public function getNome(){
                return $this->nome;
            }

            public function getMatricula(){
                return $this->matricula;
            }

            public function getCurso(){
                return $this->curso;
            }

            public function setNome($novoNome){
                $this->nome = $novoNome;
            }

            public function setMatricula($novoMatricula){
                $this->matricula = $novoMatricula;
            }

            public function setCurso($novoCurso){
                $this->curso = $novoCurso;
            }



            public function exibirInfo(){
                echo "Nome: {$this->nome}<br>";
                echo "Matricula: {$this->matricula}<br>";
                echo "Curso: {$this->curso}<br>";
            }
        }

        $teste = new Alunos("Teste","12345","Eng.Soft");
        $teste->exibirInfo();

        $teste->setNome("Armindo");
        $teste->exibirInfo();

    ?>
</body>
</html>