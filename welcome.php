<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Bem vindo!</title>
</head>
<body>
    <div id="login-block">
        <img src="src/img/Nome do sitema (1)-Photoroom.png-Photoroom.png" alt="Logo of the company." class="logo"> <br> <br>
        <h1>Antes de começar...</h1>
        <h3>Vamos cadastrar sua escola ao nosso sistema. É Simples!</h3> <br>
        <form method="post" action="creationDB.php">
                <label for="school-name">Digite o nome da sua escola (este será o nome do Banco de Dados):</label> <br>
                <input type="text" name="school-name" placeholder="Ex.: Escola Futuro Longinquo" required="required"> <br> <br>
                <label for="admin-name">Digite seu nome</label> <br>
                <input type="text" name="admin-name" placeholder="Ex.: Mária de Fátima" required="required"> <br> <br>
                <label for="admin-email">Digite o seu e-mail:</label> <br>
                <input type="text" name="admin-email" placeholder="Ex.: dmarques@efl.com.br" required="required"> <br> <br>
                <h1>Vamos cadastrar sua primeira turma!</h1> <br>
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