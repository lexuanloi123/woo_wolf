<?php // File này cho trang post ?>
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
	<div id="primary" class="inner-content inner-container1">
		<main id="main" class="content-wrap two-sidebar1" role="main">
			<header class="entry-header entry_header_ct">
				<?php the_title( '<h4 class="archive-heading">', '</h4>' ); ?>
				<p><?php the_author(); ?> . <?php the_date('l, j F Y'); ?></p>
				<?php get_template_part('zkw_sharebutton'); ?>
			</header>
			<div class="entry-content">
				<?php
					if ( have_posts() ) : while ( have_posts() ) : the_post();
						the_content();
					endwhile; endif;
				?>
			</div>
			<?php _kw_get_lib('fancybox'); // Thêm code này nếu sử dụng fancybox ?>
			<script>
				jQuery(function(){
					jQuery(".entry-content figure").each(function() {
						if(typeof jQuery(this).children('img').attr('src')!=='undefined'){
							jQuery(this).attr('href', jQuery(this).children('img').attr('src'));
							jQuery(this).attr('data-fancybox', 'imgHd');
							jQuery(this).addClass('fancybox_wrap');
						}
					});
					jQuery('figure[data-fancybox="imgHd"]').fancybox({});
				});
			</script>
			<div class="tt_tk_them">
				<div class="header_them">
					<h2><?php echo _opt('tt-tham_khao') ?></h2>
				</div>
				<div class="content_them">
					
							<?php
								$current_post_id = get_the_ID();

								$related_posts_query = new WP_Query(array(
									'posts_per_page' => 3,
									'post__not_in' => array($current_post_id), 
								));

								if ($related_posts_query->have_posts()) {
									while ($related_posts_query->have_posts()) {
										$related_posts_query->the_post();
										?>
										<div class="img_tt_tk">
											<?php the_post_thumbnail(); ?> 
											<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
										</div>
										<?php
									}
									wp_reset_postdata();
								}
								?>
							
				</div>
			</div>
			<div class="tt_kh_bl">
				<div class="header_tt_hk">
					<h2><?php echo _opt('tt-khach_hang') ?></h2>
				</div>
				<div class="content_tt_kh">
					<h3>Trả lời</h3>
					<p>Bạn phải <a href="">đăng nhập</a> để gửi phản hồi.</p>
				</div>
			</div>
		</main>
		<?php get_sidebar('tt'); ?>
	</div>
</div>	
<?php get_footer(); ?>