<?php
add_filter('comment_form_defaults', 'edit_default_form_settings');
function edit_default_form_settings($default)
{
   add_filter('comment_form_fields', 'theme_slug_new_comment_fields');
   if (!function_exists('theme_slug_new_comment_fields')) {
      function theme_slug_new_comment_fields($fields)
      {
         $new_fields = array();
         $new_order = array('author', 'email', 'comment'); // нужный порядок

         foreach ($new_order as $key) {
            $new_fields[$key] = $fields[$key];
            unset($fields[$key]);
         }
         unset($fields['cookies']);
         if ($fields)
            foreach ($fields as $key => $val) {
               $new_fields[$key] = $val;
            }
         return $new_fields;
      }
   }

   $default['class_form'] .= ' do-comment';
   return $default;
}
?>

<section class="comments">
   <h3 class="comments__title ">Comments <?= get_comments_number() ?></h3>

   <?php
   if (have_comments()) {

      if (get_comments_number()) { ?>

         <div class="wrapper">

            <?php
            wp_list_comments([
               'walker'            => null,
               'max_depth'         => '2',
               // 'style'             => 'div',
               'callback'          => null,
               'end-callback'      => null,
               'type'              => 'all',
               'reply_text'        => 'Reply',
               'page'              => '',
               'per_page'          => '',
               'reverse_top_level' => null,
               'reverse_children'  => '',
               'format'            => 'html5', // или xhtml, если HTML5 не поддерживается темой
               'short_ping'        => false,    // С версии 3.6,
               'echo'              => true,     // true или false
            ]);
            ?>
         </div>

         <?php
         // навигация по комментариям
         previous_comments_link('&larr; Предыдущие комментарии');
         next_comments_link('Следующие комментарии &rarr;');
         ?>
      <?php } else { ?>
         No comments
      <?php } ?>

      <?php if (comments_open()) {
      ?>
</section>
<!-- <section class="do-comment"> -->
<!-- <h3 class="title">Leave Reply</h3> -->
<?php
         $args = array(
            // изменяем текст кнопки отправки 
            'label_submit' => 'Post comment',
            // удаляем сообщение со списком разрешенных HTML-тегов из-под формы комментирования
            'comment_notes_after' => '',
            'comment_notes_before' => '',
            //текст перед формой комментариев
            'title_reply' => __('Leave a comment'),
            //Меняем разметку полей author и email
            'fields' => array(
               'author' => '<div class="comment-author comment-block"><input class="short-data" id="author" name="author" type="text" value="" size="30" placeholder="Your name" /></div>',
               'email' => '<div class="comment-email comment-block"><input class="short-data" id="email" name="email" type="email" value="" size="30" placeholder="Your email" /></div>',
               //Меняем разметку поля комментария textarea
               'comment_field' => '<div class="comment-form-comment"><textarea class="comment" id="comment" name="comment" 
          aria-required="true" placeholder="Your text"></textarea></div>',
            ),
            'comment_field' => is_user_logged_in() ? '<div class="comment-form-comment"><textarea class="comment" id="comment" name="comment" 
       aria-required="true" placeholder="Your text"></textarea></div>' : null,
            //Меняем разметку кнопки submit
            'submit_field' => '%1$s %2$s'
         );
         comment_form($args);
?>
<!-- </section> -->
<?php
      } else { ?>
<?php } ?>
<?php }
