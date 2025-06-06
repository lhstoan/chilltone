<?php
if ( have_posts() ):
	while( have_posts() ): 
		the_post();

		// ID of <body> 
		$GLOBALS['bodyID'] = "contact";

		// Class of <body>
		$GLOBALS['bodyClass'] = "under contact";

		$introduction_text = get_field('introduction_text'); 
		$company_name = get_field('company_information')['company_name'] ?? '';
		$company_name_abbreviated = get_field('company_information')['company_name_abbreviated'] ?? '';
		$company_location = get_field('company_location');
		$company_email = get_field('company_email');
		get_header();
		?>

<main>
	<section class="iContact">
		<div class="iContact--wrap">
			<div class="iContact--info">
				<div class="iContact--info-title">
					<h2 class="title">Our Contact</h2>
					<div class="desc">
						<?php echo $introduction_text;?>
					</div>
				</div>
				<div class="iContact--group">
					<div class="iContact--item">
						<span class="iContact--item-icon">
							<img src="<?php echo get_theme_file_uri('') ?>/images/company.svg" alt="Company">
						</span>
						<div class="iContact--item-content">
							<span class="title"> <?php echo $company_name;?></span>
							<span class="desc"> <?php echo $company_name_abbreviated;?></span>
						</div>
					</div>
					<div class="iContact--item">
						<span class="iContact--item-icon">
							<img src="<?php echo get_theme_file_uri('') ?>/images/location.svg" alt="Location">
						</span>
						<div class="iContact--item-content">
							<span class="title">Our Location</span>
							<span class="desc"> <?php echo $company_location;?></span>
						</div>
					</div>
					<div class="iContact--item">
						<span class="iContact--item-icon">
							<img src="<?php echo get_theme_file_uri('') ?>/images/mail.svg" alt="Mail">
						</span>
						<div class="iContact--item-content">
							<span class="title">Email</span>
							<span class="desc"> <?php echo $company_email;?></span>
						</div>
					</div>
				</div>
			</div>
			<div class="iContact--form">
				<?php echo do_shortcode('[contact-form-7 id="0d6f999" title="Contact Us"]'); ?>
			</div>
		</div>
	</section>
</main>

<?php
		get_footer();
		
	endwhile;
endif;
?>