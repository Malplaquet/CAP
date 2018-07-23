<?php
get_header();
?>
<div id="content">
  <div class="container">
    <div>
      <h2 class="title_category">Mobilisations</h2>
    </div>
    <div class="row align-items-center">
      <?php
      $query_mobilisation = new WP_Query(array('category_name' => 'mobilisation', 'posts_per_page' => 3, 'orderby' => 'date', 'order' => 'DESC' ));
      if ($query_mobilisation->have_posts()) :
        while ($query_mobilisation->have_posts()) :
          $query_mobilisation->the_post();
          ?>
          <div class="col-4 thumbnails">
            <?php the_post_thumbnail('miniature-article');?>
            <h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
          </div>
          <?php
        endwhile;
      endif;
      ?>
    </div>
    <div class="row align-items-center">
      <div class="col-3">
        
      </div>
    </div>
    <div>
      <h2 class="title_category">Interventions</h2>
    </div>
    <div class="row align-items-center">
      <?php
      $query_interv = new WP_Query(array('category_name' => 'interv', 'posts_per_page' => 3, 'orderby' => 'date', 'order' => 'DESC' ));
      if ($query_interv->have_posts()) :
        while ($query_interv->have_posts()) :
          $query_interv->the_post();
          ?>
          <div class="col-4 thumbnails">
            <?php the_post_thumbnail('miniature-article');?>
            <h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
          </div>
          <?php
        endwhile;
      endif;
      ?>
    </div>
    <div>
      <h2 class="title_category">Questions</h2>
    </div>
    <div class="row align-items-center">
      <?php
      $query_question = new WP_Query(array('category_name' => 'question', 'posts_per_page' => 3, 'orderby' => 'date', 'order' => 'DESC' ));
      if ($query_question->have_posts()) :
        while ($query_question->have_posts()) :
          $query_question->the_post();
          ?>
          <div class="col-4 thumbnails">
            <?php the_post_thumbnail('miniature-article');?>
            <h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
          </div>
          <?php
        endwhile;
      endif;
      ?>
    </div>
    <div>
      <h2 class="title_category">Revue de Presse</h2>
    </div>
    <div class="row align-items-center">
      <?php
      $query_press = new WP_Query(array('category_name' => 'press', 'posts_per_page' => 3, 'orderby' => 'date', 'order' => 'DESC' ));
      if ($query_press->have_posts()) :
        while ($query_press->have_posts()) :
          $query_press->the_post();
          ?>
          <div class="col-4 thumbnails">
            <?php the_post_thumbnail('miniature-article');?>
            <h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
          </div>
          <?php
        endwhile;
      endif;
      ?>
    </div>
    <div class="navigation">
      <div class="alignleft"><?php posts_nav_link('','','&laquo; Previous Entries') ?></div>
      <div class="alignright"><?php posts_nav_link('','Next Entries &raquo;','') ?></div>
    </div>
  </div>
  <?php
  get_footer();
  ?>
