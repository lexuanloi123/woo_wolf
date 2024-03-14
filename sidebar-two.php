<div class="sidebar-two">
	<div class="control-sidebar"><i class="sidebar-fa fa fa-bars"></i></div>
	<script>
		setTimeout(function(){
			jQuery('.sidebar-two .control-sidebar').on('click', function(){
				if(jQuery(this).is('.active')) {
					jQuery(this).removeClass('active');
					jQuery(this).parent().animate({right:'-240px'},350);
				}else {
					jQuery(this).addClass('active');
					jQuery(this).parent().animate({right:'0'},350);
				}
			});
		},1000);
	</script>
	<div class="sidebar-content">
		<div class="block-sidebar">
			<div class="heading_box"><?php echo _opt('sb_sp_title_product_viewed') ?></div>
			<div class="block-content">
				<?php dynamic_sidebar( 'sb_sp_title_mini_cart' ); ?>
			</div>
		</div>
		<div class="block-sidebar">
			<div class="heading_box"><?php echo _opt('sb_sp_title_mini_cart') ?></div>
			<div class="block-content">
				<?php dynamic_sidebar( 'keyweb_box_cart' ); ?>
			</div>
		</div>
		<div class="block-sidebar">
			<div class="heading_box"><?php echo _opt('sb_sp_title_tag') ?></div>
			<div class="block-content">
				<?php dynamic_sidebar( 'keyweb_product_tag' ); ?>
			</div>
		</div>
		<div class="block-sidebar banner-wapper">
			<?php for($i=1;$i<=_opt('addon_banner_sidebar_right_num');$i++){ $add_i='_'.$i; if(_opt('addon_banner_sidebar_right_num')==1) $add_i=''; ?>
				<?php if(_opt('addon_banner_sidebar_right_img'.$add_i)!=''){ ?>
					<a href="<?php echo _opt('addon_banner_sidebar_right_link'.$add_i); ?>">
						<img src="<?php echo _opt('addon_banner_sidebar_right_img'.$add_i); ?>" title="<?php echo esc_attr(bloginfo('name')); ?>" alt="<?php echo esc_attr(bloginfo('name')); ?>" />
					</a>
				<?php } ?>
			<?php } ?>
		</div>
	</div>
</div>