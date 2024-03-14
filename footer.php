	<footer class="full-row full-footer">
		<div class="inner-footer inner-container">
			<div class="footer_box_top">
				<div class="footer_box_top_left">
					<img src="<?php echo _opt('li_box_foot1') ?>" alt="">
					<p><?php echo _opt('l_box_foot1') ?></p>
				</div>
				<div class="footer_box_top_left">
					<img src="<?php echo _opt('li_box_foot2') ?>" alt="">
					<p><?php echo _opt('l_box_foot2') ?></p>
				</div>
				<div class="footer_box_top_left">
					<img src="<?php echo _opt('li_box_foot3') ?>" alt="">
					<p><?php echo _opt('l_box_foot3') ?></p>
				</div>
			</div>

			<div class="container-footer">
				<div class="box1-footer">
					<img src="<?php echo _opt('logo_footer') ?>" alt="">
					<div class="dc_foot">
						<i class="fa-solid fa-location-dot" style="color: #ffffff;"></i>
						<p><?php echo _opt('dia_chi_footer') ?></p>
					</div>
					<p class="tg_foot"><?php echo _opt('tg_footer') ?></p>
					<p class="tg_foot"><?php echo _opt('tg_footer1') ?></p>
				</div>
				<div class="box1-footer">
					<h2><?php echo _opt('title_box2') ?></h2>
					<div class="hotline_footer">
						<i class="fa-solid fa-phone" style="color: #cc5b0f;"></i>
						<div class="p-hotline_foot">
							<h4><?php echo _opt('sdt_box2') ?></h4>
							<p><?php echo _opt('tg_box2') ?></p>
						</div>
					</div>
					<div class="email-footer">
						<i class="fa-solid fa-envelope" style="color: #ffffff;"></i>
						<p><?php echo _opt('email_box2') ?></p>
					</div>
					<div class="mxh_footer">
						<a href="<?php echo _opt('footer_facebook'); ?>"><i class="fa-brands fa-facebook" style="color: #ffffff;"></i></a>
						<a href="<?php echo _opt('footer_youtube'); ?>"><i class="fa-brands fa-youtube" style="color: #ffffff;"></i></a>
						<a href="<?php echo _opt('footer_twitter'); ?>"><i class="fa-brands fa-twitter" style="color: #ffffff;"></i></a>
						<a href="<?php echo _opt('footer_instagram'); ?>"><i class="fa-brands fa-instagram" style="color: #ffffff;"></i></a>
					</div>
				</div>
				<div class="box1-footer">
					<h2><?php echo _opt('title_box3'); ?></h2>

					<div class="box3_container">
						<?php wp_nav_menu(array('theme_location' => 'footer_1', 'container' => 'false', 'menu_id' => 'footer-menu', 'menu_class' => 'menu')); ?>
					</div>
				</div>
				<div class="box1-footer">
					<h2><?php echo _opt('title_box4'); ?></h2>

					<div class="box3_container">
					<?php wp_nav_menu( array( 'theme_location' => 'max_mega_menu_2' ) ); ?>
					</div>
				</div>
				
			</div>
			

			<!--  -->
		</div>
	</footer>	
	<div class="full-row full-footer-bottom">
		<div class="inner-footer-bottom inner-container">
			<div class="footer-bottom left-footer-bottom">
				<?php echo _opt('footer_copyright'); ?>
			</div>
			<div class="footer-bottom mid-footer-bottom">
				<a href="<?php echo _opt('footer_dmca') ?>">
					<img loading="lazy" class="dmca" src="<?php echo get_template_directory_uri().'/css/images/dmca.png'; ?>" title="dmca" alt="dmca" />
				</a>
			</div>
			<div class="footer-bottom right-footer-bottom">
				<a class="design-by" href="https://keyweb.vn/">Thiết kế website bởi Keyweb.vn</a>
			</div>
		</div>
	</div>
	<script>
		if(jQuery(window).width()<=600) {
			jQuery('.footer-content').hide();
			jQuery('.footer-box h2').append('<i id="show-sft" class="fa fa-plus"></i><i id="hide-sft" class="fa fa-minus"></i>');
			setTimeout(function(){
				jQuery('.footer-box h2').on('click', function(){
					if(jQuery(this).is('.active-sft')) {
						jQuery(this).removeClass('active-sft').siblings('.footer-content').slideToggle(300);
					}else {
						jQuery(this).addClass('active-sft').siblings('.footer-content').slideToggle(300);
					}
				});
			},1000);
		}
	</script>
	<?php _kw_get_lib('font-awesome-6'); ?>
	<?php get_template_part('zkw_addon'); ?>
	<?php wp_footer(); ?> 
</body>
</html>