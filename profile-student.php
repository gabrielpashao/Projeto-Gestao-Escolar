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
        <a href="home-student.php" class="logo"><img src="src/img/Nome do sitema (1)-Photoroom.png-Photoroom.png" alt="Logotipo do sistema"></a>
        <a href="profile-teacher.php" class="perfil"><button>Perfil</button></a>
        <select onchange="location = this.value;" class="add">
            <option value="">Central do Professor</option>
            <option value="add-notes.php">Cadastrar Notas</option>
            <option value="add-absence.php">Cdastrar Faltas</option>
        </select>
        <a href="help.php" class="help"><button>Ajuda</button></a>
        <a href="logout.php" class="logout"><button>Sair</button></a>
    </nav>
    
    <section id="info">
        <div id="profile-head">
            <img src="src/img/robertin.jpg" alt="Foto de perfil do usuário" class="profile-pic">
            <h2 class="profile-name">Robertinho Gonçalves da Silva</h2>
        
        </div>
        <div id="profile-description">
            <div>
                <h3>Disciplinas</h3>
                <li>
                    português
                 </li>
                <li>
                   Geografia
                 </li>
                 <li>
                     Biologia
                </li>
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
                <h3>Cargo</h3>
                <p><i>Aluno</i></p>
            </div>
            <div class="profile-contact">
                <h3>Contato</h3>
                <p><b>E-mail: </b><i>RobertinhoTotoso@exemplo.com.br</i></p>
                <p><b>Telefone: </b>+55 81 94002-8922| +55 81 97891-2345</p>
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
                        <th>10:00h</th>
                        <th>11:15h</th>
                    </tr>
                    <tr>
                        <th>Segunda-feira</th>
                        <td colspan="1">Física</td>
                        <td colspan="1">Matemática</td>
                        <td colspan="2">Geografia</td>
                        <td colspan="1"></td>
                        <td colspan="2">Português</td>
                    </tr>
                    <tr>
                        <th>Terça-feira</th>
                        <td colspan="2">História</td>
                        <td colspan="2">Matemática</td>
                        <td colspan="1"></td>
                        <td colspan="2">Biologia</td>
                        
                    </tr>
                    <tr>
                        <th>Quarta-feira</th>
                        <td colspan="2">Português</td>
                        <td colspan="1">fisíca</td>
                        <td colspan="1">historia</td>
                        <td colspan="1"></td>
                        <td colspan="2">geografia</td>
                    </tr>
                    <tr>
                        <th>Quinta-Feira</th>
                        <td colspan="3">Fisíca</td>
                        <td colspan="1">historia</td>
                        <td colspan="1"></td>
                        <td colspan="3">Matemática</td>
                    </tr>
                    <tr>
                        <th>Sexta-feira</th>
                        <td colspan="4">Português</td>
                        <td colspan="1"></td>
                        <td colspan="2">História</td>
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