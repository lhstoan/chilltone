<?php 
 $home_id = 62;

$social_media = get_field('social_media', $home_id);
$footer_link = get_field('footer_link', $home_id);
$copyright = get_field('copyright', $home_id);
$logo = get_field('logo', $home_id);
$year = date("Y");

?>

<footer>
	<div class="iFooter">
		<ul class="iFooter--link">
			<li><a href="<?php echo $social_media["sporty"] ?>">SPOTIFY</a></li>
			<li><a href="<?php echo $social_media["instagram"] ?>">INSTAGRAM</a></li>
			<li><a href="<?php echo $social_media["youtube"] ?>">YOUTUBE</a></li>
			<li><a href="<?php echo home_url(); ?>/contact-us/">CONTACT US</a></li>
		</ul>
		
		<div class="iFooter--logo">
			<div class="img">
				<a href="<?php echo home_url(); ?>/">
					<img src="<?php echo $logo ?>" alt="<?php echo $copyright;?>">
				</a>
			</div>

			<div class="iFooter--copyright">
				<span>© <?php echo $year;?> <?php echo $copyright;?>.</span>
				<span><a href="<?php echo $footer_link["link"] ?>"><?php echo $footer_link["title"] ?></a></span>
			</div>
		</div>
	</div>
</footer>
</div> <!-- CLOSE tag #wrapper -->
<?php wp_footer(); ?>
</body>

</html>