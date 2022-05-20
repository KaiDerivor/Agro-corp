<?php
add_shortcode('recent_posts', 'shortcode_recent_posts');
function shortcode_recent_posts($attr)
{
   $args = array(
      'numberposts' => $attr['posts'],
      'category'    => $attr['category'] ? $attr['category'] : '',
   );

   $result = wp_get_recent_posts($args);
?>

   <div class="posts widget">
      <h2 class="title"><?= $attr['title'] ?></h2>
      <ul>

         <?php
         foreach ($result as $p) { ?>
            <li>
               <img src='<?= get_the_post_thumbnail_url($p['ID']) ?>' alt=''>
               <div>
                  <h6 class="name"><a href="<?php echo get_permalink($p['ID']) ?>"><?php echo $p['post_title'] ?></a></h6>
                  <p> <span class="data"><?= substr(str_replace('-', '/', $p['post_date']), 0, 10)  ?></span>
                     <span class="avtor"><strong> <?= strtoupper(substr(get_the_author($p['post_author']), 0, 1)) . substr(get_the_author($p['post_author']), 1)  ?></strong></span>
                  </p>
               </div>
            </li>

         <?php } ?>
      </ul>
   </div>
<?php }
