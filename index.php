<?php
/*
* template name: index
 */
get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>
  <div style="background: #333; color: white;font-family: 'Muli', sans-serif;padding-bottom:10px;">
    <div class="container">
      <h1><?php the_title(); ?></h1>
    </div>
  </div>   
  <div style="background: white; color: black;padding-top:20px;">
    <div class="container">
      <?php 
      the_post_thumbnail();
      echo '<br />';
      the_content(); ?>
    </div>
  </div>
 <?php endwhile; endif;?> 
</div><!--end of container-->
<?php get_footer(); ?>