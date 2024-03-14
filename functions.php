<?php

// Update: 30/11/22

// Đoạn này ko xóa---------------->

function check_plugin_keyweb() { if(!is_plugin_active('keyweb/keyweb.php')){ echo '<h1>Cần bật Plugin Keyweb để vận hành website!</h1>'; die();}} add_action( 'wp_head', 'check_plugin_keyweb', 0 ); // Kiểm tra

function mytheme_add_woocommerce_support() {add_theme_support( 'woocommerce' );} add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' ); // Bật hỗ trợ woocommerce

// Hết đoạn ko xóa----------------|


// remove
 
remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count',20);
// 
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close',10);
remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title',10);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title',5);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price',10);
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_related_products',20);
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb',20);
remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering',30);


// Thêm một action hook để hiển thị danh mục sản phẩm 

add_action('woocommerce_before_shop_loop_item_title', 'display_nearest_product_category', 20);

function display_nearest_product_category() {
    global $product;

    $product_categories = wc_get_product_terms($product->get_id(), 'product_cat', array('orderby' => 'parent', 'order' => 'DESC', 'number' => 1));

    if ($product_categories && !is_wp_error($product_categories)) {
        echo '<div class="pro-cate">';
        foreach ($product_categories as $category) {
            echo '<a href="' . get_term_link($category) . '">' . $category->name . '</a>';
        }
        echo '</div>';
    }
}

// Thêm hook vào trước tiêu đề sản phẩm
add_action('woocommerce_before_shop_loop_item_title', 'custom_display_product_info', 30);

function custom_display_product_info() {
    global $product;

    $product_name = $product->get_name();
    $regular_price = $product->get_regular_price();
    $sale_price = $product->get_sale_price();
    $cart_url = wc_get_cart_url();
    $product_permalink = $product->get_permalink();

    echo '<div class="custom-product-info">';
    	echo '<a href="' . esc_url($product_permalink) . '">' . $product_name . '</a>';
    echo '</div>';
	echo '<div class="gia-cart">';
		echo '<div class="custom-product-info-gia">';
			if ($sale_price) {
					echo '<p class="gkm"> ' . wc_price($sale_price) . '</p>';
					echo '<p class="gg"> ' . wc_price($regular_price) . '</p>';
				} else {
					echo '<p class="gg"> ' . wc_price($regular_price) . '</p>';
				}
		echo '</div>';

		echo '<div class="custom-product-info-cart">';
			echo '<a href="' . $cart_url . '"><i class="fa  fa-shopping-bag"></i></a>';
		echo '</div>';
	echo '</div>';

}

// 
add_action('woocommerce_single_product_summary', 'display_nearest_pro', 9);

function display_nearest_pro() {
    global $product;

	$regular_price = $product->get_regular_price();
    $sale_price = $product->get_sale_price();
    $product_categories = wc_get_product_terms($product->get_id(), 'product_cat', array('orderby' => 'parent', 'order' => 'DESC', 'number' => 1));

    if ($product_categories && !is_wp_error($product_categories)) {
        foreach ($product_categories as $category) {
            echo '<div class="thuong_hieu-pro">Thương hiệu: <p>' . $category->name . '</p></div>';

            $category_id = $category->term_id;
			echo '<div class="thuong_hieu-pro">Mã sản phẩm: <p>' . $category_id . 'HYT</p></div>';
        }
    }
	
	echo '<div class="gia_thuong_h">';
		if ($sale_price) {
				echo '<p class="gkm"> ' . wc_price($sale_price) . '</p>';
				echo '<p class="gg"> ' . wc_price($regular_price) . '</p>';
			} else {
				echo '<p class="gg"> ' . wc_price($regular_price) . '</p>';
			}
	echo '</div>';
}

// ****button thêm số lượng (tham khảo)
add_filter( 'woocommerce_loop_add_to_cart_link', 'vutruso_qty_inputs_add_to_cart', 10, 2 );
function vutruso_qty_inputs_add_to_cart( $html, $product ) {
    if ( $product && $product->is_type( 'simple' ) && $product->is_purchasable() && $product->is_in_stock() && ! $product->is_sold_individually() ) {
        $html = '<form action="' . esc_url( $product->add_to_cart_url() ) . '" class="cart" method="post" enctype="multipart/form-data">';
        $html .= woocommerce_quantity_input( array(), $product, false );
        $html .= '<button type="submit" class="button alt">' . esc_html( $product->add_to_cart_text() ) . '</button>';
        $html .= '</form>';
    }
    return $html;
}

