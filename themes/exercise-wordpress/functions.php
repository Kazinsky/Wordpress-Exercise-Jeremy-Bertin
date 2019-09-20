<?php

add_action( 'after_setup_theme', 'theme_setup' );
function theme_setup()
{
	load_theme_textdomain( 'exercise-wordpress', get_template_directory() . '/languages' );
	add_theme_support( 'title-tag' );

	add_filter('show_admin_bar', '__return_false');
	
	if ( ! isset( $content_width ) ) {
		$content_width = 600;
	}
}

add_action( 'wp_enqueue_scripts', 'theme_load_scripts' );
function theme_load_scripts()
{
	//CSS
		//For all pages
		wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', false, '8.0','all' );


		//Section Specific
		wp_enqueue_style( 'nav', get_template_directory_uri() . '/css/nav-menu.css', false, '1.0','all' );
		
		//Responsive 
		wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css', false, '1.0','all' );
		
		//Fonts
		wp_enqueue_style( 'font-roboto', 'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700', false, '1.0','all' );

	//END CSS
	
	//SCRIPTS
	wp_enqueue_script( 'jquery' );
	
	 //Page Specific
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array('jquery'), false, true);

	
	//END SCRIPTS
}

add_action( 'comment_form_before', 'theme_enqueue_comment_reply_script' );
function theme_enqueue_comment_reply_script()
{
if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}

add_filter( 'the_title', 'theme_title' );
function theme_title( $title ) {
if ( $title == '' ) {
return '&rarr;';
} else {
return $title;
}
}

add_filter( 'get_comments_number', 'theme_comments_number' );
function theme_comments_number( $count )
{
	if ( !is_admin() ) {
		global $id;
		$comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
		return count( $comments_by_type['comment'] );
	} else {
		return $count;
	}
}

