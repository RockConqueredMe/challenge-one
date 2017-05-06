<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        // conditionizr.config({
        //     assets: '<?php echo get_template_directory_uri(); ?>',
        //     tests: {}
        // });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- jumbotron -->
		<div class="jumbotron">
			<div class="container">
				<nav class="navbar navbar-toggleable-md">
					<a href="#" class="navbar-brand">MoGo</a>
					<div class="collpase navbar-collapse">
						<ul class="navbar-nav ml-auto">
				      <li class="nav-item active">
				        <a class="nav-link" href="#">ABOUT <span class="sr-only">(current)</span></a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="#">SERVICE</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="#">WORK</a>
				      </li>
							<li class="nav-item">
				        <a class="nav-link" href="#">BLOG</a>
				      </li>
							<li class="nav-item">
				        <a class="nav-link" href="#">CONTACT</a>
				      </li>
							<li class="nav-item">
				        <a class="nav-link" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
				      </li>
							<li class="nav-item">
				        <a class="nav-link" href="#"><i class="fa fa-search" aria-hidden="true"></i></i></a>
				      </li>
	    			</ul>
					</div>
				</nav>
				<div class="overjumbo">
					<h2>Creative Template</h2>
					<h1>WELCOME TO MOGO</h1>
					<hr class="jumbohr">
					<div class="jumbobtn">
						<p>LEARN MORE</p>
					</div>
				</div>
			</div>
		</div>
		<!-- end jumbotron -->
		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">


					<!-- nav -->
					<!-- <nav class="nav" role="navigation">
						<?php html5blank_nav(); ?>
					</nav> -->
					<!-- /nav -->
			</header>
			<!-- /header -->
