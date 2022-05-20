<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Agro_corp
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css?_v=20220516170834" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css?_v=20220516170834" rel="stylesheet">
	<?php wp_head(); ?>
	<title><?= wp_get_document_title() ?></title>
</head>

<body>

	<div class="wrapper">
		<header class="header">
			<nav class="navigation">
				<div class="d-flex">
					<div class="brand">
						<h2 class="brand__title"><?= bloginfo('name') ?></h2>
					</div>
					<div class="navigation__menu">

						<?php
						wp_nav_menu([
							'theme_location'  => 'Top',
							'menu'            => 'head menu',
							'menu_id'         => 'main-menu',
							'container'       => null,
							'menu_class'      => 'menu responsive',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						]);
						?>
					</div>
					<button class="burger__menu burger__link"><i class="fa-solid fa-bars"></i></button>
				</div>
			</nav>
			<section class="header-intro-img" style="
			background-image: url('<?= the_field('banner') ?>');">
			</section>
		</header>