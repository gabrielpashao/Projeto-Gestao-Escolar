<?php
// Parâmetros de conexão
$host = "localhost"; // ou o endereço do seu servidor MySQL
$usuario = "root";
$senha = "";
$banco = "escola"; // o nome do seu banco de dados

// Conexão com o banco de dados
$conexao = new mysqli($host, $usuario, $senha, $banco);

// Verifica se houve erro na conexão
if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
}

// Define o charset para utf8 (opcional, dependendo da configuração do seu banco de dados)
$conexao->set_charset("utf8");
?>
