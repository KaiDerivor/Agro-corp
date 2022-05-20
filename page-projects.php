<?php
/*
Template Name: Projects
*/
get_header(); ?>

<main class="main">
   <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>


   <section class="portfolio">
      <h3 class="portfolio__title">
         <span><?= the_field('title') ?></span>
         <?= the_field('subtitle') ?>
      </h3>





      <div class="content-wrapper portfolio-table">


         <?php

         // параметры по умолчанию
         $my_posts = get_posts(array(
            'numberposts' => 0,
            'orderby'     => 'date',
            'order'       => 'ASC',
            'meta_value'  => '',
            'post_type'   => 'project-item',
            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
         ));

         foreach ($my_posts as $post) {
            setup_postdata($post);
         ?>


            <a href="<?= the_post_thumbnail_url(); ?>" data-fancybox="gallery" data-caption="<?= the_content()  ?>">
               <div class="portfolio-table__item">
                  <h6 class="portfolio-table__title"><?= the_title() ?></h6>
                  <img src="<?= the_post_thumbnail_url(); ?>" alt="">
                  <div class="overlay-box">
                     <h5 class="overlay-box__title"><?= the_content() ?></h5>
                  </div>
               </div>
            </a>
         <?php
         }

         wp_reset_postdata(); // сброс

         ?>



      </div>


   </section>
</main>




<?php
get_footer();
