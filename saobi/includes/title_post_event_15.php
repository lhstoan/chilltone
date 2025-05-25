<?php
error_reporting(0);
global $post_event;
global $wp_query;
$args = array(
	'post_type' => 'event',
	'orderby' => 'date',
	'order' => 'DESC',
	'posts_per_page' => 8,
);
$wp_query = new WP_Query( $args );
$post_event = get_posts( $args );
setup_postdata( $post_event );
$link1="";
$link1=get_permalink($post_event[7]->ID);
?>
<div class="item hover_it <?=($post_event[7] ? "":"no_post_big")?> bg_blue  it15">
	<div class="info_item <?=($post_event[7]->post_title ? "":"no_post") ?> ic_2">
		<div class="item_top">
			<p class="num"></p>
		</div>
		<p class="item_txt"><span class="txt-name"><?=($post_event[7]->post_title ? $post_event[7]->post_title:"絶賛イベント<br>計画中！") ?></span></p>
	</div>
	<div class="c-firework "></div>
	<a data-popup="popup15" data-id="15" href="<?=$link1?>" aria-label="<?=($post_event[7]->post_title ? $post_event[7]->post_title:"絶賛イベント計画中！") ?>" class="full_hover"></a>
</div>
