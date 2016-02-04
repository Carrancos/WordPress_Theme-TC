<?php
/*
  Find Your Rep
*/

?>
<?php
  $agentData = get_user_field('user_type', $theUserID);

  if ( $agentData === "Agent" ) {
  wp_redirect( site_url("agent-login") );
  exit;
  }
?>
<?php get_header(); ?>


  <div class="clearfix"></div>
  <section class="solidtan">
    <div class="titlegradient"></div>
    <div class="container">
      <div class="col-md-5 sectiontitle">
        <h1>Find Your Representative</h1>
      </div>
      <div class="col-md-6 col-md-offset-1 findreptext">
        <p>Please enter your contact information and a representative in your area will contact you soon</p>
      </div>
      <div class="clearfix"></div>
      <div class="col-md-12">  
        <?php the_field('find_rep_form'); ?>
      </div>
      <div class="col-md-12 footercta">
       <?php the_field('find_rep_cta') ?>
      </div>
    </div>
    <br><br>
  </section>

<?php get_footer(); ?> 