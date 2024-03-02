<?php $this->load->view('painel/header'); ?>

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
					echo form_label('Password (let empty to not change it):', 'password');
					echo form_password('password');
					echo form_label('Repeat password:', 'password2');
					echo form_password('password2');
					echo form_label('Site name:', 'nome_site');
					echo form_input('nome_site', set_value('nome_site'));
					echo form_submit('submit', 'Submit', array('class' => 'botao'));
					echo form_close();

				?>;
			</div>
			<div class="coluna col13">&nbsp;</div>
		</div>
<?php $this->load->view('painel/footer'); ?>
