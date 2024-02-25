<?php $this->load->view('header') ?>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<h1>Contact Us</h1>
							<span class="image main"><img src="<?php echo base_url('assets/images/map.jpg') ?>" alt="" /></span>
							<p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis. Praesent rutrum sem diam, vitae egestas enim auctor sit amet. Pellentesque leo mauris, consectetur id ipsum sit amet, fergiat. Pellentesque in mi eu massa lacinia malesuada et a elit. Donec urna ex, lacinia in purus ac, pretium pulvinar mauris. Curabitur sapien risus, commodo eget turpis at, elementum convallis elit. Pellentesque enim turpis, hendrerit tristique.</p>
						</div>
					</div>
 
				<!-- Footer --->
					<footer id="footer">
						<div class="inner">
							<section>
								<h2>Contact Us</h2>
								<?php
									if ($formerror):
										echo '<p>' . $formerror . '</p>';
									endif;
										echo form_open('pagina/contact', array('class' => 'fields'));
										echo form_input('name', set_value('name'), array('placeholder' => 'Name'));
										echo form_input('email', set_value('email'), array('placeholder' => 'Email'));
										echo form_input('subject', set_value('subject'), array('placeholder' => 'Subject'));
										echo form_textarea('message', set_value('message'), array('placeholder' => 'Message'));
										echo form_submit('send', 'Send Message', array('class' => 'primary'));
										echo form_close();
									?>
								<form method="post" action="#">
									<div class="fields">

										<div class="field half">
											<input type="text" name="name" id="name" placeholder="Name" />
										</div>
										<div class="field half">
											<input type="text" name="email" id="email" placeholder="Email" />
										</div>

										<div class="field">
											<input type="text" name="subject" id="subject" placeholder="subject" />
										</div>

										<div class="field">
											<textarea name="message" id="message" rows="3" placeholder="Notes"></textarea>
										</div>

										<div class="field text-right">
											<label>&nbsp;</label>

											<ul class="actions">
												<li><input type="submit" value="Send Message" class="primary" /></li>
											</ul>
										</div>
									</div>
								</form>
							</section>
							<section>
								<h2>Contact Info</h2>

								<ul class="alt">
									<li><span class="fa fa-envelope-o"></span> <a href="#">contact@company.com</a></li>
									<li><span class="fa fa-phone"></span> +1 333 4040 5566 </li>
									<li><span class="fa fa-map-pin"></span> 212 Barrington Court New York, ABC 10001 United States of America</li>
								</ul>

								<h2>Follow Us</h2>

								<ul class="icons">
									<li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon style2 fa-linkedin"><span class="label">LinkedIn</span></a></li>
								</ul>
							</section>

							<ul class="copyright">
								<li>Copyright © 2020 Company Name </li>
								<li>Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
		<?php $this->load->view('scripts') ?>

	</body>
</html>
