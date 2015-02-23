<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Roboto:500,100,300,700,400' rel='stylesheet' type='text/css'>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<!-- <script type="text/javascript" src="http://www2.odysys.com:8888/wp-content/themes/odysys-www/bootstrap/js/modernizr-2.6.2-respond-1.1.0.min.js"></script> -->
		<?php //wp_head(); ?>
	</head>
	<body <?php body_class( $class ); ?>>
		<header>
			<nav class="navbar">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="<?php echo site_url(); ?>"><!-- <?php bloginfo('name'); ?> --></a>
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<?php wp_list_pages(array('title_li' => '', 'exclude' => 9)); ?>
							<li><a href="http://app.odysys.com">Login</a></li>
							<li><a href="#" id="btn-beta-signup" class="btn-cta">Sign Up for Beta</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</header>
		<main>