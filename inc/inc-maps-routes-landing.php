<?php if ( is_page(9) ) : ?>
<?php if( have_rows('maps_&_routes_landing') ): ?>
              <?php while ( have_rows('maps_&_routes_landing') ) : the_row(); ?>

                  <!-- the_sub_field-->
				<div class="col-sm-6 gallerymap">
        <h2 class="gallery"><a href="<?php echo $Mapimage['url']; ?>" data-lightbox="map-title"><?php the_sub_field('map_title'); ?></a></h2>
          <?php $Mapimage = get_sub_field('map_landing_image'); ?>
            <a href="<?php echo $Mapimage['url']; ?>" data-lightbox="map" ><img class="img-responsive-maps" height="255" width="440" src="<?php echo $Mapimage['url']; ?>" alt="<?php echo $Mapimage['alt']; ?>"></a>
				<a href="<?php echo $Mapimage['url']; ?>" data-lightbox="map-link">Expand Map</a>
        </div>
              <?php endwhile; ?>
				
<?php endif; ?>
<?php endif; ?>