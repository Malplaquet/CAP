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
      $query = new WP_Query(array('posts_per_page' => 9, 'orderby' => 'date', 'order' => 'DESC' ));
      if ($query->have_posts()) :
        while ($query->have_posts()) :
          $query->the_post();
      ?>
      <div class="col-4 mosaic_thumbnails">
        <a href="<?php the_permalink(); ?>">
          <div class="thumbnail_article" style="background-image: url('<?= esc_url(get_the_post_thumbnail_url($post->ID)) ?>')">
            <p class="mosaic_category_article">catégorie | sous catégorie<?= get_category_parents( 'get_cat_ID();', false, ' | '); ?></p>
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
    <div class="row justify-content-center">
      <p class="title_social">Sur les réseaux sociaux</p>
    </div>
    <div class="row justify-content-around">
      <div id="fb-sidebar" class="col-4">
        <?php
        if ( dynamic_sidebar('fb-sidebar') ) :
        endif;
        ?>
      </div>
      <div id="twitter-sidebar" class="col-4">
        <?php
        if ( dynamic_sidebar('twitter-sidebar') ) :
        endif;
        ?>
      </div>
    </div>
  </div>
</div>
<?php
get_footer();
?>
