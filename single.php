<?php
get_header();
?>
<div id="content" class="">
  <?php if (have_posts()) : while (have_posts()) : the_post();?>
    <div class="container">
      <div class="row">
        <div class="col-9">
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
    <div class="col-3 justify-content-center col_meme_sujet">
      <p>Sur le même sujet :</p>
      <!-- LOO-P avec articles à afficher selon étiquettes correspondantes -->
      <?php
      $query = new WP_Query( array('posts_per_page' => 4, 'orderby' => 'date', 'order' => 'DESC' ) );
      if ($query->have_posts()) :
        while ($query->have_posts()) :
          $query->the_post();
      ?>
      <div class="row justify-content-center row_meme_sujet">
        <div class="col-10 thumbnail_meme_sujet" style="background-image: url('<?= esc_url(get_the_post_thumbnail_url($post->ID)) ?>')">
          <a href="<?php the_permalink(); ?>">
            <p class="title_meme_sujet"><?php the_title(); ?></p>
          </a>
        </div>
      </div>
      <?php
      endwhile;
      endif;
      ?>
    </div>
  </div>
</div>
</div>
<?php
get_footer();
?>
