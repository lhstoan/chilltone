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
?>


<?php 
if($post_blog[0]){

	$thumbnail_url = "";
	$content = "";
	$title_name="";
	$link="";

	$blog_img = get_field( 'blog_img',$post_blog[0]->ID);
	$id_img = get_post_thumbnail_id($post_blog[0]->ID);
	
	if ( wp_get_attachment_url( $id_img, 'medium' ) != "" ) {
		$thumbnail_url = wp_get_attachment_url( $id_img, 'medium' );
	} elseif ( $blog_img != "" ) {
		$thumbnail_url = $blog_img[ 'url' ];
	} else {
		$thumbnail_url = get_theme_file_uri( 'images/dummy.jpg' );
	}
	$content=content_number(80,strip_tags($post_blog[0]->post_content));
	$title_name=($post_blog[0]->post_title ? $post_blog[0]->post_title:"現在、執筆中！");
	$link=get_permalink($post_blog[0]->ID);

	?>
<!-- popup medium 1 -->

	<div class="popup_small_1 popup_medium" id="popup_small_1">
		<span class="ic_bg2 closes_pc" data-id="1"></span>
		<div class="wrap_popup_medium">
			<div class="item_l">
				<p class="img border_yel"><img src="<?php echo $thumbnail_url ?>" loading="lazy" width="250" height="250" alt="<?=$title_name?>"></p>
			</div>
			<div class="item_r">
				<p class="name_medium c_yel"><?=$title_name?></p>
				<p class="desc_medium"><?=$content?></p>
				<p class="btn-popup "><a class="btn_bg_yel" href="<?=$link?>">GO</a></p>
			</div>
		</div>
	</div>
<?php } ?>
<?php 


if($post_blog[2]){

	$thumbnail_url = "";
	$content = "";
	$title_name = "";
	$link = "";

	$blog_img = get_field( 'blog_img',$post_blog[2]->ID);
	$id_img = get_post_thumbnail_id($post_blog[2]->ID);
	
	if ( wp_get_attachment_url( $id_img, 'medium' ) != "" ) {
		$thumbnail_url = wp_get_attachment_url( $id_img, 'medium' );
	} elseif ( $blog_img != "" ) {
		$thumbnail_url = $blog_img[ 'url' ];
	} else {
		$thumbnail_url = get_theme_file_uri( 'images/dummy.jpg' );
	}
	$content=content_number(80,strip_tags($post_blog[2]->post_content));
	$title_name=($post_blog[2]->post_title ? $post_blog[2]->post_title:"現在、執筆中！");
	$link=get_permalink($post_blog[0]->ID);

	?>
<!-- popup medium 3 -->
<div class="popup_small_3 popup_medium" id="popup_small_3">
	<span class="ic_bg2 closes_pc" data-id="3"></span>
	<div class="wrap_popup_medium">
		<div class="item_l">
			<p class="img border_yel"><img src="<?php echo $thumbnail_url ?>" loading="lazy" width="250" height="250" alt="<?=$title_name?>"></p>
		</div>
		<div class="item_r">
			<p class="name_medium c_yel"><?=$title_name?></p>
			<p class="desc_medium"><?=$content?></p>
			<p class="btn-popup "><a class="btn_bg_yel" href="<?=$link?>">GO</a></p>
		</div>
	</div>
</div>
<?php } ?>
<?php 
if($post_blog[6]){

	$thumbnail_url = "";
	$content = "";
	$title_name = "";
	$link = "";

	$blog_img = get_field( 'blog_img',$post_blog[6]->ID);
	$id_img = get_post_thumbnail_id($post_blog[6]->ID);
	
	if ( wp_get_attachment_url( $id_img, 'medium' ) != "" ) {
		$thumbnail_url = wp_get_attachment_url( $id_img, 'medium' );
	} elseif ( $blog_img != "" ) {
		$thumbnail_url = $blog_img[ 'url' ];
	} else {
		$thumbnail_url = get_theme_file_uri( 'images/dummy.jpg' );
	}
	$content=content_number(80,strip_tags($post_blog[6]->post_content));
	$title_name=($post_blog[6]->post_title ? $post_blog[6]->post_title:"現在、執筆中！");
	$link=get_permalink($post_blog[6]->ID);

	?>
<!-- popup medium 9 -->
<div class="popup_small_9 popup_medium" id="popup_small_9">
	<span class="ic_bg2 closes_pc" data-id="9"></span>
	<div class="wrap_popup_medium">
		<div class="item_l">
			<p class="img border_yel"><img src="<?php echo $thumbnail_url ?>" loading="lazy" width="250" height="250" alt="<?=$title_name?>"></p>
		</div>
		<div class="item_r">
			<p class="name_medium c_yel"><?=$title_name?></p>
			<p class="desc_medium"><?=$content?></p>
			<p class="btn-popup "><a class="btn_bg_yel" href="<?=$link?>">GO</a></p>
		</div>
	</div>
</div>
<?php } ?>


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
?>
<?php 


