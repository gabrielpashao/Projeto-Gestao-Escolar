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
        <form action="">
            <select name="school-class" class="student-class" required="required">
                <option value="">Selecione a turma</option>
                <option value="school-class1">Turma 1</option>
                <option value="school-class2">Turma 2</option>
            </select>
            <select name="semester" class="student-semester" required="required">
                <option value="">Selecione o semestre</option>
                <option value="semester1">2024.1</option>
                <option value="semester2">2024.2</option>
            </select>
            <select name="unity" class="student-unity" required="required">
                <option value="">Selecione a unidade</option>
                <option value="unity1">Unidade I</option>
                <option value="unity2">Unidade II</option>
                <option value="unity3">Unidade III</option>
                <option value="unity4">Unidade IV</option>
            </select> <br>
            <select name="name" class="student-name" required="required">
                <option value="">Selecione o aluno</option>
                <option value="student1">Fulaninho da Silva Sauro</option>
                <option value="student2">Gibalmar Fernandes Aquino</option>
                <option value="student3">Simas Turbo Pereira</option>
                <option value="student4">Cuca Beludo Aquino Rego</option>
                <option value="student5">Jacinto Pinto Aquin Rego</option>
            </select> <br>
            <input type="text" name="av1" class="av1" placeholder="Nota de AV1">
            <input type="text" name="av2" class="av2" placeholder="Nota de AV2">
            <input type="text" name="av3" class="av3" placeholder="Nota de AV3"> <br>
            <button type="submit" name="submit">Cadastrar</button>
        </form>

    </section>
</body>

</html>