<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Agro_corp
 */

?>

<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Agro_corp
 */

?>

<footer class="footer">
	<div class="container-fluid p-0">
		<div class="row">
			<div class="col-lg-3 col-md-4 p-0">
				<div class="wrapper--title">
					<h2 class='footer__title'><?= bloginfo( 'name' ) ?></h2>
				</div>

			</div>
			<div class="col-lg-5 col-md-8 p-0">
			<?php 
						wp_nav_menu( [
							'theme_location'  => 'Bottom',
							'menu'            => 'Footer menu',
							'menu_id'         => '',
							'container'       => null,
							'menu_class'      => 'menu',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						] );
						?>
			</div>
			<div class="col-lg-4"></div>

			<div class="col-lg-3 p-0">
				<div class="share share-footer">
					<?php echo do_shortcode('[Sassy_Social_Share title="Share"]'); ?>
				</div>
			</div>
			<div class="col-lg-5 p-0 form-field" id='news'>
				<?= do_shortcode('[contact-form-7 id="38" title="News subscribe"]' )?>
			</div>
			<div class="col-lg-4 p-0">
				<p class="copyright">© 2018 Agro Crop. All Rights Reserved</p>
			</div>
		</div>
	</div>
</footer>
</div>


<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
		integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
	<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
	<!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
		integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
		integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
	</script> -->
	<!-- <script src="files/slick.min.js"></script> -->
	<!-- <script src="files/SmoothScroll.min.js"></script> -->
<?= wp_footer() ?>
</body>

</html>


