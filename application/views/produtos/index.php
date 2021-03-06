

			<h1>Produtos</h1>
			<table class="table">
				<?php foreach($produtos as $produto) : ?>
					<tr>
						<td><?= anchor("produtos/{$produto['id']}", $produto['nome']); ?></td>
						<td><?= character_limiter($produto['descricao'], 10) ?></td>
						<td><?= numeroEmReais($produto['preco']); ?></td>
					</tr>
				<?php endforeach ?>
			</table>
			
			<?php if($this->session->userdata("usuario_logado")) : ?>

				<?= anchor('produtos/formulario', 'Novo produto', array("class" => "btn btn-primary") ); ?>
				<?= anchor('login/logout', 'Logout', array('class' => 'btn btn-primary')); ?>

			<?php else : ?>

				<h1>Login</h1>

				<?= form_open("login/autenticar"); ?>
					<?= form_label("Nome", "nome"); ?>
					<?= form_input(array("name" => "nome", "id" => "nome", "class" => "form-control")); ?>

					<?= form_label("Senha", "senha"); ?>
					<?= form_password(array("name" => "senha", "id" => "senha", "class" => "form-control")); ?>

					<?= form_button(array("type" => "submit", "class" => "btn btn-primary", "content" => "Login")); ?>

				<?= form_close(); ?>

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

			<?php endif ?>
