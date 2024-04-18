<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <title>Cadastrar Aluno</title>
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

        <h3>Cadastro de Alunos</h3>
        <form action="new-student.php" method="post">
            <input type="text" name="name" class="name" placeholder="Nome do aluno" required="required">
            <input type="text" name="parents" class="parents" placeholder="Pais ou responsáveis" required="required">
            <input type="text" name="parents-optional" class="parents-optional" placeholder="Pais ou responsáveis (opcional)"> <br>
            <input type="text" name="street" class="street" placeholder="Rua" required="required">
            <input type="text" name="number-house" class="number-house" placeholder="Número" required="required">
            <input type="text" name="neighborhood" class="neighborhood" placeholder="Bairro" required="required">
            <input type="text" name="city" class="city" placeholder="Cidade" required="required"> <br>
            <input type="text" name="phone-number" class="phone-number" placeholder="Telefone ou celular" required="required">
            <input type="text" name="phone-number-optional" class="phone-number-optional" placeholder="Telefone ou celular (opcional)">
            <input type="email" name="email" class="email" placeholder="E-mail"> <br>
            
            <label for="school-class">Selecione a turma: </label>
            <select name="school-class" class="school-class" required="required">
                <option value="">Selecione a turma</option>
                <?php
                // Conecte-se ao banco de dados e execute a consulta SQL para obter as turmas
                $conexao = new mysqli('localhost', 'root', '', 'escola');
                $sql = "SELECT id, nome FROM turma";
                $resultado = $conexao->query($sql);

                // Verifique se a consulta retornou resultados
                if ($resultado->num_rows > 0) {
                    // Loop através dos resultados para criar as opções no dropdown
                    while ($row = $resultado->fetch_assoc()) {
                        echo '<option value="' . $row['id'] . '">' . $row['nome'] . '</option>';
                    }
                } else {
                    echo '<option value="">Nenhuma turma encontrada</option>';
                }

                // Feche a conexão com o banco de dados
                $conexao->close();
                ?>
            </select> 
            <label for="semester">Selecione o semestre: </label>
            <select name="semester" class="semester" required="required">
                <option value="">Selecione o semestre</option>
                <?php
                $conexao = new mysqli('localhost', 'root', '', 'escola');
                $sql = "SELECT id, ano, periodo FROM semestre";
                $resultado = $conexao->query($sql);

                if ($resultado->num_rows > 0) {
                    while ($row = $resultado->fetch_assoc()) {
                        $semestre = $row['ano'] . '.' . $row['periodo'];
                        echo '<option value="' . $row['id'] . '">' . $semestre . '</option>';
                    }
                } else {
                    echo '<option value"">Nenhuma turma encontrada</option>';
                }

                $conexao->close();
                ?>
            </select>
            <label for="date-of-birth">Data de Nascimento: </label>
            <input type="date" name="date-of-birth" class="date-of-birth" required="required"> <br>
            <label for="student-pic">Insira a foto do aluno: </label>
            <input type="file" name="student-pic" class="student-pic"> <br>
            <button type="submit" name="submit">Cadastrar</button>
        </form>

    </section>

    <div id="popup" class="popup">
    <div class="popup-content">
        <span class="fechar-popup" onclick="fecharPopup()">&times;</span>
        <p id="mensagem-popup"></p>
    </div>
</div>
</body>

</html>