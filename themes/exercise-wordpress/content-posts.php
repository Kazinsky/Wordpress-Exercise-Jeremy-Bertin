<?php
/*
* Basic content to display for Posts, usually used in the loop.
*/

?>
<div class="post-item"> 
	<a href ="<?php echo esc_url( get_permalink() ); ?>" class=""> 
	<span class="font-white heading"> <?php the_title(); ?> </span> 
	</a>
</div>