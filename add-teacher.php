User
<!D<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <title>Cadastro de Professor</title>
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
            <option value="update-student.php">Cadastrar aluno</option>
            <option value="update-teacher.php">Cadastrar professor</option>
            <option value="update-class.php">Cadastrar turma</option>
            <option value="update-discipline.php">Cadastrar disciplina</option>
            <option value="update-user.php">Cadastrar usuário</option>
        </select>
        <select onchange="location = this.value;" class="add">
            <option value="">Excluir/ Deletar</option>
            <option value="delete-student.php">Cadastrar aluno</option>
            <option value="delete-teacher.php">Cadastrar professor</option>
            <option value="delete-class.php">Cadastrar turma</option>
            <option value="delete-discipline.php">Cadastrar disciplina</option>
            <option value="delete.php">Cadastrar usuário</option>
        </select>
        <a href="help.php" class="help"><button>Ajuda</button></a>
        <a href="logout.php" class="logout"><button>Sair</button></a>
    </nav>

    <section id="add">

        <h3>Cadastro de Professores</h3>
        <form action="new-teacher.php" method="post">
            <input type="text" name="name" class="name" placeholder="Nome do professor" required="required">
            <input type="text" name="street" class="street" placeholder="Rua" required="required">
            <input type="text" name="number-house" class="number-house" placeholder="Número" required="required">
            <input type="text" name="neighborhood" class="neighborhood" placeholder="Bairro" required="required">
            <input type="text" name="city" class="city" placeholder="Cidade" required="required"> <br>
            <input type="text" name="phone-number" class="phone-number" placeholder="Telefone ou celular" required="required">
            <input type="text" name="phone-number-optional" class="phone-number-optional" placeholder="Telefone ou celular (opcional)">
            <input type="email" name="email" class="email" placeholder="E-mail"> <br>
            
            <select name="school-class" class="school-class" required="required">
                <option value="">Selecione a disciplina</option>
                <?php
                // Conecte-se ao banco de dados e execute a consulta SQL para obter as turmas
                $conexao = new mysqli('localhost', 'root', '', 'escola');
                $sql = "SELECT id, nome FROM disciplina";
                $resultado = $conexao->query($sql);

                // Verifique se a consulta retornou resultados
                if ($resultado->num_rows > 0) {
                    // Loop através dos resultados para criar as opções no dropdown
                    while ($row = $resultado->fetch_assoc()) {
                        echo '<option value="' . $row['id'] . '">' . $row['nome'] . '</option>';
                    }
                } else {
                    echo '<option value="">Nenhuma disciplina encontrada</option>';
                }

                // Feche a conexão com o banco de dados
                $conexao->close();
                ?>
            </select> <br>
            <label for="date-of-birth">Data de Nascimento: </label>
            <input type="date" name="date-of-birth" class="date-of-birth" required="required">
            <label for="date-of-birth">Data de Admissão: </label>
            <input type="date" name="date-of-admission" class="date-of-birth" required="required"> <br>
            <label for="teacher-pic">Insira a foto do professor: </label>
            <input type="file" name="teacher-pic" class="student-pic"> <br>
            <button type="submit" name="submit">Cadastrar</button>
        </form>

    </section>
</body>
</html> 