if($post_community[2]){

	$thumbnail_url = "";
	$content = "";
	$title_name = "";
	$link = "";

	$community_img = get_field( 'community_img',$post_community[2]->ID);
	$id_img = get_post_thumbnail_id($post_community[2]->ID);
	
	if ( wp_get_attachment_url( $id_img, 'medium' ) != "" ) {
		$thumbnail_url = wp_get_attachment_url( $id_img, 'medium' );
	} elseif ( $community_img != "" ) {
		$thumbnail_url = $community_img[ 'url' ];
	} else {
		$thumbnail_url = get_theme_file_uri( 'images/dummy.jpg' );
	}
	$content=content_number(80,strip_tags($post_community[2]->post_content));
	$title_name=($post_community[2]->post_title ? $post_community[2]->post_title:"仲間たちと作戦会議中！");
	$link=get_permalink($post_community[2]->ID);

	?>
<!-- popup medium 2 -->
<div class="popup_small_2 popup_medium" id="popup_small_2">
	<span class="ic_bg1 closes_pc" data-id="2"></span>
	<div class="wrap_popup_medium">
		<div class="item_l">
			<p class="img border_scolor"><img src="<?php echo $thumbnail_url; ?>" loading="lazy" width="250" height="250" alt="<?=$title_name?>"></p>
		</div>
		<div class="item_r">
			<p class="name_medium c_scolor"><?=$title_name?></p>
			<p class="desc_medium"><?=$content?></p>
			<p class="btn-popup "><a class="btn_bg_scolor" href="<?=$link?>">GO</a></p>
		</div>
	</div>
</div>
<?php } ?>
<?php 


if($post_community[5]){

	$thumbnail_url = "";
	$content = "";
	$title_name = "";
	$link = "";

	$community_img = get_field( 'community_img',$post_community[5]->ID);
	$id_img = get_post_thumbnail_id($post_community[5]->ID);
	
	if ( wp_get_attachment_url( $id_img, 'medium' ) != "" ) {
		$thumbnail_url = wp_get_attachment_url( $id_img, 'medium' );
	} elseif ( $community_img != "" ) {
		$thumbnail_url = $community_img[ 'url' ];
	} else {
		$thumbnail_url = get_theme_file_uri( 'images/dummy.jpg' );
	}
	$content=content_number(80,strip_tags($post_community[5]->post_content));
	$title_name=($post_community[5]->post_title ? $post_community[5]->post_title:"仲間たちと作戦会議中！");
	$link=get_permalink($post_community[5]->ID);
	
	?>
<!-- popup medium 5 -->
<div class="popup_small_5 popup_medium" id="popup_small_5">
	<span class="ic_bg1 closes_pc" data-id="5"></span>
	<div class="wrap_popup_medium">
		<div class="item_l">
			<p class="img border_scolor"><img src="<?php echo $thumbnail_url ?>" loading="lazy" width="250" height="250" alt="<?=$title_name?>"></p>
		</div>
		<div class="item_r">
			<p class="name_medium c_scolor"><?=$title_name?></p>
			<p class="desc_medium"><?=$content?></p>
			<p class="btn-popup "><a class="btn_bg_scolor" href="<?=$link?>">GO</a></p>
		</div>
	</div>
</div>
<?php } ?>
<?php 


