<?php
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
	
	if($post_blog[1]){

		$thumbnail_url = "";
		$content = "";
		$title_name = "";
		$link = "";

		$blog_img = get_field( 'blog_img',$post_blog[1]->ID);
		$id_img = get_post_thumbnail_id($post_blog[1]->ID);
		
		if ( wp_get_attachment_url( $id_img, 'medium' ) != "" ) {
			$thumbnail_url = wp_get_attachment_url( $id_img, 'medium' );
		} elseif ( $blog_img != "" ) {
			$thumbnail_url = $blog_img[ 'url' ];
		} else {
			$thumbnail_url = get_theme_file_uri( 'images/dummy.jpg' );
		}
		$content=content_number(80,strip_tags($post_blog[1]->post_content));
		$title_name=($post_blog[1]->post_title ? $post_blog[1]->post_title:"現在、執筆中！");
		$link=get_permalink($post_blog[1]->ID);

 ?>
<!-- popup big 4 -->
<div class="popup_big_4 popup_big" id="popup4">
	<div class="closes_sp ic_bg2" data-id="4"></div>
	<div class="wrap_popup_big">
		<div class="img_big">
			<p class="img"><img src="<?php echo $thumbnail_url ?>" loading="lazy" width="585" height="380" alt="<?=$title_name?>"></p>
		</div>
		<div class="info_cen">
			<p class="num ic btn_bg_yel">04</p>
			<div class="info_l">
				<p class="tt_cate c_yel">ブログ</p>
				<p class="icon_popup_big ic btn_bg_yel ic_yel"></p>
			</div>
		</div>
		<div class="info_big">
			<p class="name_big c_yel"><span class="txt_name_big"><?=$title_name?></span></p>
			<p class="desc_big"><?=$content?></p>
			<p class="btn-popup-big"><a class="btn_bg_yel" href="<?=$link?>"><span class="ic">GO</span></a></p>
		</div>
	</div>
</div>
<?php } ?>
<?php 
	
	if($post_blog[3]){

		$thumbnail_url = "";
		$content = "";
		$title_name = "";
		$link = "";

		$blog_img = get_field( 'blog_img',$post_blog[3]->ID);
		$id_img = get_post_thumbnail_id($post_blog[3]->ID);
		
		if ( wp_get_attachment_url( $id_img, 'medium' ) != "" ) {
			$thumbnail_url = wp_get_attachment_url( $id_img, 'medium' );
		} elseif ( $blog_img != "" ) {
			$thumbnail_url = $blog_img[ 'url' ];
		} else {
			$thumbnail_url = get_theme_file_uri( 'images/dummy.jpg' );
		}
		$content=content_number(80,strip_tags($post_blog[3]->post_content));
		$title_name=($post_blog[3]->post_title ? $post_blog[3]->post_title:"現在、執筆中！");
		$link=get_permalink($post_blog[3]->ID);

 ?>
<!-- popup big 9 -->
<div class="popup_big_9 popup_big " id="popup9">
	<div class="closes_sp ic_bg2" data-id="9"></div>
	<div class="wrap_popup_big">
		<div class="img_big">
			<p class="img"><img src="<?php echo $thumbnail_url ?>" loading="lazy" width="585" height="380" alt="<?=$title_name?>"></p>
		</div>
		<div class="info_cen">
			<p class="num ic btn_bg_yel">09</p>
			<div class="info_l">
				<p class="tt_cate c_yel">ブログ</p>
				<p class="icon_popup_big ic btn_bg_yel ic_yel"></p>
			</div>
		</div>
		<div class="info_big">
			<p class="name_big c_yel"><span class="txt_name_big"><?=$title_name?></span></p>
			<p class="desc_big"><?=$content?></p>
			<p class="btn-popup-big"><a class="btn_bg_yel" href="<?=$link?>"><span class="ic">GO</span></a></p>
		</div>
	</div>
</div>
<?php } ?>
<?php 
	
	if($post_blog[4]){

		$thumbnail_url = "";
		$content = "";
		$title_name = "";
		$link = "";

		$blog_img = get_field( 'blog_img',$post_blog[4]->ID);
		$id_img = get_post_thumbnail_id($post_blog[4]->ID);
		
		if ( wp_get_attachment_url( $id_img, 'medium' ) != "" ) {
			$thumbnail_url = wp_get_attachment_url( $id_img, 'medium' );
		} elseif ( $blog_img != "" ) {
			$thumbnail_url = $blog_img[ 'url' ];
		} else {
			$thumbnail_url = get_theme_file_uri( 'images/dummy.jpg' );
		}
		$content=content_number(80,strip_tags($post_blog[4]->post_content));
		$title_name=($post_blog[4]->post_title ? $post_blog[4]->post_title:"現在、執筆中！");
		$link=get_permalink($post_blog[3]->ID);

 ?>
<!-- popup big 10 -->
<div class="popup_big_10 popup_big " id="popup10">
	<div class="closes_sp ic_bg2" data-id="10"></div>
	<div class="wrap_popup_big">
		<div class="img_big">
			<p class="img"><img src="<?php echo $thumbnail_url ?>" loading="lazy" width="585" height="380" alt="<?=$title_name?>"></p>
		</div>
		<div class="info_cen">
			<p class="num ic btn_bg_yel">10</p>
			<div class="info_l">
				<p class="tt_cate c_yel">ブログ</p>
				<p class="icon_popup_big ic btn_bg_yel ic_yel"></p>
			</div>
		</div>
		<div class="info_big">
			<p class="name_big c_yel"><span class="txt_name_big"><?=$title_name?></span></p>
			<p class="desc_big"><?=$content?></p>
			<p class="btn-popup-big"><a class="btn_bg_yel" href="<?=$link?>"><span class="ic">GO</span></a></p>
		</div>
	</div>
</div>
<?php } ?>
<?php 
	
	if($post_blog[5]){

		$thumbnail_url = "";
		$content = "";
		$title_name = "";
		$link = "";

		$blog_img = get_field( 'blog_img',$post_blog[5]->ID);
		$id_img = get_post_thumbnail_id($post_blog[5]->ID);
		
		if ( wp_get_attachment_url( $id_img, 'medium' ) != "" ) {
			$thumbnail_url = wp_get_attachment_url( $id_img, 'medium' );
		} elseif ( $blog_img != "" ) {
			$thumbnail_url = $blog_img[ 'url' ];
		} else {
			$thumbnail_url = get_theme_file_uri( 'images/dummy.jpg' );
		}
		$content=content_number(80,strip_tags($post_blog[5]->post_content));
		$title_name=($post_blog[5]->post_title ? $post_blog[5]->post_title:"現在、執筆中！");
		$link=get_permalink($post_blog[5]->ID);

 ?>
<!-- popup big 13 -->
<div class="popup_big_13 popup_big " id="popup13">
	<div class="closes_sp ic_bg2" data-id="13"></div>
	<div class="wrap_popup_big">
		<div class="img_big">
			<p class="img"><img src="<?php echo $thumbnail_url ?>" loading="lazy" width="585" height="380" alt="<?=$title_name?>"></p>
		</div>
		<div class="info_cen">
			<p class="num ic btn_bg_yel">13</p>
			<div class="info_l">
				<p class="tt_cate c_yel">ブログ</p>
				<p class="icon_popup_big ic btn_bg_yel ic_yel"></p>
			</div>
		</div>
		<div class="info_big">
			<p class="name_big c_yel"><span class="txt_name_big"><?=$title_name?></span></p>
			<p class="desc_big"><?=$content?></p>
			<p class="btn-popup-big"><a class="btn_bg_yel" href="<?=$link?>"><span class="ic">GO</span></a></p>
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
	
	if($post_community[0]){

		$thumbnail_url = "";
		$content = "";
		$title_name = "";
		$link = "";

		$community_img = get_field( 'community_img',$post_community[0]->ID);
		$id_img = get_post_thumbnail_id($post_community[0]->ID);
		
		if ( wp_get_attachment_url( $id_img, 'medium' ) != "" ) {
			$thumbnail_url = wp_get_attachment_url( $id_img, 'medium' );
		} elseif ( $community_img != "" ) {
			$thumbnail_url = $community_img[ 'url' ];
		} else {
			$thumbnail_url = get_theme_file_uri( 'images/dummy.jpg' );
		}
		$content=content_number(80,strip_tags($post_community[0]->post_content));
		$title_name=($post_community[0]->post_title ? $post_community[0]->post_title:"仲間たちと作戦会議中！");
		$link=get_permalink($post_community[0]->ID);


 ?>
<!-- popup big 1 -->
<div class="popup_big_1 popup_big " id="popup1">
	<div class="closes_sp ic_bg1" data-id="1"></div>
	<div class="wrap_popup_big">
		<div class="img_big">
			<p class="img"><img src="<?php echo $thumbnail_url ?>" loading="lazy" width="585" height="380" alt="<?=$title_name?>"></p>
		</div>
		<div class="info_cen">
			<p class="num ic btn_bg_scolor">01</p>
			<div class="info_l">
				<p class="tt_cate c_scolor">コミュニティ</p>
				<p class="icon_popup_big ic btn_bg_scolor ic_scolor"></p>
			</div>
		</div>
		<div class="info_big">
			<p class="name_big c_scolor"><span class="txt_name_big"><?=$title_name?></span></p>
			<p class="desc_big"><?=$content?></p>
			<p class="btn-popup-big"><a class="btn_bg_scolor" href="<?=$link?>"><span class="ic">GO</span></a></p>
		</div>
	</div>
</div>
<?php } ?>
<?php 
	
	if($post_community[1]){

		$thumbnail_url = "";
		$content = "";
		$title_name = "";
		$link = "";

		$community_img = get_field( 'community_img',$post_community[1]->ID);
		$id_img = get_post_thumbnail_id($post_community[1]->ID);
		
		if ( wp_get_attachment_url( $id_img, 'medium' ) != "" ) {
			$thumbnail_url = wp_get_attachment_url( $id_img, 'medium' );
		} elseif ( $community_img != "" ) {
			$thumbnail_url = $community_img[ 'url' ];
		} else {
			$thumbnail_url = get_theme_file_uri( 'images/dummy.jpg' );
		}
		$content=content_number(80,strip_tags($post_community[1]->post_content));
		$title_name=($post_community[1]->post_title ? $post_community[1]->post_title:"仲間たちと作戦会議中！");
		$link=get_permalink($post_community[1]->ID);


 ?>
<!-- popup big 3 -->
<div class="popup_big_3 popup_big " id="popup3">
	<div class="closes_sp ic_bg1" data-id="3"></div>
	<div class="wrap_popup_big">
		<div class="img_big">
			<p class="img"><img src="<?php echo $thumbnail_url ?>" loading="lazy" width="585" height="380" alt="<?php echo $title_name ?>"></p>
		</div>
		<div class="info_cen">
			<p class="num ic btn_bg_scolor">03</p>
			<div class="info_l">
				<p class="tt_cate c_scolor">コミュニティ</p>
				<p class="icon_popup_big ic btn_bg_scolor ic_scolor"></p>
			</div>
		</div>
		<div class="info_big">
			<p class="name_big c_scolor"><span class="txt_name_big"><?php echo $title_name ?></span></p>
			<p class="desc_big"><?php echo $content ?></p>
			<p class="btn-popup-big"><a class="btn_bg_scolor" href="<?=$link?>"><span class="ic">GO</span></a></p>
		</div>
	</div>
</div>
<?php } ?>
<?php 
	
	if($post_community[3]){

		$thumbnail_url = "";
		$content = "";
		$title_name = "";
		$link = "";

		$community_img = get_field( 'community_img',$post_community[3]->ID);
		$id_img = get_post_thumbnail_id($post_community[3]->ID);
		
		if ( wp_get_attachment_url( $id_img, 'medium' ) != "" ) {
			$thumbnail_url = wp_get_attachment_url( $id_img, 'medium' );
		} elseif ( $community_img != "" ) {
			$thumbnail_url = $community_img[ 'url' ];
		} else {
			$thumbnail_url = get_theme_file_uri( 'images/dummy.jpg' );
		}
		$content=content_number(80,strip_tags($post_community[3]->post_content));
		$title_name=($post_community[3]->post_title ? $post_community[3]->post_title:"仲間たちと作戦会議中！");
		$link=get_permalink($post_community[3]->ID);


 ?>
<!-- popup big 6 -->
<div class="popup_big_6 popup_big " id="popup6">
	<div class="closes_sp ic_bg1" data-id="6"></div>
	<div class="wrap_popup_big">
		<div class="img_big">
			<p class="img"><img src="<?php echo $thumbnail_url ?>" loading="lazy" width="585" height="380" alt="<?php echo $title_name ?>"></p>
		</div>
		<div class="info_cen">
			<p class="num ic btn_bg_scolor">06</p>
			<div class="info_l">
				<p class="tt_cate c_scolor">コミュニティ</p>
				<p class="icon_popup_big ic btn_bg_scolor ic_scolor"></p>
			</div>
		</div>
		<div class="info_big">
			<p class="name_big c_scolor"><span class="txt_name_big"><?php echo $title_name ?></span></p>
			<p class="desc_big"><?php echo $content ?></p>
			<p class="btn-popup-big"><a class="btn_bg_scolor" href="<?php echo $link ?>"><span class="ic">GO</span></a></p>
		</div>
	</div>
</div>
<?php } ?>
<?php 
	
	if($post_community[4]){

		$thumbnail_url = "";
		$content = "";
		$title_name = "";
		$link = "";

		$community_img = get_field( 'community_img',$post_community[4]->ID);
		$id_img = get_post_thumbnail_id($post_community[4]->ID);
		
		if ( wp_get_attachment_url( $id_img, 'medium' ) != "" ) {
			$thumbnail_url = wp_get_attachment_url( $id_img, 'medium' );
		} elseif ( $community_img != "" ) {
			$thumbnail_url = $community_img[ 'url' ];
		} else {
			$thumbnail_url = get_theme_file_uri( 'images/dummy.jpg' );
		}
		$content=content_number(80,strip_tags($post_community[4]->post_content));
		$title_name=($post_community[4]->post_title ? $post_community[4]->post_title:"仲間たちと作戦会議中！");
		$link=get_permalink($post_community[4]->ID);


 ?>
<!-- popup big 8 -->
<div class="popup_big_8 popup_big " id="popup8">
	<div class="closes_sp ic_bg1" data-id="8"></div>
	<div class="wrap_popup_big">
		<div class="img_big">
			<p class="img"><img src="<?php echo $thumbnail_url; ?>" loading="lazy" width="585" height="380" alt="<?=$title_name?>"></p>
		</div>
		<div class="info_cen">
			<p class="num ic btn_bg_scolor">08</p>
			<div class="info_l">
				<p class="tt_cate c_scolor">コミュニティ</p>
				<p class="icon_popup_big ic btn_bg_scolor ic_scolor"></p>
			</div>
		</div>
		<div class="info_big">
			<p class="name_big c_scolor"><span class="txt_name_big"><?=$title_name?></span></p>
			<p class="desc_big"><?=$content?></p>
			<p class="btn-popup-big"><a class="btn_bg_scolor" href="<?=$link?>"><span class="ic">GO</span></a></p>
		</div>
	</div>
</div>
<?php } ?>
<?php 
	
	if($post_community[6]){

		$thumbnail_url = "";
		$content = "";
		$title_name = "";
		$link = "";

		$community_img = get_field( 'community_img',$post_community[6]->ID);
		$id_img = get_post_thumbnail_id($post_community[6]->ID);
		
		if ( wp_get_attachment_url( $id_img, 'medium' ) != "" ) {
			$thumbnail_url = wp_get_attachment_url( $id_img, 'medium' );
		} elseif ( $community_img != "" ) {
			$thumbnail_url = $community_img[ 'url' ];
		} else {
			$thumbnail_url = get_theme_file_uri( 'images/dummy.jpg' );
		}
		$content=content_number(80,strip_tags($post_community[6]->post_content));
		$title_name=($post_community[6]->post_title ? $post_community[6]->post_title:"仲間たちと作戦会議中！");
		$link=get_permalink($post_community[6]->ID);


 ?>
<!-- popup big 12 -->
<div class="popup_big_12 popup_big " id="popup12">
	<div class="closes_sp ic_bg1" data-id="12"></div>
	<div class="wrap_popup_big">
		<div class="img_big">
			<p class="img"><img src="<?php echo $thumbnail_url ?>" loading="lazy" width="585" height="380" alt="<?=$title_name?>"></p>
		</div>
		<div class="info_cen">
			<p class="num ic btn_bg_scolor">12</p>
			<div class="info_l">
				<p class="tt_cate c_scolor">イベント</p>
				<p class="icon_popup_big ic btn_bg_scolor ic_scolor"></p>
			</div>
		</div>
		<div class="info_big">
			<p class="name_big c_scolor"><span class="txt_name_big"><?=$title_name?></span></p>
			<p class="desc_big"><?=$content?></p>
			<p class="btn-popup-big"><a class="btn_bg_scolor" href="<?=$link?>"><span class="ic">GO</span></a></p>
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
	
	if($post_event[0]){

		$thumbnail_url = "";
		$content = "";
		$title_name = "";
		$link = "";

		$event_img = get_field( 'event_img',$post_event[0]->ID);
		$id_img = get_post_thumbnail_id($post_event[0]->ID);
		
		if ( wp_get_attachment_url( $id_img, 'medium' ) != "" ) {
			$thumbnail_url = wp_get_attachment_url( $id_img, 'medium' );
		} elseif ( $event_img != "" ) {
			$thumbnail_url = $event_img[ 'url' ];
		} else {
			$thumbnail_url = get_theme_file_uri( 'images/dummy.jpg' );
		}
		$content=content_number(80,strip_tags($post_event[0]->post_content));
		$title_name=($post_event[0]->post_title ? $post_event[0]->post_title:"絶質イベント計画中中！");
		$link=get_permalink($post_event[0]->ID);


 ?>
<!-- popup big 2 -->
<div class="popup_big_2 popup_big " id="popup2">
	<div class="closes_sp ic_bg3" data-id="2"></div>
	<div class="wrap_popup_big">
		<div class="img_big">
			<p class="img"><img src="<?php echo $thumbnail_url ?>" loading="lazy" width="585" height="380" alt="<?=$title_name?>"></p>
		</div>
		<div class="info_cen">
			<p class="num ic btn_bg_blue">02</p>
			<div class="info_l">
				<p class="tt_cate c_blue">イベント</p>
				<p class="icon_popup_big ic btn_bg_blue ic_blue"></p>
			</div>
		</div>
		<div class="info_big">
			<p class="name_big c_blue"><span class="txt_name_big"><?=$title_name?></span></p>
			<p class="desc_big"><?=$content?></p>
			<p class="btn-popup-big"><a class="btn_bg_blue" href="<?=$link?>"><span class="ic">GO</span></a></p>
		</div>
	</div>
</div>
<?php } ?>
<?php 
	
	if($post_event[1]){

		$thumbnail_url = "";
		$content = "";
		$title_name = "";
		$link = "";

		$event_img = get_field( 'event_img',$post_event[1]->ID);
		$id_img = get_post_thumbnail_id($post_event[1]->ID);
		
		if ( wp_get_attachment_url( $id_img, 'medium' ) != "" ) {
			$thumbnail_url = wp_get_attachment_url( $id_img, 'medium' );
		} elseif ( $event_img != "" ) {
			$thumbnail_url = $event_img[ 'url' ];
		} else {
			$thumbnail_url = get_theme_file_uri( 'images/dummy.jpg' );
		}
		$content=content_number(80,strip_tags($post_event[1]->post_content));
		$title_name=($post_event[1]->post_title ? $post_event[1]->post_title:"絶質イベント計画中中！");
		$link=get_permalink($post_event[1]->ID);


 ?>
<!-- popup big 5 -->
<div class="popup_big_5 popup_big" id="popup5">
	<div class="closes_sp ic_bg3" data-id="5"></div>
	<div class="wrap_popup_big">
		<div class="img_big">
			<p class="img"><img src="<?php echo $thumbnail_url ?>" loading="lazy" width="585" height="380" alt="<?=$title_name?>"></p>
		</div>
		<div class="info_cen">
			<p class="num ic btn_bg_blue">05</p>
			<div class="info_l">
				<p class="tt_cate c_blue">イベント</p>
				<p class="icon_popup_big ic btn_bg_blue ic_blue"></p>
			</div>
		</div>
		<div class="info_big">
			<p class="name_big c_blue"><span class="txt_name_big"><?=$title_name?></span></p>
			<p class="desc_big"><?=$content?></p>
			<p class="btn-popup-big"><a class="btn_bg_blue" href="<?=$link?>"><span class="ic">GO</span></a></p>
		</div>
	</div>
</div>
<?php } ?>
<?php 
	
	if($post_event[2]){

		$thumbnail_url = "";
		$content = "";
		$title_name = "";
		$link = "";

		$event_img = get_field( 'event_img',$post_event[2]->ID);
		$id_img = get_post_thumbnail_id($post_event[2]->ID);
		
		if ( wp_get_attachment_url( $id_img, 'medium' ) != "" ) {
			$thumbnail_url = wp_get_attachment_url( $id_img, 'medium' );
		} elseif ( $event_img != "" ) {
			$thumbnail_url = $event_img[ 'url' ];
		} else {
			$thumbnail_url = get_theme_file_uri( 'images/dummy.jpg' );
		}
		$content=content_number(80,strip_tags($post_event[2]->post_content));
		$title_name=($post_event[2]->post_title ? $post_event[2]->post_title:"絶質イベント計画中中！");
		$link=get_permalink($post_event[2]->ID);


 ?>
<!-- popup big 7 -->
<div class="popup_big_7 popup_big " id="popup7">
	<div class="closes_sp ic_bg3" data-id="7"></div>
	<div class="wrap_popup_big">
		<div class="img_big">
			<p class="img"><img src="<?php echo $thumbnail_url ?>" loading="lazy" width="585" height="380" alt="<?=$title_name?>"></p>
		</div>
		<div class="info_cen">
			<p class="num ic btn_bg_blue">07</p>
			<div class="info_l">
				<p class="tt_cate c_blue">イベント</p>
				<p class="icon_popup_big ic btn_bg_blue ic_blue"></p>
			</div>
		</div>
		<div class="info_big">
			<p class="name_big c_blue"><span class="txt_name_big"><?=$title_name?></span></p>
			<p class="desc_big"><?=$content?></p>
			<p class="btn-popup-big"><a class="btn_bg_blue" href="<?=$link?>"><span class="ic">GO</span></a></p>
		</div>
	</div>
</div>
<?php } ?>
<?php 
	
	if($post_event[3]){

		$thumbnail_url = "";
		$content = "";
		$title_name = "";
		$link = "";

		$event_img = get_field( 'event_img',$post_event[3]->ID);
		$id_img = get_post_thumbnail_id($post_event[3]->ID);
		
		if ( wp_get_attachment_url( $id_img, 'medium' ) != "" ) {
			$thumbnail_url = wp_get_attachment_url( $id_img, 'medium' );
		} elseif ( $event_img != "" ) {
			$thumbnail_url = $event_img[ 'url' ];
		} else {
			$thumbnail_url = get_theme_file_uri( 'images/dummy.jpg' );
		}
		$content=content_number(80,strip_tags($post_event[3]->post_content));
		$title_name=($post_event[3]->post_title ? $post_event[3]->post_title:"絶質イベント計画中中！");
		$link=get_permalink($post_event[3]->ID);


 ?>
<!-- popup big 11 -->
<div class="popup_big_11 popup_big " id="popup11">
	<div class="closes_sp ic_bg3" data-id="11"></div>
	<div class="wrap_popup_big">
		<div class="img_big">
			<p class="img"><img src="<?php echo $thumbnail_url ?>" loading="lazy" width="585" height="380" alt="<?=$title_name?>"></p>
		</div>
		<div class="info_cen">
			<p class="num ic btn_bg_blue">11</p>
			<div class="info_l">
				<p class="tt_cate c_blue">イベント</p>
				<p class="icon_popup_big ic btn_bg_blue ic_blue"></p>
			</div>
		</div>
		<div class="info_big">
			<p class="name_big c_blue"><span class="txt_name_big"><?=$title_name?></span></p>
			<p class="desc_big"><?=$content?></p>
			<p class="btn-popup-big"><a class="btn_bg_blue" href="<?=$link?>"><span class="ic">GO</span></a></p>
		</div>
	</div>
</div>
<?php } ?>
<?php 
	
	if($post_event[4]){

		$thumbnail_url = "";
		$content = "";
		$title_name = "";
		$link = "";

		$event_img = get_field( 'event_img',$post_event[4]->ID);
		$id_img = get_post_thumbnail_id($post_event[4]->ID);
		
		if ( wp_get_attachment_url( $id_img, 'medium' ) != "" ) {
			$thumbnail_url = wp_get_attachment_url( $id_img, 'medium' );
		} elseif ( $event_img != "" ) {
			$thumbnail_url = $event_img[ 'url' ];
		} else {
			$thumbnail_url = get_theme_file_uri( 'images/dummy.jpg' );
		}
		$content=content_number(80,strip_tags($post_event[4]->post_content));
		$title_name=($post_event[4]->post_title ? $post_event[4]->post_title:"絶質イベント計画中中！");
		$link=get_permalink($post_event[4]->ID);


 ?>
<!-- popup big 14 -->
<div class="popup_big_14 popup_big " id="popup14">
	<div class="closes_sp ic_bg3" data-id="14"></div>
	<div class="wrap_popup_big">
		<div class="img_big">
			<p class="img"><img src="<?php echo $thumbnail_url ?>" loading="lazy" width="585" height="380" alt="<?=$title_name?>"></p>
		</div>
		<div class="info_cen">
			<p class="num ic btn_bg_blue">14</p>
			<div class="info_l">
				<p class="tt_cate c_blue">イベント</p>
				<p class="icon_popup_big ic btn_bg_blue ic_blue"></p>
			</div>
		</div>
		<div class="info_big">
			<p class="name_big c_blue"><span class="txt_name_big"><?=$title_name?></span></p>
			<p class="desc_big"><?=$content?></p>
			<p class="btn-popup-big"><a class="btn_bg_blue" href="<?=$link?>"><span class="ic">GO</span></a></p>
		</div>
	</div>
</div>
<?php } ?>
<?php 
	
	if($post_event[7]){

		$thumbnail_url = "";
		$content = "";
		$title_name = "";
		$link = "";

		$event_img = get_field( 'event_img',$post_event[7]->ID);
		$id_img = get_post_thumbnail_id($post_event[7]->ID);
		
		if ( wp_get_attachment_url( $id_img, 'medium' ) != "" ) {
			$thumbnail_url = wp_get_attachment_url( $id_img, 'medium' );
		} elseif ( $event_img != "" ) {
			$thumbnail_url = $event_img[ 'url' ];
		} else {
			$thumbnail_url = get_theme_file_uri( 'images/dummy.jpg' );
		}
		$content=content_number(80,strip_tags($post_event[7]->post_content));
		$title_name=($post_event[7]->post_title ? $post_event[7]->post_title:"絶質イベント計画中中！");
		$link=get_permalink($post_event[7]->ID);


 ?>
<!-- popup big 15 -->
<div class="popup_big_15 popup_big" id="popup15">
	<div class="closes_sp ic_bg3" data-id="15"></div>
	<div class="wrap_popup_big">
		<div class="img_big">
			<p class="img"><img src="<?php echo $thumbnail_url ?>" loading="lazy" width="585" height="380" alt="<?=$title_name?>"></p>
		</div>
		<div class="info_cen">
			<p class="num ic btn_bg_blue">15</p>
			<div class="info_l">
				<p class="tt_cate c_blue">イベント</p>
				<p class="icon_popup_big ic btn_bg_blue ic_blue"></p>
			</div>
		</div>
		<div class="info_big">
			<p class="name_big c_blue"><span class="txt_name_big"><?=$title_name?></span></p>
			<p class="desc_big"><?=$content?></p>
			<p class="btn-popup-big"><a class="btn_bg_blue" href="<?=$link?>"><span class="ic">GO</span></a></p>
		</div>
	</div>
</div>
<?php } ?>
<?php
wp_reset_postdata();
wp_reset_query();

?>


