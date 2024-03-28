<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <title>Perfil</title>
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

    <section id="info">
        <div id="profile-head">
            <img src="src/img/profile.jpg" alt="Foto de perfil do usuário" class="profile-pic">
            <h2 class="profile-name">Jair Inácio Messias da Silva</h2>
            <a href="edit-profile.php" class="edit-button">
                <p>Editar</p>
            </a>
        </div>
        <div id="profile-description">
            <div>
                <h3>Disciplinas</h3>
                <li>
                    Física
                </li>
                <li>
                    Matemática
                </li>
                <li>
                    História
                </li>
            </div>
            <div class="profile-institution">
                <h3>Instituição de Ensino</h3>
                <p>Nome da IE</p>
            </div>
            <div class="profile-nivel">
                <h3>Cargo/função</h3>
                <p><i>Professor/Gestor</i></p>
            </div>
            <div class="profile-contact">
                <h3>Contato</h3>
                <p><b>E-mail: </b><i>exemplo@exemplo.com.br</i></p>
                <p><b>Telefone: </b>+55 81 99876-5432 | +55 81 97891-2345</p>
            </div>
            <div class="profile-timetable">
                <h3>Grade horária</h3>
                <table border="1">
                    <tr>
                        <th></th>
                        <th>07:00h</th>
                        <th>07:45h</th>
                        <th>08:15h</th>
                        <th>09:00h</th>
                        <th>09:45h</th>
                        <th>10:30h</th>
                        <th>11:15h</th>
                        <th>14:00h</th>
                        <th>14:45h</th>
                        <th>15:30h</th>
                        <th>16:15h</th>
                    </tr>
                    <tr>
                        <th>Segunda-feira</th>
                        <td colspan="2">Física</td>
                        <td colspan="1"></td>
                        <td colspan="1"></td>
                        <td colspan="1"></td>
                        <td colspan="2">Matemática</td>
                        <td colspan="1"></td>
                        <td colspan="1"></td>
                        <td colspan="2">Física</td>
                    </tr>
                    <tr>
                        <th>Terça-feira</th>
                        <td colspan="1"></td>
                        <td colspan="2">História</td>
                        <td colspan="2">Matemática</td>
                        <td colspan="1"></td>
                        <td colspan="1"></td>
                        <td colspan="1"></td>
                        <td colspan="1"></td>
                        <td colspan="1"></td>
                        <td colspan="1"></td>
                    </tr>
                    <tr>
                        <th>Quarta-feira</th>
                        <td colspan="11">N/A</td>
                    </tr>
                    <tr>
                        <th>Quinta-feira</th>
                        <td colspan="11">N/A</td>
                    </tr>
                    <tr>
                        <th>Sexta-feira</th>
                        <td colspan="1"></td>
                        <td colspan="1"></td>
                        <td colspan="1"></td>
                        <td colspan="1"></td>
                        <td colspan="1"></td>
                        <td colspan="1"></td>
                        <td colspan="2">História</td>
                        <td colspan="2">História</td>
                        <td colspan="1"></td>
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