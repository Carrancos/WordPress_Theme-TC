<?php
/*
  Disclaimer
*/

?>
<?php get_header(); ?>

<section class="solidtan">
	<div class="container">
		<div class="col-md-12 marginTop30px">
			<h2><?php the_field('title'); ?></h2>
			<section class="marginBottom30px">
				<p><?php the_field('paragraph'); ?></p>
			</section>
		</div>
	</div>
</section>

<?php get_footer(); ?>