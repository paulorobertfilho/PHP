<p><br></p>
<a class="btn btn-success" href="?pagina=inserir_curso">inserir_curso</a>
<table class="table">
	<tr>
		<th>Nome Curso</th>
		<th>Carga Horaria</th>
		<th>Editar</th>
		<th>Deletar</th>
	</tr>

	<?php
		while($linha = mysqli_fetch_array($consulta_cursos)){
				echo '<tr><td>'.$linha['nome_curso'].'</td>';
				echo '<td>'.$linha['carga_horaria'].'</td>';
	?>
		<td><a href="?pagina=inserir_curso&editar=<?php echo $linha['id_curso']; ?>">Editar</a></td>
		<td><a href="deleta_curso.php?id_curso=<?php echo $linha['id_curso']; ?>">Deletar</a></td></tr>
	<?php
		}
	?>
</table>