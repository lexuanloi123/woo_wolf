<?php

$options = array (
	array(	"namePanel" => "Cấu hình Header"),

	array(	"nameSection" => "- Header Top"),

	array(	"name" => "header_left_text_1",

			"label" => "Văn bản bên trái",

			"description" => "Đoạn text văn bản bên trái header",

			"default" => "Tìm cửa hàng",

			"partial" => ".left-header-top",

			"type" => "text"),

	array(	"name" => "header_left_text_2",

			"label" => "Văn bản bên trái",

			"description" => "Đoạn text văn bản bên trái header",

			"default" => "Hỗ trợ mua hàng",

			"partial" => ".left-header-top",

			"type" => "text"),

	// array(	"name" => "header_right_text",

	// 		"label" => "Văn bản bên phải",

	// 		"description" => "Đoạn text văn bản bên phải header",

	// 		"default" => "Email: Sales@namhaiinox.com.vn Hotline: 0977.260.612",

	// 		"partial" => ".right-header-top",

	// 		"type" => "text"),

	array(	"nameSection" => "-Header Main"),

	array(	"name" => "logo",

			"label" => "Ảnh logo",

			"description" => "Upload và chọn ảnh cho logo(Tỉ lệ: 190x80px)",

			"partial" => ".header-logo",

			"default" => "",

			"type" => "image"),
	// 
	array(	"nameSection" => "-Header Main right"),

	array(	"name" => "hotline",

			"label" => "hotline",

			"description" => "nhập số điện thoại",

			"partial" => "",

			"default" => "1900 8362",
			
			"type" => "text"),
);
$arrOpt=array_merge($arrOpt,$options);


?>