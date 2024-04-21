CREATE TABLE aluno (
	id INT PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(255) NOT NULL,
	email VARCHAR(255) NOT NULL,
	data_nasc DATE NOT NULL
);

CREATE TABLE telefone_aluno (
	id_aluno INT,
	telefone1 VARCHAR(11),
	telefone2 VARCHAR(11),
	FOREIGN KEY (id_aluno) REFERENCES aluno(id)
);

CREATE TABLE endereco_aluno (
	id_aluno INT,
	rua VARCHAR(255) NOT NULL,
	numero VARCHAR(10) NOT NULL,
	bairro VARCHAR(255) NOT NULL,
	cidade VARCHAR(255) NOT NULL,
	FOREIGN KEY (id_aluno) REFERENCES aluno(id)
);

CREATE TABLE pais_aluno (
	id_aluno INT,
	mae VARCHAR(255) NOT NULL,
	pai VARCHAR(255),
	FOREIGN KEY (id_aluno) REFERENCES aluno(id)
);

CREATE TABLE professor (
	id INT PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(255) NOT NULL, 
	email VARCHAR(255) NOT NULL,
	data_admissao DATE NOT NULL,
	data_nasc DATE NOT NULL
);

CREATE TABLE telefone_professor (
	id_professor INT,
	telefone1 VARCHAR(11),
	telefone2 VARCHAR(11),
	FOREIGN KEY (id_professor) REFERENCES professor(id)
);

CREATE TABLE endereco_professor (
	id_professor INT,
	rua VARCHAR(255) NOT NULL,
	numero VARCHAR(10) NOT NULL,
	bairro VARCHAR(255) NOT NULL,
	cidade VARCHAR(255) NOT NULL,
	FOREIGN KEY (id_professor) REFERENCES professor(id)
);

CREATE TABLE gestor (
	id INT PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(255) NOT NULL,
	email VARCHAR(255) NOT NULL
);

CREATE TABLE semestre (
	id INT PRIMARY KEY AUTO_INCREMENT,
	ano INT NOT NULL,
	periodo INT NOT NULL CHECK (periodo IN (1, 2)),
	UNIQUE KEY unique_semestre (ano, periodo)
);

CREATE TABLE unidade_semestre (
	id INT PRIMARY KEY AUTO_INCREMENT,
	id_semestre INT NOT NULL,
	unidade CHAR(3) NOT NULL,
	FOREIGN KEY (id_semestre) REFERENCES semestre(id)
);

CREATE TABLE disciplina (
	id INT PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(255) NOT NULL,
	id_professor INT,
	id_semestre INT,
	FOREIGN KEY (id_professor) REFERENCES professor(id),
	FOREIGN KEY (id_semestre) REFERENCES semestre(id)
);

CREATE TABLE turma (
	id INT PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(255) NOT NULL, 
	id_aluno INT,
	id_disciplina INT,
	FOREIGN KEY (id_aluno) REFERENCES aluno(id),
	FOREIGN KEY (id_disciplina) REFERENCES disciplina(id)
);

CREATE TABLE usuarios (
    id INT PRIMARY KEY AUTO_INCREMENT,
    login VARCHAR(255) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    tipo_usuario ENUM('aluno', 'professor', 'gestor') NOT NULL,
    id_aluno INT,
    id_professor INT,
    id_gestor INT,
    FOREIGN KEY (id_aluno) REFERENCES aluno(id) ON DELETE CASCADE,
    FOREIGN KEY (id_professor) REFERENCES professor(id) ON DELETE CASCADE,
    FOREIGN KEY (id_gestor) REFERENCES gestor(id) ON DELETE CASCADE
);

ALTER TABLE aluno
ADD COLUMN id_turma INT,
ADD CONSTRAINT fk_id_turma
    FOREIGN KEY (id_turma)
    REFERENCES turma(id);
