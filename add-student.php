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
        <form action="">
            <input type="text" name="name" class="name" placeholder="Nome do aluno" required="required"> <br>
            <input type="text" name="address" class="address" placeholder="Endereço" required="required">
            <input type="text" name="parents" class="parents" placeholder="Pais ou responsáveis" required="required">
            <input type="text" name="parents-optional" class="parents-optional" placeholder="Pais ou responsáveis (opcional)"> <br>
            <input type="text" name="phone-number" class="phone-number" placeholder="Telefone ou celular" required="required">
            <input type="text" name="phone-number-optional" class="phone-number-optional" placeholder="Telefone ou celular (opcional)">
            <input type="email" name="email" class="email" placeholder="E-mail"> <br>
            <label for="date-of-birth">Data de Nascimento: </label>
            <input type="date" name="date-of-birth" class="date-of-birth" required="required">
            <label for="school-class">Selecione a turma: </label>
            <select name="school-class" class="school-class" required="required">
                <option value="school-class1">Turma 1</option>
                <option value="school-class2">Turma 2</option>
                <option value="school-class3">Turma 3</option>
                <option value="school-class4">Turma 4</option>
                <option value="school-class5">Turma 5</option>
            </select> <br>
            <label for="student-pic">Insira a foto do aluno: </label>
            <input type="file" name="student-pic" class="student-pic"> <br>
            <button type="submit" name="submit">Cadastrar</button>
        </form>

    </section>
</body>

</html>