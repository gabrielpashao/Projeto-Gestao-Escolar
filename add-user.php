<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <title>Cadastrar Usuário</title>
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

        <h3>Cadastro de Usuário</h3>
        <form action="add-user-entity.php" method="post">
            <input type="text" name="login" class="street" placeholder="Usuário/ Login" required="required">
            <input type="password" name="password" class="number-house" placeholder="Senha" required="required">
            <input type="email" name="email" class="email" placeholder="E-mail"> <br>
            <select name="tipo_usuario" class="usuario" required="required">
                <option value="">Selecione o tipo</option>
                <option value="aluno">Aluno</option>
                <option value="professor">Professor</option>
                <option value="gestor">Gestor</option>
            </select> <br> <br>
            <button type="submit" name="submit">Continuar</button>
        </form> <br>

    </section>
</body>

</html>
