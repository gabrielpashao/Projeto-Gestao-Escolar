<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["username"]) && isset($_POST["password"]) && !empty($_POST["username"]) && !empty($_POST["password"])) {
        if ($_POST["username"] === "gestor" && $_POST["password"] === "gestor") {
            header("Location: add-database-welcome.php");
            exit;
        } elseif ($_POST["username"] === "aluno" && $_POST["password"] === "aluno") {
            header("Location: home-student.php");
            exit;
        } elseif ($_POST["username"] === "professor" && $_POST["password"] === "professor") {
            header("Location: home-teacher.php");
            exit;
        } else {
            echo "Nome de usuário ou senha incorretos.";
        }
    } else {
        echo "Por favor, preencha todos os campos.";
    }
}

?>