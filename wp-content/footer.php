<?php 
 $home_id = 62;

$social_media = get_field('social_media', $home_id);
?>

<footer>
	<div class="iFooter">
		<ul class="iFooter--link">
			<li><a href="<?php echo $social_media["sporty"] ?>">SPORTY</a></li>
			<li><a href="<?php echo $social_media["instagram"] ?>">INSTAGRAM</a></li>
			<li><a href="<?php echo $social_media["youtube"] ?>">YOUTUBE</a></li>
			<li><a href="<?php echo home_url(); ?>/contact-us/">CONTACT US</a></li>
		</ul>
		<div class="iFooter--logo">
			<a href="<?php echo home_url(); ?>/">
				<img src="<?php echo get_theme_file_uri('') ?>/images/logo.png" alt="RIOR">
			</a>
		</div>
		<div class="iFooter--copyright">
			<span>@2025 RIOR</span>
		</div>
	</div>
</footer>
</div> <!-- CLOSE tag #wrapper -->
<?php wp_footer(); ?>
</body>

</html>