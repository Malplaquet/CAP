<?php
get_header();
?>
<div id="content" class="">
  <?php if (have_posts()) : while (have_posts()) : the_post();
  $categories = get_the_category();
  $categoriesName = [];
  // var_dump( $categories);
  if ($categories[0]->parent != 0) {
    $categories = array_reverse($categories);
  }
  foreach ($categories as $category) {
    $categoriesName[] = $category->name;
  }
  ?>
  <div class="container">
    <div class="row">
      <div class="col-8">
        <p class="post_category_article"><?= implode( ' | ',$categoriesName); ?></p>
        <div id="post-<?php the_ID(); ?>" class="post_title_article">
          <?php the_title(); ?>
        </div>
        <p class="post_date"><?php the_date('', 'Article publié le ', '.'); ?></p>
        <div id="post-<?php the_ID(); ?>" class="post_content_article">
          <?php the_content(); ?>
        </div>
        <?php
      endwhile;
    endif;
    ?>
  </div>
  <div class="col-4 justify-content-center col_meme_sujet">
    <div class="row">
      <div class="col-10">
        <p class="title_col_meme_sujet">Sur le même sujet :</p>
      </div>
    </div>
    <!-- LOOP avec articles à afficher selon étiquettes correspondantes -->
    <?php
    $query = new WP_Query( array('posts_per_page' => 4, 'orderby' => 'date', 'order' => 'DESC' ) );
    if ($query->have_posts()) :
      while ($query->have_posts()) :
        $query->the_post();
        ?>
        <div class="row justify-content-center row_meme_sujet">
          <div class="col-10 thumbnail_meme_sujet" style="background-image: url('<?= esc_url(get_the_post_thumbnail_url($post->ID)) ?>')">
            <a href="<?php the_permalink(); ?>">
              <p class="title_thumbnail_meme_sujet"><?php the_title(); ?></p>
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
