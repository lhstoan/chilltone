<?php
error_reporting( 0 );
$keywords = get_field( 'keywords' );
$GLOBALS[ 'keywords' ] = '小田原,南足柄,注文住宅,移住,リノベーション,木の家,自然';
$h1 = get_field( 'h1' );
$GLOBALS[ 'h1' ] = '地域活動やイベント情報をチェック';
$GLOBALS[ 'h2' ] = "イベント";
$GLOBALS[ 'pageClass' ] = "under";
$GLOBALS[ 'pageID' ] = "event";
$GLOBALS[ 'h2_en' ] = "Event";

get_header();
?>
<main> 
  <!-- content start -->
  <div id="content">
    <div id="swup">
      <?php include('includes/top_info.php'); ?>
      <!-- #topic_path -->
			<div id="topic_path">
				<div class="inner clearfix">
					<ul>
						<li><a class="anim fancy_title wow fadeInUp" href="<?php echo home_url(); ?>/">TOP</a></li>
						<li class="anim fancy_title wow fadeInUp">イベント</li>
					</ul>
				</div>
			</div>
			<!-- end #topic_path -->
      <div class="inner clearfix"> 
        <!--inner-->
        <section class="clearfix blog_content post_type">
					<ul class="list_event">
            <?php
            $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
						global $post;
						global $wp_query;
            $posts_per_page = 6;
            $args = array(
              'post_type' => 'event',
              'orderby' => 'date',
              'order' => 'desc',
              'posts_per_page' => $posts_per_page,
              'paged' => $paged,
            );
            $the_query = new WP_Query( $args );
            $qa_posts = get_posts( $args );
            if ( $qa_posts ) {
              foreach ( $qa_posts as $post ):
                setup_postdata( $post );

              // Get post thumbnail image. If not, replace by dummy image
							$thumbnail = get_post_thumbnail_id();
							$thumbnail_url = "";

							$event_img = get_field( 'event_img');
							
							if ( wp_get_attachment_url( $thumbnail, 'medium' ) != "" ) {
								$thumbnail_url = wp_get_attachment_url( $thumbnail, 'medium' );
							} elseif ( $event_img != "" ) {
								$thumbnail_url = $event_img[ 'url' ];
							} else {
								$thumbnail_url = get_theme_file_uri( 'images/dummy.jpg' );
							}

							$status = get_field('event_status');
							$status_class = "";
							$status_txt = "";
							if($status == '終了'){$status_class = "hide";$status_txt = "終了しました";} else {$status_class = "show";$status_txt = "受付中";}
							
              ?>
            <li class="<?php echo $status_class ?>"><a href="<?php the_permalink(); ?>">
              <span class="img"><img src="<?php echo $thumbnail_url; ?>" alt="<?php the_title(); ?>"></span>
              <span class="status"><?php echo $status_txt; ?></span>
              <span class="date en"><?php echo get_the_date('Y.m.d'); ?></span>
              <span class="title"><?php echo the_title(); ?></span>
							<?php 
								$rows = get_field('event_row');
								if( $rows ) {
										foreach( $rows as $row ) {
												$event_date = $row['event_date'];
												$event_time = $row['event_time'];
												$event_place = $row['event_place'];
												echo '<span class="info"><span class="info_ttl">開催日</span><span class="info_txt">';
														echo wp_kses_post( wpautop( $row['event_date'] ) );
												echo '</span></span>';
												echo '<span class="info"><span class="info_ttl">時間</span><span class="info_txt">';
														echo wp_kses_post( wpautop( $row['event_time'] ) );
												echo '</span></span>';
												echo '<span class="info"><span class="info_ttl">場所</span><span class="info_txt">';
														echo wp_kses_post( wpautop( $row['event_place'] ) );
												echo '</span></span>';
										}
								} 
							?>
            </a></li>
            <?php endforeach; } ?>
            </ul>
            <?php
            $total_pages = $the_query->max_num_pages;
            if ( $total_pages > 1 ) {
              echo '<p class="wp_pagination">';
              $current_page = max( 1, get_query_var( 'paged' ) );

              echo paginate_links( array(
                'base' => get_pagenum_link( 1 ) . '%_%',
                'format' => 'page/%#%/',
                'current' => $current_page,
                'total' => $total_pages,
                'prev_text' => __( '«' ),
                'next_text' => __( '»' ),
              ) );
              echo '</p>';
            }
            ?>
				</section>
      </div>
    </div>
    <!--end inner--> 
  </div>
  <!-- end #content --> 
</main>
<?php get_footer(); ?>
