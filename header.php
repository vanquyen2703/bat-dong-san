<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ) ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php wp_head() ?>
</head>

<body <?php body_class() ?>>
	<?php wp_body_open(); ?>

	<header class="header container flex">
		<a class="logo" href="<?= esc_url( home_url( '/' ) ) ?>"></a> <?php // phpcs:ignore ?>

		<?php
		wp_nav_menu( [ 
			'menu_id'         => 'menu',
			'menu_class'      => 'menu no-list flex font-heading',
			'container'       => 'nav',
			'container_class' => 'nav',
			'theme_location'  => 'primary',
		] );
		?>

		<div class="icons flex">


			<a href="#" class="search flex"><svg>
					<use xlink:href="#icon-search"></use>
				</svg></a>
		</div>

		<?php get_search_form() ?>
	</header>

	<main class="main" role="main">