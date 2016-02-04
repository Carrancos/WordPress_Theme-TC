<?php
/*
  Life Settlements Explained
*/

?>
<?php get_header(); ?>

  <section class="solidtan">
  <a name="whatis"></a>
    <div class="titlegradient"></div>
    <div class="container">
      <div class="col-md-5 sectiontitle">
        <h1>Life Settlements Explained</h1>
      </div>
      <div class="col-md-6 col-md-offset-1 ">
        <p class="breadcrumbs"><a href="#whatis">What is a Life Settlement</a> | <a href="#history">History</a> | <a href="#why-sell">Why Sell</a></p>
      </div>
      <div class="clearfix"></div>
      
      <div class="col-md-4 internalslide clear-pad">  
        <div id="gallery" class="royalSlider rsText textslider">

        <?php if( have_rows('text_slider') ): ?>
        <?php while ( have_rows('text_slider') ) : the_row(); ?>
                  
        <!-- the_sub_field-->

          <div class="rsContent">
            <div class="rotatingtext">
              <?php the_sub_field('rotating_text'); ?>
            </div>
          </div>

        <?php endwhile; else : ?>
        <?php endif; ?>
        </div>

      </div>
      <div class="col-md-8 separation">
        <div class="col-md-12 separationBottomAndLeft">
          <h2><?php the_field('section_1_h2'); ?></h2>
        </div>
        <div class="col-md-12 separationBottomAndLeft">
          <iframe class="actAsDiv" width="513" height="320" src="http://www.youtube.com/embed/I1RZovdLqvI?autoplay=0&amp;loop=0&amp;showinfo=0&amp;theme=light&amp;color=white&amp;controls=0&amp;modestbranding=1&amp;start=0&amp;fs=1&amp;iv_load_policy=3&amp;wmode=transparent&amp;rel=0" frameborder="0" allowfullscreen=""></iframe>
        </div>
        <div class="col-md-12 separationBottomAndLeft">
          <?php the_field('section_1_paragraph'); ?>
        </div>
      </div>
    </div>
  </section>
  <section class="solidtan">
  <a name="history"></a>
    <div class="titlegradient"></div>
    <div class="container">
      <div class="col-md-5 sectiontitle">
        <h1><?php the_field('section_2_h1'); ?></h1>
      </div>
      <div class="col-md-6 col-md-offset-1 ">
        <p class="breadcrumbs"><a href="#whatis">What is a Life Settlement</a> | <a href="#history">History</a> | <a href="#why-sell">Why Sell</a></p>
      </div>
      <div class="col-md-12">
        <div class="col-md-12 separationLeft">
          <h2><?php the_field('section_2_h2'); ?></h2>
        </div>
        <div class="col-md-12 separationBottomAndLeft">
          <?php the_field('section_2_paragraph'); ?>
        </div>
      </div>
      <div class="col-md-12">
        <div class="col-md-12 separationLeft">
          <h2><?php the_field('second_section_2_h2'); ?></h2>
        </div>
        <div class="col-md-12 separationBottomAndLeft">
          <?php the_field('second_section_2_paragraph'); ?>
        </div>
      </div>
    </div>
  <section id="cd-timeline" class="cd-container">

  <?php if( have_rows('timeline') ): ?>
        <?php while ( have_rows('timeline') ) : the_row(); ?>
                  
        <!-- the_sub_field-->

    <div class="cd-timeline-block">
      <div class="cd-timeline-img cd-picture">
      </div> <!-- cd-timeline-img -->

      <div class="cd-timeline-content">
        <h2><?php the_sub_field('year_title') ?></h2>
        <p><?php the_sub_field('year_description') ?></p>
      </div> <!-- cd-timeline-content -->
    </div> <!-- cd-timeline-block -->

      <?php endwhile; else : ?>
  <?php endif; ?>

  </section> <!-- cd-timeline -->
