<?php
/**
 * Plugin Name: basic-plugin
 * Plugin URI: 
 * Description: Simple plugin that adds a fixed sentence to all posts
 * Version: 1.0
 * Author: Jeremy Bertin
 * Author URI: http://www.jeremybertin.com
 **/

add_action( 'the_content', 'text_to_add' );

function text_to_add ( $content ) {
    return $content .= '<p class="red">Sentence Added by plugin</p>';
}
?>