<?php
get_header();
the_post();
?>

<main class="main">
   <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>

   <h2 class="single-title">
      <span>Some more</span>
      <?= the_title() ?>
   </h2>
   <div class="content-wrapper">
      <div class="row">
         <div class="col-xl-8">
            <section class="single-page">
               <?= the_post_thumbnail() ?>
               <h4 class="single-page__avtor"><span class="fa-regular fa-user"></span><?= get_the_author() ?></h4>
               <ul class="list-info">
                  <li class="list-info__date"><?= the_date('F j, Y') ?></li>
                  <?php echo getPostLikeLink(get_the_ID()); ?>
                  <!-- <li class="list-info__count-like"><i class="fa-regular fa-heart"></i>22</li> -->
                  <li class="list-info__count-comment"><?= get_comment_count() < 0 ? get_comment_count() : 0 ?></li>
               </ul>

               <?= the_content() ?>
            </section>

            <?php
            comments_template();
            ?>



         </div>
         <?php get_sidebar(); ?>
      </div>
   </div>
</main>
<?php get_footer();
