<?php get_header(); ?>


    <div class="container clear-pad">
      
   
      <div class="row page-header">
          <div class="col-sm-8">
            <p class="breakingground">Breaking New Ground Project</p>
            <h1 class="internal">Announcements &amp; News</h1>
          </div>
        <div class="col-sm-4">
          <div class="socialicons">
            <span>Share This Page:</span>
            <a href="http://www.facebook.com/sharer.php?u=" class="social fb" title="share this on facebook"><i class="fa fa-facebook-square"></i></a>
          <a href="http://twitter.com/share?url=&text=" class="social tw" title="tweet this page"><i class="fa fa-twitter-square"></i></a>
          <a href="http://www.pinterest.com/pin/create/button/" data-pin-do="buttonBookmark" data-pin-shape="round" class="social pin"><i class="fa fa-pinterest-square"></i></a>
          </div>
        </div>
      </div>

      <div class="row container-blog">
        <?php get_sidebar('blog'); ?>
        <div class="col-md-9 blogposts">

          <h2 class="postings">All Announcements &amp; News</h2>

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <article class="post">
            <div class="categorytitle">
              <?php
              foreach((get_the_category()) as $category) {
                  echo '<a href=../projects/'.$category->category_nicename .'/announcements-news>'.$category->cat_name . ' ';'</a>';
              }

              ?>
            </div>
            <h3 class="postings"><a href ="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            
            <?php the_excerpt(); ?>

            <p><em> 
              <span class="blogdate"><?php echo the_time ('F j, Y');?></span>
            </p>
            
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