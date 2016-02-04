<div class="col-md-2 sidebar left clear-pad">
	<?php $args = array(
	'child_of'     => 0,
	'depth'        => 1,
	'echo'         => 1,
	'exclude'      => '',
	'include'      => '',
	'link_after'   => '',
	'link_before'  => '',
	'post_type'    => 'page',
	'post_status'  => 'publish',
	'show_date'    => '',
	'sort_column'  => 'menu_order, post_title',
        'sort_order'   => '',
	'title_li'     => __('Pages'), 
	'walker'       => ''
); ?>

<?php

	//echo get_the_title( $post->post_parent );


$parentTitle = get_the_title( $post->post_parent );
if($parentTitle=="Projects"){
	echo "<ul>";
	wp_list_pages('title_li=&depth=1&child_of='.$post->ID);
	echo "</ul>";

}else{
  $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
  if ($children) {
  	$parent_title = get_the_title($post->post_parent);
	echo "<ul>";
	echo '
	<li><a href="../">Overview</a></li>';
	echo $children;
	}
}
?>

</div>	
