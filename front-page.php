<?php
  $agentData = get_user_field('user_type', $theUserID);

  if ( $agentData === "Agent" ) {
  wp_redirect( site_url("agent-login") );
  exit;
  }
?>
<?php get_header('slide'); ?>
<div class="col-xs-12 homeslide clear-pad">
   <div id="gallery" class="royalSlider rsDefault bannerslider">

	<?php if( have_rows('slideshow') ): ?>
	<?php while ( have_rows('slideshow') ) : the_row(); ?>
            
  <!-- the_sub_field-->

    	<div class="rsContent">
        	<?php $homepageImage = get_sub_field('slide_image'); ?>
        	<?php $homepageImageThumb = get_sub_field('slide_thumbnail'); ?>
			<div class="gradientoverlay">
                <div class="slidecontent container">
                  <div class="slidedescription">
                    <?php the_sub_field('slidedescription'); ?>
                  </div>
				</div>
        		<img class="rsImg" src="<?php echo $homepageImage['url']; ?>" alt="<?php echo $homepageImage['alt']; ?>" />
			</div>
    	</div>


	<?php endwhile; else : ?>
	<?php endif; ?>
	</div>

</div>
	<div class="col-md-12 solidblack" style="height:45px;margin-bottom:-45px;"></div>
	<section class="solidtan">
	<div class="container">
		<div class="row">

			<div class="col-md-4 frontpage_sections">
				<div class="frontpage_sections_content">
					<h2><a href="<?php the_field('leftlink_location') ?>"><?php the_field('left_column_paragraph_title'); ?></a></h2>
					<?php the_field('left_column_paragraph'); ?>
				</div>
				<div class="link">
		        	<a href="<?php the_field('leftlink_location'); ?>">LEARN MORE</a>
		        	<div class="clearfix"></div>
		        	<img src="<?php echo get_template_directory_uri(); ?>/images/swish.png"/>
		        </div>
			</div>

	      <div class="col-md-4 frontpage_sections" id="col2">
		      <div class="frontpage_sections_content">
		        <h2><a href="<?php the_field('middle_link_location') ?>"><?php the_field('middle_column_paragraph_title'); ?></a></h2>
		        <?php the_field('middle_column_paragraph'); ?>
		      </div>
	        <div class="link">
	        	<a href="<?php the_field('middle_link_location'); ?>">LEARN MORE</a>
	        	<div class="clearfix"></div>
	        	<img src="<?php echo get_template_directory_uri(); ?>/images/swish.png"/>
	        </div>
	      </div>

	      <div class="col-md-4 frontpage_sections" id="col2">
	        <div class="frontpage_sections_content">
		        <h2><a href="<?php the_field('right_link_location'); ?>"><?php the_field('right_column_paragraph_title'); ?></a></h2>
		        <?php the_field('right_column_paragraph'); ?>
	        </div>
	        <div class="link">
	        	<a href="<?php the_field('right_link_location'); ?>">LEARN MORE</a>
	        	<div class="clearfix"></div>
	        	<img src="<?php echo get_template_directory_uri(); ?>/images/swish.png"/>
	        </div>  
	      </div>

    	</div>
    	</div>
    	<br>
   	</section>
  	</div>

   <?php get_footer(); ?> 