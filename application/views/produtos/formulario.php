<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="<?= base_url("css/bootstrap.css"); ?>">
	<title>Document</title>
</head>
<body>
	
	<div class="container">

		<h1>Cadastro para novo produto</h1>

		<?= form_open("produtos/novo"); ?>

			<?= form_label("Nome", "nome"); ?>
			<?= form_input(array("name" => "nome", "class" => "form-control", "id" => "nome")); ?>

			<?= form_label("Preco", "preco"); ?>
			<?= form_input(array("name" => "preco", "class" => "form-control", "id" => "preco")); ?>

			<?= form_textarea(array("name" => "descricao", "class" => "form-control", "id" => "descricao")); ?>

			<?= form_button(array("class" => "btn btn-primary", "type" => "submit", "content" => "Cadastrar")); ?>

		<?= form_close(); ?>
	</div>
</body>
</html>
