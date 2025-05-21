<?php
    function cadastrarAlunos($nome_aluno, $nota_aluno){

        if(!empty($nome_aluno) && !empty($nota_aluno)){
            $arquivo_notas = fopen("notas.txt", "a");
            fwrite($arquivo_notas, "$nome_aluno,$nota_aluno\n");
            fclose($arquivo_notas);
    
            return true;
        } else{
            return false;
    }
    }

    function listarAlunos(){
        if(file_exists("notas.txt")){
            $arquivo_notas = fopen("notas.txt", "r");
            $alunos = [];

            while(!feof($arquivo_notas)){
                $linha = fgets($arquivo_notas);
                if(!empty($linha)){
                    list($nome_aluno,$nota_aluno) = explode(",", $linha);
                    $alunos[] = ["nome" => $nome_aluno, "nota" => floatval($nota_aluno)];
                }
            }
            fclose($arquivo_notas);

            return $alunos;
        } else{
            return [];
        }
    }

    function calcularMedia($alunos){
        if(count($alunos)>0){
            $totalNotas = array_sum(array_column($alunos, "nota"));
            $quantidadeAlunos = count($alunos);
            return $totalNotas / $quantidadeAlunos;
        } else{
            return 0;
        }
    }
?>