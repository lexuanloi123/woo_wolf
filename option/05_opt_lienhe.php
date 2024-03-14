<?php

$options = array (

	array(	"namePanel" => "Trang liên hệ"),

	

	array(	"nameSection" => "-Thông tin liên hệ", "link" => "lien-he"),

	array(	"name" => "tt_lien-he",

			"label" => "Tiêu đề liên hệ",

			"description" => "Nhập tiêu đề",

			"default" => "Liên hệ",

			"type" => "text"),

	array(	"name" => "dc_lien-he",

			"label" => "Địa chỉ liên hệ",

			"description" => "Nhập địa chỉ",

			"default" => "Số 70 Lữ Gia - Phường 15 - Quận 11 - TP Hồ Chí Minh",

			"type" => "text"),

	array(	"name" => "sdt_lien-he",

			"label" => "Số điện thoại liên hệ",

			"description" => "Nhập số ",

			"default" => "0977.260.612",

			"type" => "text"),

	array(	"name" => "email_lien-he",

			"label" => "Email liên hệ",

			"description" => "Nhập email ",

			"default" => "Sales@namhaiinox.com.vn",

			"type" => "text"),

	array(	"name" => "tg_lien-he1",

			"label" => "Thời gian liên hệ",

			"description" => "Nhập thời gian 1 ",

			"default" => "Thứ 2 - Thứ 6: 8:00-17:00 ",

			"type" => "text"),
		
	array(	"name" => "tg_lien-he2",

			"label" => " ",

			"description" => "Nhập thời gian 2",

			"default" => " Thứ 7: 8:00 – 12:00",

			"type" => "text"),

	
	array(	"nameSection" => "-Thông tin cá nhân", "link" => "lien-he"),

	array(	"name" => "cn-title",

			"label" => "Tiêu đề cần hỏi",

			"description" => "Nhập tiêu đề",

			"default" => "Bạn Có Câu Hỏi Cần Giải Đáp?",

			"type" => "text"),		

	array(	"name" => "cn-title-p",

			"label" => "Thông tin cá nhân",

			"description" => "Nhập thông tin",

			"default" => "Địa chỉ email của bạn sẽ được bảo mật. Các trường bắt buộc được đánh dấu*",

			"type" => "text"),

	array(	"name" => "form_lh-l",

			"label" => "Mã code form liên hệ",

			"description" => "Nhập mã shortcode contactform (vd: [contact-form-7 id=\"289\" title=\"Form liên hệ 1\"])",

			"default" => "[contact-form-7 id=\"593\" title=\"from lien hệ 2\"]",

			"type" => "textarea"),

	array(	"nameSection" => "-Bản đồ", "link" => "lien-he"),

	array(	"name" => "map",

			"label" => "Mã code bản đồ",

			"description" => "Max code lấy từ google map",

			"partial" => "",

			"default" => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.0561850082076!2d105.7829330149188!3d21.030437785997403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454ac865806f3%3A0xe622b11fb8df6b87!2sC%C3%B4ng+ty+TNHH+KEYSKY!5e0!3m2!1svi!2s!4v1558230378876!5m2!1svi!2s" width="100%" height="650" frameborder="0" style="border:0" allowfullscreen></iframe>',

			"type" => "textarea"),

	// array(	"nameSection" => "Bản đồ", "link" => "lien-he"),

	// array(	"name" => "lienhe_map_title",

	// 		"label" => "Tiêu đề box bản đồ",

	// 		"description" => "Nhập tiêu đề",

	// 		"default" => "BẢN ĐỒ ĐƯỜNG ĐI",

	// 		"type" => "text"),



	// array(	"name" => "lienhe_code_ban_do",

	// 		"label" => "Mã code bản đồ",

	// 		"description" => "Max code lấy từ google map",

	// 		"partial" => ".lien-he-left",

	// 		"default" => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.0561850082076!2d105.7829330149188!3d21.030437785997403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454ac865806f3%3A0xe622b11fb8df6b87!2sC%C3%B4ng+ty+TNHH+KEYSKY!5e0!3m2!1svi!2s!4v1558230378876!5m2!1svi!2s" width="100%" height="650" frameborder="0" style="border:0" allowfullscreen></iframe>',

	// 		"type" => "textarea"),

	// array(	"nameSection" => "Thiết lập form liên hệ", "link" => "lien-he"),

	// array(	"name" => "lienhe_form_title",

	// 		"label" => "Tiêu đề box form liên hệ",

	// 		"description" => "Nhập tiêu đề",

	// 		"default" => "LIÊN HỆ",

	// 		"type" => "text",

	// 		"partial"=>".contact-form-lh"),

	// array(	"name" => "form_lh_shortcode",

	// 		"label" => "Mã code form liên hệ",

	// 		"description" => "Nhập mã shortcode contactform (vd: [contact-form-7 id=\"289\" title=\"Form liên hệ 1\"])",

	// 		"default" => "[contact-form-7 id=\"289\" title=\"Form liên hệ 1\"]",

	// 		"type" => "textarea"),



	// array(	"nameSection" => "Thông tin liên hệ", "link" => "lien-he"),

	// array(	"name" => "lienhe_tt_title",

	// 		"label" => "Tiêu đề box thông tin",

	// 		"description" => "Tiêu đề box",

	// 		"default" => "THÔNG TIN LIÊN HỆ",

	// 		"type" => "text"),

	// array(	"name" => "lienhe_company",

	// 		"label" => "Tên công ty",

	// 		"description" => "Tên công ty",

	// 		"default" => "Công Ty TNHH Đầu Tư Thương Mại Và Xuất Nhập Khẩu Nam Hải",

	// 		"partial" => ".content-lienhe",

	// 		"type" => "text"),

	// array(	"name" => "lienhe_dia_chi",

	// 		"label" => "Địa chỉ",

	// 		"description" => "Địa chỉ",

	// 		"default" => "Địa chỉ: Số nhà 1037 Đường Giải Phóng, Phường Thịnh Liệt, Quận Hoàng Mai, TP. Hà Nội",

	// 		"type" => "text"),

	// array(	"name" => "lienhe_phone",

	// 		"label" => "Số điện thoại",

	// 		"description" => "Số điện thoại",

	// 		"default" => "Tel: 0977.260.612",

	// 		"type" => "text"),

	// array(	"name" => "lienhe_email",

	// 		"label" => "Email",

	// 		"description" => "Email",

	// 		"default" => "Email: Sales@namhaiinox.com.vn",

	// 		"type" => "text"),

	// array(	"name" => "lienhe_website",

	// 		"label" => "Website",

	// 		"description" => "Website",

	// 		"default" => "Website: www.bulongnamhai.com",

	// 		"type" => "text"),

	// array(	"name" => "lienhe_time",

	// 		"label" => "Thời gian làm việc",

	// 		"description" => "Thời gian làm việc",

	// 		"default" => "Thời gian làm việc: Thứ 2 – Thứ 7 / 8:00 AM – 17:00 PM",

	// 		"type" => "text"),

	// array(	"name" => "lienhe_mst",

	// 		"label" => "Mã số thuế",

	// 		"description" => "Mã số thuế",

	// 		"default" => "Mã số thuế: 0108190187",

	// 		"type" => "text"),

			

);

$arrOpt=array_merge($arrOpt,$options);



?>