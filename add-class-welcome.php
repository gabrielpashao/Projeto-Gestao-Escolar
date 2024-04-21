<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Cadastrar turma</title>
</head>
<body>
    <div id="login-block">
        <img src="src/img/Nome do sitema (1)-Photoroom.png-Photoroom.png" alt="Logo of the company." class="logo"> <br> <br>
        <h1>Cadastrar primeira turma</h1>
        <form method="post" action="new-class-welcome.php">
                <label for="year-semester">Insira o ano inicial:</label> <br>
                <input type="text" name="year-semester" placeholder="Ex.: 2023" required="required"> <br> <br>
                <label for="period-semester">Insira o semestre inicial</label> <br>
                <input type="text" name="period-semester" placeholder="Ex.: 1" required="required"> <br> <br>
                <label for="school-class">Crie a primeira turma:</label> <br>
                <input type="text" name="school-class" placeholder="Ex.: Maternal II" required="required"> <br> <br>
                <label for="class-discipline">Crie uma disciplina para essa turma:</label> <br>
                <input type="text" name="class-discipline" placeholder="Ex.: Filosofia" required="required"> <br> <br>
                <button type="submit" name="submit">Criar</button>
        </form>
    </div>
</body>
</html>