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
		<!-- Wrapper -->
			<div id="wrapper">
				<!-- Header -->
					<header id="header">
						<div class="inner">
							<!-- Logo -->
								<a href="<?php echo base_url('') ?>" class="logo">
									<span class="fa fa-car"></span>
									<span class="title">
										<?php 
											echo $this->option->get_option('nome_site', 'Falta Configurar')
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
							<li><a target="_blank" href="<?php echo base_url('') ?>">Ver site</a></li>
							<li><a href="<?php echo base_url('blog') ?>">Blog</a></li>
							<li><a href="<?php echo base_url('setup') ?>">configs</a></li>
							<li><a href="<?php echo base_url('setup/logout') ?>">Sign out</a></li>
						</ul>
					</nav>

<?php $this->load->view('scripts') ?>

