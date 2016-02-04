<?php if ( is_page(115) ) : ?>
<?php echo '<h2 class="announcementsInternal">Photo Gallery</h2>' ?>
<?php if(get_field('TMCimages', 222)): ?>

              <?php while(has_sub_field('TMCimages', 222)): ?>

                <div class="col-sm-6 col-md-4 galleryinternal">
                 <?php $TMCimage = get_sub_field('TMCimage'); ?>
            <a href="<?php echo $TMCimage['url']; ?>" data-lightbox="<?php the_sub_field('location_group'); ?>" ><img height="135" width="240" src="<?php echo $TMCimage['url']; ?>" alt="<?php echo $TMCimage['alt']; ?>"></a>
				</div>

              <?php endwhile; ?>

              </ul>

            <?php endif; ?>
             <?php wp_reset_query(); ?>

<?php endif; ?>

<?php if ( is_page(105) ) : ?>
<?php echo '<h2 class="announcementsInternal">Photo Gallery</h2>' ?>
<?php if(get_field('Katyimages', 222)): ?>

              <?php while(has_sub_field('Katyimages', 222)): ?>

                <div class="col-sm-6 col-md-4 galleryinternal">
                  <?php $katyImages = get_sub_field('katy_images'); ?>
              <a href="<?php echo $katyImages['url']; ?>" data-lightbox="<?php the_sub_field('photo_group'); ?>" ><img height="135" width="240" src="<?php echo $katyImages['url']; ?>" alt="<?php echo $katyImages['alt']; ?>"></a>
				</div>

              <?php endwhile; ?>

              </ul>

            <?php endif; ?>
             <?php wp_reset_query(); ?>

<?php endif; ?>

<?php if ( is_page(265) ) : ?>
<?php echo '<h2 class="announcementsInternal">Photo Gallery</h2>' ?>
<?php if(get_field('Pearlandgallery', 222)): ?>

              <?php while(has_sub_field('Pearlandgallery', 222)): ?>

                <div class="col-sm-6 col-md-4 galleryinternal">
                  <?php $pearlandImages = get_sub_field('Pearlandphoto'); ?>
            <a href="<?php echo $pearlandImages['url']; ?>" data-lightbox="<?php the_sub_field('pearland_group'); ?>" ><img height="135" width="240" src="<?php echo $pearlandImages['url']; ?>" alt="<?php echo $pearlandImages['alt']; ?>"></a>
				</div>

              <?php endwhile; ?>

              </ul>

            <?php endif; ?>
             <?php wp_reset_query(); ?>

<?php endif; ?>

<?php if ( is_page(239) ) : ?>
<?php echo '<h2 class="announcementsInternal">Photo Gallery</h2>' ?>
<?php if(get_field('sugar_land_gallery', 222)): ?>

              <?php while(has_sub_field('sugar_land_gallery', 222)): ?>

                <div class="col-sm-6 col-md-4 galleryinternal">
                  <?php $sugarlandImages = get_sub_field('sugar_land_photo'); ?>
              <a href="<?php echo $sugarlandImages['url']; ?>" data-lightbox="<?php the_sub_field('sugar_land_group'); ?>" ><img height="125" width="240" src="<?php echo $sugarlandImages['url']; ?>" alt="<?php echo $sugarlandImages['alt']; ?>"></a>
				</div>

              <?php endwhile; ?>

              </ul>

            <?php endif; ?>
             <?php wp_reset_query(); ?>

<?php endif; ?>

<?php if ( is_page(251) ) : ?>
<?php echo '<h2 class="announcementsInternal">Photo Gallery</h2>' ?>
<?php if(get_field('cypress_lightbox', 222)): ?>

              <?php while(has_sub_field('cypress_lightbox', 222)): ?>

                <div class="col-sm-6 col-md-4 galleryinternal">
                  <?php $cypressImages = get_sub_field('cypress_thumbnail'); ?>
                   <a href="<?php echo $cypressImages['url']; ?>" data-lightbox="<?php the_sub_field('cypress_group'); ?>" ><img height="135" width="240" src="<?php echo $cypressImages['url']; ?>" alt="<?php echo $cypressImages['alt']; ?>"></a>
				</div>

              <?php endwhile; ?>

              </ul>

            <?php endif; ?>
             <?php wp_reset_query(); ?>

<?php endif; ?>