add_action( 'woocommerce_after_quantity_input_field', 'vutruso_display_quantity_plus' );
function vutruso_display_quantity_plus() {
   echo '<button type="button" class="plus">+</button>';
}
add_action( 'woocommerce_before_quantity_input_field', 'vutruso_display_quantity_minus' );
function vutruso_display_quantity_minus() {
   echo '<button type="button" class="minus">-</button>';
}
add_action( 'wp_footer', 'vutruso_add_cart_quantity_plus_minus' );
function vutruso_add_cart_quantity_plus_minus() {
   wc_enqueue_js( "   
           
      $(document).on( 'click', 'button.plus, button.minus', function() {
  
         var qty = $( this ).parent( '.quantity' ).find( '.qty' );
         var val = parseFloat(qty.val());
         var max = parseFloat(qty.attr( 'max' ));
         var min = parseFloat(qty.attr( 'min' ));
         var step = parseFloat(qty.attr( 'step' ));
 
         if ( $( this ).is( '.plus' ) ) {
            if ( max && ( max <= val ) ) {
               qty.val( max ).change();
            } else {
               qty.val( val + step ).change();
            }
         } else {
            if ( min && ( min >= val ) ) {
               qty.val( min ).change();
            } else if ( val > 1 ) {
               qty.val( val - step ).change();
            }
         }
 
      });
        
   " );
}
// 

// Register Custom Post Type

function custom_post_type() {

	$labels = array(

		'name'                  => __( 'Dự án'),

		'singular_name'         => __( 'Dự án'),

		'menu_name'             => __( 'Dự án'),

	);

	$args = array(

		'label'                 => __( 'Dự án' ),

		'labels'                => $labels,

		'supports'              => array( 'title', 'editor' , 'thumbnail' , 'revisions' ),

		'public'                => true,

		'show_ui'               => true,

		'show_in_menu'          => true,

		'menu_position'         => 5,

		'show_in_admin_bar'     => true,

		'show_in_nav_menus'     => true,

		'publicly_queryable'    => true,

		'capability_type'       => 'page',

	);

	register_post_type( 'du_an', $args );

}

add_action( 'init', 'custom_post_type', 0 );

// Thay đổi văn bản số sp

remove_filter( 'woocommerce_subcategory_count_html', 'filter_woocommerce_subcategory_count_html', 10, 2 ); 

function filter_woocommerce_subcategory_count_html( $mark_class_count_category_count_mark, $category ) { 

    return ' <span class="count">' . $category->count . ' '.__('Sản phẩm').'</span>'; 

}; 

add_filter( 'woocommerce_subcategory_count_html', 'filter_woocommerce_subcategory_count_html', 10, 2 );

// widgets

function keyweb_widgets_init() {

	register_sidebar( array(

		'name'          => __( 'Filter'),

		'id'            => 'keyweb_filter',

		'before_widget' => '<div id="%1$s" class="block-filter widget %2$s">',

		'after_widget'  => '</div>',

		'before_title'  => '<div class="heading_filter">',

		'after_title'   => '</div>',

	));

	register_sidebar( array(

		'name'          => __( 'Sản phẩm đã xem'),

		'id'            => 'keyweb_product_viewed',

		'before_widget' => '<div id="%1$s" class="block-viewed widget %2$s">',

		'after_widget'  => '</div>',

	));

	register_sidebar( array(

		'name'          => __( 'Từ khóa sản phẩm'),

		'id'            => 'keyweb_product_tag',

		'before_widget' => '<div id="%1$s" class="block-tag widget %2$s">',

		'after_widget'  => '</div>',

	));

	register_sidebar( array(

		'name'          => __( 'Giỏ hàng'),

		'id'            => 'keyweb_box_cart',

		'before_widget' => '<div id="%1$s" class="block-cart widget %2$s">',

		'after_widget'  => '</div>',

	));

}

add_action( 'widgets_init', 'keyweb_widgets_init' );

// Thêm nội dung vào bên dưới content product

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta',40);

function woocommerce_template_single_meta() { 

    wc_get_template( 'single-product/meta.php' ); 

	global $product;

	$product_id = $product->get_id();

	if($product->get_price()>0 && $product->is_in_stock()){ // Có thể mua

		$urlQr='https://chart.googleapis.com/chart?chs=500x500&cht=qr&chl='.esc_url(home_url('/')).'cart?add-to-cart='.$product_id.'&choe=UTF-8';

	}else{ // Ko thể mua

		$urlQr='https://chart.googleapis.com/chart?chs=500x500&cht=qr&chl='.get_permalink($product_id).'&choe=UTF-8';

	}

    echo '<div class="kw-box-contact">'._opt('product_contact').'</div>';

    echo '<div class="qr-create-cart"><h4>'.__('Tạo nhanh đơn hàng trên điện thoại').':</h4> <img src="'.$urlQr.'"></div>';

} 

add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 41);



add_action( 'after_setup_theme', 'yourtheme_setup' );

function yourtheme_setup() {

    add_theme_support( 'wc-product-gallery-zoom' );

    add_theme_support( 'wc-product-gallery-lightbox' );

    add_theme_support( 'wc-product-gallery-slider' );

}

// Ẩn thêm sửa css

function customizer_remove_css_section( $wp_customize ) {	$wp_customize->remove_section( 'custom_css' ); }

add_action( 'customize_register', 'customizer_remove_css_section', 15 );

// Cấm xóa các trang mặc định

function modify_trash_actions( $actions, $post ) {

	$arr = array(3,6,7,8,9,18,16); // lấy danh sách các mảng trang thuộc post type page cần loại bỏ phần thùng rác (xóa bỏ). 3,6,7,8,9 là các page woocommerce

	if ( $post->post_type == "page" ) // Kiểm tra post type.

		foreach ($arr as $key => $value) {

			if ($post->ID==$value) { // Kiểm tra ID page có đúng với mảng nhập vào hay không.

				unset( $actions['trash'] ); // Loại bỏ phần thùng rác hay loại  bỏ phần (xóa bỏ).

				unset($actions['delete']);

			}

		}

	return $actions; // Trả về action.

}

add_filter( 'page_row_actions', 'modify_trash_actions', 10, 2 ); // Thay đổi action thông qua filter page_row_actions

// Khai báo thêm menu

add_action( 'init', 'register_my_menus' );

function register_my_menus(){

	register_nav_menus(

		array(

			'footer_1' => 'Menu Footer 1',

		)

	);

}

?>