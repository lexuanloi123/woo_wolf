<?php // File này cho trang home ?>

<?php get_header(); ?>

<div class="full-row full-content l1">
	<div id="primary" class="inner-content inner-container1">
			<div class="home-banner">
				<?php echo do_shortcode(_opt('slide_box_home')); ?>
			</div>
	</div>
</div>

<div class="full-row full-content l2">
	<div id="primary" class="inner-content inner-container1">
		<div class="danh_muc_chinh">
					<?php for($i=1;$i<=_opt('home_number_danh_muc');$i++){

						$category_id = _opt('home_category_'.$i);

						$category = get_term($category_id, 'product_cat' );

						$category_link = get_category_link($category_id);

						$cat_class = 'cat-' . $i;

						$img_cate = _opt('img_category_'.$i);

					?>

					<div class="home-box-category <?php echo esc_attr($cat_class);?> ">


						<div class="home_category_center ">
						<img src="<?php echo _opt('img_category_'.$i) ?>" alt="">

							<a class="danh_muc_cha" href="<?php echo $category_link; ?>"><?php echo $category->name;?></a>
							<?php
								$child_categories = get_term_children($category_id, 'product_cat');

								if (!empty($child_categories)) {
									echo '<ul class="subcategories">';
									$counter = 0;
									foreach ($child_categories as $child_category_id) {
										if ($counter >= 5) {
											break; 
										}

										$child_category = get_term($child_category_id, 'product_cat');
										$child_category_link = get_category_link($child_category_id);
										echo '<li><div class="cham"></div><a href="' . $child_category_link . '">' . $child_category->name . '</a></li>';

										$counter++;
									}
									echo '</ul>';
								}
								?>

							<p class="view-all a-hover-red"><a class="a-hover-red"href="<?php echo $category_link;?>">Mua sắm ngay</a></p>
					
						</div>

					</div>

					<?php } ?>
			</div>
	</div>
</div>

<div class="full-row full-content l3">
	<div id="primary" class="inner-content inner-container1">
		<div class="san-pham_khuyen_mai">
					<div class="san_pham_top">
						<div class="san_pham_top-left">
							<h2><?php echo _opt('sp_khuyen_mai') ?></h2>
							<p><?php echo _opt('tg_khuyen_mai') ?></p>
						</div>
						<div class="san_pham_top-right">
							<p class="sp_kt">Kết thúc sau:</p>
							<div class="tg_sk">
								<p><?php echo _opt('n_khuyen_mai') ?></p>
								<span>Ngày</span>
							</div>
							<div class="tg_sk">
								<p><?php echo _opt('g_khuyen_mai') ?></p>
								<span>Giờ</span>
							</div>
							<div class="tg_sk">
								<p><?php echo _opt('p_khuyen_mai') ?></p>
								<span>Phút</span>
							</div>
							<div class="tg_sk tg_sk1">
								<p><?php echo _opt('gi_khuyen_mai') ?></p>
								<span>Giây</span>
							</div>

						</div>
					</div>
					<div class="san_pham_container">
						<div class="san_pham_container_center">
							<?php echo do_shortcode('[products limit="5" columns="5" orderby="id" order="DESC" visibility="visible"]') ?>
						</div>
					</div>
			</div>
	</div>
</div>

<div class="full-row full-content l4">
	<div id="primary" class="inner-content inner-container1">
		<div class="thuong_hieu">
					<h2><?php echo _opt('title_thuong_hieu') ?></h2>
					<div class="img_thuong_hieu_left">
						<img src="<?php echo _opt('img_thuong_hieu') ?>" alt="">
					</div>
					<!--  -->
					<div class="img_thuong_hieu_right">
						<?php for($i=1; $i<=_opt('select_thuong_hieu_con'); $i++){
							$thuong_hieu = _opt('img_thuong_hieu-con_'.$i)
							?>
							<div class="img_ct_thuong_hieu">
								<img src="<?php echo _opt('img_thuong_hieu-con_'.$i) ?>" alt="">
							</div>

						<?php } 
						?>
					</div>

			</div>
	</div>
</div>

