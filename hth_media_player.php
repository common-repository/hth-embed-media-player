<?php
/*
Plugin Name: HTH Embed Media Player
Plugin URI: 
Description: This plugin creates a shortcode so you can embed House to House media on your WordPress site. The shortcode use to embed the HTH media player is as follows: [hth-player media=#####]  The ##### would be replaced by the id for the media file, which can be found at the end of the URL. Just copy the last part of the URL starting at media.
Author: House to House
Version: 1.1
Author URI: http://housetohouse.com/
 */

function hth_embed_media($atts)
{	
	shortcode_atts( array( 'media' => ''), $atts);
	
	$media_player = '<div class="HthVideoPlayer video-js-box" data-video="'.urlencode($atts['media']).'"><script src="http://www.housetohouse.com/MediaService/js/HousePlayer.min.js"></script><p class="HthError"></p></div>';
	
	return $media_player;
}
	
add_shortcode('hth-player','hth_embed_media');

?>