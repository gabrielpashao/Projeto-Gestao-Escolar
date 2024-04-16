<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupere os dados do formulário
    $escola = $_POST['school-name'];

    // Conectar ao servidor MySQL e criar o banco de dados
    $conexao = new mysqli('localhost', 'root', '');
    if ($conexao->connect_error) {
        die("Erro na conexão: " . $conexao->connect_error);
    }
    
    // Criar o banco de dados da escola
    $sql_create_db = "CREATE DATABASE IF NOT EXISTS `$escola`";
    if ($conexao->query($sql_create_db) === TRUE) {
        echo "Banco de dados $escola criado com sucesso.<br>";
    } else {
        echo "Erro ao criar o banco de dados: " . $conexao->error . "<br>";
        exit(); // Encerra o script se houver erro
    }

    // Selecionar o banco de dados recém-criado
    $conexao->select_db($escola);

    // Ler o conteúdo do arquivo SQL
    $sql_create_tables = file_get_contents('create_database.sql');
    $queries = explode(';', $sql_create_tables); // Separar as consultas

    // Executar cada consulta individualmente
    foreach ($queries as $query) {
        $query = trim($query); // Remover espaços em branco
        if (!empty($query)) {
            if ($conexao->query($query) === FALSE) {
                echo "Erro ao executar a consulta: " . $conexao->error . "<br>";
                exit(); // Encerra o script se houver erro
            }
        }
    }

    // Todas as tabelas foram criadas com sucesso
    echo "Todas as tabelas foram criadas com sucesso.<br>";

    // Fechar a conexão
    $conexao->close();
} else {
    echo "Erro: Método HTTP inválido.";
}
?>
