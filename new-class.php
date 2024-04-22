<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conectar ao banco de dados e outras verificações...

    // Capturar os dados do formulário
    $nome_turma = $conexao->real_escape_string($_POST['name-class']);
    $disciplinas = $conexao->real_escape_string($_POST['class-discipline']); // Array de disciplinas selecionadas
    
    $sql_turma = "INSERT INTO turma (nome) VALUES ('$nome_turma')";

    // Montar a consulta SQL para inserir a turma
   if ($conexao->query($sql_turma) === TRUE) {
        $id_turma = $conexao->insert_id;

        foreach ($disciplinas as $id_disciplina) {
            $id_disciplina = $conexao->real_escape_string($id_disciplina);
            $sql_disciplina = "UPDATE turma SET id_disciplina = '$id_disciplina'
                               WHERE id = '$id_turma'";
            $conexao->query($sql_disciplina);
        }

        echo '<script>alert("Turma cadastrada com sucesso!"); window.location.href = "add-class.php";</script>';
   } else {
        echo '<script>alert("Erro ao cadastrar a turma."); window.location.href = "add-class.php";</script>';
   }

    // Fechar a conexão
    $conexao->close();
}
?>
