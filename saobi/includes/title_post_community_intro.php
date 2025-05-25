<?php
error_reporting(0);
global $post_blog;
global $wp_query;
$args = array(
	'post_type' => 'community',
	'orderby' => 'date',
	'order' => 'DESC',
	'posts_per_page' => 8,
);
$wp_query = new WP_Query( $args );
$post_community = get_posts( $args );
setup_postdata( $post_community );
?>
<li class="location_info it_location1">
	<p class="num"></p>
	<p class="item_txt"><span class="txt-name"><?=($post_community[0]->post_title ? $post_community[0]->post_title:"仲間たちと<br>作戦会議中！") ?></span></p>
</li>
