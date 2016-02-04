<?php if ( is_page(119) || is_page(109) || is_page(269) || is_page(243) || is_page(255) ) : ?>
  <div class="row nc">
  
    <div class="col-md-7">
      <h2 class="announcementsInternal"><?php the_field("maps_routes_title"); ?></h2>
    </div>
    <div class="col-md-5">
    </div>

    <div class="col-md-7">
      <p><?php the_field("maps_routes_content"); ?></p>
    </div>
    <div class="col-md-5">
      <div class="GPStitle">
        <p><?php the_field("advisory_title"); ?></p>
      </div>
      <div class="GPScontent">
        <p><?php the_field("advisory_content"); ?></p>
      </div>
    </div>
  
  </div>
  
  <div class="row">
  
    <div class="col-md-12 clear-pad">
      <h2><?php the_field("map_title"); ?></h2>
      <a href="<?php the_field('map'); ?>" data-lightbox="<?php the_field('map'); ?>" ><img class="imgpad" width="100%" src="<?php the_field('map'); ?>" alt=""> </a>
      <a class="expandlink" data-lightbox="Map" href="<?php the_field("map"); ?>">Expand Map <i class="fa fa-angle-double-right"></i></a>
       <h2 class="nc"><?php the_field("directions_title"); ?></h2>
    </div>
    <div class="col-md-6">
    <p><?php the_field("directions_left_column"); ?></p>
    </div>
    <div class="col-md-6">
    <p><?php the_field("directions_right_column"); ?></p>
    </div>
  </div>
<?php endif; ?>