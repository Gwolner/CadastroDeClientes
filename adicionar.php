<?php
include_once 'includes/header.php';
?>


<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light">Novo Cliente</h3>
		<form action="php_action/create.php" method="POST">
			<div class="input-field col s12">
				<input id="nome" type="text" name="nome">
				<label for="nome">Nome</label>
			</div>

			<div class="input-field col s12">
				<input id="sobrenome" type="text" name="sobrenome">
				<label for="sobrenome">Sobrenome</label>
			</div>

			<div class="input-field col s12">
				<input id="email" type="text" name="email">
				<label for="email">E-mail</label>
			</div>

			<div class="input-field col s12">
				<input id="telefone" type="text" name="telefone">
				<label for="telefone">Telefone</label>
			</div>

			<button type="submit" name="btn-cadastrar" class="btn">Cadastrar</button>
			<a href="index.php" class="btn green">Lista de clientes</a>
		</form>
	</div>
</div>




<?php
include_once 'includes/footer.php';
?>