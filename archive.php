<?php get_header(); ?>

    <div class="container">
      <div class="row">
         <?php get_sidebar('blog'); ?>
        <div class="col-md-9">

        <div class="page-header">
            <h1><?php wp_title(''); ?></h1>
          </div>

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <article class="post">
            
            <h2><a href ="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p><em> 
              By <?php the_author(); ?> 
              on <?php echo the_time ('l, F jS, Y');?>
              in <?php the_category(', '); ?>
              <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a></em>
            </p>
            
            <?php the_excerpt(); ?>
            
            <hr>

          </article>
          
        <?php endwhile; else: ?>
          
          <div class="page-header">
            <h1>Oh No!</h1>
          </div>

          <p>No Content is appearing for this page!</p>

          <?php endif; ?>


        </div>
        
       
        
      </div>
      </div>

   <?php get_footer(); ?> 