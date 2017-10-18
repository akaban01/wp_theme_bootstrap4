<?php
/*
* template name: static page
 */
get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>
  <div class="py-5 bg-dark text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="display-3"><?= the_title()?></h1>
        </div>
      </div>
    </div>
  </div>   
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
      <?php 
      the_content(); 
      ?>
		</div>
	</div>
	</div>
  </div>
 <?php endwhile; endif;?> 
<?php get_footer(); ?>