if($post_community[7]){

	$thumbnail_url = "";
	$content = "";
	$title_name = "";
	$link = "";

	$community_img = get_field( 'community_img',$post_community[7]->ID);
	$id_img = get_post_thumbnail_id($post_community[7]->ID);
	
	if ( wp_get_attachment_url( $id_img, 'medium' ) != "" ) {
		$thumbnail_url = wp_get_attachment_url( $id_img, 'medium' );
	} elseif ( $community_img != "" ) {
		$thumbnail_url = $community_img[ 'url' ];
	} else {
		$thumbnail_url = get_theme_file_uri( 'images/dummy.jpg' );
	}
	$content=content_number(80,strip_tags($post_community[7]->post_content));
	$title_name=($post_community[7]->post_title ? $post_community[7]->post_title:"仲間たちと作戦会議中！");
	$link=get_permalink($post_community[7]->ID);
	
	?>
<!-- popup medium 7 -->
<div class="popup_small_7 popup_medium" id="popup_small_7">
	<span class="ic_bg1 closes_pc" data-id="7"></span>
	<div class="wrap_popup_medium">
		<div class="item_l">
			<p class="img border_scolor"><img src="<?php echo $thumbnail_url ?>" loading="lazy" width="250" height="250" alt="<?=$title_name?>"></p>
		</div>
		<div class="item_r">
			<p class="name_medium c_scolor"><?=$title_name?></p>
			<p class="desc_medium"><?=$content?></p>
			<p class="btn-popup "><a class="btn_bg_scolor" href="<?=$link?>">GO</a></p>
		</div>
	</div>
</div>

<?php } ?>

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
?>

<?php 
if($post_event[5]){

	$thumbnail_url = "";
	$content = "";
	$title_name = "";
	$link = "";

	$event_img = get_field( 'event_img',$post_event[5]->ID);
	$id_img = get_post_thumbnail_id($post_event[5]->ID);
	
	if ( wp_get_attachment_url( $id_img, 'medium' ) != "" ) {
		$thumbnail_url = wp_get_attachment_url( $id_img, 'medium' );
	} elseif ( $event_img != "" ) {
		$thumbnail_url = $event_img[ 'url' ];
	} else {
		$thumbnail_url = get_theme_file_uri( 'images/dummy.jpg' );
	}
	$content=content_number(80,strip_tags($post_event[5]->post_content));
	$title_name=($post_event[5]->post_title ? $post_event[5]->post_title:"仲間たちと作戦会議中！");
	$link=get_permalink($post_event[5]->ID);
	
	?>
<!-- popup medium 4 -->
<div class="popup_small_4 popup_medium" id="popup_small_4">
	<span class="ic_bg3 closes_pc" data-id="4"></span>
	<div class="wrap_popup_medium">
		<div class="item_l">
			<p class="img border_blue"><img src="<?php echo $thumbnail_url; ?>" loading="lazy" width="250" height="250" alt="<?=$title_name?>"></p>
		</div>
		<div class="item_r">
			<p class="name_medium c_blue"><?=$title_name?></p>
			<p class="desc_medium c_blue"><?=$content?></p>
			<p class="btn-popup "><a class="btn_bg_blue" href="<?=$link?>">GO</a></p>
		</div>
	</div>
</div>
<?php } ?>
<?php 
if($post_event[6]){

	$thumbnail_url = "";
	$content = "";
	$title_name = "";
	$link = "";

	$event_img = get_field( 'event_img',$post_event[6]->ID);
	$id_img = get_post_thumbnail_id($post_event[6]->ID);
	
	if ( wp_get_attachment_url( $id_img, 'medium' ) != "" ) {
		$thumbnail_url = wp_get_attachment_url( $id_img, 'medium' );
	} elseif ( $event_img != "" ) {
		$thumbnail_url = $event_img[ 'url' ];
	} else {
		$thumbnail_url = get_theme_file_uri( 'images/dummy.jpg' );
	}
	$content=content_number(80,strip_tags($post_event[6]->post_content));
	$title_name=($post_event[6]->post_title ? $post_event[6]->post_title:"仲間たちと作戦会議中！");
	$link=get_permalink($post_event[6]->ID);
	
	?>
<!-- popup medium 8 -->
<div class="popup_small_8 popup_medium" id="popup_small_8">
	<span class="ic_bg3 closes_pc" data-id="8"></span>
	<div class="wrap_popup_medium">
		<div class="item_l">
			<p class="img border_blue"><img src="<?php echo $thumbnail_url ?>" loading="lazy" width="250" height="250" alt="<?=$title_name?>"></p>
		</div>
		<div class="item_r">
			<p class="name_medium c_blue"><?=$title_name?></p>
			<p class="desc_medium"><?=$content?></p>
			<p class="btn-popup "><a class="btn_bg_blue" href="<?=$link?>">GO</a></p>
		</div>
	</div>
</div>

<?php } ?>

<?php
wp_reset_postdata();
wp_reset_query();

?>


