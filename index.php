<?php
include_once 'includes/header.php';
?>


<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light">Clientes</h3>
		<table class="striped">
			<thead>
				<tr>
					<th>Nome:</th>
					<th>Sobrenome:</th>
					<th>E-mail:</th>
					<th>Telefone:</th>
				</tr>
			</thead>
			
			<tbody>
				<tr>
					<td>Guilherme</td>
					<td>Wolner</td>
					<td>wolner@wolner.com</td>
					<td>81995606795</td>
					<td><a href="#" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
					<td><a href="#" class="btn-floating red"><i class="material-icons">delete</i></a></td>
				</tr>
			</tbody>
		</table>
		</br>
		<a href="adicionar.php" class="btn">Adicionar clientes</a>
	</div>
</div>




<?php
include_once 'includes/footer.php';
?>