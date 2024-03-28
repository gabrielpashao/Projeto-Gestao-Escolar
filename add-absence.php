<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <title>Cadastrar Faltas</title>
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

        <h3>Cadastro de Faltas</h3>
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
            <div class="students-table">
                <table>
                    <thead>
                        <tr>
                            <th>Matrícula</th>
                            <th>Nome</th>
                            <th>Justificada</th>
                            <th>Não justificada</th>
                            <th>Justificativa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2024156498</td>
                            <td>Fulaninho da Silva Sauro</td>
                            <td><input type="radio" name="absence-justify" value="absence-justify"></td>
                            <td><input type="radio" name="absence-injustify" value="absence-injustify"></td>
                            <td><textarea name="justify" class="justify" cols="20" rows="2" placeholder="Insira justificativa"></textarea></td>
                        </tr>
                        <tr>
                            <td>2024369547</td>
                            <td>Gibalmar Fernandes Aquino</td>
                            <td><input type="radio" name="absence-justify" value="absence-justify"></td>
                            <td><input type="radio" name="absence-injustify" value="absence-injustify"></td>
                            <td><textarea name="justify" class="justify" cols="20" rows="2" placeholder="Insira justificativa"></textarea></td>
                        </tr>
                        <tr>
                            <td>2024254789</td>
                            <td>Simas Turbo Pereira</td>
                            <td><input type="radio" name="absence-justify" value="absence-justify"></td>
                            <td><input type="radio" name="absence-injustify" value="absence-injustify"></td>
                            <td><textarea name="justify" class="justify" cols="20" rows="2" placeholder="Insira justificativa"></textarea></td>
                        </tr>
                        <tr>
                            <td>2024587986</td>
                            <td>Cuca Beludo Aquino Rego</td>
                            <td><input type="radio" name="absence-justify" value="absence-justify"></td>
                            <td><input type="radio" name="absence-injustify" value="absence-injustify"></td>
                            <td><textarea name="justify" class="justify" cols="20" rows="2" placeholder="Insira justificativa"></textarea></td>
                        </tr>
                        <tr>
                            <td>2023557112</td>
                            <td>Jacinto Pinto Aquin Rego</td>
                            <td><input type="radio" name="absence-justify" value="absence-justify"></td>
                            <td><input type="radio" name="absence-injustify" value="absence-injustify"></td>
                            <td><textarea name="justify" class="justify" cols="20" rows="2" placeholder="Insira justificativa"></textarea></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <button type="submit" name="submit">Cadastrar</button>
        </form>

    </section>
</body>

</html>