<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <title>Minhas Notas</title>
</head>

<body>
    <nav>
        <a href="home-student.php" class="logo"><img src="src/img/Nome do sitema (1)-Photoroom.png-Photoroom.png" alt="Logotipo do sistema"></a>
        <a href="profile-student.php" class="perfil"><button>Perfil</button></a>
        <select onchange="location = this.value;" class="add">
            <option value="">Central do Aluno</option>
            <option value="view-notes.php">Notas</option>
            <option value="view-absence.php">Faltas</option>
        </select>
        <a href="help.php" class="help"><button>Ajuda</button></a>
        <a href="logout.php" class="logout"><button>Sair</button></a>
    </nav>

    <section id="add">

        <h3>Notas</h3>
        <div class="profile-timetable">
                <table border="1">
                    <tr>
                        <th></th>
                        <th>1* Avaliação</th>
                        <th>2* Avaliação</th>
                        <th>3 Avaliação</th>
                        <th>4 Avaliação</th>
                        <th>Total</th>
                    </tr>
                    <tr>
                        <th>Português</th>
                        <td colspan="1">6,5</td>
                        <td colspan="1">4,0</td>
                        <td colspan="1">7,5</td>
                        <td colspan="1">8,0</td>
                        <td colspan="1">26</td>
                    </tr>
                    <tr>
                        <th>Matemática</th>
                        <td colspan="1">7,5</td>
                        <td colspan="1">5,0</td>
                        <td colspan="1">8,5</td>
                        <td colspan="1">9,0</td>
                        <td colspan="1">30</td>
                    </tr>
                    <tr>
                        <th>Geografia</th>
                        <td colspan="1">7,5</td>
                        <td colspan="1">10</td>
                        <td colspan="1">9,5</td>
                        <td colspan="1">6,0</td>
                        <td colspan="1">33</td>
                    </tr>
                    <tr>
                        <th>Biologia</th>
                        <td colspan="1">7,5</td>
                        <td colspan="1">8,0</td>
                        <td colspan="1">9,5</td>
                        <td colspan="1">9,0</td>
                        <td colspan="1">34</td>
                    </tr>
                    <tr>
                        <th>Fisica</th>
                        <td colspan="1">2,5</td>
                        <td colspan="1">5,0</td>
                        <td colspan="1">9,5</td>
                        <td colspan="1">10</td>
                        <td colspan="1">27</td>
                    </tr>
                    <tr>
                        <th>historia</th>
                        <td colspan="1">9,0</td>
                        <td colspan="1">7,0</td>
                        <td colspan="1">10</td>
                        <td colspan="1">8,0</td>
                        <td colspan="1">34</td>
</tr>
                      
                </table>
            </div>
</body>

</html>