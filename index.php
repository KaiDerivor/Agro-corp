<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Agro_corp
 */
?>

<? get_header('home'); ?>

<main class="main">
	<section class="info-box about">
		<div class="container">
			<div class="row">
				<?php
				$hero = get_field('section_about');
				?>
				<div class="col-lg-4 article">
					<h3 class="info-box__title"><?= $hero['title'] ?></h3>
					<h3 class="info-box__subtitle"><?= $hero['subtitle'] ?></h3>
					<p class="info-box__content"><?= $hero['text'] ?></p>

				</div>
				<div class="col-lg-8 about__side">
					<span style="background-image:url(<?= $hero['bg'] ?>)"></span>
					<img class="info-box__intro-img" src="<?= $hero['image'] ?>" alt="">
				</div>
			</div>
		</div>
	</section>
	<section class="multi-item">
		<div class="container">
			<?php
			$hero = get_field('short_about_activity');
			?>
			<span style="background-image:url(<?= $hero['background'] ?>);"></span>
			<div class="multi-item__container">
				<h3 class="multi-item__title"><?= $hero['title'] ?></h3>
				<p class="multi-item__content"><?= $hero['text'] ?></p>
				<img class='multi-item__img' src="<?= $hero['image'] ?>" alt="" class="milti-item__img">
			</div>
		</div>
	</section>
	<section class="info-box news">

		<div class="container">
			<div class="row">

				<div class="col-lg-4 article">
					<div class="container">
						<?php
						$hero = get_field('section_news');
						?>
						<h3 class="info-box__title"><?= $hero['title'] ?></h3>
						<h3 class="info-box__subtitle"><?= $hero['subtitle'] ?></h3>
						<p class="info-box__content"><?= $hero['text'] ?></p>
					</div>

				</div>
				<div class="col-lg-8 news__side ">

					<div class="wrapper">
						<div class="slider">

							<?php

							$post_objects = get_field('news');

							if ($post_objects) : ?>
								<?php foreach ($post_objects as $post) :
								?>
									<?php setup_postdata($post); ?>

									<div class="slider__item">
										<a href="<?= the_permalink() ?>"> <?= the_post_thumbnail() ?></a>
										<h4 class="slider__title-item"><?= the_title() ?></h4>
									</div>

								<?php endforeach; ?>
								<?php wp_reset_postdata();
								?>
							<?php endif;
							?>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>

	<section class="blog">


		<div class="container">
			<?
			$hero = get_field('section_blog')
			?>
			<div class="blog__before"></div>
			<div class="blog__after"></div>
			<div class='blog__title-box'>
				<h4 class='blog__title-text'><?= $hero['title'] ?></h4>
				<h4 class='blog__title-subtitle'><?= $hero['subtitle'] ?></h4>
			</div>
			<div class="slider-blog">

				<?php

				$post_objects = $hero['blog_list'];

				if ($post_objects) : ?>
					<?php foreach ($post_objects as $post) :
					?>
						<?php setup_postdata($post); ?>

						<div class="slider-blog__item page">

							<?= the_post_thumbnail() ?>
							<div class="wrapper">
								<div class="page__content">
									<h6 class="page__title"><?= the_title() ?></h6>
									<p class="page__text"><?= the_excerpt() ?>Luis aute irure dolor in com modo consequat.</p>
									<a class="page__link" href="<?= the_permalink() ?>">Read more</a>
								</div>

							</div>
						</div>


					<?php endforeach; ?>
					<?php wp_reset_postdata();
					?>
				<?php endif;

				?>



			</div>

		</div>

		<div class="arrows">
			<button class="prevS" type="button"><i class="fa-solid fa-angle-right"></i></button>
			<button class="nextS" type="button"><i class="fa-solid fa-angle-left"></i></button>
		</div>
	</section>
	<section class="test" id='testimonials'>
		
		<div class="container">
			<h3 class="test__subtitle"><?= the_field('testimonial_title') ?></h3>
			<h3 class="test__title"><?= the_field('testimonial_subtitle') ?></h3>
			<div class="test__grid">

				<?php $hero = get_field('person_1');
				if ($hero) : ?>
					<div class="test__img"><img class="grid__avatar" src="<?= $hero['photo'] ?>" alt=""></div>
					<div class="test__content header grid-item">
						<h4 class="grid-item__title"><?= $hero['name_person'] ?></h4>
						<p class="grid-item__text"><?= $hero['short_info'] ?>
						</p>
						<ul class="grid-item__list-share">
							<?php
							if ($hero['facebook_link']) { ?>
								<li class="grid-item__link-share"> <a class="share-list__link" href='<?=$hero[' facebook_link']?>'><i class="fa-brands fa-facebook-square"></a></i></li>
							<?php }
							if ($hero['mail']) { ?>
								<li class="grid-item__link-share"><a class="share-list__link" href='<?= $hero['mail'] ?>'><i class="fa-brands fa-google-plus-g"></i></a></li>
							<?php }
							if ($hero['twitter_link']) { ?>
								<li class="grid-item__link-share"><a class="share-list__link" href='<?= $hero['twitter_link'] ?>'><i class="fa-brands fa-twitter"></i></a></li>
							<?php }
							if ($hero['instagram_link']) { ?>
								<li class="grid-item__link-share"><a class="share-list__link" href='<?= $hero['instagram_link'] ?>'><i class="fa-brands fa-instagram"></i></a></li>
							<?php }
							?>
						</ul>
					</div>
				<?php endif; ?>

				<?php $hero = get_field('person_2');
				if ($hero) : ?>
					<div class="test__img"><img class="grid__avatar" src="<?= $hero['photo'] ?>" alt=""></div>
					<div class="test__content grid-item">
						<h4 class="grid-item__title"><?= $hero['name_person'] ?></h4>
						<p class="grid-item__text"><?= $hero['short_info'] ?>
						</p>
						<ul class="grid-item__list-share">
							<?php
							if ($hero['facebook_link']) { ?>
								<li class="grid-item__link-share"> <a class="share-list__link" href='<?= $hero[' facebook_link']?>'><i class="fa-brands fa-facebook-square"></a></i></li>
							<?php }
							if ($hero['mail']) { ?>
								<li class="grid-item__link-share"><a class="share-list__link" href='<?= $hero['mail'] ?>'><i class="fa-brands fa-google-plus-g"></i></a></li>
							<?php }
							if ($hero['twitter_link']) { ?>
								<li class="grid-item__link-share"><a class="share-list__link" href='<?= $hero['twitter_link'] ?>'><i class="fa-brands fa-twitter"></i></a></li>
							<?php }
							if ($hero['instagram_link']) { ?>
								<li class="grid-item__link-share"><a class="share-list__link" href='<?= $hero['instagram_link'] ?>'><i class="fa-brands fa-instagram"></i></a></li>
							<?php }
							?>
						</ul>
					</div>
				<?php endif; ?>

				<?php $hero = get_field('person_3');
				if ($hero) : ?>
					<div class="test__img"><img class="grid__avatar" src="<?= $hero['photo'] ?>" alt=""></div>
					<div class="test__content grid-item">
						<h4 class="grid-item__title"><?= $hero['name_person'] ?></h4>
						<p class="grid-item__text"><?= $hero['short_info'] ?>
						</p>
						<ul class="grid-item__list-share">
							<?php
							if ($hero['facebook_link']) { ?>
								<li class="grid-item__link-share"> <a class="share-list__link" href='<?= $hero[' facebook_link']?>'><i class="fa-brands fa-facebook-square"></a></i></li>
							<?php }
							if ($hero['mail']) { ?>
								<li class="grid-item__link-share"><a class="share-list__link" href='<?= $hero['mail'] ?>'><i class="fa-brands fa-google-plus-g"></i></a></li>
							<?php }
							if ($hero['twitter_link']) { ?>
								<li class="grid-item__link-share"><a class="share-list__link" href='<?= $hero['twitter_link'] ?>'><i class="fa-brands fa-twitter"></i></a></li>
							<?php }
							if ($hero['instagram_link']) { ?>
								<li class="grid-item__link-share"><a class="share-list__link" href='<?= $hero['instagram_link'] ?>'><i class="fa-brands fa-instagram"></i></a></li>
							<?php }
							?>
						</ul>
					</div>
				<?php endif; ?>

				<?php $hero = get_field('person_4');
				if ($hero) : ?>
					<div class="test__img"><img class="grid__avatar" src="<?= $hero['photo'] ?>" alt=""></div>
					<div class="test__content grid-item">
						<h4 class="grid-item__title"><?= $hero['name_person'] ?></h4>
						<p class="grid-item__text"><?= $hero['short_info'] ?>
						</p>
						<ul class="grid-item__list-share">
							<?php
							if ($hero['facebook_link']) { ?>
								<li class="grid-item__link-share"> <a class="share-list__link" href='<?= $hero[' facebook_link']?>'><i class="fa-brands fa-facebook-square"></a></i></li>
							<?php }
							if ($hero['mail']) { ?>
								<li class="grid-item__link-share"><a class="share-list__link" href='<?= $hero['mail'] ?>'><i class="fa-brands fa-google-plus-g"></i></a></li>
							<?php }
							if ($hero['twitter_link']) { ?>
								<li class="grid-item__link-share"><a class="share-list__link" href='<?= $hero['twitter_link'] ?>'><i class="fa-brands fa-twitter"></i></a></li>
							<?php }
							if ($hero['instagram_link']) { ?>
								<li class="grid-item__link-share"><a class="share-list__link" href='<?= $hero['instagram_link'] ?>'><i class="fa-brands fa-instagram"></i></a></li>
							<?php }
							?>
						</ul>
					</div>
				<?php endif; ?>

				<?php $hero = get_field('person_5');
				if ($hero) : ?>
					<div class="test__img"><img class="grid__avatar" src="<?= $hero['photo'] ?>" alt=""></div>
					<div class="test__content grid-item">
						<h4 class="grid-item__title"><?= $hero['name_person'] ?></h4>
						<p class="grid-item__text"><?= $hero['short_info'] ?>
						</p>
						<ul class="grid-item__list-share">
							<?php
							if ($hero['facebook_link']) { ?>
								<li class="grid-item__link-share"> <a class="share-list__link" href='<?= $hero[' facebook_link']?>'><i class="fa-brands fa-facebook-square"></a></i></li>
							<?php }
							if ($hero['mail']) { ?>
								<li class="grid-item__link-share"><a class="share-list__link" href='<?= $hero['mail'] ?>'><i class="fa-brands fa-google-plus-g"></i></a></li>
							<?php }
							if ($hero['twitter_link']) { ?>
								<li class="grid-item__link-share"><a class="share-list__link" href='<?= $hero['twitter_link'] ?>'><i class="fa-brands fa-twitter"></i></a></li>
							<?php }
							if ($hero['instagram_link']) { ?>
								<li class="grid-item__link-share"><a class="share-list__link" href='<?= $hero['instagram_link'] ?>'><i class="fa-brands fa-instagram"></i></a></li>
							<?php }
							?>
						</ul>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</section>
	<section class="works">
		<h3 class="works__subtitle"><?= the_field('our_work_title')?></h3>
		<h3 class="works__title"><?= the_field('our_work_subtitle') ?></h3>
		<div class="wrapper container">
			<?php
			for ($i = 1; $i <= 5; $i++) {
				$hero = get_field("work_$i");
				if ($hero) { ?>
					<div class="works__item item">
						<?php if ($hero['image_fa']) {
							echo $hero['image_fa'];
						} else { ?>
							<img src="<?= $hero['image'] ?>" alt="">
						<?php } ?>

						<h5 class="item__title"><?= $hero['title'] ?></h5>
						<p class="item__content"><?= $hero['short_info'] ?></p>
					</div>
			<?php } else {
					break;
				}
			}
			?>


		
		</div>
	</section>
</main>
<? get_footer();
