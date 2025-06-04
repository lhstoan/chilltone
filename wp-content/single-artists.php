<?php
if ( have_posts() ):
	while( have_posts() ): 
		the_post();

		// Get post category/taxonomy
		$terms = wp_get_post_terms($post->ID, 'blog-category', '');

		// ID of <body> 
		$GLOBALS['bodyID'] = "";

		// Class of <body>
		$GLOBALS['bodyClass'] = "under";

		$thumbnail_id = get_post_thumbnail_id();
		$thumbnail_url = '';
		if ($thumbnail_id) {
			$thumbnail_url = wp_get_attachment_url($thumbnail_id);
		} elseif ($acf_image = get_field('image')) {
			$thumbnail_url = $acf_image;
		}
		$website = get_field('gr_socail')['website'] ?? '';
		$spotify = get_field('gr_socail')['spotify'] ?? '';
		$instagram = get_field('gr_socail')['instagram'] ?? '';
		$tour_dates = get_field('gr_socail')['tour_dates'] ?? '';
		$description = get_field('description');
		get_header();
		?>
<main>

	<section class="iDetail">
		<div class="iBack">
			<div class="iBack--wrap">
				<a href="<?php echo home_url(); ?>/artists"> Back to Artists</a>
			</div>
		</div>
		<div class="iDetail--img">
			<img src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php the_title(); ?>">
		</div>
		<div class="marquee">
			<span><?php echo the_title() ?></span>
		</div>
		<ul class="iDetail--link">
			<li><a href="<?php echo $website; ?>">Website</a></li>
			<li><a href="<?php echo $spotify; ?>">Spotify</a></li>
			<li><a href="<?php echo $instagram; ?>">Instagram</a></li>
			<li><a href="<?php echo $tour_dates; ?>">Tour Dates</a></li>
		</ul>
		<div class="iDetail--desc">
			<div class="iDetail--wrap">
				<?php echo $description; ?>
			</div>

		</div>
	</section>



</main>


<?php
		get_footer();
		
	endwhile;
endif;
?>