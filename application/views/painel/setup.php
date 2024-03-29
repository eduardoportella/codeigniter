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
					if ($msg = get_msg()){
						echo '<div class="msg-box">' . $msg . '</div>';
					}
					echo form_open();
					echo form_label('Name for login:', 'login');
					echo form_input('login', set_value('login'), array('autofocus' => 'autofocus'));
					echo form_label("Admin's email", 'email');
					echo form_input('email', set_value('email'));
					echo form_label('Password:', 'password');
					echo form_password('password', set_value('password'));
					echo form_label('Repeat password:', 'password2');
					echo form_password('password2', set_value('password2'));
					echo form_submit('submit', 'Submit', array('class' => 'botao'));
					echo form_close();

				?>;
			</div>
			<div class="coluna col13">&nbsp;</div>
		</div>
	</body>
</html>

