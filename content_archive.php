
  <a href="<?php the_permalink(); ?>" style="color: black">
                        <div class="media">
                        <?php if ( has_post_thumbnail() ) {?> 
                            <div class="col-sm-4">
                                <img class="img-responsive" src="<?php the_post_thumbnail_url();?>  " alt="...">
                            </div>
                        <?php }?> 
                            <div class="col-sm-8" style="padding-top:10px">
                                <h3 class="media-heading"><?php the_title(); ?></h3>
                                <p><?php the_date(); ?></p>
                                <p><?php the_excerpt(); ?> </p>
                            </div>
                        </div>
                    </a>
                    <hr>


 
