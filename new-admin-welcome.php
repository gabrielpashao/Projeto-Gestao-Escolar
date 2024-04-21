<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Conectar ao banco de dados
    $conexao = new mysqli('localhost', 'root', '', 'escola');

    // Verificar a conexão
    if ($conexao->connect_error) {
        die("Erro na conexão: " . $conexao->connect_error);
    }

    // Capturar os dados do formulário e sanitizar
    $nome = htmlspecialchars($conexao->real_escape_string($_POST['admin-name']));
    $email = htmlspecialchars($conexao->real_escape_string($_POST['admin-email']));

    // Montar a consulta SQL
    $sql = "INSERT INTO gestor (nome, email) 
            VALUES ('$nome', '$email')";

    // Executar a consulta SQL
    if ($conexao->query($sql) === TRUE) {
        echo '<script>alert("Gestor cadastrado com sucesso!"); window.location.href = "add-class-welcome.php";</script>';
    } else {
        echo '<script>alert("Não foi possível cadastrar o gestor."); window.location.href = "add-admin-welcome.php";</script>';
    }

    // Fechar a conexão
    $conexao->close();
}
?>
