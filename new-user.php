<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Dados do formulário
    $login = $_POST['login'];
    $senha = $_POST['password'];
    $email = $_POST['email'];
    $tipo_usuario = $_POST[$tipo_usuario];
    $id_atrelado = $_POST['id_atrelado'];
    $campo_atrelado = '';

    // Criptografar a senha usando bcrypt
    $senhaHash = password_hash($senha, PASSWORD_BCRYPT);

    // Conectar ao banco de dados
    $conexao = new mysqli('localhost', 'root', '', 'escola');

    // Verificar a conexão
    if ($conexao->connect_error) {
        die("Erro na conexão: " . $conexao->connect_error);
    }

    if ($tipo_usuario == 'aluno') {
        $campo_atrelado = 'id_aluno';
        $sql = "INSERT INTO usuarios (login, senha, email, tipo_usuario, $campo_atrelado) 
                VALUES ('$login', '$senhaHash', '$email', '$tipo_usuario', '$id_atrelado')";
        if ($conexao->query($sql) === TRUE) {
            echo "Novo usuário cadastrado com sucesso.";
        } else {
            echo "Erro ao cadastrar novo usuário: " . $conexao->error;
        }
    } elseif ($tipo_usuario == 'professor') {
        $campo_atrelado = 'id_professor';
        $sql = "INSERT INTO usuarios (login, senha, email, tipo_usuario, $campo_atrelado) 
                VALUES ('$login', '$senhaHash', '$email', '$tipo_usuario', '$id_atrelado')";
        if ($conexao->query($sql) === TRUE) {
            echo "Novo usuário cadastrado com sucesso.";
        } else {
            echo "Erro ao cadastrar novo usuário: " . $conexao->error;
        }
    } elseif ($tipo_usuario == 'gestor') {
        $campo_atrelado = 'id_gestor';
        $sql = "INSERT INTO usuarios (login, senha, email, tipo_usuario, $campo_atrelado) 
                VALUES ('$login', '$senhaHash', '$email', '$tipo_usuario', '$id_atrelado')";
        if ($conexao->query($sql) === TRUE) {
            echo "Novo usuário cadastrado com sucesso.";
        } else {
            echo "Erro ao cadastrar novo usuário: " . $conexao->error;
        }
    } elseif ($tipo_usuario === null) {
        echo "Tipo de usuário vazio" . $conexao->error;
    } else {
        echo "Não foi possível receber o tipo de usuário" . $conexao->error;
    }

    // Fechar a conexão
    $conexao->close();
} else {
    echo "Erro: Método HTTP inválido.";
}
