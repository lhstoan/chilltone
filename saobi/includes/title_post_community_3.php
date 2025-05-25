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
$link1="";
$link1=get_permalink($post_community[1]->ID);
?>

<div class="item hover_it <?=($post_community[1] ? "":"no_post_big")?> bg_color it3">
	<div class="info_item <?=($post_community[1]->post_title ? "":"no_post") ?> ic_1">
		<div class="item_top">
			<p class="num"></p>
		</div>
		<p class="item_txt"><span class="txt-name"><?=($post_community[1]->post_title ? $post_community[1]->post_title:"仲間たちと<br>作戦会議中！") ?></span></p>
	</div>
	<div class="c-firework "></div>
	<a data-popup="popup3" data-id="3" href="<?=$link1?>" aria-label="<?=($post_community[1]->post_title ? $post_community[1]->post_title:"仲間たちと作戦会議中！") ?>" class="full_hover"></a>
</div>

