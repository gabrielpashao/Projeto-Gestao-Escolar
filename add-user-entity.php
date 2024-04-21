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
        <form action="new-user.php" method="post">
            <input type="hidden" name="login" value="<?php echo $_POST['login']; ?>">
            <input type="hidden" name="password" value="<?php echo $_POST['password']; ?>">
            <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
            <input type="hidden" name="tipo_usuario" value="<?php echo $_POST['tipo_usuario']; ?>">
            <select name="id_atrelado" class="atrelado" required="required">
                <option value="">Selecione quem atrelar</option>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['tipo_usuario'])) {

                    // Conectar ao banco de dados e gerar as opções do select com base no tipo de usuário selecionado
                    $conexao = new mysqli('localhost', 'root', '', 'escola');

                    // Verifique a conexão
                    if ($conexao->connect_error) {
                        die("Erro na conexão: " . $conexao->connect_error);
                    }

                    $login = $_POST['login'];
                    $senha = $_POST['password'];
                    $email = $_POST['email'];
                    $tipo_usuario = $_POST['tipo_usuario'];
                    $query = "";

                    switch ($tipo_usuario) {
                        case 'aluno':
                            $query = "SELECT id, nome FROM aluno";
                            $tipo_usuario = 'aluno';
                            break;
                        case 'professor':
                            $query = "SELECT id, nome FROM professor";
                            $tipo_usuario = 'professor';
                            break;
                        case 'gestor':
                            $query = "SELECT id, nome FROM gestor";
                            $tipo_usuario = 'gestor';
                            break;
                    }
                    $result = $conexao->query($query);
                    while ($row = $result->fetch_assoc()) {
                        echo '<option value="' . $row['id'] . '">' . $row['nome'] . '</option>';
                    }
                }
                ?>
            </select> <br> <br>
            <button type="submit" name="submit">Cadastrar</button>
        </form>
    </section>
</body>

</html>