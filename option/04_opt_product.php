<?php



$options = array (

	array(	"namePanel" => "Trang bán hàng", "link" => "product"),

	// array(	"nameSection" => "-Slider shop", "link" => "shop"),

	// array(	"name" => "select-shop",

	// 		"label" => "Số slider shop",

	// 		"description" => "Liên quan đến các ô bên dưới. Lưu xong nhấn F5 để số lượng nhập bên dưới cập nhật",

	// 		"default" => "2",

	// 		'choices' => array('1' => '1', '2' => '2', ),

	// 		"type" => "select"),

	// array("name" => "img_shop",

	// 		"label" => "Ảnh",

	// 		"description" => "tải lên",

	// 		"default" => "",

	// 		"repeat" => "select-shop",

	// 		"type" => "image"),

	array(	"nameSection" => "-Ship"),

	array(	"name" => "title-ship",

			"label" => "Nội dung giảm giá",

			"description" => "Nhập thông tin",

			"default" => "ƯU ĐÃI LIÊN QUAN",

			"type" => "text"),

	array(	"name" => "title-ship",

			"label" => "Nội dung giảm giá",

			"description" => "Nhập thông tin",

			"default" => "ƯU ĐÃI LIÊN QUAN",

			"type" => "text"),

	array(	"name" => "sl_box",

			"label" => "Số box ship sẽ hiển thị",

			"description" => "Liên quan đến các ô bên dưới. Lưu xong nhấn F5 để số lượng nhập bên dưới cập nhật",

			"default" => "4",

			'choices' => array('1' => '1', '2' => '2', '3' => '3', '4' => '4', ),

			"type" => "select"),
	
	array("name" => "tt_box_ship",

			"label" => "Tiêu đề chính",

			"description" => "",

			"default" => "",

			"repeat" => "sl_box",

			"type" => "text"),
	
	array("name" => "tt_box_ship_con",

			"label" => "Nội dung phụ",

			"description" => "",

			"default" => "",

			"repeat" => "sl_box",

			"type" => "text"),
	
	array("name" => "img_box_ship_con",

			"label" => "Ảnh kèm theo",

			"description" => "",

			"default" => "",

			"repeat" => "sl_box",

			"type" => "image"),
	

// 	array(	"nameSection" => "Trang sản phẩm"),

// 	array(	"name" => "product_contact",

// 			"label" => "Nội dung box liên hệ",

// 			"description" => "Mỗi dòng bao trong thẻ p, in đậm strong",

// 			"default" => "<p><strong>Liên hệ báo giá:</strong> 02435.953.666 - 0983.999.873</p> 

// <p><strong>Email:</strong> sales@namhaiinox.com.vn</p> 

// <p><strong>Địa chỉ:</strong> Số nhà 1037 Đường Giải Phóng, Phường Thịnh Liệt, Quận Hoàng Mai, TP. Hà Nội</p>",

// 			"type" => "textarea"),

);

$arrOpt=array_merge($arrOpt,$options);





?>