<?php
# CRUD CREATE READ UPDATE DELETE

#inicia sessão
session_start();

## base de dados
include 'db.php'; 
## cabeçalho
include 'header.php'; 

# conteudo pagina

if(isset($_SESSION['login'])){
	if(isset($_GET['pagina'])){
		$pagina = $_GET['pagina'];
	}
	else{
		$pagina = 'cursos';
	}
}
else{
	$pagina = 'home';
}
switch($pagina){
	case 'cursos': include 'views/cursos.php'; break;
	case 'alunos': include 'views/alunos.php'; break;
	case 'matriculas': include 'views/matriculas.php'; break;
	case 'inserir_curso': include 'views/inserir_curso.php'; break;
	case 'inserir_aluno': include 'views/inserir_aluno.php'; break;
	case 'inserir_matricula': include 'views/inserir_matricula.php'; break;
	default: include 'views/home.php'; break;
}
/*
if($pagina == 'cursos'){
	include 'views/cursos.php';
}
elseif($pagina=='alunos'){
	include 'views/alunos.php';
}
elseif($pagina=='matriculas'){
	include 'views/matriculas.php';
}
elseif($pagina=='inserir_curso'){
	include 'views/inserir_curso.php';
}
elseif($pagina=='inserir_aluno'){
	include 'views/inserir_aluno.php';
}
elseif($pagina=='inserir_matricula'){
	include 'views/inserir_matricula.php';
}
else{
	include 'views/home.php';	
}
*/

#rodapé
include 'footer.php';
