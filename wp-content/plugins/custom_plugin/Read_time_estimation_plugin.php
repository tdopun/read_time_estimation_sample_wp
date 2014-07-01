<?php
/**
 * Plugin Name: Read Time Estimation Plugin
 * Plugin URI: 
 * Description: Estimates the time required to read an article
 * Version: 1.0
 * Author: Tony D.
 * Author URI: http://localhost
 * License: GPL2
 */
 
  
 class custom_plugin
 { 
	public function __construct(){
		add_action('estimated_reading_time', array ($this, 'estimated_reading_time'));		
	}
	
	 /**
	 * @return string
	 */
	function estimated_reading_time() {
		
		// Get posts 
		$post = get_post();

		// Calculate the number of words in an article
		$words = str_word_count( strip_tags( $post->post_content ) );
		
		// Divide word count by average words per minute to figure overall expected read time
		$minutes = floor( $words / 200 ); 
		$seconds = floor( $words % 200 / ( 200 / 60 ) );

		// Handle final string formatting
		if ( 1 <= $minutes ) {
			$estimated_time = $minutes . ' minute ' . ($minutes == 1 ? '' : 's') . ', ' . $seconds . ' second ' . ($seconds == 1 ? '' : 's');
		} else {
			$estimated_time = $seconds . ' second ' . ($seconds == 1 ? '' : 's');
		}

		return $estimated_time;
	}
 } 
 
 ?>