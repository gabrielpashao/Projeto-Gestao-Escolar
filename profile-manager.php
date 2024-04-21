<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <title>Perfil</title>
</head>

<body>

    /* BARRA DE NAVEGAÇÃO */

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

    /* PÁGINA DE PERFIL */

    <section id="info">
        <div id="profile-head">
            <img src="src/img/cabeçao.jpeg" alt="Foto de perfil do usuário" class="profile-pic">
            <h2 class="profile-name">Xandão Cabeça de Ovo Ditador da Silva</h2>
        
        </div>
        <div id="profile-description">
            <div class="profile-institution">
                <h3>Instituição de Ensino</h3>
                <p>Cólegio de idiotas STF/TSE</p>
            </div>
            <div class="profile-nivel">
                <h3>Cargo</h3>
                <p><i>Gestor</i></p>
            </div>
            <div class="profile-contact">
                <h3>Contato</h3>
                <p><b>E-mail: </b><i>xandão@gmail.com.br</i></p>
                <p><b>Telefone: </b>+55 81 94002-8922 | +55 81 97891-2345</p>
            </div>
            <div class="profile-timetable">
                <h3>Agenda</h3>
                <table border ="1">
                    <tr>
                        <th>Segunda-feira</th>
                        <td>reunião dos professores 09:20</td>
                    </tr>
                    <tr>
                        <th>Terça-feira</th>
                    </tr>
                    <tr>
                        <th>Quarta-feira</th>
                    </tr>
                    <tr>
                        <th>Quinta-Feira</th>
                    </tr>
                    <tr>
                        <th>Sexta-feira</th>
                    </tr>
                </table>
            </div>
            <div class="profile-message">
                <h3>Mensagem</h3>
                <p><i>Neste campo haverá uma breve mensagem como uma descrição, um recado, ou informações adicionais que o usuário queira adicionar. As informações exibidas aqui serão inseridas pela instituição e só poderão ser editadas por ela (com exceção deste campo e da foto de perfil), afim de evitar alteração indevida de informações. Poderá ainda haver outros campos conforme necessidade da instituição.</i></p>
            </div>
        </div>
    </section>


</body>

</html>