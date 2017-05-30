<?php
/*
  Template Name: Homepage
*/
?>

<?php get_header(); ?>

  <!--Start of main -->
  <div class="main-container">
<style>
.lead-module-container { background-color: #eee; }
.contain-sidebar { background-color: #ddd; }
.lead-module-image { background-color: pink; height: 300px; width: 100%; }
.lead-module-nav { width: 100%; }
.lead-nav-item { border:2px solid #000; float: left; min-height: 50px; width: 16.66%; }
.lead-nav-item a { display: block; min-height: 50px; text-align: center; width: 100%; }
#lead-module-container[data-id='community'] .lead-module-image {
  background: url(<?php echo get_template_directory_uri(); ?>/library/images/carousel/community.jpg) center no-repeat;
}
#lead-module-container[data-id='renewable'] .lead-module-image {
  background: url(<?php echo get_template_directory_uri(); ?>/library/images/carousel/renewable.jpg) center no-repeat;
}
#lead-module-container[data-id='events'] .lead-module-image {
  background: url(<?php echo get_template_directory_uri(); ?>/library/images/carousel/events.jpg) center no-repeat;
}
#lead-module-container[data-id='local-food'] .lead-module-image {
  background: url(<?php echo get_template_directory_uri(); ?>/library/images/carousel/local-food.jpg) center no-repeat;
}
#lead-module-container[data-id='backyard'] .lead-module-image {
  background: url(<?php echo get_template_directory_uri(); ?>/library/images/carousel/backyard.jpg) center no-repeat;
}
#lead-module-container[data-id='kids'] .lead-module-image {
  background: url(<?php echo get_template_directory_uri(); ?>/library/images/carousel/green-kids.jpg) center no-repeat;
}
</style>

  <div class="contain-content">

    <div data-id="community" id="lead-module-container" class="lead-module-container">
      <div class="lead-module-image"></div>
      <div class="lead-module-nav">
        <div class="lead-nav-item" data-name="community"><a href="#">Community</a></div>
        <div class="lead-nav-item" data-name="renewable"><a href="#">Renewable Energy</a></div>
        <div class="lead-nav-item" data-name="events"><a href="#">Events</a></div>
        <div class="lead-nav-item" data-name="local-food"><a href="#">Local Food</a></div>
        <div class="lead-nav-item" data-name="backyard"><a href="#">Backyard Conservation</a></div>
        <div class="lead-nav-item" data-name="kids"><a href="#">Green Kids</a></div>
      </div>
    </div>

    <div class="contain-sidebar">
      SIDE BAR
    </div>

  </div>

  </div>
  <!-- end of .main-container -->

<?php get_footer(); ?>
