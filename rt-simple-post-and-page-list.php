<?php
/*
Plugin Name: Royal Simple Posts & Page Listing
Plugin URI: http://wordpress.org/plugins/rt-simple-post-and-page-list/
Description: Simply display posts or page listing using shortcode.
Version: 1.0.0
Author: Mehdi Akram
Author URI: http://profiles.wordpress.org/royaltechbd
License: GPLv2
*/


function rt_posts_list_ul () {
	$output='<ul>';
	$posts = get_posts('numberposts=-1');
	foreach($posts as $post){
		$permalink = get_permalink( $post->ID );
		$output.= '<li>' . '<a href="' . $permalink . '">' . $post->post_title . '</a></li>';
	}
	$output.='</ul>';
	return $output;
}

function rt_posts_list_ol () {
	$output='<ol class="vsppl">';
	$posts = get_posts('numberposts=-1');
	foreach($posts as $post){
		$permalink = get_permalink( $post->ID );
		$output.= '<li>' . '<a href="' . $permalink . '">' . $post->post_title . '</a></li>';
	}
	$output.='</ol>';
	return $output;
}

function rt_posts_list_ol_rev_sl () {
	$output='<ol reversed class="vsppl">';
	$posts = get_posts('numberposts=-1');
	foreach($posts as $post){
		$permalink = get_permalink( $post->ID );
		$output.= '<li>' . '<a href="' . $permalink . '">' . $post->post_title . '</a></li>';
	}
	$output.='</ol>';
	return $output;
}
function rt_pages_list_ul () {
	$output='<ul>';
	$pages = get_pages();
	foreach($pages as $page){
		$permalink = get_permalink( $page->ID );
		$output.= '<li>' . '<a href="' . $permalink . '">' . $page->post_title . '</a></li>';
	}
	$output.='</ul>';
	return $output;
}

function rt_pages_list_ol () {
	$output='<ol class="vsppl">';
	$pages = get_pages();
	foreach($pages as $page){
		$permalink = get_permalink( $page->ID );
		$output.= '<li>' . '<a href="' . $permalink . '">' . $page->post_title . '</a></li>';
	}
	$output.='</ol>';
	return $output;
}
function rt_pages_list_ol_rev_sl () {
	$output='<ol reversed class="vsppl">';
	$pages = get_pages();
	foreach($pages as $page){
		$permalink = get_permalink( $page->ID );
		$output.= '<li>' . '<a href="' . $permalink . '">' . $page->post_title . '</a></li>';
	}
	$output.='</ol>';
	return $output;
}

add_shortcode('rt_posts_list_ul','rt_posts_list_ul');
add_shortcode('rt_posts_list_ol','rt_posts_list_ol');
add_shortcode('rt_posts_list_ol_rev_sl','rt_posts_list_ol_rev_sl');

add_shortcode('rt_pages_list_ul','rt_pages_list_ul');
add_shortcode('rt_pages_list_ol','rt_pages_list_ol');
add_shortcode('rt_pages_list_ol_rev_sl','rt_pages_list_ol_rev_sl');




/* Ol style */

function vsppl_custom_style() {
echo '
<style type="text/css">
.vsppl {  margin-left: 30px;}
.vsppl li {  list-style: decimal-leading-zero!important;padding: 5px 0;}
</style>
';
}
add_action('wp_head', 'vsppl_custom_style');



?>
