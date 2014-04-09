<?php
defined( '_JEXEC' ) or die;

foreach ($feed->data as $post ){

	if (isset ($post->message) || isset($post->picture)){
	echo '<div>';
	echo '<p>';
	echo isset( $post->picture ) ? '<img src = "' . $post->picture . '" style = "float:left; margin:0 20px 20px 0;"/ >': '';
	echo isset( $post->message ) ? $post->message: '';
	echo '<span style = "display:block; clear:both"></span>';
	echo '<br />';
	echo isset ($post->link)? '<a href = "' . $post->link . '" target="_blank">View on Facebook</a>' :'';
	echo '</p>';
	echo '<hr />';
	echo '</div>';
	}

}