</section>
</div>
  <section class="solidtan">
  <a name="why-sell"></a>
     <div class="titlegradient"></div>
    <div class="container why-sell">
      <div class="col-md-5 sectiontitle">
        <h1><?php the_field('section_3_h1'); ?></h1>
      </div>
      <div class="col-md-6 col-md-offset-1 ">
        <p class="breadcrumbs"><a href="#whatis">What is a Life Settlement</a> | <a href="#history">History</a> | <a href="#why-sell">Why Sell</a></p>
      </div>
      <div class="clearfix"></div>
      <div class="col-md-6 blueFontColor">
        <?php the_field('section_3_left_paragraph'); ?>
      </div>
      <div class="col-md-6 separationBottom">
        <?php the_field('section_3_right_paragraph'); ?>
      </div>
    </div>

    <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">PROVIDED BY: Excelsior Financial, Inc.</h4>
        </div>
        <div class="modal-body">
          <div class="col-md-12 checklist_title">
            <div class="row">
              <div class="col-md-4">
                <p>Policy Seller</p>
              </div>
              <div class="col-md-7 col-md-offset-1">
                64 Male
              </div>
            </div>
          </div>

          <div class="col-md-12 checklist_title">
            <div class="row">
              <div class="col-md-4">
                <p>Policy Value</p>
              </div>
              <div class="col-md-7 col-md-offset-1">
                $500,000.00
              </div>
            </div>
          </div>

           <div class="col-md-12 checklist_title">
            <div class="row">
              <div class="col-md-4">
                <p>Net Settlement paid to seller</p>
              </div>
              <div class="col-md-3 col-md-offset-1">
                $367,500.00
              </div>
              <div class="col-md-3 col-md-offset-1">
                73.50% of death benefit
              </div>
            </div>
          </div>

          <div class="col-md-12 checklist_title">
            <div class="row">
              <div class="col-md-4">
                <p>Cash surrender value (CSV)</p>
              </div>
              <div class="col-md-3 col-md-offset-1">
                $0
              </div>
              <div class="col-md-3 col-md-offset-1">
                0.00%
              </div>
            </div>
          </div>
          
          <div class="col-md-12 checklist_title">
            <div class="row">
              <div class="col-md-4">
                <p>Settlement vs. CSV ratio yield</p>
              </div>
              <div class="col-md-7 col-md-offset-1">
                N/A
              </div>
            </div>
          </div>

          <div class="col-md-12">
          <h4>Synopsis of Case Study</h4>
          <p>Insured's son was policy owner and insured had ALS. Client wanted the settlement money to purchase a handicap van and other medical equipment for his father to help make the last months of his life more comfortable. The closing took over 2 mos., but the provider was extremely generous and advanced some of the settlement funds before changes were recorded at the carrier. The insured passed away 5 mos. after settlement and the son called to let us know this and to thank us for helping to make the last months of his father's life more bearable.</p>
          </div>

          <div class="clearfix"></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">PROVIDED BY: Versis Settlement Partners, Inc.</h4>
        </div>
        <div class="modal-body">
          <div class="col-md-12 checklist_title">
            <div class="row">
              <div class="col-md-4">
                <p>Policy Seller</p>
              </div>
              <div class="col-md-7 col-md-offset-1">
                70 Male
              </div>
            </div>
          </div>

          <div class="col-md-12 checklist_title">
            <div class="row">
              <div class="col-md-4">
                <p>Policy Value</p>
              </div>
              <div class="col-md-7 col-md-offset-1">
                $1,000,000.00
              </div>
            </div>
          </div>

           <div class="col-md-12 checklist_title">
            <div class="row">
              <div class="col-md-4">
                <p>Net Settlement paid to seller</p>
              </div>
              <div class="col-md-3 col-md-offset-1">
                $156,000.00
              </div>
              <div class="col-md-3 col-md-offset-1">
                15.60% of death benefit
              </div>
            </div>
          </div>

          <div class="col-md-12 checklist_title">
            <div class="row">
              <div class="col-md-4">
                <p>Cash surrender value (CSV)</p>
              </div>
              <div class="col-md-3 col-md-offset-1">
                $0
              </div>
              <div class="col-md-3 col-md-offset-1">
                0.00%
              </div>
            </div>
          </div>
          
          <div class="col-md-12 checklist_title">
            <div class="row">
              <div class="col-md-4">
                <p>Settlement vs. CSV ratio yield</p>
              </div>
              <div class="col-md-7 col-md-offset-1">
                N/A
              </div>
            </div>
          </div>

          <div class="col-md-12 checklist_title">
            <div class="row">
              <div class="col-md-4">
                <p>Level premium til maturity</p>
              </div>
              <div class="col-md-7 col-md-offset-1">
                $66,000
              </div>
            </div>
          </div>

          <div class="col-md-12 checklist_title">
            <div class="row">
              <div class="col-md-4">
                <p>Life expectancy of insured</p>
              </div>
              <div class="col-md-3 col-md-offset-1">
                83 months
              </div>
              <div class="col-md-3 col-md-offset-1">
                15.60% of death benefit
              </div>
            </div>
          </div>

          <div class="col-md-12 checklist_title">
            <div class="row">
              <div class="col-md-4">
                <p>Date of Settlement</p>
              </div>
              <div class="col-md-7 col-md-offset-1">
                April 2008
              </div>
            </div>
          </div>


          <div class="col-md-12">
          <h4>Synopsis of Case Study</h4>
          <p>This 70 year old male owned unique 20 year term policy that at the end of the term provided a level premium and starting building a cash value in year 28. Policy owner was in year 21 of the policy and was able to settle the policy for $156,000, which he used to purchase a more cost effective UL product that better suit his current estate planning needs.</p>
          </div>

          <div class="clearfix"></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
  <!-- Modal -->
  <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">PROVIDED BY: Versis Settlement Partners, Inc.</h4>
        </div>
        <div class="modal-body">
          <div class="col-md-12 checklist_title">
            <div class="row">
              <div class="col-md-4">
                <p>Policy Seller</p>
              </div>
              <div class="col-md-7 col-md-offset-1">
                54 Male
              </div>
            </div>
          </div>

          <div class="col-md-12 checklist_title">
            <div class="row">
              <div class="col-md-4">
                <p>Policy Value</p>
              </div>
              <div class="col-md-7 col-md-offset-1">
                $2,000,000.00
              </div>
            </div>
          </div>

           <div class="col-md-12 checklist_title">
            <div class="row">
              <div class="col-md-4">
                <p>Net Settlement paid to seller</p>
              </div>
              <div class="col-md-3 col-md-offset-1">
                $190,000.00
              </div>
              <div class="col-md-3 col-md-offset-1">
                9.50% of death benefit
              </div>
            </div>
          </div>

          <div class="col-md-12 checklist_title">
            <div class="row">
              <div class="col-md-4">
                <p>Cash surrender value (CSV)</p>
              </div>
              <div class="col-md-3 col-md-offset-1">
                $0
              </div>
              <div class="col-md-3 col-md-offset-1">
                0.00%
              </div>
            </div>
          </div>
          
          <div class="col-md-12 checklist_title">
            <div class="row">
              <div class="col-md-4">
                <p>Settlement vs. CSV ratio yield</p>
              </div>
              <div class="col-md-7 col-md-offset-1">
                N/A
              </div>
            </div>
          </div>

          <div class="col-md-12 checklist_title">
            <div class="row">
              <div class="col-md-4">
                <p>Level premium til maturity</p>
              </div>
              <div class="col-md-7 col-md-offset-1">
                $26,209
              </div>
            </div>
          </div>

          <div class="col-md-12 checklist_title">
            <div class="row">
              <div class="col-md-4">
                <p>Life expectancy of insured</p>
              </div>
              <div class="col-md-3 col-md-offset-1">
                42 months
              </div>
              <div class="col-md-3 col-md-offset-1">
                9.50% of death benefit
              </div>
            </div>
          </div>

          <div class="col-md-12 checklist_title">
            <div class="row">
              <div class="col-md-4">
                <p>Date of Settlement</p>
              </div>
              <div class="col-md-7 col-md-offset-1">
                October 2008
              </div>
            </div>
          </div>


          <div class="col-md-12">
          <h4>Synopsis of Case Study</h4>
          <p>54-year-old male needed money to pay for medical expenses. But wanted to keep some Death Benefit for his family and accepted offer for $190,000 in funds now plus a $800,000 paid-up policy.</p>
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
  </section>
<?php get_footer(); ?> 