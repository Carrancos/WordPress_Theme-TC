<?php
/*
  Why TriCoastal
*/

?>
<?php get_header(); ?>

  <section class="solidtan">
    <div class="titlegradient"></div>
    <div class="container">
      <div class="col-md-5 sectiontitle">
      <a name="why"> </a>
        <h1><?php the_title(); ?></h1>
      </div>
      <div class="col-md-6 col-md-offset-1 ">
        <p class="breadcrumbs"><a href="#why">Why TriCoastal Settlements</a> | <a href="#our-standards">Our Standards</a></p>
      </div>
      <div class="clearfix"></div>
      
      <div class="col-md-4 internalslide clear-pad">  

        <?php 
          $left_image_why = get_field('left_image_why');
        if( !empty($left_image_why) ): ?>          
        <img src="<?php echo $left_image_why['url']; ?>" alt="<?php echo $left_image_why['alt']; ?>" />
        <?php endif; ?>

      </div>
      <div class="col-md-8">
        <div class="col-md-12 separationLeft">
          <h2><?php the_field('right_column_h2'); ?></h2>
        </div>
        <?php the_field('right_column_why'); ?>
        <?php the_field('right_column_why_2nd_paragraph'); ?>
        <div class="col-md-12 separationBottom">
          <?php the_field('right_column_4th_paragraph'); ?>
        </div>
      </div>
    </div>
  </section>
  <section class="solidblack why">
      <div class="col-md-12 row">
        <div class="container clear-pad">
          <!-- Tab links -->
          <ul class="tabs">
            <li class="tab-link current" data-tab="tab-1"><?php the_field('first_tab_title'); ?> <i class="fa fa-caret-right"></i></li>
            <li class="tab-link2" data-tab="tab-2"><?php the_field('second_tab_title'); ?> <i class="fa fa-caret-right"></i></li>
            <li class="tab-link3" data-tab="tab-3"><?php the_field('third_tab_title'); ?> <i class="fa fa-caret-right"></i></li>
          </ul>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="clearfix"></div>
    </section>

    <section class="solidtan">
      <div class="col-md-12 row">
        <div class="container tabbedbg">

          <!-- Tab Page 1 -->
          <div id="tab-1" class="tab-content current">
            <div class="col-md-12">
              <div class="col-md-12 separationLeft">
                <?php the_field('first_tab_paragraph'); ?>
                  <div class="col-md-4 col-md-offset-2 acquisitionListOne">
                    <?php the_field('first_tab_paragraph_1st_list'); ?>
                  </div>
                  <div class="col-md-6 acquisitionListTwo">
                    <?php the_field('first_tab_paragraph_2nd_list'); ?>
                  </div>
              </div>
            </div>
          </div>

          <!-- Tab Page 2 -->
          <div id="tab-2" class="tab-content">
             <div class="col-md-12 row">
              <?php the_field('second_tab_paragraph'); ?>
            </div>
          </div>

          <!-- Tab Page 3 -->
          <div id="tab-3" class="tab-content">
            <div class="col-md-12 row">
              <div class="col-md-12 separationLeft">
                <?php the_field('third_tab_paragraph'); ?>
                  <div class="col-md-6 acquisitionListOne separationLeft">
                    <?php the_field('third_tab_paragraph_1st_list'); ?>
                  </div>
                  <div class="col-md-6 acquisitionListTwo">
                    <?php the_field('third_tab_paragraph_2nd_list'); ?>
                  </div>
              </div>
            </div>
          <div class="clearfix"></div>
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
      <a name="our-standards"></a>
        <h1>Our Standards</h1>
      </div>
      <div class="col-md-6 col-md-offset-1 ">
        <p class="breadcrumbs"><a href="#why">Why TriCoastal Settlements</a> | <a href="#our-standards">Our Standards</a></p>
      </div>
      <div class="clearfix"></div>
      
      <div class="col-md-12 internalslide clear-pad">  
        <h3>TriCoastal Standards</h3>
      </div>
      
      <div class="checklist_title">
        <div class="col-xs-7">
          <p>PROCESS DESCRIPTION</p>
        </div>
        <div class="col-xs-5">
          <p>TriCoastal</p>
        </div>
        <div class="clearfix"></div>
      </div>

      <div class="checklist_title">
        <div class="col-xs-7">
          <p>Policies Out of Contestibility period</p>
        </div>
        <div class="col-xs-5">
          <img src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/uploads/2015/08/checkmark.png">
        </div>
        <div class="clearfix"></div>
      </div>

      <div class="checklist_title">
        <div class="col-xs-7">
          <p>Target LE 0 –10 Years</p>
        </div>
        <div class="col-xs-5">
          <img src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/uploads/2015/08/checkmark.png">
        </div>
        <div class="clearfix"></div>
      </div>

      <div class="checklist_title">
        <div class="col-xs-7">
          <p>Insured - Only Single Life Typically Above Age 70</p>
        </div>
        <div class="col-xs-5">
          <img src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/uploads/2015/08/checkmark.png">
        </div>
        <div class="clearfix"></div>
      </div>

      <div class="checklist_title">
        <div class="col-xs-7">
          <p>Universal / Whole / Term-Convertible Life Only-No Variable Life</p>
        </div>
        <div class="col-xs-5">
          <img src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/uploads/2015/08/checkmark.png">
        </div>
        <div class="clearfix"></div>
      </div>

      <div class="checklist_title">
        <div class="col-xs-7">
          <p>Institutionally Accepted LE Providers</p>
        </div>
        <div class="col-xs-5">
          <img src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/uploads/2015/08/checkmark.png">
        </div>
        <div class="clearfix"></div>
      </div>

      <div class="checklist_title">
        <div class="col-xs-7">
          <p>Independent LE Evaluations</p>
        </div>
        <div class="col-xs-5">
          <img src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/uploads/2015/08/checkmark.png">
        </div>
        <div class="clearfix"></div>
      </div>

      <div class="checklist_title">
        <div class="col-xs-7">
          <p>Independent Custodian (not merely Escrow Agent)</p>
        </div>
        <div class="col-xs-5">
          <img src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/uploads/2015/08/checkmark.png">
        </div>
        <div class="clearfix"></div>
      </div>

      <div class="checklist_title">
        <div class="col-xs-7">
          <p>No Constructive Receipt of Client Funds</p>
        </div>
        <div class="col-xs-5">
          <img src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/uploads/2015/08/checkmark.png">
        </div>
        <div class="clearfix"></div>
      </div>

      <div class="checklist_title">
        <div class="col-xs-7">
          <p>Who Services the Assets?</p>
        </div>
        <div class="col-xs-5">
          <p>Bank</p>
        </div>
        <div class="clearfix"></div>
      </div>

      <div class="checklist_title">
        <div class="col-xs-7">
          <p>Timely Placement of Client Funds</p>
        </div>
        <div class="col-xs-5">
          <img src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/uploads/2015/08/checkmark.png">
        </div>
        <div class="clearfix"></div>
      </div>

      <div class="checklist_title">
        <div class="col-xs-7">
          <p>Transparent Control of Funds</p>
        </div>
        <div class="col-xs-5">
          <img src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/uploads/2015/08/checkmark.png">
        </div>
        <div class="clearfix"></div>
      </div>

    </div>
    <br>
    <br>
    <br>
  </section>

<?php get_footer(); ?>