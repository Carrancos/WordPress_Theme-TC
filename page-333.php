<?php
/*
  Agent Login
*/

?>
<?php get_header(); ?>

  <section class="solidtan">
    <div class="titlegradient"></div>
    <div class="container">
      <div class="col-md-5 sectiontitle">
        <h1>Agent Incentives</h1>
      </div>
      <div class="col-md-6 col-md-offset-1 ">
        <p class="breadcrumbs">Current Incentives</p>
      </div>
      <div class="clearfix"></div>
      
      <div class="col-md-6">  
      <h3>8% commission on initial investment</h3>
    </div>
    <div class="col-md-6">
      <h3>+8% on Reinvestment</h3>
    </div>
    <div class="investment-photos">
      <div class="col-md-3">
        <a href="#" data-toggle="modal" data-target="#incentiveModalVisaGiftCard"><img src="<?php echo site_url('/'); ?>/wp-content/uploads/2015/12/1stcase.jpg" alt="1st case"></a>
        <!-- Modal -->
        <div class="modal fade" id="incentiveModalVisaGiftCard" role="dialog">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">January 1, 2015 – December 31, 2015</h4>
              </div>
              <div class="modal-body">
                <div class="col-md-12 clear-pad">
                  Upon First Case
                </div>
                <div class="col-md-12 clear-pad">
                  $250 Visa Gift Card
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div> 
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <a href="#" data-toggle="modal" data-target="#incentiveModalVegasTrip"><img src="<?php echo site_url('/'); ?>/wp-content/uploads/2015/12/500k.jpg" alt="2nd case"></a>
        <!-- Modal -->
        <div class="modal fade" id="incentiveModalVegasTrip" role="dialog">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">January 1, 2015 – December 31, 2015</h4>
              </div>
              <div class="modal-body">
                <div class="col-md-12 clear-pad">
                  $500,000 Premium
                </div>
                <div class="col-md-12 clear-pad">
                  Las Vegas Trip for 2
                  <ul>
                    <li>includes airfare and transportation to and from hotel</li>
                    <li>Luxurious accommodations</li>
                    <li>VIP treatment</li>
                  </ul>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div> 
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <a href="#" data-toggle="modal" data-target="#incentiveModalRitzGiftCard"><img src="<?php echo site_url('/'); ?>/wp-content/uploads/2015/12/1m.jpg" alt="3rd case"></a>
        <!-- Modal -->
        <div class="modal fade" id="incentiveModalRitzGiftCard" role="dialog">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">January 1, 2015 – December 31, 2015</h4>
              </div>
              <div class="modal-body">
                <div class="col-md-12 clear-pad">
                  $1,000,000 Premium
                </div>
                <div class="col-md-12 clear-pad">
                  $2,500 Ritz-Carlton Gift Card
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div> 
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <a href="#" data-toggle="modal" data-target="#incentiveModalSuperbowlTix"><img src="<?php echo site_url('/'); ?>/wp-content/uploads/2015/12/3m.jpg" alt="4th case"></a>
        <!-- Modal -->
        <div class="modal fade" id="incentiveModalSuperbowlTix" role="dialog">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">January 1, 2015 – December 31, 2015</h4>
              </div>
              <div class="modal-body">
                <div class="col-md-12 clear-pad">
                  $3,000,000 Premium
                </div>
                <div class="col-md-12 clear-pad">
                  Super Bowl 50 Travel Package
                  <ul>
                    <li>2 Flights</li>
                    <li>2 Game Tickets</li>
                    <li>3 Night Hotel Stay</li>
                    <li>VIP events</li>
                  </ul>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div> 
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
    <br>
  </section>
  <section class="solidtan">
  <div class="titlegradient"></div>
    <div class="container">
      <div class="col-md-5 sectiontitle">
        <h1>Agent Toolbox</h1>
      </div>
      <div class="col-md-6 col-md-offset-1 ">
        <p>&nbsp;</p>
      </div>
      <div class="clearfix"></div>
  <div class="agentToolbox">
    <div class="row">
      <div class="col-md-6">
        <h3>Client Presentations</h3>
        <div class="blackopacity">
          <div class="row brochures">
            <div class="col-md-4 clear-pad">
              <?php $file_1 = get_field('1st_column_-_1st_image_file_link');?>
              <a href="<?php echo $file_1['url']; ?>" target="_blank">
                <?php $image_1 = get_field('1st_column_-_1st_image');
                if( !empty($image_1) ): ?>
                  <img src="<?php echo $image_1['url']; ?>" alt="<?php echo $image_1['alt']; ?>" />
                <?php endif; ?>
              </a>
            </div>
            <div class="col-md-8">
              <?php the_field('1st_column_-_1st_image_title'); ?>
            </div>
          </div>
          <div class="row brochures">
            <div class="col-md-4 clear-pad">
              <?php $file_2 = get_field('1st_column_-_2nd_image_file_link');?>
              <a href="<?php echo $file_2['url']; ?>" target="_blank">
                <?php $image_2 = get_field('1st_column_-_2nd_image');
                if( !empty($image_2) ): ?>
                  <img src="<?php echo $image_2['url']; ?>" alt="<?php echo $image_2['alt']; ?>" />
                <?php endif; ?>
              </a>
            </div>
            <div class="col-md-8">
              <?php the_field('1st_column_-_2nd_image_title'); ?>
            </div>
          </div>
          <div class="row brochures">
            <div class="col-md-4 clear-pad">
              <?php $file_3 = get_field('1st_column_-_3rd_image_file_link');?>
              <a href="<?php echo $file_3['url']; ?>" target="_blank">
                <?php $image_3 = get_field('1st_column_-_3rd_image');
                if( !empty($image_3) ): ?>
                  <img src="<?php echo $image_3['url']; ?>" alt="<?php echo $image_3['alt']; ?>" />
                <?php endif; ?>
              </a>
            </div>
            <div class="col-md-8">
              <?php the_field('1st_column_-_3rd_image_title'); ?>
            </div>
          </div>
          <div class="row brochures">
            <div class="col-md-4 clear-pad">
              <?php $file_4 = get_field('1st_column_-_4th_image_file_link');?>
              <a href="<?php echo $file_4['url']; ?>" target="_blank">
                <?php $image_4 = get_field('1st_column_-_4th_image');
                if( !empty($image_4) ): ?>
                  <img src="<?php echo $image_4['url']; ?>" alt="<?php echo $image_4['alt']; ?>" />
                <?php endif; ?>
              </a>
            </div>
            <div class="col-md-8">
              <?php the_field('1st_column_-_4th_image_title'); ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <h3>Brochure</h3>
        <div class="blackopacity">
          <div class="row brochures">
            <div class="col-md-4 clear-pad">
              <?php $file_5 = get_field('2nd_column_-_1st_image_file_link');?>
              <a href="<?php echo $file_5['url']; ?>" target="_blank">
                <?php $image_5 = get_field('2nd_column_-_1st_image');
                if( !empty($image_5) ): ?>
                  <img src="<?php echo $image_5['url']; ?>" alt="<?php echo $image_5['alt']; ?>" />
                <?php endif; ?>
              </a>
            </div>
            <div class="col-md-8">
              <?php the_field('2nd_column_-_1st_image_title'); ?>
            </div>
          </div>
          <div class="row brochures">
            <div class="col-md-4 clear-pad">
              <?php $file_6 = get_field('2nd_column_-_2nd_image_file_link');?>
              <a href="<?php echo $file_6['url']; ?>" target="_blank">
                <?php $image_6 = get_field('2nd_column_-_2nd_image');
                if( !empty($image_6) ): ?>
                  <img src="<?php echo $image_6['url']; ?>" alt="<?php echo $image_6['alt']; ?>" />
                <?php endif; ?>
              </a>
            </div>
            <div class="col-md-8">
              <?php the_field('2nd_column_-_2nd_image_title'); ?>
            </div>
          </div>
          <div class="row brochures">
            <div class="col-md-4 clear-pad">
              <?php $file_7 = get_field('2nd_column_-_3rd_image_file_link');?>
              <a href="<?php echo $file_7['url']; ?>" target="_blank">
                <?php $image_7 = get_field('2nd_column_-_3rd_image');
                if( !empty($image_7) ): ?>
                  <img src="<?php echo $image_7['url']; ?>" alt="<?php echo $image_7['alt']; ?>" />
                <?php endif; ?>
              </a>
            </div>
            <div class="col-md-8">
              <?php the_field('2nd_column_-_3rd_image_title'); ?>
            </div>
          </div>
          <div class="row brochures">
            <div class="col-md-4 clear-pad">
              <?php $file_8 = get_field('2nd_column_-_4th_image_file_link');?>
              <a href="<?php echo $file_8['url']; ?>" target="_blank">
                <?php $image_8 = get_field('2nd_column_-_4th_image');
                if( !empty($image_8) ): ?>
                  <img src="<?php echo $image_8['url']; ?>" alt="<?php echo $image_8['alt']; ?>" />
                <?php endif; ?>
              </a>
            </div>
            <div class="col-md-8">
              <?php the_field('2nd_column_-_4th_image_title'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  <section class="solidtan">
     <div class="titlegradient"></div>
    <div class="container why-sell">
      <div class="col-md-5 sectiontitle">
        <h1>Refer an Agent</h1>
      </div>
      <div class="col-md-6 col-md-offset-1 ">
        <p>&nbsp;</p>
      </div>
      <div class="clearfix"></div>
      <div class="col-md-5"><p>Receive a $250 Visa gift card when that agent writes 1st case.</p></div>
      <div class="col-md-7">
        <img src="<?php echo site_url('/'); ?>/wp-content/uploads/2015/12/1stcase.jpg" alt="1st case">
      </div>
    </div>
<div class="clearfix"></div>
  <br><br>
  </section>

<?php get_footer(); ?> 