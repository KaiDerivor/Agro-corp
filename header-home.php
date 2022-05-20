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

			<section class="header-carousel">
				<div class="header-slider">
					<?php
					// // параметры по умолчанию
					$my_posts = get_posts(array(
						'numberposts' => 0,
						'category'    => 0,
						'orderby'     => 'date',
						'order'       => 'ASC',
						'post_type'   => 'Header slider',
						'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
					));

					$hero = get_field('social_icon');

					foreach ($my_posts as $post) {
						setup_postdata($post);
					?>

						<div class="header-slider__item item ">
							<?= the_post_thumbnail() ?>
							<div class="item__content ">
								<h5 class="item__title"><?= the_field('sign_subtitle') ?></h5>
								<h4 class="item__brand"><span><?= the_field('title') ?></span></h4>
								<p class="item__description"><?= the_field('sign_description') ?></p>
								<div class="item__share"><span><?= $hero['title'] ?></span>
									<ul class="item__share-list">
										<?php
										for ($i = 1; $i <= 5; $i++) {
											if (!$hero["icon_src_$i"]||!$hero["icon_url_$i"]) {
												break;
											}
										?>

											<li class="share-list__item">
												<a class="share-list__link" href='<?= $hero["icon_url_$i"] ?>'>
													<?= $hero["icon_src_$i"] ?> </a>
											</li>
										<?php }
										?>
									</ul>
								</div>
							</div>
						</div>
					<?php
					}

					wp_reset_postdata(); // сброс
					?>

				</div>




			</section>
		</header>