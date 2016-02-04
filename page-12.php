<?php
/*
  Media Coverage
*/

?>
<?php get_header(); ?>

  <section class="solidtan">
    <div class="titlegradient"></div>
    <div class="container">
      <div class="col-md-5 sectiontitle">
        <h1>Respected Quotes</h1>
      </div>
      <div class="col-md-7">
        
      </div>
      <div class="clearfix"></div>
      
      <div class="col-md-6 internalslide clear-pad">  
        <div id="gallery" class="royalSlider rsText textslider">

        <?php if( have_rows('media_coverage_quotes_left_side') ): ?>
        <?php while ( have_rows('media_coverage_quotes_left_side') ) : the_row(); ?>
                  
        <!-- the_sub_field-->

          <div class="rsContent">
            <div class="rotatingtext">
              <?php the_sub_field('left_side_quotes'); ?>
            </div>
          </div>

        <?php endwhile; else : ?>
        <?php endif; ?>
        </div>

      </div>
      <div class="col-md-6 internalslide">  
        <div id="gallery" class="royalSlider rsText textslider">

        <?php if( have_rows('media_coverage_quotes_left_side') ): ?>
        <?php while ( have_rows('media_coverage_quotes_left_side') ) : the_row(); ?>
                  
        <!-- the_sub_field-->

          <div class="rsContent">
            <div class="rotatingtext media">
              <?php the_sub_field('right_side_quotes'); ?>
            </div>
          </div>

        <?php endwhile; else : ?>
        <?php endif; ?>
        </div>

      </div>
    </div>
    <br><br>
  </section>

<?php get_footer(); ?> 