<div class="full-row full-content l5">
	<div id="primary" class="inner-content inner-container1">
		<div class="san_pham_noi_bat">
					<div class="top_san_pham_noi_bat">
						<div class="top_left_san_pham_noi_bat">
							<h2><?php echo _opt('title_san_pham_noi_bat') ?></h2>
						</div>
						<div class="top_right_san_pham_noi_bat">
						<?php for($i=1; $i<=_opt('select-link'); $i++){
							$ten_link = _opt('ten_link_'.$i);
							$sp_link = _opt('link_sp_'.$i);
							?>
							<a href="<?php echo _opt('link_sp_'.$i) ?>"><?php echo _opt('ten_link_'.$i) ?></a>
							<?php } ?>
						</div>
					</div>
					<div class="bottom_san_pham_noi_bat">
						<?php echo do_shortcode('[products limit="10" columns="5" visibility="featured" orderby="date" ]') ?>
					</div>
			</div>
	</div>
</div>

<div class="full-row full-content l6">
	<div id="primary" class="inner-content inner-container1">
		<div class="banner_phu">
					<div class="left_banner_phu">
						<img src="<?php echo _opt('banner_left') ?>" alt="">
					</div>
					<div class="right_banner_phu">
						<img src="<?php echo _opt('banner_right') ?>" alt="">
					</div>
			</div>

	</div>
</div>

<div class="full-row full-content l7">
	<div id="primary" class="inner-content inner-container1">
		<div class="khuyen_mai_hom_nay">
					<div class="left_khuyen_mai_hom_nay">
						<img src="<?php echo _opt('banner_khuyen_mai_hom_nay') ?>" alt="">
					</div>
					<div class="right_khuyen_mai_hom_nay">
						<div class="top_right_khuyen_mai_hom_nay">
							<h3><?php echo _opt('title_khuyen_mai_hom_nay') ?></h3>
						</div>
						<div class="bottom_right_khuyen_mai_hom_nay">

							<?php 

							$lastposts1 = get_posts(array('numberposts' => 9, 'post_type' => 'product', 'order' => 'DESC','visibility' => 'visible'));

							if ( $lastposts1 ) {

								foreach ( $lastposts1 as $post ) :

									setup_postdata( $post ); ?>

									<div class="product-item">

										<a href="<?php the_permalink(); ?>">

											<div class="div_left_img_product">
												<?php the_post_thumbnail(); ?>
											</div>

											<div class="div_right_img_product">
												
												<p><?php the_title(); ?></p>

												<?php
												$product = wc_get_product( get_the_ID() );

												// Lấy giá thường
												$regular_price = $product->get_regular_price();
												
												// Lấy giá bán
												$sale_price = $product->get_sale_price();
												
												?>
												<p class="price">đ<?php echo $regular_price ?></p>
												<p class="price_sale">đ<?php echo $sale_price ?></p>
												<?php
												?>
											</div>

											
										</a>

									</div>

								<?php

								endforeach; 

								wp_reset_postdata();

							}

							?>
							<!--  -->
						</div>
					</div>
			</div>
	</div>
</div>

<div class="full-row full-content l8">

	<div id="primary" class="inner-content inner-container1">


		<?php _kw_get_lib('swiper'); ?>

		<main id="main" class="content-wrap" role="main">

			<div class="mon_ngon_hom_nay">
					<div class="top_mon_ngon_hom_nay">
						<h2><?php echo _opt('title_mon_ngon') ?></h2>
					</div>
					<div class="bottom_mon_ngon_hom_nay">
						<!--  -->
						<?php
							$category_id = _opt('post-cat');

							$category = get_term($category_id, 'category' );
	
							$category_link = get_category_link($category_id);
							?>

						<?php
						$category_id = _opt('post-cat');

						$posts = get_posts(array(
							'category' => $category_id,
							'posts_per_page' => 4,
							'order' => 'DESC',
							'orderby' => 'date'
						));

						if ($posts) {
							foreach ($posts as $post) {
								setup_postdata($post); ?>
								<div class="tin-tuc-item">

									<a href="<?php the_permalink(); ?>">

										<div class="div_left_img_post">
											<?php the_post_thumbnail(); ?>
										</div>

										<div class="div_right_img_post">
											
											<h4><?php the_title(); ?></h4>

											<strong><?php echo get_the_date('d/m/Y'); ?>:</strong>

											<span><?php the_excerpt(); ?></span>

										</div>

										
									</a>

									</div>
							<?php }
							wp_reset_postdata(); 
						} else {
							echo 'Không có bài viết trong danh mục này.';
						}
						?>

						<!--  -->
						
					</div>
					<div class="bottom1_mon_ngon_hom_nay">
						<a href="http://loidemo.codev6.keyweb.vn/c/goc-chia-se/">Xem tất cả tin Món ngon mỗi ngày</a>
					</div>
			</div>


		</main>

	</div>

</div>	

<?php get_footer(); ?>