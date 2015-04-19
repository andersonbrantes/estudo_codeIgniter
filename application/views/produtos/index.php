<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="<?= base_url("css/bootstrap.css"); ?>">
	<title>Document</title>
</head>
<body>
	
	<div class="container">

			<h1>Produtos</h1>
			<table class="table">
				<?php foreach($produtos as $produto) : ?>
					<tr>
						<td><?= $produto['nome']; ?></td>
						<td><?= numeroEmReais($produto['preco']); ?></td>
					</tr>
				<?php endforeach ?>
			</table>
			
			<h1>Cadastro</h1>

			<?= form_open("usuarios/novo"); ?>
			
				<?= form_label("Nome", "nome"); ?>
				<?= form_input(array("name" => "nome", "id" => "nome", "class" => "form-control")); ?>

				<?= form_label("Email", "email"); ?>
				<?= form_input(array("name" => "email", "id" => "email", "class" => "form-control")); ?>

				<?= form_label("Senha", "senha"); ?>
				<?= form_password(array("name" => "senha", "id" => "senha", "class" => "form-control")); ?>

				<?= form_button(array("type" => "submit", "class" => "btn btn-primary", "content" => "Cadastrar")); ?>

			<?= form_close(); ?>

	</div>

</body>
</html>