<div class="sidebar_sg">
			<div class="box1_sidebar">
				<div class="header_box1_sidebar">
					<h2><?php echo _opt('siderbar_tt') ?></h2>
				</div>
				<div class="content_box1_sidebar">
					<div class="item_post_cha">
						<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail(); ?>
						<h4><?php the_title(); ?></h4></a>
					</div>
					<div class="item_post_con">
						<a href="<?php the_permalink(); ?>">
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
										<h5><a href="<?php the_permalink(); ?>">• <?php the_title(); ?></a></h5>
										<?php
									}
									wp_reset_postdata();
								}
								?>
						</a>
					</div>
				</div>
			</div>
			<div class="box1_sidebar">
				<div class="header_box1_sidebar">
					<h2><?php echo _opt('siderbar_mv') ?></h2>
				</div>
				<div class="content_box1_sidebar">
					<div class="item_post_cha">
						<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail(); ?>
						<h4><?php the_title(); ?></h4></a>
					</div>
					<div class="item_post_con">
						<a href="<?php the_permalink(); ?>">
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
										<h5><a href="<?php the_permalink(); ?>">• <?php the_title(); ?></a></h5>
										<?php
									}
									wp_reset_postdata();
								}
								?>
						</a>
					</div>
				</div>
			</div>
		</div>