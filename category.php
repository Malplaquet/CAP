<?php
get_header();
?>
<div id="content" class="">
  <div class="container">
      <?php
      $query = new WP_Query(array('posts_per_page' => 8, 'orderby' => 'date', 'order' => 'DESC' ));
      ?>
      <div class="row justify-content-center">
        <?php
        $cat = get_the_category();
        $cat = $cat[1];
        $displaySubcatName = $cat->cat_name;
        ?>
        <p class="title_category"><?= $displaySubcatName ?></p>
      </div>
      <div class="row align-items-center postcard-container">
      <?php if (have_posts()) : while (have_posts()) : the_post();?>
      <div class="col-6 postcard_category">
        <a class="category_content_article" href="<?php the_permalink(); ?>">
          <div class="row">
            <div class="col-5">
              <img class="img-fluid" src="<?= esc_url(get_the_post_thumbnail_url($post->ID)) ?>" alt="">
            </div>
            <div class="col-7">
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
<div class="row cloud-tag-container justify-content-center">
  <p class="cloud-tag-title">Retrouvez nos articles par étiquettes :</p>
  <div class="cloud-tag-category">
    <?php
    $argsCloudTag = array(
      'smallest' => 12,
      'largest' => 25,
      'unit' => 'pt',
      'separator' => ' ',
    );
    wp_tag_cloud($argsCloudTag);
    ?>
  </div>
</div>
</div>
</div>
<?php
get_footer();
?>
