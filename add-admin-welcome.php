<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Cadastrar Gestor</title>
</head>
<body>
    <div id="login-block">
        <img src="src/img/Nome do sitema (1)-Photoroom.png-Photoroom.png" alt="Logo of the company." class="logo"> <br> <br>
        <h1>Informações do Gestor</h1>
        <form method="post" action="new-admin-welcome.php">
                <label for="admin-name">Digite seu nome</label> <br>
                <input type="text" name="admin-name" placeholder="Ex.: Mária de Fátima" required="required"> <br> <br>
                <label for="admin-email">Digite o seu e-mail:</label> <br>
                <input type="text" name="admin-email" placeholder="Ex.: dmarques@efl.com.br" required="required"> <br> <br>
                <button type="submit" name="submit">Cadastrar</button>
        </form>
    </div>
</body>
</html>