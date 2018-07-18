<?php
get_header();
?>
<div id="content" class="">
  <div class="container">
    <div class="row align-items-center">
      <?php if (have_posts()) : while (have_posts()) : the_post();?>
        <div class="col-3 thumbnails">
          <?php the_post_thumbnail('miniature-article');?>
        </div>
        <div class="col-9">
          <div id="post-<?php the_ID(); ?>" class="post">
            <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
            <span class="post_content"><?php the_excerpt(); ?></span>
          </div>
        </div>
        <?php
      endwhile;
    endif;
    ?>
  </div>
</div>
<div class="navigation">
  <div class="alignleft"><?php posts_nav_link('','','&laquo; Previous Entries') ?></div>
  <div class="alignright"><?php posts_nav_link('','Next Entries &raquo;','') ?></div>
</div>
</div>
<?php
get_footer();
?>
