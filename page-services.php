<?php
/*
  Template Name: Services
*/

?>
<?php get_header(); ?>
<div class="topbanner">
  <?php 

  $image = get_field('intro_banner');

  if( !empty($image) ): ?>

    
  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

  <?php endif; ?>
</div>

    <div class="container">
      
     <div class="row page-header">
          <div class="col-sm-12">
            <h1 class="internal"><?php the_field('h1'); ?></h1>
            <h2 class="internal"><?php the_field('h2'); ?></h2>
          </div>
      </div>
      <div class="row">
        <div class="col-md-8 introtext">
          <?php the_field('intro_text'); ?>
        </div>
        <div class="col-md-4 introimage">
          <?php $introImg = get_field('intro_image');
           if( !empty($introImg) ): ?>
             <img class="img-responsive" src="<?php echo $introImg['url']; ?>" alt="<?php echo $introImg['alt']; ?>" />
          <?php endif; ?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 clear-padL">
          <div class="col-md-6">
            <?php the_field('three_column_left'); ?>
          </div>
          <div class="col-md-6">
            <?php the_field('three_column_middle'); ?>
          </div>
        </div>
        <div class="col-md-4">
            <?php the_field('three_column_right'); ?>
        </div>  
      </div>
      <div class="row">
        <div class="col-md-12">
          <?php $statesserved = get_field('states_served_3');
           if( !empty($statesserved) ): ?>
             <img align="center" class="img-responsive centerimg" src="<?php echo $statesserved['url']; ?>" alt="<?php echo $statesserved['alt']; ?>" />
          <?php endif; ?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 footer-cta">
          <?php the_field('footer_cta'); ?>
        </div>
      </div>
  </div>

   <?php get_footer(); ?> 