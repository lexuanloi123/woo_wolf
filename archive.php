<?php // File này cho các trang, category, achive, tag ?>
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
		<main id="main" class="content-wrap two-sidebar" role="main">
			<?php if(have_posts()){ ?>
				<header class="entry-header">
				<?php the_archive_title( '<h4 class="archive-heading">', '</h4>' ); ?>
				</header>
				<div class="entry-content">
				<?php while ( have_posts() ) : the_post(); ?>

			        <div class="item_post">
						<a href="<?php echo get_permalink(); ?>">
							<div class="item_post_img">
								<?php if(has_post_thumbnail()): ?>								
										<?php echo get_the_post_thumbnail(get_the_ID(),'medium');?>
								<?php else: 
									$args = array('post_type' => 'attachment','numberposts' => 6,'post_parent' => get_the_ID());
									$attachments = get_posts( $args );
									if( $attachments ){
										foreach( $attachments as $attachment ) {
											echo wp_get_attachment_image( $attachment->ID, 'full' );
											break;
										}
									}else{
										echo '<img src="'.get_bloginfo('template_url').'/css/images/no-preview-400x400.jpg" alt="no-images" >';
									}
									endif;
								?>
							</div>
							<div class="item_post_content">
								<h4><?php the_title(); ?></h4> 
								<div class="post_date"><?php echo get_the_date('d/m/Y'); ?> - <?php the_author(); ?></div>
							</div>
						</a>
					</div>
				<?php endwhile; ?>
				</div>
			<?php
			the_posts_pagination( array(
			'mid_size'  => 1,
			) );
			}else{
				echo 'No post';
			} 
			?>
		</main>
	</div>
</div>	
<?php get_footer(); ?>