<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <title>Minhas Faltas</title>
</head>

<body>
    <nav>
        <a href="home-student.php" class="logo"><img src="src/img/Nome do sitema (1)-Photoroom.png-Photoroom.png" alt="Logotipo do sistema"></a>
        <a href="profile-student.php" class="perfil"><button>Perfil</button></a>
        <select onchange="location = this.value;" class="add">
            <option value="">Central do Aluno</option>
            <option value="view-notes.php">Visualizar Notas</option>
            <option value="view-absence.php">Visualizar Faltas</option>
        </select>
        <a href="help.php" class="help"><button>Ajuda</button></a>
        <a href="logout.php" class="logout"><button>Sair</button></a>
    </nav>

    <section id="add">

        <h3>Minhas Faltas</h3>
        <select onchange="location = this.value;" class="add">
            <option value="add-absence.php">Matérias</option>
            <option value="add-absence2.php">Português
            </option>
            <option value="add-absence3.php">Matemática</option>
            <option value="add-absence4.php">Biologia</option>
            <option value="add-absence5.php">Geografia</option>
            <option value="add-absence6.php">Física</option>
            <option value="add-absence7.php">História</option>
        </select>          
           
</body>

</html>