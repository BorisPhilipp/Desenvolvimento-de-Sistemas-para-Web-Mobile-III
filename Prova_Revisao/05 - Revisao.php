<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>05 - Revisao - LOG</title>
</head>
<body>
    <form method="post">
        <label>Mensagem:</label><br>
        <input type="text" name="mensagem" placeholder="Sua Mensagem" required><br><br>
        <button type="submit">Enviar</button><br><br>
    </form>
</body>
</html>

<?php
    if($_SERVER['REQUEST_METHOD'] === "POST"){
        $mensagem = $_POST['mensagem'];

        if(!empty($mensagem)){
            $log = fopen('log.txt', 'a');   //fopen, abre ou cria se não tiver um arquivo .txt para iniciar as alterações.
            fwrite($log, $mensagem. "\n");  //fwrite escreve as alterações no arquivo destinado. ($arquivo_destino, $texto_destino_arquivo) \n é opcional, foi adicionado para quebra de linha.
            fclose($log);   //fclose, fecha o arquivo e finaliza as alterações.
        }

        $ler = fopen('log.txt', 'r');
        echo "Log de registro: <br>";
        echo nl2br(fread($ler, filesize("log.txt"))); //nl2br lê as quebras de linhas (\n) e as aplica no HTML.
    }
?>

<!-- Criar um script que registra mensagens em um arquivo de log e as exibe no
navegador. -->