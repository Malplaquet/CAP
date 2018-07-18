<?php
get_header();
?>

  <div id="content" class="">
    <?php if (have_posts()) : ?><?php while (have_posts()) : ?><?php the_post(); ?>
      <div id="post-<?php the_ID(); ?>" class="post">
      <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
      </div>
      <div class="post_content">
        <?php the_content(); ?>
      </div>
    <?php endwhile; ?><?php endif; ?>
  </div>

<?php
get_footer();
?>
