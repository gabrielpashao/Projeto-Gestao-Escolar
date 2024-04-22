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
    $data_admissao = $conexao->real_escape_string($_POST['date-of-admission']);
    $rua = $conexao->real_escape_string($_POST['street']);
    $numero = $conexao->real_escape_string($_POST['number-house']);
    $bairro = $conexao->real_escape_string($_POST['neighborhood']);
    $cidade = $conexao->real_escape_string($_POST['city']);
    $telefone1 = $conexao->real_escape_string($_POST['phone-number']);
    $telefone2 = $conexao->real_escape_string($_POST['phone-number-optional']);
    $email = $conexao->real_escape_string($_POST['email']);
    $disciplina = $conexao->real_escape_string($_POST['discipline']);

    // SQL INSERT
    $sql = "INSERT INTO professor (nome, email, data_admissao, data_nasc)
            VALUES ('$nome', '$email', '$data_admissao', '$data_nasc')";
              
    // Executar a consulta SQL
    if ($conexao->query($sql) === TRUE) {
        // Obter o ID do aluno inserido
        $id_professor = $conexao->insert_id;

        // Inserir dados nas outras tabelas
        $sql_endereco = "INSERT INTO endereco_professor (id_professor, rua, numero, bairro, cidade)
                         VALUES ('$id_professor', '$rua', '$numero', '$bairro', '$cidade')";
        $sql_telefone = "INSERT INTO telefone_professor (id_professor, telefone1, telefone2)
                         VALUES ('$id_professor', '$telefone1', '$telefone2')";
        $sql_disciplina = "UPDATE disciplina SET id_professor = '$id_professor' WHERE id = '$disciplina'";

        // Executar as consultas SQL
        if ($conexao->query($sql_endereco) === TRUE &&
            $conexao->query($sql_telefone) === TRUE &&
            $conexao->query($sql_disciplina) === TRUE) {
            echo '<script>alert("Professor cadastrado com sucesso!"); window.location.href = "add-student.php";</script>';
        } else {
            echo '<script>alert("Não foi possível cadastrar o professor."); window.location.href = "add-student.php";</script>';
        }
    } else {
        echo '<script>alert("Não foi possível cadastrar o professor."); window.location.href = "add-student.php";</script>';
    }

    // Fechar a conexão
    $conexao->close();
}
?>
