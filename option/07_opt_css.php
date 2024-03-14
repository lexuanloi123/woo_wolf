<?php
$options = array (
	array(	"namePanel" => "Màu sắc, Trang trí"),
	
	array(	"nameSection" => "Màu trang web"),
	array(	"name" => "css_main_color",
			"label" => "Màu chủ đạo",
			"description" => "Màu chính của web(Mặc đinh: #fff)",
			"default" => "#fff",
			"type" => "color"),
	array(	"name" => "css_sub_color",
			"label" => "Màu thứ cấp",
			"description" => "Màu thứ cấp của web, nhạt hơn màu chính(Mặc đinh: #3bb77e)",
			"default" => "#3bb77e",
			"type" => "color"),
	array(	"name" => "css_rev_color",
			"label" => "Màu tương phản",
			"description" => "Màu đảo màu chính, dùng cho hover(Mặc đinh: #ff4747)",
			"default" => "#ff4747",
			"type" => "color"),
	array(	"nameSection" => "Kích thước layout"),
	array(	"name" => "css_layout_width",
			"label" => "Độ rộng khung chính",
			"description" => "Độ rộng tối đa(Mặc đinh: 1240px)",
			"default" => "1240px",
			"type" => "text"),
	array(	"name" => "css_fixed_menu",
			"label" => "Cố định menu header",
			"description" => "Cố định menu header khi cuộn trang",
			"default" => "0",
			"type" => "checkbox"),
			
			
);
$arrOpt=array_merge($arrOpt,$options);

?>