<?php
get_header(); ?>
<section style="background: white; padding: 30px;margin: 5px 0px; ">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();
  get_template_part( 'content_archive');
endwhile; endif; 
?>
</div>
</div>
</div>
</section>
 <?php get_footer(); ?>


 
