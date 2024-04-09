<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Conectar ao banco de dados
    $conexao = new mysqli('localhost', 'root', '', 'escola');

    // Verificar a conexão
    if ($conexao->connect_error) {
        die("Erro na conexão: " . $conexao->connect_error);
    }

    // Capturar os dados do formulário
    $nota_av1 = $conexao->real_escape_string($_POST['av1']);
    $nota_av2 = $conexao->real_escape_string($_POST['av2']);
    $nota_av3 = $conexao->real_escape_string($_POST['av3']);
    $id_aluno = $conexao->real_escape_string($_POST['name']);
    $unidade = $conexao->real_escape_string($_POST['unity']);

    // Montar a consulta SQL
    $sql = "INSERT INTO semestre (unidade) VALUES ('$unidade');
            INSERT INTO nota_aluno (nota_av1, nota_av2, nota_av3, id_aluno, id_semestre)
            VALUES ('$nota_av1', '$nota_av2', '$nota_av3', 
            (SELECT id_aluno FROM aluno WHERE nome_aluno = '$id_aluno'), LAST_INSERT_ID())";

    // Executar a consulta SQL
    if ($conexao->multi_query($sql) === TRUE) {
        echo '<script>alert("Nota cadastrada com sucesso!"); window.location.href = "add-notes.php";</script>';
    } else {
        echo '<script>alert("Não foi possível cadastrar a nota."); window.location.href = "add-notes.php";</script>';
    }

    // Fechar a conexão
    $conexao->close();
}
?>
