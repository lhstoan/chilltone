<?php
error_reporting(0);
global $post_blog;
global $wp_query;
$args = array(
	'post_type' => 'blog',
	'orderby' => 'date',
	'order' => 'DESC',
	'posts_per_page' => 7,
);
$wp_query = new WP_Query( $args );
$post_blog = get_posts( $args );
setup_postdata( $post_blog );
$link1="";
$link1=get_permalink($post_event[5]->ID);

?>
<div class="item hover_it bg_yel <?=($post_blog[5] ? "":"no_post_big")?>  it13">
	<div class="info_item <?=($post_blog[5]->post_title ? "":"no_post") ?> ic_3">
		<div class="item_top">
			<p class="num"></p>
		</div>
		<p class="item_txt"><span class="txt-name"><?=($post_blog[5]->post_title ? $post_blog[5]->post_title:"現在、<br>執筆中！")?></span></p>
	</div>
	<div class="c-firework "></div>
	<a data-popup="popup13" data-id="13" href="<?=$link1?>" aria-label="<?=($post_blog[5]->post_title ? $post_blog[5]->post_title:"現在、執筆中！")?>" class="full_hover"></a>
</div>
