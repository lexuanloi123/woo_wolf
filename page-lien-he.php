<?php // File này cho trang liên hệ ?>
<?php get_header(); ?>
<!--  -->
<div class="youst_breadcrumb_ll full-row">
	<div class="youst_breacrumb_ct inner-container">
		<?php
			if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
			?>
	</div>			
</div>
<!--  -->
<div class="full-row full-content">
	<div id="primary" class="inner-content inner-container">
		<main id="main" class="content-wrap" role="main">
			<div class="lien-he_top">
				<div class="title-lien-he-top"><h2><?php echo _opt('tt_lien-he') ?></h2></div>
				<div class="tt-lien-he-top">
					<div class="item-lien-he-top">
						<img src="<?php bloginfo('stylesheet_directory')?>/css/images/call_img.png" alt="">
						<p><?php echo _opt('dc_lien-he') ?></p>
					</div>
					<div class="item-lien-he-top">
						<img src="<?php bloginfo('stylesheet_directory')?>/css/images/dc.png" alt="">
						<p><a href=""><?php echo _opt('sdt_lien-he') ?></a></p>
					</div>
					<div class="item-lien-he-top">
						<img src="<?php bloginfo('stylesheet_directory')?>/css/images/email.png" alt="">
						<p><?php echo _opt('email_lien-he') ?></p>
					</div>
					<div class="item-lien-he-top">
						<img src="<?php bloginfo('stylesheet_directory')?>/css/images/lich.png" alt="">
						<p><?php echo _opt('tg_lien-he1') ?></p>
						<p><?php echo _opt('tg_lien-he2') ?></p>
					</div>
				</div>
			</div>
			<div class="lien-he-bottom">
				<div class="lien-he-bottom-left">
					<div class="lien-he-bottom-left-ct">
						<h4><?php echo _opt('cn-title') ?></h4>
						<p><?php echo _opt('cn-title-p') ?></p>
						<?php echo do_shortcode(_opt('form_lh-l')); ?>
					</div>
				</div>
				<div class="lien-he-bottom-right">
					<?php echo _opt('map') ?>
				</div>
			</div>
		</main>
	</div>
</div>	
<?php get_footer(); ?>