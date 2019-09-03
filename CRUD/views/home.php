

<h1 style="text-align: center"> Home</h1>

<form method="post" action="login.php">

	<label class="badge badge-secondary">User </label><br>
	<input type="text" name="usuario" class="form-control" placeholder="user">

	<label class="badge badge-secondary">Pwd </label><br>
	<input type="password" name="senha" class="form-control" placeholder="pwd">	

	<input type="submit" name="LogIn" class="btn btn-success">
</form>

<?php if(isset($_GET['erro'])){ ?>
	<br>
	<div class="alert alert-danger" role="alert">
		Erro no acesso.
	</div>
<?php } ?>
