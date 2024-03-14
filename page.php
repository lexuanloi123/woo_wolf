<?php // File này cho trang page ?>
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
		<?php if(is_page('cart') || is_page('checkout')){?>
			<main id="main" class="content-wrap one-sidebar" role="main">
			<?php
				if ( have_posts() ) : while ( have_posts() ) : the_post();
					the_content();
				endwhile; endif;
			?>
			</main>
		<?php }else{ ?>
			<main id="main" class="content-wrap two-sidebar vct_bt" role="main">
			<?php
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<header class="entry-header">
					<?php the_title( '<h1 class="page-heading">', '</h1>' ); ?>
				</header>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
			<?php endwhile; endif;?>
			</main>
		<?php } ?>
	</div>
</div>	
<?php get_footer(); ?>