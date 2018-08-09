<?php
get_header();
?>
<div id="content" class="">
  <div class="container">
    <?php
    global $post;
    $category = get_the_category($post->ID);
    $category = $category[0]->cat_ID;
    $queryCat = new WP_Query(array('posts_per_page' => 8, 'category_in' => $category, 'orderby' => 'date', 'order' => 'DESC', 'paged' => get_query_var('paged') ));
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
              <div class="col-6 category_thumbnail_container">
                <img class="img-fluid category_size_thumbnail " src="<?= esc_url(get_the_post_thumbnail_url($post->ID)) ?>" alt="">
              </div>
              <div class="col-6">
                <div class="category_title_article"><?php the_title(); ?></div>
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
  <div class="row">
    <?php
    wp_pagenavi( array( 'query' => $queryCat ) );
    wp_reset_postdata();
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
