<?php if(!isset($_GET['editar'])){ ?>

<h1>Inserção de novos Alunos</h1>
<form method="post" action="processa_aluno.php">
	<br>
	<label class="badge badge-secondary">Nome </label><br>
	<input class="form-control" type="text" name="nome_aluno" placeholder="Insira nome ">
	<br>
	<br>
	<label class="badge badge-secondary">Nascimento </label><br>
	<input class="form-control" type="text" name="data_nascimento" placeholder="insira nascimento">
	<br><br>
	<input class="btn btn-success" type="submit" value="Cadastrar" name="Inserir">
</form>


<?php } else { ?>
	<?php while($linha = mysqli_fetch_array($consulta_alunos)){ ?>
		<?php if($linha['id_alunos']== $_GET['editar']){ ?>
			<h1>Edição de Alunos</h1>
			<form method="post" action="edita_aluno.php">
				<input type="hidden" name="id_alunos" value="<?php echo $linha['id_alunos']; ?>">
				<br>
				<label class="badge badge-secondary">Nome </label><br>
				<input class="form-control" type="text" name="nome_aluno" placeholder="Insira nome" value="<?php echo $linha['nome_aluno']; ?>">
				<br>
				<br>
				<label class="badge badge-secondary">Nascimento </label><br>
				<input class="form-control" type="text" name="data_nascimento" placeholder="insira nascimento" value="<?php echo $linha['data_nascimento']; ?>">
				<br><br>
				<input class="btn btn-success" type="submit" value="Cadastrar" name="Inserir">
			</form>
		<?php } ?>
	<?php } ?>
<?php } ?>