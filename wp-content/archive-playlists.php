<?php

/* ============================================ */
/* =================== META =================== */
$GLOBALS['h1'] = "";
/* ================= end META ================= */
/* ============================================ */


// ID of <body> 
$GLOBALS['bodyID'] = "artists";

// Class of <body>
$GLOBALS['bodyClass'] = "under";

get_header();
?>
<main>
	<section class="uPlaylist">
		<div class="uPlaylist--wrap">
			<ul class="uPlaylist--main ">
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
			
						$acf_link = get_field('url');
							$embed_url = str_replace('open.spotify.com/', 'open.spotify.com/embed/', $acf_link);
						
					?>
				<li>
			<iframe  	src="<?php echo esc_url($embed_url); ?>" width="100%" height="390" frameborder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
			
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