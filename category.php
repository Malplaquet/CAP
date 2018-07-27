<?php
get_header();
?>
<div id="content" class="">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <?php the_category('', 'single'); ?>
      </div>
    </div>
    <div class="row align-items-center">
      <?php
      $query = new WP_Query(array('posts_per_page' => 8, 'orderby' => 'date', 'order' => 'DESC' ));
      if (have_posts()) : while (have_posts()) : the_post();?>
      <div class="col-6 postcard_category">
        <a class="category_content_article" href="<?php the_permalink(); ?>">
          <div class="row">
            <div class="col-6">
              <img class="img-fluid" src="<?= esc_url(get_the_post_thumbnail_url($post->ID)) ?>" alt="">
            </div>
            <div class="col-6">
              <span class="category_title_article"><?php the_title(); ?></span>
            </div>
          </div>
          <?php the_excerpt(); ?>
        </a>
      </div>
      <?php
    endwhile;
  endif;
  ?>
</div>
</div>
</div>
<?php
get_footer();
?>
