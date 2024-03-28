<?php

echo "Teste para ver se funciona";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se os campos de nome de usuário e senha estão definidos e não estão vazios
    if (isset($_POST["username"]) && isset($_POST["password"]) && !empty($_POST["username"]) && !empty($_POST["password"])) {
        // Verifica se o nome de usuário e senha estão corretos
        if ($_POST["username"] === "teste" && $_POST["password"] === "1234") {
            // Nome de usuário e senha corretos, redireciona para a página home.html
            header("Location: home.php");
            exit; // Importante: termina o script após o redirecionamento para evitar que o código restante seja executado
        } else {
            // Nome de usuário ou senha incorretos
            echo "Nome de usuário ou senha incorretos.";
        }
    } else {
        // Um ou ambos os campos estão vazios
        echo "Por favor, preencha todos os campos.";
    }
}

?>