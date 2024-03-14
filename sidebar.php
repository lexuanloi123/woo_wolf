<div class="sidebar-one">
	<div class="control-sidebar"><i class="sidebar-fa fa fa-bars"></i></div>
	<script>
		setTimeout(function(){
			jQuery('.sidebar-one .control-sidebar').on('click', function(){
				if(jQuery(this).is('.active')) {
					jQuery(this).removeClass('active');
					jQuery(this).parent().animate({left:'-240px'},350);
				}else {
					jQuery(this).addClass('active');
					jQuery(this).parent().animate({left:'0'},350);
				}
			});
		},1000);
	</script>
	<div class="sidebar-content">
		<?php if(is_product_category() || is_shop()){ ?>
		<div class="block-sidebar">
			<div class="heading_box"><?php echo _opt('l-siderbar') ?></div>
			<div class="block-content">
				<?php dynamic_sidebar( 'keyweb_filter' ); ?>
			</div>
		</div>
		<?php } ?>
		<!-- <div class="block-sidebar">
			<div class="heading_box"><?php echo _opt('sb_sp_title_product_cat') ?></div>		
			<div class="block-content">
			<?php $args = array(
				 'child_of'            => 0,
				 'depth'               => 0,
				 'echo'                => 1,
				 'hide_empty'          => 0,
				 'hide_title_if_empty' => false,
				 'hierarchical'        => true,
				 'separator'           => '<br />',
				 'show_count'          => 0,
				 'show_option_none'    => __( 'No categories' ),
				 'style'               => 'list',
				 'taxonomy'           => 'product_cat',
				 'title_li'           => __( '' ),
				 'use_desc_for_title'  => 1, 
				);					    
			?>	
			<ul id="menu-sidebar">   
			<?php wp_list_categories( $args ); ?>
		   </ul>         
			</div>
		</div>
		<div class="block-sidebar">
			<div class="heading_box"><?php echo _opt('sb_title_category') ?></div>		
			<div class="block-content">
				<?php $args = array(
					'child_of'            => 0,
					'depth'               => 0,
					'echo'                => 1,
					'hide_empty'          => 0,
					'hide_title_if_empty' => false,
					'hierarchical'        => true,
					'separator'           => '<br />',
					'show_count'          => 0,
					'show_option_none'    => __( 'No categories' ),
					'style'               => 'list',
					'taxonomy'           => 'category',
					'title_li'           => __( '' ),
					'use_desc_for_title'  => 1, 
				);					    
				?>	
				<ul id="menu-sidebar">   
					<?php wp_list_categories( $args ); ?>
				</ul>         
			</div>
		</div>
		<div class="block-sidebar category-wapper">
			<div class="heading_box"><?php echo _opt('sb_title_new_post') ?></div>
			<div class="block-content">
				<?php
					global $post;
					$args = array( 'posts_per_page' => _opt('sb_num_new_post'),'order' => 'DESC','orderby' => 'date');
					$post_sliebar = get_posts( $args );
				?>
				<?php foreach($post_sliebar as $post) :  ?>
				<?php setup_postdata($post); ?>
				<div class="item-post" >
					<a href="<?php the_permalink(); ?>">
						<div class="item-images">
							<?php if (has_post_thumbnail()): ?>
								<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'thumbnail'); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
							<?php else: ?>
								<img src="<?php echo get_template_directory_uri().'/css/images/no-preview-100x100.jpg'; ?>" alt="no-images">
							<?php endif ?>
						</div>
						<div class="item-detail">
							<h4 class="title"><?php the_title(); ?></h4>
							<div class="item-date"><?php 'Ngày '.the_time('d/m/Y'); ?></div>
						</div>
					</a>
				</div>
				<?php endforeach; wp_reset_postdata(); ?>
			</div>
		</div> -->

		<div class="block-sidebar banner-wapper">
			<?php for($i=1;$i<=_opt('addon_banner_sidebar_left_num');$i++){ $add_i='_'.$i; if(_opt('addon_banner_sidebar_left_num')==1) $add_i=''; ?>
				<?php if(_opt('addon_banner_sidebar_left_img'.$add_i)!=''){ ?>
					<a href="<?php echo _opt('addon_banner_sidebar_left_link'.$add_i); ?>">
						<img src="<?php echo _opt('addon_banner_sidebar_left_img'.$add_i); ?>" title="<?php echo esc_attr(bloginfo('name')); ?>" alt="<?php echo esc_attr(bloginfo('name')); ?>" />
					</a>
				<?php } ?>
			<?php } ?>
		</div>
	</div>
</div>