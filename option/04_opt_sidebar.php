<?php

/*lấy ngẫu nhiên 1 slug trang chi tiết*/

$posts_slug = get_posts(array('post_type' => 'page', 'posts_per_page' => 1));

$single_post_slug = '';

if ($posts_slug) {

	foreach ($posts_slug as $post_slug) :

		setup_postdata($post_slug);

		$single_post_slug = '/' . $post_slug->post_name;

	endforeach;

	wp_reset_postdata();

}



$options = array (

	array(	"namePanel" => "Thiết lập sidebar"),

	array(	"nameSection" => "-Sidebar bộ lọc", "link" => "shop"),

	array(	"name" => "l-siderbar",

			"label" => "Tiêu đề lọc",

			"description" => "Nhập nội dung",

			"default" => "Lọc tìm sản phẩm",

			"type" => "text"),

	array(	"nameSection" => "-Sidebar tin tức"),

	array(	"name" => "siderbar_tt",
	
			"label" => "Tiêu đề tin tức",

			"description" => "Nhập nội dung",

			"default" => "KHUYẾN MẠI",

			"type" => "text"),
	
	array(	"name" => "siderbar_mv",
	
			"label" => "Tiêu đề mẹo vặt",

			"description" => "Nhập nội dung",

			"default" => "MẸO MẶT GIA ĐÌNH",

			"type" => "text"),

	array(	"nameSection" => "-Box Tham khảo",),

	array(	"name" => "tt-tham_khao",

			"label" => "Tiêu đề ",

			"description" => "Nhập nội dung",

			"default" => "THAM KHẢO THÊM",

			"type" => "text"),

	array(	"nameSection" => "-Box khách hàng đánh giá",),

	array(	"name" => "tt-khach_hang",

			"label" => "Tiêu đề ",

			"description" => "Nhập nội dung",

			"default" => "KHÁCH HÀNG BÌNH LUẬN",

			"type" => "text"),

	// array(	"nameSection" => "Sidebar trái","link"=>"shop"),

	// array(	"name" => "sb_sp_title_loc",

	// 		"label" => "Tiêu đề lọc",

	// 		"description" => "Nhập nội dung",

	// 		"default" => "Lọc tìm sản phẩm",

	// 		"type" => "text"),

	// array(	"name" => "sb_sp_title_product_cat",

	// 		"label" => "Tiêu đề Danh mục sản phẩm",

	// 		"description" => "Nhập nội dung",

	// 		"default" => "Danh mục sản phẩm",

	// 		"type" => "text"),



	// array(	"name" => "sb_title_category",

	// 		"label" => "Tiêu đề Chuyên mục tin tức",

	// 		"description" => "Nhập nội dung",

	// 		"default" => "Danh mục tin tức",

	// 		"type" => "text"),



	// array(	"name" => "sb_note1",

	// 	"label" => "",

	// 	"description" => "<b colorred>Thiết lập bài viết mới</b>",

	// 	"default" => "",

	// 	"type" => "hidden"),

	// array(	"name" => "sb_title_new_post",

	// 		"label" => "Tiêu đề Bài viết",

	// 		"description" => "Nhập nội dung",

	// 		"default" => "Bài viết mới nhất",

	// 		"type" => "text"),

	// array(	"name" => "sb_num_new_post",

	// 		"label" => "Số bài viết sẽ hiển thị",

	// 		"description" => "Nhập số",

	// 		"default" => "10",

	// 		"type" => "number"),



	// array(	"nameSection" => "Sidebar phải","link"=>"/".$single_post_slug.""),



	// array(	"name" => "sb_sp_title_product_viewed",

	// 		"label" => "Tiêu đề Sản phẩm vừa xem",

	// 		"description" => "Nhập nội dung",

	// 		"default" => "Sản phẩm vừa xem",

	// 		"type" => "text"),	

	// array(	"name" => "sb_sp_title_mini_cart",

	// 		"label" => "Tiêu đề Giỏ hàng",

	// 		"description" => "Nhập nội dung",

	// 		"default" => "Giỏ hàng",

	// 		"type" => "text"),	

	// array(	"name" => "sb_sp_title_tag",

	// 		"label" => "Tiêu đề Từ khóa",

	// 		"description" => "Nhập nội dung",

	// 		"default" => "Từ khóa sản phẩm",

	// 		"type" => "text"),	





);

$arrOpt=array_merge($arrOpt,$options);





?>