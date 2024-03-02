<!DOCTYPE HTML>
<html>
	<head>
		<title><?php echo $titulo ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" />
		<link rel="stylesheet" href="<?php echo base_url('assets/css/main.css') ?> " />
		<link rel="stylesheet" href="<?php echo base_url('assets/css/painel.css') ?> " />
		<noscript><link rel="stylesheet" href="<?php echo base_url('assets/css/noscript.css') ?>" /></noscript>
	</head>
	<body class="is-preload">
		<div class="linha">
			<div class="coluna col13">&nbsp;</div>
			<div class="coluna col16 p-4">
				<h2> <?php echo $h2; ?></h2>
				<?php
					echo form_open();
					echo form_label('Nome para login:', 'login');
					echo form_input('login', set_value('login'), array('autofocus' => 'autofocus'));
					echo form_label('Email do administrador do site:', 'email');
					echo form_input('email', set_value('email'));
					echo form_label('Senha:', 'senha');
					echo form_password('senha', set_value('senha'));
					echo form_label('Repita a senha:', 'senha2');
					echo form_password('senha2', set_value('senha2'));
					echo form_submit('enviar', 'Salvar dados', array('class' => 'botao'));
					echo form_close();

				?>;
			</div>
			<div class="coluna col13">&nbsp;</div>
		</div>
	</body>
</html>

