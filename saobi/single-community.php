<?php
error_reporting( 0 );
if ( have_posts() ):
  while ( have_posts() ): the_post();
$keywords = get_field( 'keywords' );
$GLOBALS[ 'keywords' ] = $keywords;
$h1 = get_field( 'h1' );
$GLOBALS[ 'h1' ] = $h1;
$GLOBALS[ 'h2' ] = "コミュニティ";
$GLOBALS[ 'pageClass' ] = "under";
$GLOBALS[ 'pageID' ] = "community";
$GLOBALS[ 'h2_en' ] = "Community";

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
            <li><a href="<?php echo home_url(); ?>/community/">コミュニティ</a></li>
            <li><?php echo get_the_title(); ?></li>
          </ul>
        </div>
      </div>
      <!-- end #topic_path -->
      
      <div class="inner clearfix"> 
        <!--inner-->
        <section class="clearfix blog_detail wpContent">
          <h3><span class="tt_h3"><?php echo get_the_title(); ?></span></h3>
					<?php if(get_field('community_img')): ?>
					<p class="center blog_img"><img src="<?php echo get_field('community_img')['url']; ?>" alt="<?php echo strip_tags( get_the_title() ); ?>"></p>
					<?php endif; ?>
          <?php the_content(); ?>
          
          <!-- NEXT PREV -->
          <?php
          $prev_post = get_previous_post();
          if ( $prev_post ) {
            $prev_url = get_permalink( $prev_post->ID );
            $prev_title = get_the_title( $prev_post->ID );
          }
          $next_post = get_next_post();
          if ( $next_post ) {
            $next_url = get_permalink( $next_post->ID );
            $next_title = get_the_title( $next_post->ID );
          }
          ?>
        </section>
				<section class="clearfix">
          <ul class="blog_btn">
						<li class="prevPage">
            <?php if($prev_post) { ?>
            <a href="<?php echo $prev_url; ?>" class="view-list"><span class="blog_btn_ttl"><?php echo $prev_title; ?></span><span class="blog_btn_arr">PREV</span></a>
            <?php } ?>
						</li>
            <li class="btn_back"><a href="<?php echo home_url(); ?>/community/" class="view-list">一覧</a></li>
						<li class="nextPage">
            <?php if($next_post) { ?>
            <a href="<?php echo $next_url; ?>"  class="view-list"><span class="blog_btn_ttl"><?php echo $next_title; ?></span><span class="blog_btn_arr">NEXT</span></a>
            <?php } ?>
						</li>
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
