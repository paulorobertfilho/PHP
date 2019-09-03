<?php
include 'db.php';

$id_alunos = $_POST['id_alunos'];
$nome_aluno = $_POST['nome_aluno'];
$data_nascimento = $_POST['data_nascimento'];

$query ="UPDATE alunos SET nome_aluno = '$nome_aluno', data_nascimento = '$data_nascimento' WHERE id_alunos=$id_alunos";

mysqli_query($conexao,$query);

header('location:index.php?pagina=alunos');