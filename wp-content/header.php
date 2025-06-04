<!Doctype html>
<html lang="ja">

<head>
	<!-- Google Analytics start -->
	<!-- Google Analytics end -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=-1" />
	<meta name="format-detection" content="telephone=no">
	<title></title>
	<meta http-equiv="Content-Style-Type" content="text/css" />
	<meta http-equiv="Content-Script-Type" content="text/javascript" />

	<!-- FAVICON -->
	<link rel="icon" href="https://www.sa-obi.net/wp-content/themes/sa-obi/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" sizes="180x180"
		href="<?php echo get_theme_file_uri('') ?>/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32"
		href="<?php echo get_theme_file_uri('') ?>/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16"
		href="<?php echo get_theme_file_uri('') ?>/favicon/favicon-16x16.png">
	<link rel="manifest" crossorigin="use-credentials"
		href="<?php echo get_theme_file_uri('') ?>/favicon/site.webmanifest">

	<meta property="og:image" content="<?php echo get_theme_file_uri('') ?>/images/ogp.jpg">
	<meta name="thumbnail" content="<?php echo get_theme_file_uri('') ?>/images/thumbnail.jpg">
	<style>
	@font-face {
		font-family: "FatFrank";
		src: url("<?php echo get_template_directory_uri(); ?>/fonts/FatFrank-Heavy.woff") format("woff");
		font-weight: 900;
		font-style: normal;
		font-display: swap;
	}
	</style>
	<?php wp_head(); ?>
</head>

<body id="<?php echo isset($GLOBALS['bodyID']) ? $GLOBALS['bodyID'] : ""; ?>"
	class="<?php echo isset($GLOBALS['bodyClass']) ? $GLOBALS['bodyClass'] : ""; ?>">
	<div id="wrapper">
		<header>
			<div class="iHeader">
				<div class="iHeader--logo">
					<a href="<?php echo home_url(); ?>/">
						<img src="<?php echo get_theme_file_uri('') ?>/images/logo.png" alt="RIOR">
					</a>
				</div>
				<div class="iHeader--menu">
					<ul class="iHeader--list">
  <li class="<?= is_active('releases') ?>"><a href="<?= home_url(); ?>/releases/">Releases</a></li>
  <li class="<?= is_active('artists') ?>"><a href="<?= home_url(); ?>/artists/">Artists</a></li>
  <li class="<?= is_active('playlists') ?>"><a href="<?= home_url(); ?>/playlists/">Playlists</a></li>
  <li class="<?= is_active('contact-us') ?>"><a href="<?= home_url(); ?>/contact-us/">Contact Us</a></li>
</ul>
				</div>
				<div class="iHeader--hamburger">
					<div class="hamburger" id="hamburgerMenu">
						<span class="hamburger-line"></span>
						<span class="hamburger-line"></span>
						<span class="hamburger-line"></span>
					</div>
				</div>
			</div>
		</header>