<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Conectar ao banco de dados
    $conexao = new mysqli('localhost', 'root', '', 'escola');

    // Verificar a conexão
    if ($conexao->connect_error) {
        die("Erro na conexão: " . $conexao->connect_error);
    }

    // Capturar os dados do formulário
    $ano = $conexao->real_escape_string($_POST['year-semester']);
    $periodo = $conexao->real_escape_string($_POST['period-semester']);
    $nome_turma = $conexao->real_escape_string($_POST['school-class']);
    $nome_disciplina = $conexao->real_escape_string($_POST['class-discipline']);

    // Montar a consulta SQL para inserir o período
    $sql_periodo = "INSERT INTO semestre (ano, periodo) 
                    VALUES ('$ano', '$periodo');";

    // Executar a consulta SQL para inserir o período
    if ($conexao->query($sql_periodo) === TRUE) {
        // Capturar o ID do período inserido
        $id_periodo = $conexao->insert_id;

        // Montar a consulta SQL para inserir a disciplina
        $sql_disciplina = "INSERT INTO disciplina (nome, id_semestre)
                            VALUES ('$nome_disciplina', $id_periodo);";

        // Executar a consulta SQL para inserir a disciplina
        if ($conexao->query($sql_disciplina) === TRUE) {
            // Capturar o ID da disciplina inserida
            $id_disciplina = $conexao->insert_id;

            // Montar a consulta SQL para inserir a turma
            $sql_turma = "INSERT INTO turma (nome, id_disciplina)
                            VALUES ('$nome_turma', $id_disciplina);";

            // Executar a consulta SQL para inserir a turma
            if ($conexao->query($sql_turma) === TRUE) {
                echo '<script>alert("Turma cadastrada com sucesso!"); window.location.href = "home.php";</script>';
            } else {
                echo '<script>alert("Erro ao cadastrar a turma"); window.location.href = "add-class-welcome.php";</script>';
            }
        } else {
            echo '<script>alert("Erro ao cadastrar a disciplina"); window.location.href = "add-class-welcome.php";</script>';
        }
    } else {
        echo '<script>alert("Erro ao cadastrar o período"); window.location.href = "add-class-welcome.php";</script>';
    }

    // Fechar a conexão
    $conexao->close();
}
?>
