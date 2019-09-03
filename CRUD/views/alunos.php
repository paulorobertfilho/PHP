<p><br></p>
<a class="btn btn-success" href="?pagina=inserir_aluno">inserir_aluno</a>
<table class="table">
	<tr>
		<th>Nome Aluno</th>
		<th>Data Nascimento</th>
		<th>Editar</th>
		<th>Deletar</th>
	</tr>

	<?php
		while($linha = mysqli_fetch_array($consulta_alunos)){
				echo '<tr><td>'.$linha['nome_aluno'].'</td>';
				echo '<td>'.$linha['data_nascimento'].'</td>';
		?>
		<td><a href="?pagina=inserir_aluno&editar=<?php echo $linha['id_alunos']; ?>">Editar</a></td>
		<td><a href="deleta_aluno.php?id_alunos=<?php echo $linha['id_alunos']; ?>">Deletar</a></td></tr>
	<?php
		}
	?>
</table>