<?php if ( is_page(87) ) : ?>
  <div class="row">
    <div class="col-md-6 clear-pad">
      <a class="photos-webcams" href="construction-photos"><h2 class="photos-webcams">Construction Photos</h2></a>
      <a href="construction-photos"><img height="242" width="435" src="<?php the_field('construction_photos'); ?>" alt=""> </a>
      <p><?php the_field('construction_text') ?></p>
    </div>

    <div class="col-md-6 clear-pad">
      <a class="photos-webcams" href="construction-cameras"><h2 class="photos-webcams">Construction Cameras</h2></a>
      <a  href="construction-cameras"><img height="242" width="435" src="<?php the_field('construction_cameras'); ?>" alt=""> </a>
      <p><?php the_field('construction_cameras_text') ?></p>
    </div>
  </div>
<?php endif; ?>