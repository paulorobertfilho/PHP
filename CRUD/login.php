<?php

include 'db.php';

#$usuario = addslashes($_POST['usuario']);
#$senha = addslashes($_POST['senha']);

$usuario = md5($_POST['usuario']);
$senha = md5($_POST['senha']);

$query = "SELECT * FROM USUARIOS WHERE USUARIO = '$usuario' AND SENHA = '$senha' ";

$consulta = mysqli_query($conexao, $query);

if(mysqli_num_rows($consulta) ==1){

	session_start();
	$_SESSION['login']	=	true;
	$_SESSION['usuario'] = $usuario;

	header('location:index.php');
}
else{
	header('location:index.php?erro');
}
