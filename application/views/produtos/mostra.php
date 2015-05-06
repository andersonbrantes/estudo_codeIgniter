
		<h1><?= $produto["nome"] ?></h1>
		<?= $produto["preco"] ?><br />
		<?= auto_typography(html_escape($produto["descricao"])) ?>

		<h2>Compre agora mesmo!</h2>

		<?= form_open('vendas/nova'); ?>

			<?= form_hidden("produto_id", $produto["id"]); ?>

			<?= form_label("Data de entrega", "data_de_entrega"); ?>
			<?= form_input(array("name" => "data_de_entrega", "class" => "form-control", "id" => "data_de_entrega", "value" => "")); ?>

			<?= form_button(array("class" => "btn btn-primary", "content" => "comprar", "type" => "submit")); ?>
		<?= form_close(); ?>
