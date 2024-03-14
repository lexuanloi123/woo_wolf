<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>
	<div class="img_ct">
		<?php
		/**
		 * Hook: woocommerce_before_single_product_summary.
		 *
		 * @hooked woocommerce_show_product_sale_flash - 10
		 * @hooked woocommerce_show_product_images - 20
		 */
		do_action( 'woocommerce_before_single_product_summary' );
		?>
	</div>
	
	<div class="tt_ct">
		<div class="summary entry-summary">
			<?php
			/**
			 * Hook: woocommerce_single_product_summary.
			 *
			 * @hooked woocommerce_template_single_title - 5
			 * @hooked woocommerce_template_single_rating - 10
			 * @hooked woocommerce_template_single_price - 10
			 * @hooked woocommerce_template_single_excerpt - 20
			 * @hooked woocommerce_template_single_add_to_cart - 30
			 * @hooked woocommerce_template_single_meta - 40
			 * @hooked woocommerce_template_single_sharing - 50
			 * @hooked WC_Structured_Data::generate_product_data() - 60
			 */
			do_action( 'woocommerce_single_product_summary' );
			
			?>
			<p class="tu_van">Gọi <a href=""><?php echo _opt('sdt_box2') ?></a> để tư vấn mua hàng</p>
		</div>
	</div>
	<div class="ship_ct">
		<div class="title-ship_ct">
			<div class="title_ship">
				
				<img src="<?php bloginfo('stylesheet_directory')?>/css/images/ship.png" alt="">	
				<h2><?php echo _opt('title-ship') ?></div></h2>

			
				<!--  -->
				<?php for($i=1; $i<=_opt('sl_box'); $i++){
					$img_ship = _opt('img_box_ship_con_'.$i);
					$title_ship = _opt('tt_box_ship_'.$i);
					$title_con_ship = _opt('tt_box_ship_con_'.$i);
					$bro = 'br_'.$i
					?> 
					
					<div class="box-ship ">
						
						<div class="img_box_ship <?php echo esc_attr($bro);?>">
							<img src="<?php echo _opt('img_box_ship_con_'.$i) ?>" alt="">
						</div>

						<div class="com_box_ship">
							<div class="box-ship_ct">
								<h2><?php echo _opt('tt_box_ship_'.$i)?></h2>
								<p><?php echo _opt('tt_box_ship_con_'.$i) ?></p>
								<a href="">Sao chép</a>
							</div>
						</div>
						
					</div>
				<?php }?>
		</div>
	</div>
	<div class="mt_ct">
		<?php
		/**
		 * Hook: woocommerce_after_single_product_summary.
		 *
		 * @hooked woocommerce_output_product_data_tabs - 10
		 * @hooked woocommerce_upsell_display - 15
		 * @hooked woocommerce_output_related_products - 20
		 */
		do_action( 'woocommerce_after_single_product_summary' );
		?>
	</div>
	
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
