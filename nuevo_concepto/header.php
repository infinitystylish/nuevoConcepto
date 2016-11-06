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
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>
		<div class="layer-overlay"></div>
		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">
				
				<div class="menu-container">
					<div class="container">
						<div class="menu-container-children">
							<!-- logo -->
							<div class="logo">
								<a href="<?php echo home_url(); ?>">
									<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
									<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
								</a>
							</div>
							<!-- /logo -->

							<!-- nav -->
							<nav class="nav hidden-xs hidden-sm" role="navigation">
								<ul class="menu-desktop">
									<li>
										<a href="#">
											Inicio
										</a>
									</li>
									<li>
										<a href="#">
											Galeria
										</a>
									</li>
									<li>
										<a href="#">
											Video
										</a>
									</li>
									<li>
										<a href="#">
											Paquetes
										</a>
									</li>
									<li>
										<a href="#">
											Integrantes
										</a>
									</li>
									<li>
										<a href="#">
											Repertorio
										</a>
									</li>
									<li>
										<a href="#">
											Contacto
										</a>
									</li>
								</ul>
							</nav>

							<div class="menu-hamburguer hidden-md hidden-lg">
								<div class="line"></div>
								<div class="line"></div>
								<div class="line"></div>	
							</div>

							<nav class="nav-mobile hidden-md hidden-lg" role="navigation">

								<ul class="menu-mobile">
									<li>
										<a href="#">
											Inicio
										</a>
									</li>
									<li>
										<a href="#">
											Galeria
										</a>
									</li>
									<li>
										<a href="#">
											Video
										</a>
									</li>
									<li>
										<a href="#">
											Paquetes
										</a>
									</li>
									<li>
										<a href="#">
											Integrantes
										</a>
									</li>
									<li>
										<a href="#">
											Repertorio
										</a>
									</li>
									<li>
										<a href="#">
											Contacto
										</a>
									</li>
								</ul>

							</nav>

						</div>
					</div>
					<!-- /nav -->
				</div>
			</header>
			<!-- /header -->
