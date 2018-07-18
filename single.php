<?php
get_header();
?>

<div id="content" class="">
  <?php
    if (have_posts()) :
      while (have_posts()) :
        the_post(); ?>
  <div id="post-<?php the_ID(); ?>" class="post">
    <h2><?php the_title(); ?></h2>
  </div>
  <div id="post-<?php the_ID(); ?>" class="post_content">
    <?php the_content(); ?>
  </div>
  <?php
    endwhile;
    endif;
   ?>
</div>

<?php
get_footer();
?>
