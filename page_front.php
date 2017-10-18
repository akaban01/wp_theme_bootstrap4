<?php   
 /*
 * Template Name: front page
 */ 
 get_header();
 ?>
 <!--start section-->
 <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#"></a>
      <div class="navbar-collapse text-center justify-content-center" id="navbar3SupportedContent">
        <a class="text-white" href="#"><i class="fa fa-fw fa-facebook fa-3x"></i></a>
        <a class="text-white" href="#"><i class="fa fa-fw fa-twitter fa-3x"></i></a>
        <a href="#" class="text-white"><i class="fa fa-fw fa-instagram fa-3x"></i></a>
      </div>
    </div>
  </nav>
    <!--end section-->
    <!--start section-->
    <div class="text-center text-white">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div id="carouselArchitecture" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselArchitecture" data-slide-to="0" class=""><i></i></li>
              <li data-target="#carouselArchitecture" data-slide-to="1" class="active"><i></i></li>
              <li data-target="#carouselArchitecture" data-slide-to="2" class=""><i></i></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item">
                <img class="d-block img-fluid" src="https://pingendo.github.io/templates/sections/assets/gallery_architecture_1.jpg" data-holder-rendered="true"> </div>
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="https://pingendo.github.io/templates/sections/assets/gallery_architecture_2.jpg" data-holder-rendered="true"> </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="https://pingendo.github.io/templates/sections/assets/gallery_architecture_3.jpg" data-holder-rendered="true"> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--end section-->
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
    <?php get_footer(); ?>