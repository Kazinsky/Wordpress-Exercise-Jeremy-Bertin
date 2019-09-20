<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<?php wp_head(); ?>
</head>

<body <?php body_class(function_exists(pll_get_post) ? pll_current_language() : ''); ?>>

 <nav id="nav-menu" class="nav-main-menu">
        <div class="menu-container">
            
            <div class="nav-left-side-container">
				
				<a href='<?php if( is_front_page() ){echo "#home";}else{ echo get_home_url(); } ?>' class="home-link"> 
			
                <div class="theme-title"> <?php _e('Exercise Wordpress','exercise-wordpress'); ?> </div></a>
				
            </div>
            
        </div>
		<div class="nav-right-side-container">
			<ul id="menu-list" class="horizontal-list">
			
				<li> <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'About' ) ) ); ?>"><?php esc_html_e( 'About', 'exercise-wordpress' ); ?></a> </li>

		   		<li> <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Posts' ) ) ); ?>"> <?php esc_html_e( 'Posts', 'exercise-wordpress' ); ?> </a> </li>
		   </ul>
		</div>

 </nav>