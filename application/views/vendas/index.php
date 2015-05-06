

			<h1>Minhas vendas</h1>
			<table class="table">
				<?php foreach($produtosVendidos as $produto) : ?>
					<tr>
						<td><?=$produto["nome"]?></td>
						<td><?= dataMysqlParaPtBr($produto["data_da_entrega"]) ?></td>
					</tr>
				<?php endforeach ?>
			</table>
