<!DOCTYPE HTML>
<html>
	<head>
		<title><?php echo $titulo ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" />
		<link rel="stylesheet" href="<?php echo base_url('assets/css/main.css') ?> " />
		<noscript><link rel="stylesheet" href="<?php echo base_url('assets/css/noscript.css') ?>" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">
				<!-- Header -->
					<header id="header">
						<div class="inner">
							<!-- Logo -->
								<a href="index.php" class="logo">
									<span class="fa fa-car"></span> 
									<span class="title">
										<?php 
											echo $this->option->get_option('nome_site', 'Site name')
										?>
									</span>
								</a>
							<!-- Nav -->
								<nav>
									<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>
						</div>
					</header>
					<nav id="menu">
						<h2>Menu</h2>
						<ul>
							<li><a href="<?php echo base_url('') ?>" class="active">Home</a></li>

							<li><a href="<?php echo base_url('offers') ?>">Offers</a></li>

							<li><a href="<?php echo base_url('fleet') ?>">Fleet</a></li>

							<li>
								<a href="#" class="dropdown-toggle">About</a>

								<ul>
									<li><a href="<?php echo base_url('about') ?>">About Us</a></li>
									<li><a href="<?php echo base_url('team') ?>">Team</a></li>
									<li><a href="<?php echo base_url('blog') ?>">Blog</a></li>
									<li><a href="<?php echo base_url('testimonials') ?>">Testimonials</a></li>
									<li><a href="<?php echo base_url('faq') ?>">FAQ</a></li>
									<li><a href="<?php echo base_url('terms') ?>">Terms</a></li>
								</ul>
							</li>
							<li><a href="<?php echo base_url('contact') ?>">Contact Us</a></li>
						</ul>
					</nav>
