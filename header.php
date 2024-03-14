<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<meta name="google-site-verification" content="<?php echo _opt('google_verification'); ?>" />
	<title><?php is_front_page() ? _e('Trang chủ') : wp_title(''); ?> | <?php bloginfo('name'); ?></title>
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<?php wp_head(); ?>
	<?php get_template_part('zkw_dynamic_css'); ?>
</head>

<body <?php body_class(); ?>>
	<div class="full-row full-header-top">
		<div class="inner-header-top inner-container">
			<div class="left-header-top">
				<a class="a-left_header_top1 a-hover-red"href="http://loidemo.codev6.keyweb.vn/he-thong-cua-hang/"><?php echo _opt('header_left_text_1'); ?></a>
				<a class="a_left_header_top a-hover-red" href="http://loidemo.codev6.keyweb.vn/ho-tro-mua-hang/"><?php echo _opt('header_left_text_2'); ?></a>
			</div>
			<div class="right-header-top">
				<?php echo _opt('header_right_text'); ?>
			</div>
		</div>
    </div>
	<header class="full-row full-header">
		<div class="inner-header inner-container">
			<div class="header-logo">
				<?php if(_opt('logo')){
					$src_logo = _opt('logo');
				}else{
					$src_logo = get_template_directory_uri().'/css/images/no-logo.png';
				} ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr(bloginfo('name')); ?>"><img class="site-logo" src="<?php echo $src_logo; ?>" title="<?php echo esc_attr(bloginfo('name')); ?>" alt="<?php echo esc_attr(bloginfo('name')); ?>" /></a>
			</div>
			<div class="header_main_right mobi-main">
				<div class="header-right">
					<a href="http://loidemo.codev6.keyweb.vn/cart/">
					<div class="img_header_right">
						<img src="<?php bloginfo('stylesheet_directory')?>/css/images/iconcart.png" alt="">
					</div>
					<div class="text_header_right">
						<p>Giỏ hàng</p>
					</div></a>
				</div>
			</div>
			<div class="header-search">
				<form role="search" method="get" class="searchform" action="<?php echo esc_url(home_url('/')); ?>">
					<input id="search-form1" type="text" value="" name="s" class="app_search search-field" placeholder="<?php echo __('Tìm kiếm sản phẩm'); ?>" />
					<button type="submit" class="search-submit1" value="" ><i class="fa-solid fa-magnifying-glass" aria-hidden="true"></i></button>
				</form>
			</div>
			<div class="header_main_right">
				<div class="header-right rm-t">
					<div class="img_header_right">
						<img src="<?php bloginfo('stylesheet_directory')?>/css/images/call_img.png" alt="">
					</div>
					<div class="text_header_right">
						<p>Hotline</p>
						<a class="a-hover-red"href=""><?php echo _opt('hotline'); ?></a>
					</div>
				</div>
				<div class="header-right rm-t">
					<div class="img_header_right">
						<img src="<?php bloginfo('stylesheet_directory')?>/css/images/iconuser.png" alt="">
					</div>
					<div class="text_header_right">
						<p>Tài khoản</p>
					</div>
				</div>
				<div class="header-right rm-t">
					<a href="http://loidemo.codev6.keyweb.vn/cart/">
					<div class="img_header_right">
						<img src="<?php bloginfo('stylesheet_directory')?>/css/images/iconcart.png" alt="">
					</div>
					<div class="text_header_right">
						<p>Giỏ hàng</p>
					</div></a>
				</div>
			</div>
			<div class="main-talet">
			<div class="main-menu">
				<?php wp_nav_menu( array( 'theme_location' => 'max_mega_menu_1' ) ); ?>
			</div></div>
		</div>
    </header>
<script type='text/javascript'>
jQuery(document).ready(function($) {
	jQuery(window).scroll(function() {
		if (jQuery(this).scrollTop()>40) {
			jQuery('.full-header').addClass('sticky');
		} else {
			jQuery('.full-header').removeClass('sticky');
		}
	});
});
</script>
	
