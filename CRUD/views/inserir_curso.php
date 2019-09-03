<?php if(!isset($_GET['editar'])){ ?>
<h1>Inserção de novos Cursos</h1>
<form method="post" action="processa_curso.php">
	<br>
	<label class="badge badge-secondary">Nome Curso</label><br>
	<input class="form-control" type="text" name="nome_curso" placeholder="Insira nome curso">
	<br>
	<br>
	<label class="badge badge-secondary">Carga Horaria</label><br>
	<input class="form-control" type="text" name="carga_horaria" placeholder="insira carga horaria">
	<br><br>
	<input class="btn btn-success" type="submit" value="Cadastrar" name="Inserir">
</form>


<?php } else { ?>
	<?php while($linha = mysqli_fetch_array($consulta_cursos)){ ?>
		<?php if($linha['id_curso']== $_GET['editar']){ ?>
		<h1>Edição de Cursos</h1>
		<form method="post" action="edita_curso.php">
			<input type="hidden" name="id_curso" value="<?php echo $linha['id_curso']; ?>">
			<br>
			<label class="badge badge-secondary">Nome Curso</label><br>
			<input class="form-control"type="text" name="nome_curso" placeholder="Insira nome curso" value="<?php echo $linha['nome_curso']; ?>">
			<br>
			<br>
			<label class="badge badge-secondary">Carga Horaria</label><br>
			<input class="form-control" type="text" name="carga_horaria" placeholder="insira carga horaria" value="<?php echo $linha['carga_horaria']; ?>">
			<br><br>
			<input class="btn btn-success" type="submit" value="Cadastrar" name="Inserir">
		</form>
		<?php } ?>
	<?php } ?>
<?php } ?>