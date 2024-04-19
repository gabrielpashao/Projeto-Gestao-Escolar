<?php
// Dados do formulário
$login = $_POST['login'];
$senha = $_POST['senha']; // Senha em texto plano

// Criptografar a senha usando bcrypt
$senhaHash = password_hash($senha, PASSWORD_BCRYPT);

// Conectar ao banco de dados
$conexao = new mysqli('localhost', 'root', '', 'escola');

// Verificar a conexão
if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
}

// Inserir o novo usuário na tabela
$sql = "INSERT INTO usuarios (login, senha) VALUES ('$login', '$senhaHash')";

if ($conexao->query($sql) === TRUE) {
    echo "Novo usuário cadastrado com sucesso.";
} else {
    echo "Erro ao cadastrar novo usuário: " . $conexao->error;
}

// Fechar a conexão
$conexao->close();
?>
