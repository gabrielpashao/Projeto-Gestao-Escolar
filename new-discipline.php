<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Conectar ao banco de dados
    $conexao = new mysqli('localhost', 'root', '', 'escola');

    // Verificar a conexão
    if ($conexao->connect_error) {
        die("Erro na conexão: " . $conexao->connect_error);
    }

    // Capturar os dados do formulário
    $nome_disciplina = $conexao->real_escape_string($_POST['name-discipline']);
    $id_professor = $conexao->real_escape_string($_POST['name-teacher']);
    $id_semestre = $conexao->real_escape_string($_POST['semester']);

    // Capturar o ID do período inserido
    $sql = "INSERT INTO disciplina (nome, id_professor, id_semestre)
            VALUES ('$nome_disciplina', '$id_professor', '$id_semestre')";

    if ($conexao->query($sql) === TRUE) {
        echo '<script>alert("Disciplina cadastrada com sucesso!"); window.location.href = "add-class.php";</script>';
    } else {
        echo '<script>alert("Erro ao cadastrar a disciplina."); window.location.href = "add-class.php";</script>';
    }

    // Fechar a conexão
    $conexao->close();
}
?>
