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
				<?php foreach($produtosVendidos as $produto) : ?>
					<tr>
						<td><?=$produto["nome"]?></td>
						<td><?= dataMysqlParaPtBr($produto["data_da_entrega"]) ?></td>
					</tr>
				<?php endforeach ?>
			</table>
	</div>
</body>
</html>