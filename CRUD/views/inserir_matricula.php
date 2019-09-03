<h1>Inserção de Matriculas</h1>
<br><br>
<form method="post" action="processa_matricula.php">
	<p class="badge badge-secondary">Selecione o Aluno</p>
	<select class="form-control" name="escolha_aluno">
		<option>selecione um aluno</option>
		<?php
		while($linha = mysqli_fetch_array($consulta_alunos)){
			echo '<option value="'.$linha['id_alunos'].'" style ="border:1px solid #ccc">'.$linha['nome_aluno'].'</option>';
		}
		?>
	</select>
	<br><br>
	<p class="badge badge-secondary">Selecione o Curso</p>
	<select class="form-control"  name="escolha_curso">
		<option>selecione um curso</option>
		<?php
		while($linha = mysqli_fetch_array($consulta_cursos)){
			echo '<option value="'.$linha['id_curso'].'"" style ="border:1px solid #ccc">'.$linha['nome_curso'].'</option>';
			
		}
		
	?>
	</select>
	<br><br>
	<input class="btn btn-success" type="submit" value="Efetuar Matricula">



</form>