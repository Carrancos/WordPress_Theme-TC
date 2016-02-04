<?php
/*
  Contact
*/

?>
<?php get_header(); ?>

<div class="clearfix"></div>
  <section class="solidtan">
    <div class="container">
      <div class="col-md-12 contactpage">
        <div class="col-md-6 contacttext">
          <?php the_field('location_information_for_left'); ?>
        </div>
        <div class="google-maps">
          <div class="col-md-6 map">
            <?php the_field('location_information_for_right'); ?>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?> 

        