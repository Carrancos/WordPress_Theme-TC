<?php
/*
  Template Name: Full Width
*/

?>
<?php get_header(); ?>
<div class="topbanner">
  <?php 

  $image = get_field('intro_banner');

  if( !empty($image) ): ?>

    
  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width="100%"/>

  <?php endif; ?>
</div>
    <div class="row">
    <div class="container">  
      
        <?php the_breadcrumb(); ?>
      </div>
    </div>

    <div class="container">
      
     <div class="row page-header">
          <div class="col-sm-8">
            <p class="breakingground">Breaking New Ground Project</p>
            <h1 class="internal"><?php the_field('h1'); ?></h1>
          </div>
        <div class="col-sm-4">
          <div class="socialicons">
            <span>Share This Page:</span>
            <a href="http://www.facebook.com/sharer.php?u=" class="social fb" title="share this on facebook"><i class="fa fa-facebook-square"></i></a>
          <a href="http://twitter.com/share?url=&text=" class="social tw" title="tweet this page"><i class="fa fa-twitter-square"></i></a>
          <a href="http://www.pinterest.com/pin/create/button/" data-pin-do="buttonBookmark" data-pin-shape="round" class="social pin"><i class="fa fa-pinterest-square"></i></a>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <?php the_content(); ?>
          <?php include("inc/inc-gallery.php"); ?>
          <?php include("inc/inc-timeline-full.php"); ?>
          <?php include("inc/inc-photos-webcams.php"); ?>
          <?php include("inc/inc-construction-cameras.php"); ?>
          <?php include("inc/inc-maps-routes-landing.php"); ?>
        </div>  
      </div>
  </div>

   <?php get_footer(); ?> 