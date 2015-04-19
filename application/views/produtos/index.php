<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/bootstrap.css">
	<title>Document</title>
</head>
<body>
	
	<div class="container">

			<h1>Produtos</h1>
			<table class="table">
				<?php foreach($produtos as $produto) : ?>
					<tr>
						<td><?= $produto['nome']; ?></td>
						<td><?= $produto['preco']; ?></td>
					</tr>
				<?php endforeach ?>
			</table>

	</div>

</body>
</html>