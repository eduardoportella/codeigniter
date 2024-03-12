<?php $this->load->view('painel/header'); ?>

<div class="linha p-4">
			<h2> <?php echo $h2; ?></h2>
			<div class="coluna col13">
				<ul>
					<li><a href="<?php echo base_url('offers_adm/create') ?>">Create</a></li>
					<li><a href="<?php echo base_url('offers_adm/read') ?>">Read</a></li>
					<li><a href="<?php echo base_url('offers_adm/update') ?>">Update</a></li>
					<li><a href="<?php echo base_url('offers_adm/delete') ?>">Delete</a></li>
				</ul>
			</div>
			<div class="coluna col16 p-4">
				<?php
					if ($msg = get_msg()){
						echo '<div class="msg-box">' . $msg . '</div>';
					}
						switch ($tela){
							case 'create':
								echo form_open_multipart();
								echo form_label('Title:', 'title');
								echo form_input('title', set_value('title'));
								echo form_label('Content:', 'content');
								echo form_textarea('content', set_value('content'));
								echo form_label('Image:', 'image');
								echo form_upload('image', set_value('image'));
								echo form_submit('upload', 'Post Offer', array('class' => 'btn btn-primary'));
								echo form_close();
								break;
							case 'read':
								if (isset($offers) && sizeof($offers) > 0): ?>
									<table>
										<thead>
											<th align="left">Title</th>
											<th align="right">Actions</th>
										</thead>
										<tbody>
												<?php
												 foreach ($offers as $key): ?>
													<tr class="d-flex justify-content-between">
														<td align="left"><?php echo $key->titulo; ?></td>
														<td align="right" class="actions">
															<?php echo anchor('offers_adm/update/' . $key->id, 'Update')?> |
															<?php echo anchor('offers_adm/delete/' . $key->id, 'Delete')?> |
															<?php echo anchor('post/create/' . $key->id, 'See', array('target' => '_blank'))?>	
														</td>
													</tr>
												<?php endforeach ?>
										</tbody>
									</table>
								<?php else:
									echo '<div class="msg-box"><p>None offer created</p></div>';
								endif;
								break;
							case 'update':
								echo 'tela de update';
								break;
							case 'delete':
								echo 'tela de delete';
								break;
						}

				?>
			</div>
			<div class="coluna col13">&nbsp;</div>
		</div>
<?php $this->load->view('painel/footer'); ?>
