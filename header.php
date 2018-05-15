<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
        <link href="<?php echo get_template_directory_uri(); ?>/css/style.min.css" rel="stylesheet">
		<link href="https://use.typekit.net/heh7zye.css" rel="stylesheet" >
		<link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- Navigation -->
		<nav id="navbar" class="fixed bg-on-scroll gradient drop-shadow bg-transparent">
			<div class="container text-white">
				<div class="row justify-content-between align-items-center nav-bar">
					<div class="col-auto">
						<div class="logo-wrapper">
							<a href="<?php echo home_url(); ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="logo-img">
							</a>
						</div>
					</div>
					<div class="col-auto d-none d-md-flex align-items-center">
						<?php custom_nav(); ?>
						<div class="btn btn-white btn-round ml-4 search-overlay-btn py-2 px-4 btn-sm" data-popup-open="search-overlay">SEARCH</div>
					</div>
					<div class="col-auto d-block d-md-none">
						<i id="mobile-menu-btn" class="material-icons trigger">menu</i>
					</div>
				</div>
			</div>
		</nav>
