<?php if ( is_page(91) || is_page(121) ) : ?>
	
	<h2 class="announcementsInternal">Announcements &amp; News</h2>
	<?php query_posts('category_name=texas-medical-center&order=ASC'); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	    <h3 class="postings"><a href ="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	    <div class=pOverview> 
		    <?php echo content(69); ?>
		    <p class="datehome"><?php echo the_time ('F j, Y');?></p>
	    </div>

    <?php endwhile; else: ?>
    <?php endif; ?>
    <?php wp_reset_query(); ?>

<?php elseif ( is_page(101) || is_page(111) ) : ?>
	
	<?php echo '<h2 class="announcementsInternal">Announcements & News</h2>' ?>
	<?php query_posts('category_name=katy&order=ASC'); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	    <h3 class="postings"><a href ="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	    <?php echo '<div class=pOverview>' ?> 
	    <?php echo content(70); ?>
	    <p class="datehome"><?php echo the_time ('F j, Y');?></p>
	    <?php echo '</div>' ?>

    <?php endwhile; else: ?>
    <?php endif; ?>
    <?php wp_reset_query(); ?>
	
<?php elseif ( is_page(193) || is_page(271) ) : ?>
	
	<?php echo '<h2 class="announcementsInternal">Announcements & News</h2>' ?>
	<?php query_posts('category_name=pearland&order=ASC'); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	    <h3 class="postings"><a href ="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	    <?php echo '<div class=pOverview>' ?> 
	    <?php echo content(70); ?>
	    <p class="datehome"><?php echo the_time ('F j, Y');?></p>
	    <?php echo '</div>' ?>

    <?php endwhile; else: ?>
    <?php endif; ?>
    <?php wp_reset_query(); ?>

<?php elseif ( is_page(195) || is_page(245) ) : ?>
	
	<?php echo '<h2 class="announcementsInternal">Announcements & News</h2>' ?>
	<?php query_posts('category_name=sugar-land&order=ASC'); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	    <h3 class="postings"><a href ="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	    <?php echo '<div class=pOverview>' ?> 
	    <?php echo content(70); ?>
	    <p class="datehome"><?php echo the_time ('F j, Y');?></p>
	    <?php echo '</div>' ?>

    <?php endwhile; else: ?>
    <?php endif; ?>
    <?php wp_reset_query(); ?>

<?php elseif ( is_page(197) || is_page(257) ) : ?>
	
	<?php echo '<h2 class="announcementsInternal">Announcements & News</h2>' ?>
	<?php query_posts('category_name=cypress&order=ASC'); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	    <h3 class="postings"><a href ="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	    <?php echo '<div class=pOverview>' ?> 
	    <?php echo content(70); ?>
	    <p class="datehome"><?php echo the_time ('F j, Y');?></p>
	    <?php echo '</div>' ?>

    <?php endwhile; else: ?>
    <?php endif; ?>
    <?php wp_reset_query(); ?>


<?php endif; ?>