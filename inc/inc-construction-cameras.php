<?php if ( is_page(224) ) : ?>
  <div class="row">
    <div class="col-md-12 clear-pad">
      <h2 class="photos-webcams">Construction Cameras</h2>
    </div>
  </div>
  <div class="row">

    <div class="col-md-6 clear-pad">
    <?php if( have_rows('left_construction_cameras') ): ?>
      <?php while ( have_rows('left_construction_cameras') ) : the_row(); ?>
        <div class="row">
          <div class="col-md-12 clear-pad">
              <!-- the_sub_field-->
              <a class="photos-webcams" href="<?php the_sub_field('link_left'); ?>"><h3><?php the_sub_field('cc_left__text'); ?></h3></a>
              <a href="<?php the_sub_field('link_left'); ?>"><img height="242" width="435" src="<?php the_sub_field('construction_cameras_image_left'); ?>" alt=""> </a>
          </div>
        </div>
      <?php endwhile; else : ?>
    <?php endif; ?>
    </div>

    <div class="col-md-6 clear-pad">
      <?php if( have_rows('right_construction_cameras') ): ?>
        <?php while ( have_rows('right_construction_cameras') ) : the_row(); ?>
          <div class="row">
            <div class="col-md-12 clear-pad">
                <!-- the_sub_field-->
                <a class="photos-webcams" href="<?php the_sub_field('link_right'); ?>"><h3><?php the_sub_field('cc_right_text'); ?></h3></a>
                <a href="<?php the_sub_field('link_right'); ?>"><img height="242" width="435" src="<?php the_sub_field('construction_cameras_image_right'); ?>" alt=""> </a>
            </div>
          </div>
        <?php endwhile; else : ?>
      <?php endif; ?>
    </div>
  </div>
  
<?php endif; ?>