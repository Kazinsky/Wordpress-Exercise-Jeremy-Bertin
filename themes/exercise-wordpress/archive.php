<?php get_header(); ?>

<section class="posts-section">
    
<div class="title-container"> 
    <h1 class="title"> <?php _e('Posts','exercise-wordpress') ?> </h1>
</div>

<div class="list-of-posts">
        <div>
			<?php get_template_part( 'template-loop-posts' ); ?>
        </div>
</div>

</section>

<?php get_footer(); ?>

<?php get_footer(); ?>