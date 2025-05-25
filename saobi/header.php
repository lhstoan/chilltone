<!DOCTYPE html>
<html lang="ja">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
	<!-- Google Tag Manager -->
	<script>
	(function(w, d, s, l, i) {
		w[l] = w[l] || [];
		w[l].push({
			'gtm.start': new Date().getTime(),
			event: 'gtm.js'
		});
		var f = d.getElementsByTagName(s)[0],
			j = d.createElement(s),
			dl = l != 'dataLayer' ? '&l=' + l : '';
		j.async = false;
		j.src =
			'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
		f.parentNode.insertBefore(j, f);
	})(window, document, 'script', 'dataLayer', 'GTM-PRH8D87P');
	</script>
	<!-- End Google Tag Manager -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, maximum-scale=5.0, initial-scale=1.0, user-scalable=yes">
	<!-- SPEED -->
	<meta name="format-detection" content="telephone=no,date=no,address=no,email=no,url=no">
	<meta http-equiv="Content-Style-Type" content="text/css">
	<meta http-equiv="Content-Script-Type" content="text/javascript">
	<meta http-equiv="cache-control" max-age="86400" content="private, no-cache">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="keywords" content="<?php if(isset($GLOBALS['keywords'])){echo $GLOBALS['keywords'];} ?>">

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
	<?php if ( is_page("form") || (is_single() && 'event' == get_post_type()) ) { ?>
	<style type="text/css">
	.grecaptcha-badge {
		opacity: 1 !important
	}

	.to_top {
		bottom: 85px !important
	}
	</style>
	<?php } ?>

	<?php include("includes/set_markup.php"); ?>
	<!-- END ONLY TOP -->
	<?php wp_head(); ?>
</head>

<body id="<?php if(isset($GLOBALS['pageID'])){echo $GLOBALS['pageID']; } ?>"
	class="<?php if(isset($GLOBALS['pageClass'])){echo $GLOBALS['pageClass'];} ?>">
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PRH8D87P" height="0" width="0"
			style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<div id="wrapper">
		<div class="loading <?php if ( is_front_page() || is_home() ) { ?> active <?php } ?>"></div>
		<header>
			<div class="h_box">
				<div class="inner h_inner">
					<!-- Header Content -->
					<div class="h_left">
						<h1 id="logo">
							<a href="<?php echo home_url(); ?>/">
								<img class="pc" src="<?php echo get_theme_file_uri('') ?>/images/logo.svg"
									alt="<?php if(isset($GLOBALS['h1'])){echo $GLOBALS['h1'];} ?>" width="195"
									height="154">
								<img class="sp" src="<?php echo get_theme_file_uri('') ?>/images/logo_sp.svg"
									alt="<?php if(isset($GLOBALS['h1'])){echo $GLOBALS['h1'];} ?>" width="503"
									height="92">
							</a>
						</h1>
					</div>
					<!-- Hamburger Menu -->
					<div class="hamburger hamburger--3dxy">
						<div class="hamburger-box">
							<div class="hamburger-inner"></div>
						</div>
					</div>
				</div>
				<!-- Nav Menu -->
				<nav>
					<p class="tt_menu">メニュー</p>
					<div class="inner">
						<ul class="nav_list">
							<li class="it1"><a href="<?php echo home_url(); ?>/">TOP</a></li>
							<li class="it2"><a href="<?php echo home_url(); ?>/renovation/">自然の中で、<br
										class="sp">空き家リノベーション</a></li>
							<li class="it3"><a href="<?php echo home_url(); ?>/tree/">木の家を建てる</a></li>
							<li class="it4"><a href="<?php echo home_url(); ?>/blog/">ブログ</a></li>
							<li class="it5"><a href="<?php echo home_url(); ?>/event/">イベント</a></li>
							<li class="it6"><a href="<?php echo home_url(); ?>/community/">コミュニティ</a></li>
							<li class="it7"><a href="<?php echo home_url(); ?>/form/">お問い合わせ</a></li>
						</ul>
					</div>
					<p class="menu_bot"><a href="https://www.sa-obi.net" target="_blank"
							rel="noreferrer">サオビってどんな建築家？</a></p>
					<p class="copy">&copy;2025 SAoBi architects</p>
				</nav>
			</div>

		</header>
		<!-- end #header-->