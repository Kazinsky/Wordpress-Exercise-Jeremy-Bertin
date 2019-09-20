<?php get_header(); ?>

<section class="content">
	<div class="title-container"> 
    	<h1 class="title"> <?php the_title(); ?> </h1>
	</div>

	<div class="content">
		<?php the_post(); the_content(); ?>
	</div>
</section>

<?php get_footer(); ?>