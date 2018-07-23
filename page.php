<?php
get_header();
?>
<div id="content" class="">
  <div class="container">
    <div class="row align-items-center">
      <?php if (have_posts()) : while (have_posts()) : the_post();?>
        <div class="col-4 thumbnails">
          <?php the_post_thumbnail('miniature-article');?>
          <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
        </div>
        <?php
      endwhile;
    endif;
    ?>
  </div>
</div>
<?php
get_footer();
?>
