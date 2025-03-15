<?php

// 2. Definir as configurações de conexão com o banco de dados
$host = 'localhost';  // Endereço do servidor de banco de dados
$dbname = 'zoologico';  // Nome do banco de dados
$username = 'root';  // Nome do usuário do banco de dados
$password = '';  // Senha do banco de dados

// 3. Criar a conexão PDO com o banco de dados
try {
    // Tenta estabelecer a conexão com o banco de dados usando PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Define o modo de erro para exceções, o que facilita o tratamento de erros
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão bem-sucedida!"; // Mensagem de teste
} catch (PDOException $e) {
    // Se a conexão falhar, exibe uma mensagem de erro e interrompe o script
    die("Erro na conexão: " . $e->getMessage());
}

// 4. Função para listar todos os animais
function listarAnimais() {
    global $pdo;  // Acessa a variável PDO definida acima
    $stmt = $pdo->query("SELECT * FROM animais");  // Faz a consulta no banco de dados
    return $stmt->fetchAll(PDO::FETCH_ASSOC);  // Retorna todos os resultados como um array associativo
}

// 5. Função para adicionar um novo animal
function adicionarAnimal($nome, $especie, $idade, $habitat) {
    global $pdo;  // Acessa a variável PDO
    $stmt = $pdo->prepare("INSERT INTO animais (nome, especie, idade, habitat) VALUES (:nome, :especie, :idade, :habitat)");
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':especie', $especie);
    $stmt->bindParam(':idade', $idade, PDO::PARAM_INT);
    $stmt->bindParam(':habitat', $habitat);
    
    if ($stmt->execute()) {
        echo "Animal registrado com sucesso!";
    } else {
        echo "Erro ao registrar o animal.";
    }
}

// 6. Função para editar as informações de um animal
function editarAnimal($id, $nome, $especie, $idade, $habitat) {
    global $pdo;  // Acessa a variável PDO
    $stmt = $pdo->prepare("UPDATE animais SET nome = :nome, especie = :especie, idade = :idade, habitat = :habitat WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':especie', $especie);
    $stmt->bindParam(':idade', $idade, PDO::PARAM_INT);
    $stmt->bindParam(':habitat', $habitat);
    
    if ($stmt->execute()) {
        echo "Animal atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar o animal.";
    }
}

// 7. Função para excluir um animal
function excluirAnimal($id) {
    global $pdo;  // Acessa a variável PDO
    $stmt = $pdo->prepare("DELETE FROM animais WHERE id = :id");
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    
    if ($stmt->execute()) {
        echo "Animal excluído com sucesso!";
    } else {
        echo "Erro ao excluir o animal.";
    }
}


    adicionarAnimal('Tigre', 'Felino', 4, 'Floresta');
    echo "Animal adicionado!";


// 9. Teste para listar os animais
$animais = listarAnimais();
echo '<pre>';
print_r($animais);  // Exibe a lista de animais

echo "\nFim do script.";
?>

