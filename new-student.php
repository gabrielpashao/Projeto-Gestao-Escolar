<?php

// Verifique se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conecte-se ao banco de dados
    $conexao = new mysqli('localhost', 'root', '', 'escola');

    // Verifique a conexão
    if ($conexao->connect_error) {
        die("Erro na conexão: " . $conexao->connect_error);
    }

    // Recupere os dados do formulário e sanitize-os (para evitar SQL Injection)
    $nome = $conexao->real_escape_string($_POST['name']);
    $data_nasc = $conexao->real_escape_string($_POST['date-of-birth']);
    $mae = $conexao->real_escape_string($_POST['parents']);
    $pai = $conexao->real_escape_string($_POST['parents-optional']);
    $rua = $conexao->real_escape_string($_POST['street']);
    $numero = $conexao->real_escape_string($_POST['number-house']);
    $bairro = $conexao->real_escape_string($_POST['neighborhood']);
    $cidade = $conexao->real_escape_string($_POST['city']);
    $telefone1 = $conexao->real_escape_string($_POST['phone-number']);
    $telefone2 = $conexao->real_escape_string($_POST['phone-number-optional']);
    $email = $conexao->real_escape_string($_POST['email']);
    $id_turma = $conexao->real_escape_string($_POST['school-class']);
    $semestre = $conexao->real_escape_string($_POST['semester']);

    // SQL INSERT
    $sql = "INSERT INTO aluno (nome, email, data_nasc, id_turma)
            VALUES ('$nome', '$email', '$data_nasc', '$id_turma')";
              
    // Executar a consulta SQL
    if ($conexao->query($sql) === TRUE) {
        // Obter o ID do aluno inserido
        $id_aluno = $conexao->insert_id;

        // Inserir dados nas outras tabelas
        $sql_endereco = "INSERT INTO endereco_aluno (id_aluno, rua, numero, bairro, cidade)
                         VALUES ('$id_aluno', '$rua', '$numero', '$bairro', '$cidade')";
        $sql_telefone = "INSERT INTO telefone_aluno (id_aluno, telefone1, telefone2)
                         VALUES ('$id_aluno', '$telefone1', '$telefone2')";
        $sql_pais = "INSERT INTO pais_aluno (id_aluno, mae, pai)
                     VALUES ('$id_aluno', '$mae', '$pai')";
        $sql_turma = "UPDATE turma SET id_aluno = '$id_aluno' WHERE id = '$id_turma'";

        // Executar as consultas SQL
        if ($conexao->query($sql_endereco) === TRUE &&
            $conexao->query($sql_telefone) === TRUE &&
            $conexao->query($sql_pais) === TRUE &&
            $conexao->query($sql_turma) === TRUE) {
            echo '<script>alert("Aluno cadastrado com sucesso!"); window.location.href = "add-student.php";</script>';
        } else {
            echo '<script>alert("Não foi possível cadastrar o aluno."); window.location.href = "add-student.php";</script>';
        }
    } else {
        echo '<script>alert("Não foi possível cadastrar o aluno."); window.location.href = "add-student.php";</script>';
    }

    // Fechar a conexão
    $conexao->close();
}
?>
