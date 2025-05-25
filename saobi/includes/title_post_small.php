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
$link3="";
$link1=get_permalink($post_blog[0]->ID);
$link2=get_permalink($post_blog[2]->ID);
$link3=get_permalink($post_blog[6]->ID);
?>

<div class="item_small bg_yel hover_it it_small_1 <?=($post_blog[0] ? "":"no_post")?> popup_medium_1">
	<div class="info_item"></div>
	<div class="c-firework"></div>
	<a data-popup="popup_small_1" data-id="1" href="<?=$link1?>" class="fancybox full_hover" aria-label="<?=($post_blog[0]->post_title ? $post_blog[0]->post_title:"現在、執筆中！")?>"></a>
</div>
<div class="item_small bg_yel hover_it it_small_3 <?=($post_blog[2] ? "":"no_post")?> popup_medium_3">
	<div class="info_item"></div>
	<div class="c-firework"></div>
	<a data-popup="popup_small_3" data-id="3" href="<?=$link2?>" class="fancybox full_hover" aria-label="<?=($post_blog[2]->post_title ? $post_blog[2]->post_title:"現在、執筆中！")?>"></a>
</div>
<div class="item_small bg_yel hover_it it_small_6 popup_medium_6">
	<div class="info_item"></div>
	<div class="c-firework"></div>
	<a data-popup="popup_small_6" data-id="6" href="#popup_small_6" class="fancybox full_hover" aria-label="230501 南足柄の家"></a>
</div>
<div class="item_small bg_yel hover_it it_small_9 <?=($post_blog[6] ? "":"no_post")?> popup_medium_9">
	<div class="info_item"></div>
	<div class="c-firework"></div>
	<a data-popup="popup_small_9" data-id="9" href="<?=$link3?>" class="fancybox full_hover" aria-label="<?=($post_blog[6]->post_title ? $post_blog[6]->post_title:"現在、執筆中！")?>"></a>
</div>



<?php
wp_reset_postdata();
wp_reset_query();

?>


<?php
global $post_community;
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
$link2="";
$link3="";
$link1=get_permalink($post_community[2]->ID);
$link2=get_permalink($post_community[5]->ID);
$link3=get_permalink($post_community[7]->ID);
?>
<div class="item_small bg_color hover_it it_small_2 <?=($post_community[2] ? "":"no_post")?> popup_medium_2">
	<div class="info_item"></div>
	<div class="c-firework"></div>
	<a data-popup="popup_small_2" data-id="2" href="<?=$link1?>" class="fancybox full_hover" aria-label="<?=($post_community[2]->post_title ? $post_community[2]->post_title:"仲間たちと作戦会議中！") ?>"></a>
</div>
<div class="item_small bg_color hover_it it_small_5 popup_medium_5 <?=($post_community[5] ? "":"no_post")?>">
	<div class="info_item"></div>
	<div class="c-firework"></div>
	<a data-popup="popup_small_5" data-id="5" href="<?=$link2?>" class="fancybox full_hover" aria-label="<?=($post_community[5]->post_title ? $post_community[5]->post_title:"仲間たちと作戦会議中！") ?>"></a>
</div>
<div class="item_small bg_color hover_it it_small_7 popup_medium_7 <?=($post_community[7] ? "":"no_post")?>">
	<div class="info_item"></div>
	<div class="c-firework"></div>
	<a data-popup="popup_small_7" data-id="7" href="<?=$link3?>" class="fancybox full_hover" aria-label="<?=($post_community[7]->post_title ? $post_community[7]->post_title:"仲間たちと作戦会議中！") ?>"></a>
</div>


<?php
wp_reset_postdata();
wp_reset_query();

?>


<?php
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
$link2="";
$link3="";
$link1=get_permalink($post_event[5]->ID);
$link2=get_permalink($post_event[6]->ID);
?>
<div class="item_small bg_blue hover_it it_small_4 popup_medium_4 <?=($post_event[5] ? "":"no_post")?>">
	<div class="info_item"></div>
	<div class="c-firework"></div>
	<a data-popup="popup_small_4" data-id="4"  href="<?=$link1?>" class="fancybox full_hover" aria-label="<?=($post_event[5]->post_title ? $post_event[5]->post_title:"仲間たちと作戦会議中！") ?>"></a>
</div>

<div class="item_small bg_blue hover_it it_small_8 popup_medium_8 <?=($post_event[6] ? "":"no_post")?>">
	<div class="info_item"></div>
	<div class="c-firework"></div>
	<a data-popup="popup_small_8" data-id="8" href="<?=$link2?>" class="fancybox full_hover" aria-label="<?=($post_event[6]->post_title ? $post_event[6]->post_title:"仲間たちと作戦会議中！") ?>"></a>
</div>


<?php
wp_reset_postdata();
wp_reset_query();

?>


