<?php

// ID of <body> 
$GLOBALS['bodyID'] = "home";

// Class of <body>
$GLOBALS['bodyClass'] = "";
$home_id = 62;

$name_playlist = get_field('name_playlist', $home_id);
$link_playlist = get_field('link_playlist', $home_id);
$artists_playlist = get_field('artists', $home_id);
$main_image = get_field('main_image', $home_id);
$new_releases = get_field('new_releases', $home_id);




get_header();
?>

<main>
	<section class="iMainvisual">
		<div class="iMainvisual--main">
			<div class="iMainvisual--img">
				<img src="<?php echo $main_image['url'];?>" alt="<?php echo $name_playlist;?>">
			</div>
			<div class="iMainvisual--content">
				<h2><?php echo $name_playlist;?></h2>
				<h6><?php echo $artists_playlist;?></h6>
				<div class="iMainvisual--btn">
					<a href="<?php echo $link_playlist;?>">OUT NOW</a>
				</div>
			</div>
		</div>
	</section>
	<section class="iList">
		<div class="iList--wrap">
			<h3 class="iList--title">NEW RELEASES</h3>
			<ul class="iList--main">
<?php
$new_releases = get_field('new_releases', $home_id);

if (!empty($new_releases)) {
	$filteredReleases = [];
	foreach ($new_releases as $key => $value) {
		if (is_numeric($value)) {
			$filteredReleases[$key] = $value;
		}
	}

	foreach ($filteredReleases as $post) {
		setup_postdata($post);

		$acf_link = get_field('url');
		$thumbnail_id = get_post_thumbnail_id();
		$yt_thumb = get_youtube_thumbnail_best($acf_link);
		$thumbnail_url = '';

		if ($thumbnail_id) {
			$thumbnail_url = wp_get_attachment_url($thumbnail_id);
		} elseif ($acf_image = get_field('image')) {
			$thumbnail_url = $acf_image;
		} elseif ($yt_thumb) {
			$thumbnail_url = $yt_thumb;
		} else {
			$thumbnail_url = get_theme_file_uri('images/HINH1.jpg');
		}
		?>
		<li>
			<a href="<?php echo esc_url($acf_link); ?>" class="linkfull" target="_blank"></a>
			<img src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php the_title(); ?>">
		</li>
		<?php
	}
	wp_reset_postdata();
} else {
	// Nếu không có bài nào trong new_releases thì fallback về query mặc định
	global $post;
	$paged = get_query_var('paged') ? get_query_var('paged') : 1;

	$args = array(
		'post_type' => 'releases',
		'orderby' => 'date',
		'order' => 'desc',
		'posts_per_page' => 4,
		'paged' => $paged,
	);

	$the_query = new WP_Query($args);

	if ($the_query->have_posts()):
		while ($the_query->have_posts()): $the_query->the_post();
			$acf_link = get_field('url');
			$thumbnail_id = get_post_thumbnail_id();
			$yt_thumb = get_youtube_thumbnail_best($acf_link);
			$thumbnail_url = '';

			if ($thumbnail_id) {
				$thumbnail_url = wp_get_attachment_url($thumbnail_id);
			} elseif ($acf_image = get_field('image')) {
				$thumbnail_url = $acf_image;
			} elseif ($yt_thumb) {
				$thumbnail_url = $yt_thumb;
			} else {
				$thumbnail_url = get_theme_file_uri('images/HINH1.jpg');
			}
			?>
			<li>
				<a href="<?php echo esc_url($acf_link); ?>" class="linkfull" target="_blank"></a>
				<img src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php the_title(); ?>">
			</li>
			<?php
		endwhile;
		wp_reset_postdata();
	endif;
}
?>
</ul>
			<div class="iList--btn">
				<a href="<?php echo home_url(); ?>/releases/" class="ibtn">VIEW ALL</a>
			</div>
		</div>
	</section>
	<section class="iList">
		<div class="iList--wrap">
			<h3 class="iList--title">PLAYLISTS </h3>
		

			<ul class="iPlaylist--main">
<?php
$playlists = get_field('playlists', $home_id);

if (!empty($playlists)) {
	$filteredPlaylists = [];
	foreach ($playlists as $key => $value) {
		if (is_numeric($value)) {
			$filteredPlaylists[$key] = $value;
		}
	}

	foreach ($filteredPlaylists as $post) {
		setup_postdata($post);

		$acf_link = get_field('url');
		$embed_url = str_replace('open.spotify.com/', 'open.spotify.com/embed/', $acf_link);
		?>
		<li>
			<iframe  	src="<?php echo esc_url($embed_url); ?>" width="100%" height="390" frameborder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
			
		</li>
		<?php
	}
	wp_reset_postdata();
} else {
	// Nếu không có bài nào trong new_releases thì fallback về query mặc định
	global $post;
	$paged = get_query_var('paged') ? get_query_var('paged') : 1;

	$args = array(
		'post_type' => 'playlists',
		'orderby' => 'date',
		'order' => 'desc',
		'posts_per_page' => 4,
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
}
?>
</ul>
<script>
    const playlists = <?php echo json_encode($playlists); ?>;
    console.log(playlists);
</script>
			<div class="iList--btn">
				<a href="<?php echo home_url(); ?>/playlists/" class="ibtn">VIEW ALL</a>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
?>