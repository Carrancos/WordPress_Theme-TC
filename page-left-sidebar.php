<?php
/*
  Template Name: Page with Left Sidebar
*/

?>
<?php get_header(); ?>
    
    <div class="row">
    <div class="container">  
      
        <?php the_breadcrumb(); ?>
      </div>
    </div>
    
    <div class="container">
    <div class="row page-header">
          <div class="col-sm-8 clear-pad">
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
          
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
           <div class="row">
        <?php get_sidebar('leftpage'); ?>

        <div class="col-md-10">
        <?php the_content(); ?>
          <?php include("inc/inc-categories.php"); ?>
          <?php include("inc/inc-internalgallery.php"); ?>
          <?php include("inc/inc-maps-routes-internal.php"); ?>
          <?php include("inc/inc-timeline-full.php"); ?>
          
        <?php endwhile; else: ?>
          
          <div class="page-header">
            <h1>Oh No!</h1>
          </div>

          <p>No Content is appearing for this page!</p>

          <?php endif; ?>


        </div>
        </div>
        

        
      </div>
    </div>

   <?php get_footer(); ?> 