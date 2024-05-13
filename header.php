<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ) ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php wp_head() ?>
</head>

<body <?php body_class() ?>>
	<?php wp_body_open(); ?>

	<header class="header">
		<div class="header__top">
			<div class="container">
				<div class="header__wrapper">
					<div class="header__top__menubar">
						<button type="button" class="navbar-toggler btn pr-0 toggle-menu" aria-label="Toggle navigation"
							aria-expanded="true" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
							<!-- < ?= Flux\Icon::output('menu'); ?>
							< ?= Flux\Icon::output('close'); ?> -->
							<svg xmlns="http://www.w3.org/2000/svg" class="menu" width="40" height="40"
								viewBox="0 0 1536 1280">
								<path fill="#222222"
									d="M1536 1088v128q0 26-19 45t-45 19H64q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45m0-512v128q0 26-19 45t-45 19H64q-26 0-45-19T0 704V576q0-26 19-45t45-19h1408q26 0 45 19t19 45m0-512v128q0 26-19 45t-45 19H64q-26 0-45-19T0 192V64q0-26 19-45T64 0h1408q26 0 45 19t19 45">
								</path>
							</svg>
							<svg xmlns="http://www.w3.org/2000/svg" class="close" width="40" height="40"
								viewBox="0 0 16 16">
								<path fill="#222222"
									d="M15.1 3.1L12.9.9L8 5.9L3.1.9L.9 3.1l5 4.9l-5 4.9l2.2 2.2l4.9-5l4.9 5l2.2-2.2l-5-4.9z">
								</path>
							</svg>
						</button>
					</div>
					<div class="header__top--logo">
						<?php if ( is_front_page() ) { ?>
							<h1 alt="<?php bloginfo( 'description' ); ?>">
								<?php the_custom_logo(); ?>
							</h1>
							<?php
						} else { ?>
							<?php the_custom_logo(); ?>
						<?php } ?>
					</div>
					<div class="header__top--contact">
						<a href="tel:0989898989" class="hotline">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
								<path d="M15.793 6.793 13 4v7h7l-2.793-2.793 4.5-4.5-1.414-1.414z"></path>
								<path
									d="M16.422 13.443a1.001 1.001 0 0 0-1.391.043l-2.392 2.461c-.576-.11-1.734-.471-2.926-1.66-1.192-1.193-1.553-2.354-1.66-2.926l2.459-2.394a1 1 0 0 0 .043-1.391L6.86 3.513a1 1 0 0 0-1.391-.087l-2.17 1.861a1.001 1.001 0 0 0-.291.649c-.015.25-.301 6.172 4.291 10.766C11.305 20.707 16.324 21 17.705 21c.203 0 .326-.006.359-.008a.99.99 0 0 0 .648-.291l1.861-2.171a1.001 1.001 0 0 0-.086-1.391l-4.065-3.696z">
								</path>
							</svg>
							<div class="hl-content">
								<span class="txt">Hotline 1</span>
								<span class="number">0989898989</span>
							</div>
						</a>
						<a href="tel:0989898989" class="hotline">
							<!-- < ?= Flux\Icon::load('hotline') ?> -->
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
								<path d="M15.793 6.793 13 4v7h7l-2.793-2.793 4.5-4.5-1.414-1.414z"></path>
								<path
									d="M16.422 13.443a1.001 1.001 0 0 0-1.391.043l-2.392 2.461c-.576-.11-1.734-.471-2.926-1.66-1.192-1.193-1.553-2.354-1.66-2.926l2.459-2.394a1 1 0 0 0 .043-1.391L6.86 3.513a1 1 0 0 0-1.391-.087l-2.17 1.861a1.001 1.001 0 0 0-.291.649c-.015.25-.301 6.172 4.291 10.766C11.305 20.707 16.324 21 17.705 21c.203 0 .326-.006.359-.008a.99.99 0 0 0 .648-.291l1.861-2.171a1.001 1.001 0 0 0-.086-1.391l-4.065-3.696z">
								</path>
							</svg>
							<div class="hl-content">
								<span class="txt">Hotline 2</span>
								<span class="number">0989898989</span>
							</div>
						</a>
						<a href="tel:0989898989" class="register">
							<span>Đăng kí bán</span>
						</a>
					</div>
				</div>
			</div>
		</div>
		</div>
		<div class="header__menu">
			<div class="container">
				<nav id="site-navigation" class="main-navigation nav">
					<?php
					wp_nav_menu(
						[ 
							'theme_location' => 'primary',
							'menu_id'        => 'primary-menu',
							'container'      => false,
						],
					);
					?>
				</nav>
			</div>
		</div>
	</header>

	<main class="main" role="main">