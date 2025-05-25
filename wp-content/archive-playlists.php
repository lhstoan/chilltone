<?php

/* ============================================ */
/* =================== META =================== */
$GLOBALS['h1'] = "";
/* ================= end META ================= */
/* ============================================ */


// ID of <body> 
$GLOBALS['bodyID'] = "";

// Class of <body>
$GLOBALS['bodyClass'] = "under";

get_header();
?>
<main>
	<section class="iList">
		<div class="iList--wrap min">
			<ul class="iList--main async">
				<?php
					global $post;
					$paged = get_query_var('paged') ? get_query_var('paged') : 1;

					$args = array(
					'post_type' => 'playlists',
					'orderby' => 'date',
					'order' => 'desc',
					'paged' => $paged,
					);

					$the_query = new WP_Query($args);

					if ($the_query->have_posts()):
					while ($the_query->have_posts()): $the_query->the_post();
						$thumbnail_id = get_post_thumbnail_id();
						$thumbnail_url = '';
						$acf_link = get_field('url');
						if ($thumbnail_id) {
						$thumbnail_url = wp_get_attachment_url($thumbnail_id);
						} else {
						$acf_image = get_field('image');
							if (!empty($acf_image)) {
								$thumbnail_url = $acf_image;
							} else {
								$thumbnail_url = get_theme_file_uri('images/HINH1.jpg');
							}
						}
					?>
				<li>
					<a href="<?php echo $acf_link ?>" class="linkfull" target="_blank"></a>
					<img src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php the_title_attribute(); ?>">
				</li>
				<?php
					endwhile;
					wp_reset_postdata();
					endif;
					?>
			</ul>
		</div>
	</section>
</main>

<?php
get_footer();
?>