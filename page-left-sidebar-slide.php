<?php
/*
  Template Name: Page with Left Sidebar and slide
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
          
           <div class="col-md-12 internalslide">
           <div id="gallery" class="internalslider royalSlider rsDefault slideshow">


            
              <?php if( have_rows('slideshow') ): ?>
              <?php while ( have_rows('slideshow') ) : the_row(); ?>
                <div class="rsContent">
                  <!-- the_sub_field-->
                   <?php $homepageImage = get_sub_field('slides'); ?>
                  <a href="<?php the_sub_field('slideshow_link'); ?>"><img class="rsImg" src="<?php echo $homepageImage['url']; ?>" alt="<?php echo $homepageImage['alt']; ?>" /></a>
                  <div class="previous-button" style="display:none">
                    <?php the_sub_field('previous_button'); ?>
                  </div>
                  <div class="next-button" style="display:none">
                    <?php the_sub_field('next_button'); ?>
                  </div>
                </div>

                
              <?php endwhile; else : ?>
              <?php endif; ?>


            
            </div>
        </div>
           <div class="row">
        <?php get_sidebar('leftpage'); ?>

        <div class="col-md-10 iOverview">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <?php the_content(); ?>
          <?php endwhile; else: ?>
          <?php endif; ?>
        <div class="row">
        <div class="col-md-6 clear-pad">
        <div class="OverviewPost">
          
          <?php include('inc/inc-categories.php'); ?>


        </div>
        </div>
              <div class="col-md-1">
              </div>
              <div class="col-md-5 clear-pad">
                
                <?php if( have_rows('right_box') ): ?>
                  <?php while ( have_rows('right_box') ) : the_row(); ?>

                  <!-- the_sub_field-->
                  <div class="rightbox-interior">
                    <div class="row">
                    <div class="col-sm-4">
                    <?php $iconImage = get_sub_field('icon'); ?>
                  <img class="iconimg floatleft" src="<?php echo $iconImage['url']; ?>" alt="<?php echo $iconImage['alt']; ?>" />
                    </div>
                    <div class="col-sm-8">
                      <a class="landingbxlink" href="<?php the_sub_field('link'); ?>"><?php the_sub_field('text'); ?></a>
                    </div>
                    </div>
                  </div>
              <?php endwhile; else : ?>
        
          <?php endif; ?>

              </div>
              </div>

        </div>
          
          
        </div>
        </div>
        
       
      </div>
    </div>

   <?php get_footer(); ?> 