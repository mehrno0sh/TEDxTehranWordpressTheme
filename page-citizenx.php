<?php /*
  Template Name: Citizenx
Template Post Type: page
 */ ?>

<?php get_header(); ?>

<!-- Slider -->
<section class="main-slider main-slider-static main-slider-white" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -200px;">
<div class="container">
<div class="row">
  <div class="col-md-12"> <img class="img-responsive c-illustration" src="<?php bloginfo('template_directory'); ?>/images/illustration-tehran.svg" alt="Rocket" data-top="position:relative; top[swing]:0px" data-top-bottom="position:relative; top[swing]:-100px" data-anchor-target=".main-slider">
    <h1 id="c-h1">Citizen<span id="c-h1-b">X</span></h1>
    <p class="slogan text-black">Citizen X is an annual award established by TEDxTehran team.  Each year this award will recognize an Iranian citizen for their exceptional contributions to the Iranian society and their community leadership.</p>
    <div class="clearfix"></div>
  </div>
</div>
</section>
<!-- /Slider --> 
<!-- Reviews -->
<section class="section section-white section-reviews">
  <div class="container">
    <div class="row">
      <div class="col-md-12"> 
        <!-- Review -->
        <div class="item-review">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title-section">2016 CitizenX</h2>
            </div>
          </div>
          <!-- Review -->
          <div class="item-review">
            <div class="row">
              <div class="col-md-12">
                <div class="user-image"> <img src="<?php bloginfo('template_directory'); ?>/images/Citizenx/user-image-2.jpg" alt="Sweepers in Our City"> </div>
                <div class="text-reviews"> <span class="icon-quote"></span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit facere, molestias a qui itaque facilis dicta sequi, in eius unde quasi minima nulla voluptates dolores autem sapiente sunt eos earum, culpa? Dignissimos corporis iure vero beatae in, eius, ipsum maiores maxime repellat deleniti rem?</p>
                  <h5>Sweepers in Our City </h5>
                </div>
              </div>
            </div>
          </div>
          <!-- /Review --> 
          <br>
          <br>
          <br>
          <!-- Title -->
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title-section">2015 CitizenX</h2>
            </div>
          </div>
          <!-- /Title -->
          <div class="row">
            <div class="col-md-12">
              <div class="user-image"> <img src="<?php bloginfo('template_directory'); ?>/images/Citizenx/user-image-1.jpg" alt="Gholamali Soleimani"> </div>
              <div class="text-reviews"> <span class="icon-quote"></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit facere, molestias a qui itaque facilis dicta sequi, in eius unde quasi minima nulla voluptates dolores autem sapiente sunt eos earum, culpa? Dignissimos corporis iure vero beatae in, eius, ipsum maiores maxime repellat deleniti rem?</p>
                <h5>Gholamali Soleimani <span>Solico CEO</span></h5>
              </div>
            </div>
          </div>
          <br>
          <br>
          <br>
          <br>
          <div class="row">
            <div class="col-md-12">
              <div  class="panel panel-style">
                <div id="id-box" class="panel-heading">
                  <h4 class="panel-title"> <a href="nominate-<?php echo get_home_url(); ?>/citizenx" target="_blank">Who do you want to be?
                    <p>Nominate the next CitizenX</p>
                    <button id="box-btn" class="btn btn-submit  btn-no-radius disabled" style="pointer-events: all; cursor: pointer;">Nominate</button>
                    </a> </h4>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /Review --> 
        
      </div>
    </div>
  </div>
  <!-- BOX --> 
  <!-- !BOX --> 
</section>
<!-- /Reviews -->

<?php get_footer(); ?>