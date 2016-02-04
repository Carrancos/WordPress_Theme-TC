<?php if( have_rows('TMCimages') ): ?>
			<h2 class="gallery">Texas Medical Center</h2>
              <?php while ( have_rows('TMCimages') ) : the_row(); ?>

                  <!-- the_sub_field-->
				<div class="col-sm-6 col-md-4 galleryphoto">
          <?php $TMCimage = get_sub_field('TMCimage'); ?>
            <a href="<?php echo $TMCimage['url']; ?>" data-lightbox="<?php the_sub_field('location_group'); ?>" ><img height="165" width="285" src="<?php echo $TMCimage['url']; ?>" alt="<?php echo $TMCimage['alt']; ?>"></a>
				</div>
              <?php endwhile; else : ?>
				
          <?php endif; ?>
			
<?php if( have_rows('Katyimages') ): ?>
			<h2 class="gallery">Katy</h2>
              <?php while ( have_rows('Katyimages') ) : the_row(); ?>

              
                  <!-- the_sub_field-->
				<div class="col-sm-6 col-md-4 galleryphoto">
          <?php $katyImages = get_sub_field('katy_images'); ?>
              <a href="<?php echo $katyImages['url']; ?>" data-lightbox="<?php the_sub_field('photo_group'); ?>" ><img height="165" width="285" src="<?php echo $katyImages['url']; ?>" alt="<?php echo $katyImages['alt']; ?>"></a>
				</div>
              <?php endwhile; else : ?>

          <?php endif; ?>

<?php if( have_rows('Pearlandgallery') ): ?>
			<h2 class="gallery">Pearland</h2>
              <?php while ( have_rows('Pearlandgallery') ) : the_row(); ?>

                  <!-- the_sub_field-->
				<div class="col-sm-6 col-md-4 galleryphoto">
          <?php $pearlandImages = get_sub_field('Pearlandphoto'); ?>
            <a href="<?php echo $pearlandImages['url']; ?>" data-lightbox="<?php the_sub_field('pearland_group'); ?>" ><img height="165" width="285" src="<?php echo $pearlandImages['url']; ?>" alt="<?php echo $pearlandImages['alt']; ?>"></a>
				</div>
              <?php endwhile; else : ?>
				
          <?php endif; ?>

<?php if( have_rows('sugar_land_gallery') ): ?>
      <h2 class="gallery">Sugar Land</h2>
              <?php while ( have_rows('sugar_land_gallery') ) : the_row(); ?>

                  <!-- the_sub_field-->
        <div class="col-sm-6 col-md-4 galleryphoto">
          <?php $sugarlandImages = get_sub_field('sugar_land_photo'); ?>
              <a href="<?php echo $sugarlandImages['url']; ?>" data-lightbox="<?php the_sub_field('sugar_land_group'); ?>" ><img height="165" width="285" src="<?php echo $sugarlandImages['url']; ?>" alt="<?php echo $sugarlandImages['alt']; ?>"></a>
        </div>
              <?php endwhile; else : ?>
        
          <?php endif; ?>

<?php if( have_rows('cypress_lightbox') ): ?>
      <h2 class="gallery">Cypress</h2>
              <?php while ( have_rows('cypress_lightbox') ) : the_row(); ?>

                  <!-- the_sub_field-->
        <div class="col-sm-6 col-md-4 galleryphoto">
          <?php $cypressImages = get_sub_field('cypress_thumbnail'); ?>
                <a href="<?php echo $cypressImages['url']; ?>" data-lightbox="<?php the_sub_field('cypress_group'); ?>" ><img height="165" width="285" src="<?php echo $cypressImages['url']; ?>" alt="<?php echo $cypressImages['alt']; ?>"></a>
        </div>
              <?php endwhile; else : ?>
        
          <?php endif; ?>