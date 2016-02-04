<?php
/*
  Investing in Life Settlements
*/

?>
<?php get_header(); ?>

  <section class="solidtan">
  <a name="benefits"></a>
    <div class="titlegradient"></div>
      <div class="container">
        <div class="col-md-5 sectiontitle">
          <h1><?php the_title(); ?></h1>
        </div>
        <div class="col-md-7">
          <p class="breadcrumbs"><a href="#benefits">Benefits</a> | <a href="#sample-policy">Sample Policy</a> | <a href="#how-to-invest">How to Invest</a> | <a href="#risks">Risks</a></p>
        </div>
        <div class="clearfix"></div>
        <div class="col-md-12">
          <div class="col-md-12 separationLeft">
            <h2><?php the_field('first_main_h1'); ?></h2>
          </div>
          <div class="col-md-12 separationBottomAndLeft">
            <?php the_field('first_main_paragraph'); ?>
          </div>
        </div>
    </div>
  </section>
  <section class="solidtan">
  <a name="sample-policy"></a>
    <div class="titlegradient"></div>
      <div class="container">
        <div class="col-md-5 sectiontitle">
          <h1>Sample Policy &amp; Return Analysis</h1>
        </div>
        <div class="col-md-7">
          <p class="breadcrumbs"><a href="#benefits">Benefits</a> | <a href="#sample-policy">Sample Policy</a> | <a href="#how-to-invest">How to Invest</a> | <a href="#risks">Risks</a></p>
        </div>
        <div class="clearfix"></div>
        <div class="col-md-12 sample-policy">
          <div class="col-md-12 separationBottomAndLeft">
            <h2><?php the_field('second_main_h2'); ?></h2>
          </div>
          <div class="col-md-12 separationBottomAndLeft">
            <?php the_field('second_main_paragraph'); ?>
          </div>
          <h2><?php the_field('two_second_main_h2'); ?></h2>
          <div class="col-md-12 separationBottomAndLeft">
            <?php the_field('two_second_main_paragraph'); ?>
          </div>
          <h2><?php the_field('three_second_main_h2'); ?></h2>
          <div class="col-md-12 separationBottomAndLeft">
            <?php the_field('three_second_main_paragraph'); ?>
          </div>
        </div>
      </div>
  </section>
  <section class="solidtan">
  <a name="how-to-invest"></a>
    <div class="titlegradient"></div>
      <div class="container">
        <div class="col-md-5 sectiontitle">
          <h1>How to Invest</h1>
        </div>
        <div class="col-md-7">
          <p class="breadcrumbs"><a href="#benefits">Benefits</a> | <a href="#sample-policy">Sample Policy</a> | <a href="#how-to-invest">How to Invest</a> | <a href="#risks">Risks</a></p>
        </div>
        <div class="clearfix"></div>
        <div class="col-md-12">
          <?php the_field('third_main_paragraph'); ?>
      </div>
    </div>
  </section>

   <section class="solidtan investment">
   <a name="risks"></a>
    <div class="titlegradient"></div>
      <div class="container">
        <div class="col-md-5 sectiontitle">
          <h1>Risks</h1>
        </div>
        <div class="col-md-7">
          <p class="breadcrumbs"><a href="#benefits">Benefits</a> | <a href="#sample-policy">Sample Policy</a> | <a href="#how-to-invest">How to Invest</a> | <a href="#risks">Risks</a></p>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="col-md-12 row">
        <div class="container clear-pad">
          <!-- Tab links -->
          <ul class="tabs">
            <li class="tab-link current" data-tab="tab-1"><?php the_field('fourth_paragraph_1st_tab_title'); ?> <i class="fa fa-caret-right"></i></li>
            <li class="tab-link" data-tab="tab-2"><?php the_field('fourth_paragraph_2nd_tab_title'); ?> <i class="fa fa-caret-right"></i></li>
            <li class="tab-link" data-tab="tab-3"><?php the_field('fourth_paragraph_3rd_tab_title'); ?> <i class="fa fa-caret-right"></i></li>
            <li class="tab-link" data-tab="tab-4"><?php the_field('fourth_paragraph_4th_tab_title'); ?> <i class="fa fa-caret-right"></i></li>
            <li class="tab-link" data-tab="tab-5"><?php the_field('fourth_paragraph_5th_tab_title'); ?> <i class="fa fa-caret-right"></i></li>
          </ul>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="clearfix"></div>

      <div class="col-md-12 row">
        <div class="container tabbedbg">

          <!-- Tab Page 1 -->
          <div id="tab-1" class="tab-content current">
            <div class="col-md-12">
              <h2><?php the_field('fourth_paragraph_1st_tab_h2'); ?></h2>
              <br />
              <?php the_field('fourth_paragraph_1st_tab_content'); ?>
            </div>
            
          </div>

          <!-- Tab Page 2 -->
          <div id="tab-2" class="tab-content">
             <div class="col-md-12 row">
              <h2><?php the_field('fourth_paragraph_2nd_tab_h2'); ?></h2>
              <br />
              <?php the_field('fourth_paragraph_2nd_tab_content'); ?>
            </div>
            
          </div>

          <!-- Tab Page 3 -->
          <div id="tab-3" class="tab-content">
            <div class="col-md-12 row">
              <h2><?php the_field('fourth_paragraph_3rd_tab_h2'); ?></h2>
              <br />
              <?php the_field('fourth_paragraph_3rd_tab_content'); ?>
            </div>
          
          </div>

          <!-- Tab Page 4 -->
          <div id="tab-4" class="tab-content">
             <div class="col-md-12 row">
              <h2><?php the_field('fourth_paragraph_4th_tab_h2'); ?></h2>
              <br />
              <?php the_field('fourth_paragraph_4th_tab_content'); ?>
            </div>
          </div>

          <!-- Tab Page 5 -->
          <div id="tab-5" class="tab-content">
             <div class="col-md-12 row">
              <h2><?php the_field('fourth_paragraph_5th_tab_h2'); ?></h2>
              <br />
              <?php the_field('fourth_paragraph_5th_tab_content'); ?>
            </div>
            
          </div>

        </div>
      </div>
      <div class="clearfix"></div>
      <br><br>
    </section>

<?php get_footer(); ?> 