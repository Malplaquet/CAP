<?php
get_header();
?>
<div id="content" class="">
  <?php if (have_posts()) : while (have_posts()) : the_post();?>
    <div class="container">
      <div class="row">
        <div class="col-8">
          <div id="post-<?php the_ID(); ?>" class="post_title_article">
            <h2><?php the_title(); ?></h2>
          </div>
          <div id="post-<?php the_ID(); ?>" class="post_content_article">
            <?php the_content(); ?>
          </div>
          <?php
        endwhile;
      endif;
      ?>
    </div>
    <div class="col-3">
      <p>Sur le même sujet :</p>
      <!-- LOOP avec articles à afficher selon étiquettes correspondantes -->
    </div>
  </div>
</div>
</div>
<?php
get_footer();
?>
