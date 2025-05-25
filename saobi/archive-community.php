<?php
error_reporting( 0 );
$keywords = get_field( 'keywords' );
$GLOBALS[ 'keywords' ] = '小田原,南足柄,注文住宅,移住,リノベーション,木の家,自然';
$h1 = get_field( 'h1' );
$GLOBALS[ 'h1' ] = '地域とのつながりを育むコミュニティ情報';
$GLOBALS[ 'h2' ] = "コミュニティ";
$GLOBALS[ 'pageClass' ] = "under";

$GLOBALS[ 'pageID' ] = "community";
$GLOBALS[ 'h2_en' ] = "community";
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
						<?php 
								$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
								global $post;
								global $wp_query;
								$year = get_query_var( 'year' );
								$monthnum = get_query_var( 'monthnum' );
								$day = get_query_var( 'day' );
						 ?>
						<li><a class="anim fancy_title wow fadeInUp" href="<?php echo home_url(); ?>/">TOP</a></li>
						<?php if ( $year || $monthnum || $day ) {?>
							<li><a class="anim fancy_title wow fadeInUp" href="<?php echo home_url();?>/community/">コミュニティ</a></li>
							<li class="anim fancy_title wow fadeInUp">
								<?php echo $year.'年'.$monthnum.'月'.($day ? $day.'日':''); ?>
							</li>
						<?php } else { ?>
						<li class="anim fancy_title wow fadeInUp">コミュニティ</li>
						<?php } ?>
					</ul>
				</div>
			</div>
			<!-- end #topic_path -->
      <div class="inner clearfix"> 
        <!--inner-->
        <div class="blog_content">
          <div class="blog_main">
						<ul class="list_blog">
            <?php
            
						$day_query = array( array(
							'year' => $year,
							'monthnum' => $monthnum,
							'day' => $day,
						), );
            $posts_per_page = 8;
            $args = array(
              'post_type' => 'community',
              'orderby' => 'date',
              'order' => 'desc',
              'posts_per_page' => $posts_per_page,
              'paged' => $paged,
							'date_query' => $day_query,
            );
            $the_query = new WP_Query( $args );
            $qa_posts = get_posts( $args );
            if ( $qa_posts ) {
              foreach ( $qa_posts as $post ):
                setup_postdata( $post );

              // Get post thumbnail image. If not, replace by dummy image
							$thumbnail = get_post_thumbnail_id();
							$thumbnail_url = "";

							$blog_img = get_field( 'community_img');
							
							if ( wp_get_attachment_url( $thumbnail, 'medium' ) != "" ) {
								$thumbnail_url = wp_get_attachment_url( $thumbnail, 'medium' );
							} elseif ( $blog_img != "" ) {
								$thumbnail_url = $blog_img[ 'url' ];
							} else {
								$thumbnail_url = get_theme_file_uri( 'images/dummy.jpg' );
							}


              ?>
            <li><a href="<?php the_permalink(); ?>">
              <span class="img"><img src="<?php echo $thumbnail_url; ?>" alt="<?php the_title(); ?>"></span>
              <span class="date en"><?php echo get_the_date('Y.m.d'); ?></span>
              <span class="link"><?php echo the_title(); ?></span>
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
                'format' => 'page/%#%',
                'current' => $current_page,
                'total' => $total_pages,
                'prev_text' => __( '«' ),
                'next_text' => __( '»' ),
              ) );
              echo '</p>';
            }
            ?>
          </div>
          <div class="sidebar">
            <p class="sidebar_ttl">カレンダー</p>
						<div id="post_calendar"></div>
            <p class="sidebar_ttl">アーカイブ</p>
            <ul class="list01">
            	<?php
							    $args = array(
							        'post_type'      => 'community',
							        'posts_per_page' => -1,
							    );

							    $archiveByDate = new WP_Query($args);
							    $monthly_counts = [];

							    if ($archiveByDate->have_posts()) :
							        while ($archiveByDate->have_posts()) :
							            $archiveByDate->the_post();
							            $year_month = get_the_date('Y-m');

							            if (!isset($monthly_counts[$year_month])) {
							                $monthly_counts[$year_month] = 0;
							            }
							            $monthly_counts[$year_month]++;
							        endwhile;
							        wp_reset_postdata();
							    endif;

							    foreach ($monthly_counts as $year_month => $count) {
							        list($year, $month) = explode('-', $year_month);
							        ?>
							        <li>
							            <a href="<?php echo home_url('community') . "/$year/$month/"; ?>"><?php echo $year."年".$month."月"."(".$count.")"; ?></a>
							        </li>
							        <?php
							    }
							    ?>
              
            </ul>
          </div>
        </div>
      </div>
      <script type="text/javascript">
				const post_type="community";
				let eventData="";
				eventData =[
					<?php

					$month = '';
					if ($archiveByDate->have_posts()) :
						while ($archiveByDate->have_posts()) :
							$archiveByDate->the_post();

							?>
							{
								"date": "<?php echo get_the_date('Y-m-d'); ?>",
							},
							<?php 
						endwhile;
					endif; ?>
				];
			</script>
    </div>
    <!--end inner--> 
  </div>
  <!-- end #content --> 
</main>

<?php get_footer(); ?>
