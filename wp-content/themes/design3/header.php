<!DOCTYPE html>
<html>
	<head>
		<title><?php bloginfo ( 'name' ); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="UTF-8">
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300|Roboto:400,700|Lato:300' rel='stylesheet' type='text/css'>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/bower_components/animate.css/animate.css">
		<link href='<?php bloginfo( 'template_url' ); ?>/bower_components/swiper/dist/css/swiper.min.css' rel='stylesheet' type='text/css'>
		<link href='<?php bloginfo( 'template_url' ); ?>/css/custom.css' rel='stylesheet' type='text/css'>
		<link href='<?php bloginfo( 'template_url' ); ?>/css/responsive.css' rel='stylesheet' type='text/css'>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bundle.js"></script>
		<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/bower_components/jquery/dist/jquery.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/jquery-ui.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/printElement.min.js"></script>


		<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/bower_components/moment/min/moment.min.js"></script>
		<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
		<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" />
		<script src="https://use.typekit.net/tdq5gcj.js"></script>
		<script>try{Typekit.load({ async: false });}catch(e){}</script>
		<script src='https://www.google.com/recaptcha/api.js'></script>
	</head>
	<body <?php body_class(); ?>>
		<header>
			<div class="top-header">
				<div class="container">
					<div class="row">
						<div class="left-field col-md-4">

						<?php
$custom_logo_id = get_theme_mod( 'custom_logo' );
$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
 ?>
	<a href="<?php bloginfo('url'); ?>"><img src="<?php echo $image[0]; ?>"></a>


						</div>
						<div class="right-field col-md-4">
							<div class="contact">
								<h4><i class="fa fa-envelope-o"></i><a href="mailto:info@generatorservice.se">info@generatorservice.se</a></h4>
								<h4><i class="fa fa-phone-square"></i>018-10 63 85</h4>
								<h4><i class="fa fa-clock-o"></i>07.00 - 16.00</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="bottom-header">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="menu-toggle">
								<i class="fa fa-bars"></i>
							</div>
							<nav>
								<?php wp_nav_menu( array( 'theme_location' => 'main_nav', 'menu_class' => 'nav-menu', 'container_class' => 'menu-main-menu-container') ); ?>
							</nav>
										<div class="" id="local">
			<div class="search-wrap">
			<i class="fa fa-search" aria-hidden="true"></i>
			<?php get_search_form();?>
			</div>
			</div>
						</div>
					</div>
				</div>
			</div>
		</header>
