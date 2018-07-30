<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header>
			<nav class="main-nav navbar navbar-expand-lg" role="navigation">
				<div class="container">
					<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><h1><?php _e('Mapa Educação', 'mapa-educacao'); ?></h1></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="<?php _e('Navegação', 'mapa-educacao'); ?>"></button>
					<?php
					wp_nav_menu([
						'theme_location'  => 'main',
						'container'       => 'div',
						'container_id'    => 'main-nav',
						'container_class' => 'collapse navbar-collapse justify-content-end',
						'menu_class'      => 'navbar-nav',
						'depth'           => 2,
						'fallback_cb'     => 'bs4navwalker::fallback',
						'walker'          => new bs4navwalker()
						]);
					?>
				</div>
			</nav>
		</header>
