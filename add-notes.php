<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <title>Cadastrar Notas</title>
</head>

<body>
    <nav>
        <a href="home.php" class="logo"><img src="src/img/Nome do sitema (1)-Photoroom.png-Photoroom.png" alt="Logotipo do sistema"></a>
        <a href="perfil.php" class="perfil"><button>Perfil</button></a>
        <select onchange="location = this.value;" class="add">
            <option value="">Cadastrar/Adicionar</option>
            <option value="add-student.php">Cadastrar aluno</option>
            <option value="add-notes.php">Cadastrar notas</option>
            <option value="add-absence.php">Cadastrar faltas</option>
        </select>
        <a href="view.php" class="view"><button>Consultar</button></a>
        <a href="help.php" class="help"><button>Ajuda</button></a>
        <a href="logout.php" class="logout"><button>Sair</button></a>
    </nav>

    <section id="add">

        <h3>Cadastro de Notas</h3>
        <form action="new-notes.php" method="post">
            <select name="school-class" class="student-class" required="required">
            <option value="">Selecione a turma</option>
                <?php
                // Conecte-se ao banco de dados e execute a consulta SQL para obter as turmas
                $conexao = new mysqli('localhost', 'root', '', 'escola');
                $sql = "SELECT id_turma, nome_turma FROM turma";
                $resultado = $conexao->query($sql);

                // Verifique se a consulta retornou resultados
                if ($resultado->num_rows > 0) {
                    // Loop através dos resultados para criar as opções no dropdown
                    while ($row = $resultado->fetch_assoc()) {
                        echo '<option value="' . $row['id_turma'] . '">' . $row['nome_turma'] . '</option>';
                    }
                } else {
                    echo '<option value="">Nenhuma turma encontrada</option>';
                }

                // Feche a conexão com o banco de dados
                $conexao->close();
                ?>
            </select>
            <select name="semester" class="student-semester" required="required">
            <option value="">Selecione o semestre</option>
                <?php
                // Conecte-se ao banco de dados e execute a consulta SQL para obter as turmas
                $conexao = new mysqli('localhost', 'root', '', 'escola');
                $sql = "SELECT id_semestre FROM semestre";
                $resultado = $conexao->query($sql);

                // Verifique se a consulta retornou resultados
                if ($resultado->num_rows > 0) {
                    // Loop através dos resultados para criar as opções no dropdown
                    while ($row = $resultado->fetch_assoc()) {
                        echo '<option value="' . $row['id_semestre'] . '">' . $row['id_semestre'] . '</option>';
                    }
                } else {
                    echo '<option value="">Nenhum semestre encontrado</option>';
                }

                // Feche a conexão com o banco de dados
                $conexao->close();
                ?>
            </select>
            <select name="unity" class="student-unity" required="required">
            <option value="">Selecione a unidade</option>
                <?php
                // Conecte-se ao banco de dados e execute a consulta SQL para obter as turmas
                $conexao = new mysqli('localhost', 'root', '', 'escola');
                $sql = "SELECT unidade FROM semestre";
                $resultado = $conexao->query($sql);

                // Verifique se a consulta retornou resultados
                if ($resultado->num_rows > 0) {
                    // Loop através dos resultados para criar as opções no dropdown
                    while ($row = $resultado->fetch_assoc()) {
                        echo '<option value="' . $row['unidade'] . '">' . $row['unidade'] . '</option>';
                    }
                } else {
                    echo '<option value="">Nenhuma unidade encontrada</option>';
                }

                // Feche a conexão com o banco de dados
                $conexao->close();
                ?>
            </select> <br>
            <select name="name" class="student-name" required="required">
            <option value="">Selecione o aluno</option>
                <?php
                // Conecte-se ao banco de dados e execute a consulta SQL para obter as turmas
                $conexao = new mysqli('localhost', 'root', '', 'escola');
                $sql = "SELECT id_aluno, nome_aluno FROM aluno";
                $resultado = $conexao->query($sql);

                // Verifique se a consulta retornou resultados
                if ($resultado->num_rows > 0) {
                    // Loop através dos resultados para criar as opções no dropdown
                    while ($row = $resultado->fetch_assoc()) {
                        echo '<option value="' . $row['id_aluno'] . '">' . $row['nome_aluno'] . '</option>';
                    }
                } else {
                    echo '<option value="">Nenhum aluno encontrado</option>';
                }

                // Feche a conexão com o banco de dados
                $conexao->close();
                ?>
            </select> <br>
            <input type="text" name="av1" class="av1" placeholder="Nota de AV1">
            <input type="text" name="av2" class="av2" placeholder="Nota de AV2">
            <input type="text" name="av3" class="av3" placeholder="Nota de AV3"> <br>
            <button type="submit" name="submit">Cadastrar</button>
        </form>

    </section>
</body>

</html>