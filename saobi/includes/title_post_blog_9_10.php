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
$link2="";
$link1=get_permalink($post_event[3]->ID);
$link2=get_permalink($post_event[4]->ID);
?>
<div class="item hover_it <?=($post_blog[3] ? "":"no_post_big")?> bg_yel it9">
	<div class="info_item <?=($post_blog[3]->post_title ? "":"no_post") ?> ic_3">
		<div class="item_top">
			<p class="num"></p>
		</div>
		<p class="item_txt"><span class="txt-name"><?=($post_blog[3]->post_title ? $post_blog[3]->post_title:"現在、<br>執筆中！")?></span></p>
	</div>
	<div class="c-firework "></div>
	<a data-popup="popup9" data-id="9" href="<?=$link1?>" aria-label="<?=($post_blog[3]->post_title ? $post_blog[3]->post_title:"現在、執筆中！")?>" class="full_hover"></a>
</div>

<div class="item hover_it <?=($post_blog[4] ? "":"no_post_big")?> bg_yel it10">
	<div class="info_item <?=($post_blog[4]->post_title ? "":"no_post") ?> ic_3">
		<div class="item_top">
			<p class="num"></p>
		</div>
		<p class="item_txt txt_small"><span class="txt-name"><?=($post_blog[4]->post_title ? $post_blog[4]->post_title:"現在、<br>執筆中！")?></span></p>
	</div>
	<div class="c-firework "></div>
	<a data-popup="popup10" data-id="10" href="<?=$link2?>" aria-label="<?=($post_blog[4]->post_title ? $post_blog[4]->post_title:"現在、執筆中！")?>" class="full_hover"></a>
</div>