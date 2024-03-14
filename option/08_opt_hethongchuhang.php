<?php



$options = array (

	array(	"namePanel" => "Trang hệ thống"),

	
    array(	"nameSection" => "-Hệ thống", "link" => "he-thong-cua-hang"),

    array(	"name" => "title-ht-map",

			"label" => "Tiêu đề hệ thống",

			"description" => "Nhập thông tin",

			"default" => "Hệ thống cửa hàng",

			"type" => "text"),
    
    array(	"nameSection" => "-Địa chỉ", "link" => "he-thong-cua-hang"),

    array(	"name" => "sl-ht",

        "label" => "Số lượng địa sẽ hiển thị",

        "description" => "Liên quan đến các ô bên dưới. Lưu xong nhấn F5 để số lượng nhập bên dưới cập nhật",

        "default" => "5",

        'choices' => array('1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5'),

        "type" => "select"),		

    array(	"name" => "title-ht-map1",

			"label" => "Tiêu đề hệ thống",

			"description" => "Nhập thông tin",

			"default" => "Mew ShowRoom Long Biên",

            "repeat" => "sl-ht",

			"type" => "text"),

    array(	"name" => "email-ht-map",

			"label" => "Email hệ thông",

			"description" => "Nhập thông tin",

			"default" => "mew_longbien@mew.vn",

            "repeat" => "sl-ht",

			"type" => "text"),

    array(	"name" => "sdt-ht-map",

			"label" => "Số hệ thông",

			"description" => "Nhập thông tin",

			"default" => "937 079 668",

            "repeat" => "sl-ht",

			"type" => "text"),

    array(	"name" => "dc-ht-map",

			"label" => "Nhập địa chỉ hệ thông",

			"description" => "Nhập thông tin",

			"default" => "Số 34 Ngõ 2 Ngọc Thụy, Ngọc Thụy - Long Biên",

            "repeat" => "sl-ht",

			"type" => "text"),

    array(	"name" => "map-ht-map",

			"label" => "Mã code bản đồ",

			"description" => "Max code lấy từ google map",

			"partial" => "",

			"default" => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.0561850082076!2d105.7829330149188!3d21.030437785997403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454ac865806f3%3A0xe622b11fb8df6b87!2sC%C3%B4ng+ty+TNHH+KEYSKY!5e0!3m2!1svi!2s!4v1558230378876!5m2!1svi!2s" width="100%" height="650" frameborder="0" style="border:0" allowfullscreen></iframe>',

			"type" => "textarea"),


// 	array(	"nameSection" => "Section Demo 1"),

	

// 	array(	"name" => "demo_text",

// 			"label" => "Demo text",

// 			"description" => "Demo description text",

// 			"default" => "Demo text default",

// 			"type" => "text"),

			

// 	array(	"name" => "demo_textarea",

// 			"label" => "Demo textarea",

// 			"description" => "Demo description textarea",

// 			"default" => 'Demo textarea default',

// 			"type" => "textarea"),

			

// 	array(	"nameSection" => "Section Demo 2"),

	

// 	array(	"name" => "demo_radio",

// 			"label" => "Demo radio",

// 			"description" => "Demo description radio",

// 			"default" => "radio_2",

// 			'choices' => array(

// 				'radio_1' => 'Radio 1',

// 				'radio_2' => 'Radio 2',

// 				'radio_3' => 'Radio 3',

// 				'radio_4' => 'Radio 4',

// 			),

// 			"type" => "radio"),

			

// 	array(	"name" => "demo_select",

// 			"label" => "Demo select",

// 			"description" => "Demo description select",

// 			"default" => "choices_2",

// 			'choices' => array(

// 				'choices_1' => 'Choices 1',

// 				'choices_2' => 'Choices 2',

// 				'choices_3' => 'Choices 3',

// 				'choices_4' => 'Choices 4',

// 			),

// 			"type" => "select"),

			

// 	array(	"name" => "demo_number",

// 			"label" => "Demo number",

// 			"description" => "Demo description number",

// 			"default" => "700",

// 			'input_attrs' => array(

// 				'min' => 0,

// 				'max' => 2000,

// 				'step' => 1,

// 			),

// 			"type" => "number"),

			

// 	array(	"name" => "demo_checkbox",

// 			"label" => "Demo checkbox",

// 			"description" => "Demo description checkbox",

// 			"default" => 1,

// 			"type" => "checkbox"),

			

			

// 	array(	"name" => "demo_color",

// 			"label" => "Demo color",

// 			"description" => "Demo description color",

// 			"default" => "#1C76A8",

// 			"type" => "color"),

			

// 	array(	"name" => "demo_image",

// 			"label" => "Demo image",

// 			"description" => "Demo description image",

// 			"default" => "",

// 			"type" => "image"),

// 	// Chế độ repeat

// 	array(	"name" => "home_number_doi_tac",

// 			"label" => "Số đối tác sẽ hiển thị",

// 			"description" => "Liên quan đến các ô bên dưới. Lưu xong nhấn F5 để số lượng nhập bên dưới cập nhật",

// 			"default" => "6",

// 			'choices' => array('1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7','8' => '8', ),

// 			"type" => "select"),			

// 	array(	"name" => "home_image_doitac",

// 			"label" => "Ảnh đối tác",

// 			"description" => "Ảnh đối tác, khách hàng thân thiết",

// 			"default" => "",

// 			"repeat" => "home_number_doi_tac",

// 			"type" => "image"),

// 	// Chọn danh mục sản phẩm drop_product_cat và drop_cat

// 	array("name" => "home_category",

// 			"label" => "Danh mục sẽ hiển thị",

// 			"description" => "Danh mục hiển thị",

// 			"default" => "",

// 			"repeat" => "home_number_danh_muc",

// 			"type" => "drop_product_cat"),

);

$arrOpt=array_merge($arrOpt,$options);



?>