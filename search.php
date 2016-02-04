<?php get_header(); ?>

    <div class="container">
      <div class="row">
        
        <div class="col-md-9">
          
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <div class="page-header">
            <h1><?php the_title(); ?></h1>
          </div>
          
          <?php the_content(); ?>

        <?php endwhile; else: ?>
          
          <div class="page-header">
            <h1>Your search has no results</h1>
          </div>

          <p>No Content is appearing for this page! Please try a different search</p>

          <?php endif; ?>


        </div>
        
        <?php get_sidebar(); ?>
        
      </div>
      </div>

   <?php get_footer(); ?> 