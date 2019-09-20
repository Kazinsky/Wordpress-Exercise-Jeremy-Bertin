
<?php 
/**
* Template Name: loop posts
*/
//Loop through post of specific type
get_header();
?>
<section class="content"> 
<?php
$args = array('post_type' => 'post');

//get data from query
$query = new WP_Query( $args );

//loop
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) : $query->the_post();
			//Get the post's relevent content
			get_template_part( 'content', 'posts' );
	endwhile;
	} else {
		echo __( 'No posts found!', 'exercise-wordpress' );
	}
	wp_reset_postdata();
?>
</section> 
<?php
get_footer();
?>