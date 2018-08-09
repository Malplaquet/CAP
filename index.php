<!-- SUPPRIMER TOUS LES /CAP lors de la mise en ligne-->
<?php
get_header();
?>
<div id="content">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-5">
        <p class="title_last_actu">Dernières actualités</p>
      </div>
    </div>
    <div class="row align-items-center mosaic">
      <?php
      $query = new WP_Query(array('posts_per_page' => 9, 'orderby' => 'date', 'order' => 'DESC', 'paged' => get_query_var('paged') ));
      if ($query->have_posts()) :
        while ($query->have_posts()) :
          $query->the_post();
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

          <div class="col-4 mosaic_thumbnails">
            <a href="<?php the_permalink(); ?>">
              <div class="thumbnail_article" style="background-image: url('<?= esc_url(get_the_post_thumbnail_url($post->ID)) ?>')">
                <p class="mosaic_category_article"><?= implode( ' | ',$categoriesName); ?></p>
                <p class="mosaic_title_article"><?php the_title(); ?></p>
                <div class="mosaic_excerpt"><?= the_excerpt(); ?></div>
              </div>
            </a>
          </div>
          <?php
        endwhile;
      endif;
      ?>
    </div>
    <div class="row">
      <div class="">
        <?php
        wp_pagenavi( array( 'query' => $query ) );
        wp_reset_postdata();
        ?>
      </div>
    </div>
    <div class="row justify-content-center">
      <p class="title_social">Sur les réseaux sociaux</p>
    </div>
    <div class="row justify-content-center">
      <div class="col-5">
        <div class="fb-page" data-href="https://www.facebook.com/CathyApourceauPolySenatrice/" data-tabs="timeline" data-width="400" data-height="800" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
          <blockquote cite="https://www.facebook.com/CathyApourceauPolySenatrice/" class="fb-xfbml-parse-ignore">
            <a href="https://www.facebook.com/CathyApourceauPolySenatrice/">Cathy Apourceau Poly, Sénatrice du Pas-de-Calais</a>
          </blockquote>
        </div>
      </div>
      <div class="col-5">
        <a class="twitter-timeline" data-lang="fr" data-width="400" data-height="800" data-theme="light" href="https://twitter.com/Apourceau?ref_src=twsrc%5Etfw">Tweets by Apourceau</a>
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8">
        </script>
      </div>
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
