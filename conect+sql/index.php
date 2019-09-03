<?php
#mysqli

$srv ='localhost';
$usr ='root';
$pwd ='';
$db="aula_php";
##conexão
$conn = mysqli_connect($srv, $usr, $pwd, $db);

if($conn){
    echo '<br>Conn OK';
}
else{
    echo '<br>Conn Failed';
}

### Criação tabela
$query ="CREATE TABLE CURSOS(
    id_curso int not null auto_increment,
    nome_curso varchar(255) not null,
    carga_horaria int not null,
    primary key(id_curso)
    )";
    $exec = mysqli_query($conn, $query);
//if($exec){    echo '<br>exec cursos ok...';}
//else{echo '<br>exec fail cursos...';}
    $query ="CREATE TABLE ALUNOS(
        id_alunos int not null auto_increment,
        nome_aluno varchar(255) not null,
        data_nascimento varchar(255),
        primary key(id_alunos)
        )";
$exec = mysqli_query($conn, $query);

$query ="CREATE TABLE ALUNOS_CURSOS(
    id_aluno_curso int not null auto_increment,
    id_aluno int not null,
    id_curso int not null,
    primary key(id_aluno_curso)
)";
$exec = mysqli_query($conn, $query);

##inserção
/*
$query ="INSERT INTO ALUNOS(nome_aluno, data_nascimento) VALUES('Jose','01-01-1990')";
$exec = mysqli_query($conn, $query);
$query ="INSERT INTO ALUNOS(nome_aluno, data_nascimento) VALUES('maria','02-02-1991')";
$exec = mysqli_query($conn, $query);

$query ="INSERT INTO CURSOS(nome_curso, carga_horaria) VALUES('php',10)";
$exec = mysqli_query($conn, $query);

$query ="INSERT INTO ALUNOS_CURSOS(id_aluno, id_curso) VALUES(8, 1)";
$exec = mysqli_query($conn, $query);
*/


echo '<table border=1>
        <tr>
            <th>id</th>
            <th>Nome</th>
            <th>Data Nascimento</th>
        </tr>';

    $consult = mysqli_query($conn, "select * from alunos");
    while($linha = mysqli_fetch_array($consult)){
        echo '<tr>'.'<td>'.$linha['id_alunos'];
        echo '</td>'.'<td>'.$linha['nome_aluno'];
        echo '</td>'.'<td>'.$linha['data_nascimento'];
        echo '</td>'.'</tr>';
    }
echo '</table>';





