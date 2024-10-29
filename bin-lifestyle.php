<?php
/*
Plugin Name: Before It's News&reg;: Lifestyle
Plugin URI: http://www.beforeitsnews.com/widgets
Description: Your widget will update every time our site does. A new story is added virtually every minute! Stay up to date and keep your viewers up to date. The widget loads fast and won't bog down your page-load time.
Version: 0.2
Author: Before It's News&reg;
Author URI: http://www.beforeitsnews.com
*/

/* Add the widget widgets_init */
add_action( 'widgets_init', 'bin_load_lifestyle_widgets' );

/* Register the widget */
function bin_load_lifestyle_widgets() {
	register_widget( 'Lifestyle_Widget' );
} /* End registration of the widget */

/* lifestyle_Widget class */
class Lifestyle_Widget extends WP_Widget {
	
	/* Widget setup */
	function Lifestyle_Widget() {
	
		/* Widget settings */
		$widget_ops = array( 'classname' => 'lifestyle', 'description' => __( 'You widget will update every time our site does. A new story is added virtually every minute! Stay up to date and keep your viewers up todate. The widget loads fans and won\'t bog down your page-load time.', 'lifestyle' ) );
		
		/* Create the widget */
		$this->WP_Widget( 'lifestyle-widget', __( 'Before It\'s News&reg;: Lifestyle', 'lifestyle' ), $widget_ops );
	
	} /* End widget setup */
	
	/* Display the widget once activated */
	function widget( $args ) {
		extract( $args );
		
		/* Before widget */
		echo $before_widget;
		
		/* During widget */
		echo '<a class="b4in-widget" href="http://beforeitsnews.com/widget/lifestyle">Before It\'s News | People Powered News</a><script type="text/javascript" src="http://beforeitsnews.com/widgets/js/widget.js"></script>';
		
		/* After widget */
		echo $after_widget;
		
	} /* Stop displaying the widget */
	
} /* End lifestyle_Widget class */

?>