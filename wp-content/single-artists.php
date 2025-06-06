<?php
if ( have_posts() ):
	while( have_posts() ): 
		the_post();

		// Get post category/taxonomy
		$terms = wp_get_post_terms($post->ID, 'blog-category', '');

		// ID of <body> 
		$GLOBALS['bodyID'] = "artists";

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
				<a href="<?php echo home_url(); ?>/artists"> BACK TO ARTISTS</a>
			</div>
		</div>
		<div class="iDetail--img">
			<img src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php the_title(); ?>">
		</div>
		<div class="marquee">
			<span><?php echo the_title() ?></span>
		</div>
	


<?php
$gr = get_field('gr_socail');

$items = [];

for ($i = 1; $i <= 6; $i++) {
  $title = $gr["title_0$i"] ?? '';
  $link = $gr["link_0$i"] ?? '';

  if (!empty($title) && !empty($link)) {
    $items[] = [
      'title' => $title,
      'link'  => $link
    ];
  }
}

if (!empty($items)) {
 echo '<ul class="iDetail--link">';
  foreach ($items as $item) {
    echo '<li><a href="' . esc_url($item['link']) . '">' . esc_html($item['title']) . '</a></li>';
  }
  echo '</ul>';
}
?>
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