<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="<?= base_url("css/bootstrap.css"); ?>">
	<title>Document</title>
</head>
<body>

	<div class="container">
		<h1><?= $produto["nome"] ?></h1>
		<?= $produto["preco"] ?><br />
		<?= auto_typography($produto["descricao"]) ?>
	</div>

</body>
</html>