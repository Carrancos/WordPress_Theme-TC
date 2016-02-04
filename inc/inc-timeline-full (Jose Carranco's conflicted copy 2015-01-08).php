<?php global $post; ?> 
<?php if ( is_page(11) ) : ?>
  <!-- Construction Timeline page -->
  <div class="col-md-12 category_filter clear-pad">
    <?php 
      $args = array(
    'show_option_all'    => 'All Projects',
    'orderby'            => 'name',
    'order'              => 'ASC',
    'style'              => 'list',
    'show_count'         => 0,
    'hide_empty'         => 1,
    'use_desc_for_title' => 1,
    'child_of'           => 11,
    'feed'               => '',
    'feed_type'          => '',
    'feed_image'         => '',
    'exclude'            => '',
    'exclude_tree'       => '',
    'include'            => '',
    'hierarchical'       => 1,
    'title_li'           => __( '' ),
    'show_option_none'   => __( 'No categories' ),
    'number'             => null,
    'echo'               => 1,
    'depth'              => 0,
    'current_category'   => 0,
    'pad_counts'         => 0,
    'taxonomy'           => 'category',
    'walker'             => null
      );

  echo '<a class="mobile-trigger" href="#">';
  echo "Timeline Filters";
  echo "<i class='fa fa-caret-down'></i></a>";
  echo '<div class="mobile-toggle">';     
  echo "<ul>";
      wp_list_categories( $args ); 
    ?>
    </div>
  </div>
  <br><br><br>
<script src="<?php echo get_template_directory_uri(); ?>/js/timeline.js"></script>
  <div id="TimelineMobileCntrlCont">
  <div class="leftCntrl"><i class="fa fa-angle-right"></i></div>
  <div class="rightCntrl"><i class="fa fa-angle-left"></i></div>
</div>
 <div id="Timeline"></div>
      <script type="text/javascript">
        jQuery(document).ready(function(){
    
    
            var ev = [<?php $args = array( 'post_type' => 'timeline');
                $loop = new WP_Query( $args );
               while ( $loop->have_posts() ) : $loop->the_post();
              ?>{
              id : '<?php echo get_the_ID(); ?>-<?php echo the_field( "category" ); ?>',
              style:'<?php the_field("year"); ?>-<?php the_field("quarter"); ?>',
              title: '<?php the_field("season"); ?> <?php the_field("year"); ?> | <?php the_field("title_tag"); ?> <a href="<?php the_field("linked_url"); ?>">Learn More</a>',
              name : '<div class="row"><div class="col-xs-12 clear-pad"><a href="<?php the_field("linked_url"); ?>"><p class="tl-image"><img src="<?php the_field("timeline_graphic"); ?>"></p></a></div></div>',
              domain : '<?php the_field("linked_url"); ?>',
              on : new Date('<?php the_field("year"); ?>','<?php the_field("quarter"); ?>',2)
            },
              <?php endwhile; ?>
              <?php wp_reset_query(); ?>
            ]
              var tl = jQuery("#Timeline").jqtimeline({
              events : ev,
              numYears:4,
              startYear:2015,
              click:function(e,event){
                window.location.replace(event.domain);
                jQuery(this).find("div.event");
              }
            });
        });
    </script>
    <?php endif ?>

<?php if ( is_page(5) ) : ?>
<!-- Homepage Timeline -->

    <script src="<?php echo get_template_directory_uri(); ?>/js/timeline.js"></script>
  <div id="TimelineMobileCntrlCont">
  <div class="leftCntrl"><i class="fa fa-angle-right"></i></div>
  <div class="rightCntrl"><i class="fa fa-angle-left"></i></div>
</div>
 <div id="Timeline"></div>
      <script type="text/javascript">
        jQuery(document).ready(function(){
    
    
            var ev = [<?php $args = array( 'post_type' => 'timeline');
                $loop = new WP_Query( $args );
               while ( $loop->have_posts() ) : $loop->the_post();
              ?>{
              id : '<?php echo get_the_ID(); ?>',
              style:'<?php the_field("year"); ?>-<?php the_field("quarter"); ?>',
              title: '<?php the_field("season"); ?> <?php the_field("year"); ?> | <?php the_field("title_tag"); ?> <a href="<?php the_field("linked_url"); ?>">Learn More</a>',
              name : '<div class="row"><div class="col-xs-12 clear-pad"><a href="<?php the_field("linked_url"); ?>"><p class="tl-image"><img src="<?php the_field("timeline_graphic"); ?>"></p></a></div></div>',
              domain : '<?php the_field("linked_url"); ?>',
              on : new Date('<?php the_field("year"); ?>','<?php the_field("quarter"); ?>',2)
            },
              <?php endwhile; ?>
              <?php wp_reset_query(); ?>
            ]
              var tl = jQuery("#Timeline").jqtimeline({
              events : ev,
              numYears:4,
              startYear:2015,
              click:function(e,event){
                window.location.replace(event.domain);
                jQuery(this).find("div.event");
              }
            });
        });
    </script>
    <?php endif ?>

    <?php if ( is_page(123) ) : ?>
<!-- Texas Medical Center Timeline -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/timeline.js"></script>
  <div id="TimelineMobileCntrlCont">
  <div class="leftCntrl"><i class="fa fa-angle-right"></i></div>
  <div class="rightCntrl"><i class="fa fa-angle-left"></i></div>
</div>
 <div id="Timeline"></div>
      <script type="text/javascript">
        jQuery(document).ready(function(){
    
    
            var ev = [<?php $args = array( 'post_type' => 'timeline', 'category_name' => 'texas-medical-center');
                $loop = new WP_Query( $args );
               while ( $loop->have_posts() ) : $loop->the_post();
              ?>{
              id : '<?php echo get_the_ID(); ?>-<?php echo the_field( "category" ); ?>',
              title: '<?php the_field("season"); ?> <?php the_field("year"); ?> | <?php the_field("title_tag"); ?>',
              name : '<div class="row"><div class="col-xs-12"><a href="<?php the_field("linked_url"); ?>"><p class="tl-image"><img src="<?php the_field("timeline_graphic"); ?>"></p></a></div></div>',
              domain : '<?php the_field("linked_url"); ?>',
              on : new Date('<?php the_field("year"); ?>','<?php the_field("quarter"); ?>',2)
            },
              <?php endwhile; ?>
              <?php wp_reset_query(); ?>
            ]
              var tl = jQuery("#Timeline").jqtimeline({
              events : ev,
              numYears:4,
              startYear:2015,
              click:function(e,event){
                window.location.replace(event.domain);
                jQuery(this).find("div.event");
              }
            });
        });
    </script>
<?php endif; ?>

        <?php if ( is_page(113) ) : ?>
<!-- Katy Timeline -->
   <script src="<?php echo get_template_directory_uri(); ?>/js/timeline.js"></script>
  <div id="TimelineMobileCntrlCont">
  <div class="leftCntrl"><i class="fa fa-angle-right"></i></div>
  <div class="rightCntrl"><i class="fa fa-angle-left"></i></div>
</div>
 <div id="Timeline"></div>
      <script type="text/javascript">
        jQuery(document).ready(function(){
    
            var ev = [<?php $args = array( 'post_type' => 'timeline', 'category_name' => 'katy');
                $loop = new WP_Query( $args );
               while ( $loop->have_posts() ) : $loop->the_post();
              ?>{
              id : '<?php echo get_the_ID(); ?>-<?php echo the_field( "category" ); ?>',
              title: '<?php the_field("season"); ?> <?php the_field("year"); ?> | <?php the_field("title_tag"); ?>',
              name : '<div class="row"><div class="col-xs-12"><a href="<?php the_field("linked_url"); ?>"><p class="tl-image"><img src="<?php the_field("timeline_graphic"); ?>"></p></a></div></div>',
              domain : '<?php the_field("linked_url"); ?>',
              on : new Date('<?php the_field("year"); ?>','<?php the_field("quarter"); ?>',2)
            },
              <?php endwhile; ?>
              <?php wp_reset_query(); ?>
            ]
              var tl = jQuery("#Timeline").jqtimeline({
              events : ev,
              numYears:4,
              startYear:2015,
              click:function(e,event){
                window.location.replace(event.domain);
                jQuery(this).find("div.event");
              }
            });
        });
    </script>
<?php endif; ?>


        <?php if ( is_page(273) ) : ?>
<!-- Pearland Timeline -->
   <script src="<?php echo get_template_directory_uri(); ?>/js/timeline.js"></script>
  <div id="TimelineMobileCntrlCont">
  <div class="leftCntrl"><i class="fa fa-angle-right"></i></div>
  <div class="rightCntrl"><i class="fa fa-angle-left"></i></div>
</div>
 <div id="Timeline"></div>
      <script type="text/javascript">
        jQuery(document).ready(function(){
    
    
            var ev = [<?php $args = array( 'post_type' => 'timeline', 'category_name' => 'pearland');
                $loop = new WP_Query( $args );
               while ( $loop->have_posts() ) : $loop->the_post();
              ?>{
              id : '<?php echo get_the_ID(); ?>',
              style:'<?php the_field("year"); ?>-<?php the_field("quarter"); ?>',
              title: '<?php the_field("season"); ?> <?php the_field("year"); ?> | <?php the_field("title_tag"); ?>',
              name : '<div class="row"><div class="col-xs-12"><a href="<?php the_field("linked_url"); ?>"><p class="tl-image"><img src="<?php the_field("timeline_graphic"); ?>"></p></a></div></div>',
              domain : '<?php the_field("linked_url"); ?>',
              on : new Date('<?php the_field("year"); ?>','<?php the_field("quarter"); ?>',2)
            },
              <?php endwhile; ?>
              <?php wp_reset_query(); ?>
            ]
              var tl = jQuery("#Timeline").jqtimeline({
              events : ev,
              numYears:4,
              startYear:2015,
              click:function(e,event){
                window.location.replace(event.domain);
                jQuery(this).find("div.event");
              }
            });
        });
    </script>
    <?php endif ?>

            <?php if ( is_page(247) ) : ?>
<!-- Sugar Land Timeline -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/timeline.js"></script>
  <div id="TimelineMobileCntrlCont">
  <div class="leftCntrl"><i class="fa fa-angle-right"></i></div>
  <div class="rightCntrl"><i class="fa fa-angle-left"></i></div>
</div>
 <div id="Timeline"></div>
      <script type="text/javascript">
        jQuery(document).ready(function(){
    
    
            var ev = [<?php $args = array( 'post_type' => 'timeline', 'category_name' => 'sugar-land');
                $loop = new WP_Query( $args );
               while ( $loop->have_posts() ) : $loop->the_post();
              ?>{
              id : '<?php echo get_the_ID(); ?>',
              style:'<?php the_field("year"); ?>-<?php the_field("quarter"); ?>',
              title: '<?php the_field("season"); ?> <?php the_field("year"); ?> | <?php the_field("title_tag"); ?> <a href="<?php the_field("linked_url"); ?>">Learn More</a>',
              name : '<div class="row"><div class="col-xs-12 clear-pad"><a href="<?php the_field("linked_url"); ?>"><p class="tl-image"><img src="<?php the_field("timeline_graphic"); ?>"></p></a></div></div>',
              domain : '<?php the_field("linked_url"); ?>',
              on : new Date('<?php the_field("year"); ?>','<?php the_field("quarter"); ?>',2)
            },
              <?php endwhile; ?>
              <?php wp_reset_query(); ?>
            ]
              var tl = jQuery("#Timeline").jqtimeline({
              events : ev,
              numYears:4,
              startYear:2015,
              click:function(e,event){
                window.location.replace(event.domain);
                jQuery(this).find("div.event");
              }
            });
        });
    </script>
    <?php endif ?>

                <?php if ( is_page(259) ) : ?>
<!-- Cypress Timeline -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/timeline.js"></script>
  <div id="TimelineMobileCntrlCont">
  <div class="leftCntrl"><i class="fa fa-angle-right"></i></div>
  <div class="rightCntrl"><i class="fa fa-angle-left"></i></div>
</div>
 <div id="Timeline"></div>
      <script type="text/javascript">
        jQuery(document).ready(function(){
    
    
            var ev = [<?php $args = array( 'post_type' => 'timeline', 'category_name' => 'cypress');
                $loop = new WP_Query( $args );
               while ( $loop->have_posts() ) : $loop->the_post();
              ?>{
              id : '<?php echo get_the_ID(); ?>',
              style:'<?php the_field("year"); ?>-<?php the_field("quarter"); ?>',
              title: '<?php the_field("season"); ?> <?php the_field("year"); ?> | <?php the_field("title_tag"); ?>',
              name : '<div class="row"><div class="col-xs-12"><a href="<?php the_field("linked_url"); ?>"><p class="tl-image"><img src="<?php the_field("timeline_graphic"); ?>"></p></a></div></div>',
              domain : '<?php the_field("linked_url"); ?>',
              on : new Date('<?php the_field("year"); ?>','<?php the_field("quarter"); ?>',2)
            },
              <?php endwhile; ?>
              <?php wp_reset_query(); ?>
            ]
              var tl = jQuery("#Timeline").jqtimeline({
              events : ev,
              numYears:4,
              startYear:2015,
              click:function(e,event){
                window.location.replace(event.domain);
                jQuery(this).find("div.event");
              }
            });
        });
    </script>
    <?php endif ?>