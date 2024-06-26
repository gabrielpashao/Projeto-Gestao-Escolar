<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <title>Cadastro de Turmas</title>
</head>
<body>
<nav>
        <a href="home-manager.php" class="logo"><img src="src/img/Nome do sitema (1)-Photoroom.png-Photoroom.png" alt="Logotipo do sistema"></a>
        <a href="profile-manager.php" class="perfil"><button>Perfil</button></a>
        <select onchange="location = this.value;" class="add">
            <option value="">Cadastrar/ Adicionar</option>
            <option value="add-student.php">Cadastrar aluno</option>
            <option value="add-teacher.php">Cadastrar professor</option>
            <option value="add-class.php">Cadastrar turma</option>
            <option value="add-discipline.php">Cadastrar disciplina</option>
            <option value="add-user.php">Cadastrar usuário</option>
        </select>
        <select onchange="location = this.value;" class="add">
            <option value="">Editar/ Atualizar</option>
            <option value="update-student.php">Editar aluno</option>
            <option value="update-teacher.php">Editar professor</option>
            <option value="update-class.php">Editar turma</option>
            <option value="update-discipline.php">Editar disciplina</option>
            <option value="update-user.php">Editar usuário</option>
        </select>
        <select onchange="location = this.value;" class="add">
            <option value="">Excluir/ Deletar</option>
            <option value="delete-student.php">Excluir aluno</option>
            <option value="delete-teacher.php">Excluir professor</option>
            <option value="delete-class.php">Excluir turma</option>
            <option value="delete-discipline.php">Excluir disciplina</option>
            <option value="delete.php">Excluir usuário</option>
        </select>
        <a href="help.php" class="help"><button>Ajuda</button></a>
        <a href="logout.php" class="logout"><button>Sair</button></a>
    </nav>

    <section id="add">

        <h3>Cadastro de Turmas</h3>
        <form action="new-class.php" method="post">
            <input type="text" name="name-class" class="street" placeholder="Nome da turma" required="required"> <br>
            <label for="class-discipline">Selecione as disciplinas: </label> <br>
            <div class="checkbox-discipline">
            <?php
            // Conecte-se ao banco de dados e execute a consulta SQL para obter as turmas
            $conexao = new mysqli('localhost', 'root', '', 'escola');
            $sql = "SELECT id, nome FROM disciplina";
            $resultado = $conexao->query($sql);

            // Verifique se a consulta retornou resultados
            if ($resultado->num_rows > 0) {
                // Loop através dos resultados para criar as checkboxes
                while ($row = $resultado->fetch_assoc()) {
                    echo '<input type="checkbox" name="class-discipline[]" value="' . $row['id'] . '"> ' . $row['nome'] . '<br>';
                }
            } else {
                echo '<p>Nenhuma disciplina encontrada</p>';
            }

            // Feche a conexão com o banco de dados
            $conexao->close();
            ?>
            </div> <br>
            <button type="submit" name="submit">Cadastrar</button>
        </form>

    </section>
</body>
</html>
