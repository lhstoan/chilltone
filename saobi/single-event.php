<?php
error_reporting( 0 );
if ( have_posts() ):
  while ( have_posts() ): the_post();
$keywords = get_field( 'keywords' );
$GLOBALS[ 'keywords' ] = $keywords;
$h1 = get_field( 'h1' );
$GLOBALS[ 'h1' ] = $h1;
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
            <li><a href="<?php echo home_url(); ?>/">TOP</a></li>
            <li><a href="<?php echo home_url(); ?>/event/">イベント</a></li>
            <li><?php echo get_the_title(); ?></li>
          </ul>
        </div>
      </div>
      <!-- end #topic_path -->
      
      <div class="inner clearfix"> 
        <!--inner-->
        <section class="clearfix blog_detail">
					<div class="event_top">
						<p class="event_top_status"><?php echo get_field('event_status'); ?></p>
						<h3 class="event_title"><span class="tt_event"><?php echo get_the_title(); ?></span></h3>
					</div>
					<?php if(get_field('event_img')): ?>
					<p class="center blog_img"><img src="<?php echo get_field('event_img')['url']; ?>" alt="<?php echo strip_tags( get_the_title() ); ?>"></p>
					<?php endif; ?>
         
          <?php 
						$rows = get_field('event_row');
						if( $rows ) {
							echo '<ul class="event_row">';
								foreach( $rows as $row ) {
										$event_date = $row['event_date'];
										$event_time = $row['event_time'];
										$event_place = $row['event_place'];
										echo '<li class="info"><span class="info_ttl">開催日</span><span class="info_txt">';
												echo wp_kses_post( wpautop( $row['event_date'] ) );
										echo '</span></li>';
										echo '<li class="info"><span class="info_ttl">時間</span><span class="info_txt">';
												echo wp_kses_post( wpautop( $row['event_time'] ) );
										echo '</span></li>';
										echo '<li class="info"><span class="info_ttl">場所</span><span class="info_txt">';
												echo wp_kses_post( wpautop( $row['event_place'] ) );
										echo '</span></li>';
								}
							echo '</ul>';
						} 
					?>
        
					<?php if(get_the_content()): ?>
						<section class="clearfix wpContent mt30">
							<?php echo the_content(); ?>
		        </section>
					<?php endif; ?>
					</section>
				<section class="clearfix" id="fmail_form">
					<h4><span>参加予約フォーム</span></h4>
					<?php echo do_shortcode('[contact-form-7 id="b368280" title="イベント"]'); ?>
        </section>
				<section class="clearfix">
          <ul class="blog_btn">
            <li class="btn_back"><a href="<?php echo home_url(); ?>/event/" class="view-list">一覧</a></li>
          </ul>
				</section>
      </div>
    </div>
    <!--end inner--> 
  </div>
  <!-- end #content --> 
</main>
<?php
get_footer();
endwhile;
endif;
?>
