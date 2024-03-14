<?php

$options = array (

	array(	"namePanel" => "Trang chủ"),

	array( "nameSection" => "- Box Banner chính"),

	array( "name" => "slide_box_home",

		"label" => "Tiêu đề",

		"description" => "Nhập nội dung shorcode smartslider3 vd: [smartslider3 slider=2]",

		"default" => "[smartslider3 slider=3]",

		"type" => "textarea"),

	
	array(	"nameSection" => "- Box các danh mục"),

	array(	"name" => "home_number_danh_muc",

			"label" => "Số danh mục sẽ hiển thị",

			"description" => "Liên quan đến các ô bên dưới. Lưu xong nhấn F5 để số lượng nhập bên dưới cập nhật",

			"default" => "2",

			'choices' => array('1' => '1', '2' => '2', '3' => '3', '4' => '4', ),

			"type" => "select"),

	array("name" => "home_category",

			"label" => "Danh mục sẽ hiển thị",

			"description" => "Danh mục hiển thị",

			"default" => "",

			"repeat" => "home_number_danh_muc",

			"type" => "drop_product_cat"),

	array("name" => "img_category",

			"label" => "img",

			"description" => "img",

			"default" => "",

			"repeat" => "home_number_danh_muc",

			"type" => "image"),
	
	array(	"nameSection" => "- Box sản phẩm khuyến mại "),


	array(	"name" => "sp_khuyen_mai",

			"label" => "Nôi dung tiêu đề",

			"default" => "Sản phẩm khuyến mại",

			"description" => "Nội dung khuyến mại",

			"type" => "text"),

	array(	"name" => "tg_khuyen_mai",

			"label" => "Thời gian diễn ra",

			"default" => "Hàng ngàn sản phẩm giảm giá diễn ra từ 30/4 đến 30/6",

			"description" => "Nội dung",

			"type" => "text"),

	array(	"name" => "n_khuyen_mai",

			"label" => "Ngày diễn ra",

			"default" => "00",

			"description" => "Nội dung",

			"type" => "text"),

	array(	"name" => "g_khuyen_mai",

			"label" => "Giờ diễn ra",

			"default" => "00",

			"description" => "Nội dung",

			"type" => "text"),

	array(	"name" => "p_khuyen_mai",

			"label" => "Phút diễn ra",

			"default" => "00",

			"description" => "Nội dung",

			"type" => "text"),

	array(	"name" => "gi_khuyen_mai",

			"label" => "Giây diễn ra",

			"default" => "00",

			"description" => "Nội dung",

			"type" => "text"),
	


	array(	"nameSection" => "- Box thương hiệu"),

	array(	"name" => "title_thuong_hieu",

			"label" => "Tiêu đề thương hiệu",

			"description" => "Tiêu đề box thương hiệu",

			"default" => "Thương hiệu nổi bật",

			"type" => "text"),

	array(	"name" => "img_thuong_hieu",

			"label" => "img chính thương hiệu",

			"description" => "img chính to ",

			"default" => "",

			"type" => "image"),
	
	array(	"name" => "select_thuong_hieu_con",

			"label" => "Số img sẽ hiển thị",

			"description" => "Liên quan đến các ô bên dưới. Lưu xong nhấn F5 để số lượng nhập bên dưới cập nhật",

			"default" => "1",

			'choices' => array('1' => '1', '2' => '2', '3' => '3', '4' => '4','5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9'),

			"type" => "select"),

	array(	"name" => "img_thuong_hieu-con",

			"label" => "img con",

			"description" => "img con ",

			"repeat" => "select_thuong_hieu_con",

			"default" => "",

			"type" => "image"),

	array(	"nameSection" => "- Box sản phẩm nổi bật"),

	array(	"name" => "title_san_pham_noi_bat",

			"label" => "Tiêu đề sản phẩm nội bật",

			"description" => "Ghi tiêu đề",

			"default" => "Sản phẩm nổi bật",

			"type" => "text"),
	
	array(	"name" => "select-link",

			"label" => "Số link hiển thị",

			"description" => "Liên quan đến các ô bên dưới. Lưu xong nhấn F5 để số lượng nhập bên dưới cập nhật",

			"default" => "4",

			'choices' => array('1' => '1', '2' => '2', '3' => '3', '4' => '4'),

			"type" => "select"),

	array(	"name" => "ten_link",

			"label" => "Tên link ",

			"description" => "nhập tên",

			"repeat" => "select-link",

			"default" => "",

			"type" => "text"),
			
	array(	"name" => "link_sp",

			"label" => "Link ",

			"description" => "Nhập link",

			"repeat" => "select-link",

			"default" => "#",

			"type" => "text"),


			
	array( "nameSection" => "- Box banner phụ"),


	array( "name" => "banner_left",

		"label" => "Chọn banner dưới sản phẩm nội bật bên trái",

		"description" => "tải ảnh lên",

		"default" => "",

		"type" => "image"),

	array( "name" => "banner_right",

		"label" => "Chọn banner dưới sản phẩm nội bật bên phải",

		"description" => "tải ảnh lên",

		"default" => "",

		"type" => "image"),
		

	array( "nameSection" => "- Box khuyến mại hôm nay"),

	array( "name" => "banner_khuyen_mai_hom_nay",

		"label" => "Chọn banner khuyến mại hôm nay",

		"description" => "tải ảnh lên",

		"default" => "",

		"type" => "image"),

	array( "name" => "title_khuyen_mai_hom_nay",

		"label" => "Tiêu đề hôm nay",

		"description" => "nhập tiêu đề",

		"default" => "Khuyến mại hôm nay",

		"type" => "text"),


	
	array( "nameSection" => "- Box món ngon mỗi ngày"),

	array( "name" => "title_mon_ngon",

		"label" => "Tiêu đề món ngon",

		"description" => "Nhập thông tin",

		"default" => "Món ngon mỗi ngày",

		"type" => "text"),


	// array(	"name" => "post-cate-num",

	// 	"label" => "Số danh mục sẽ hiển thị",

	// 	"description" => "Liên quan đến các ô bên dưới. Lưu xong nhấn F5 để số lượng nhập bên dưới cập nhật",

	// 	"default" => "2",

	// 	'choices' => array('1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7','8' => '8', ),

	// 	"type" => "select"),

	array("name" => "post-cat",

		"label" => "Danh mục sẽ hiển thị",

		"description" => "Danh mục hiển thị",

		"default" => "",

		// "repeat" => "post-cate-num",

		"type" => "drop_cat"),
	
	// array("name" => "post_category",

	// 	"label" => "Danh mục sẽ hiển thị",

	// 	"description" => "Danh mục hiển thị",

	// 	"default" => "",

	// 	"type" => "drop_cat"),

	// array(	"name" => "sb_num_new_post",

	// 		"label" => "Số bài viết sẽ hiển thị",

	// 		"description" => "Nhập số",

	// 		"repeat" => "post_category",

	// 		"default" => "4",

	// 		"type" => "number"),
	
	

	// array( "nameSection" => "-Thiết lập box slider home"),

	// array( "name" => "slide_box_home",

	// 	"label" => "Tiêu đề",

	// 	"description" => "Nhập nội dung shorcode smartslider3 vd: [smartslider3 slider=2]",

	// 	"default" => "[smartslider3 slider=2]",

	// 	"type" => "textarea"),

	// array( "name" => "slide_box_home1",

	// 	"label" => "Tiêu đề",

	// 	"description" => "Nhập nội dung shorcode smartslider3 vd: [smartslider3 slider=2]",

	// 	"default" => "",

	// 	"type" => "image"),

		
			
	// array(	"nameSection" => "Box các dự án"),

	

	// array(	"name" => "home_title_cac_duan",

	// 		"label" => "Tiêu đề box các dự án",

	// 		"description" => "Tiêu đề box các dự án phía bên trái",

	// 		"default" => "CÁC DỰ ÁN ĐÃ GÓP MẶT",

	// 		"partial" => ".home-box-du-an-left",

	// 		"type" => "text"),

			

	// array(	"name" => "home_title_taisao",

	// 		"label" => "Tiêu đề box tại sao",

	// 		"description" => "Tiêu đề box tại sao phía bên phải",

	// 		"default" => "Tại sao bạn nên chọn bulong Nam Hải?",

	// 		"partial" => ".home-box-du-an-right",

	// 		"type" => "text"),

	// array(	"name" => "home_title_taisao_1",

	// 		"label" => "Tiêu đề tại sao 1",

	// 		"description" => "Tiêu đề in đậm lý do tại sao",

	// 		"default" => "Chúng tôi luôn đặt tiêu chí phục vụ khách hàng lên hàng đầu",

	// 		"type" => "text"),

	// array(	"name" => "home_content_taisao_1",

	// 		"label" => "Nội dung tại sao 1",

	// 		"description" => "Nội dung lý do tại sao",

	// 		"default" => "Toàn bộ đội ngũ nhân viên của chúng tôi thấu hiểu một điều rằng thành công của chúng tôi nằm trong những giá trị mà chúng tôi đem lại cho khách hàng. Chính vì lẽ đó, Bulong Nam Hải luôn cố gắng phát triển bền vững và không ngừng nâng cấp về chất lượng sản xuất.",

	// 		"type" => "textarea"),

	// array(	"name" => "home_title_taisao_2",

	// 		"label" => "Tiêu đề tại sao 2",

	// 		"description" => "Tiêu đề in đậm lý do tại sao",

	// 		"default" => "Chúng tôi là lựa chọn của nhiều các doanh nghiệp lớn và nhỏ",

	// 		"type" => "text"),

	// array(	"name" => "home_content_taisao_2",

	// 		"label" => "Nội dung tại sao 2",

	// 		"description" => "Nội dung lý do tại sao",

	// 		"default" => "Bulong Nam Hải giúp các doanh nghiệp lớn và nhỏ tiết kiệm thời gian và chi phí của mình bằng cách cung cấp đa dạng các chủng loại bu lông – ốc vít inox đặc thù yêu cầu chính xác theo bản vẽ phục vụ cho các ngành: Giao thông, viễn thông, điện lực, cơ khí, đóng tàu, kết cấu nhà thép, nhiệt điện, lọc hóa dầu, cấp thoát nước, cơ điện lạnh, xi măng…",

	// 		"type" => "textarea"),

	// array(	"name" => "home_title_taisao_3",

	// 		"label" => "Tiêu đề tại sao 3",

	// 		"description" => "Tiêu đề in đậm lý do tại sao",

	// 		"default" => "Chúng tôi coi trọng mối quan hệ lâu dài",

	// 		"type" => "text"),

	// array(	"name" => "home_content_taisao_3",

	// 		"label" => "Nội dung tại sao 3",

	// 		"description" => "Nội dung lý do tại sao",

	// 		"default" => "Hành trình phát triển của Công ty TNHH đầu tư thương mại và xuất nhập khẩu Nam Hải chúng tôi bắt đầu bằng việc khởi tạo các mối quan hệ hợp tác tin tưởng – và hoàn thành công việc bằng việc duy trì mối quan hệ dài lâu qua chính sách hỗ trợ, hậu mãi tạo dựng niềm tin cho khách hàng.",

	// 		"type" => "textarea"),

			

	// array(	"nameSection" => "Box banner"),

	// array(	"name" => "home_banner_image_1",

	// 		"label" => "Ảnh banner 1",

	// 		"description" => "Ảnh banner box 2 banner ở giữa(Tỉ lệ: 610x140px)",

	// 		"partial" => ".home-box-banner-1-left",

	// 		"default" => "",

	// 		"type" => "image"),

	// array(	"name" => "home_text_link_banner_1",

	// 		"label" => "Text link banner 1",

	// 		"description" => "Text gắn link banner 1",

	// 		"default" => "Xem chi tiết tiêu chuẩn kỹ thuật",

	// 		"type" => "text"),

	// array(	"name" => "home_link_banner_1",

	// 		"label" => "Link banner 1",

	// 		"description" => "Link banner 1",

	// 		"default" => "#",

	// 		"type" => "text"),

			

	// array(	"name" => "home_banner_image_2",

	// 		"label" => "Ảnh banner 2",

	// 		"description" => "Ảnh banner box 2 banner ở giữa(Tỉ lệ: 610x140px)",

	// 		"default" => "",

	// 		"partial" => ".home-box-banner-1-right",

	// 		"type" => "image"),

	// array(	"name" => "home_text_link_banner_2",

	// 		"label" => "Text link banner 2",

	// 		"description" => "Text gắn link banner 2",

	// 		"default" => "Tư Vấn Báo Giá: 0977260612",

	// 		"type" => "text"),

	// array(	"name" => "home_link_banner_2",

	// 		"label" => "Link banner 2",

	// 		"description" => "Link banner 2",

	// 		"default" => "#",

	// 		"type" => "text"),

	// array(	"name" => "home_banner_image_3",

	// 		"label" => "Ảnh banner 3",

	// 		"description" => "Ảnh banner phía dưới(Tỉ lệ: 1300x210px)",

	// 		"default" => "",

	// 		"partial" => ".home-box-banner-2",

	// 		"type" => "image"),

	// array(	"nameSection" => "Box tin tức"),

	// array(	"name" => "home_title_tintuc",

	// 		"label" => "Tiêu đề mục tin tức",

	// 		"description" => "Mục tin tức, kinh nghiệm",

	// 		"default" => "KINH NGHIỆM HAY",

	// 		"partial" => ".home-box-tin-tuc",

	// 		"type" => "text"),

	// array(	"name" => "home_banner_tintuc",

	// 		"label" => "Ảnh banner tin tức",

	// 		"description" => "Ảnh banner bên trái(Tỉ lệ: 610x140px)",

	// 		"default" => "",

	// 		"type" => "image"),

			

	// array(	"nameSection" => "Khách hàng đánh giá"),

	// array(	"name" => "home_title_danhgia",

	// 		"label" => "Tiêu đề mục khách hàng đánh giá",

	// 		"description" => "Tiêu đề in đậm ở giữa",

	// 		"default" => "Khách hàng nói về chúng tôi",

	// 		"partial" => ".home-box-kh-danhgia h3",

	// 		"type" => "text"),

	// array(	"name" => "home_kh_danhgia_1",

	// 		"label" => "Ảnh khách hàng 1",

	// 		"description" => "Ảnh khách hàng đánh giá 1(Tỉ lệ: 200x200px)",

	// 		"default" => "",

	// 		"type" => "image"),

	// array(	"name" => "home_content_danhgia_1",

	// 		"label" => "Nội dung đánh giá 1",

	// 		"description" => "Nội dung đánh giá",

	// 		"default" => "Chúng tôi chọn bu lông Nam Hải vì sản phẩm rất bền và đẹp, bu lông đa dạng chủng loại và kích thước. Đặc biệt hơn sản xuất theo bản vẽ rất chính xác, đạt tiêu chuẩn về chất lượng.vì vậy khi chọn Nam Hải chúng tôi hoàn toàn yên tâm về chất lượng bu lông,cũng như giá thành rất hợp lý. Tôi rất hài lòng!",

	// 		"type" => "textarea"),

	// array(	"name" => "home_name_danhgia_1",

	// 		"label" => "Tên khách đánh giá 1",

	// 		"description" => "Tên khách đánh giá 1",

	// 		"default" => "<b>TIẾN TỚI</b> / KỸ SƯ XÂY DỰNG",

	// 		"type" => "text"),

	// array(	"name" => "home_kh_danhgia_2",

	// 		"label" => "Ảnh khách hàng 2",

	// 		"description" => "Ảnh khách hàng đánh giá 2(Tỉ lệ: 200x200px)",

	// 		"default" => "",

	// 		"type" => "image"),

	// array(	"name" => "home_content_danhgia_2",

	// 		"label" => "Nội dung đánh giá 2",

	// 		"description" => "Nội dung đánh giá",

	// 		"default" => "Là đơn vị uy tín trên thị trường được các đối tác lớn lựa chọn sản phẩm bulong inox các loại. Từ khi chọn bu lông Nam Hải chúng tôi luôn yên tâm về chất lượng sản phẩm cũng như tiến độ cung cấp hàng hóa, giao hàng nhanh, nhân viên rất nhiệt tình và thân thiện. Chúc cho bu lông Nam Hải ngày càng lớn mạnh!",

	// 		"type" => "textarea"),

	// array(	"name" => "home_name_danhgia_2",

	// 		"label" => "Tên khách đánh giá 2",

	// 		"description" => "Tên khách đánh giá 2",

	// 		"default" => "<b>HẢI NAM</b> / Kỹ sư công trình biển",

	// 		"type" => "text"),

	// array(	"name" => "home_kh_danhgia_3",

	// 		"label" => "Ảnh khách hàng 3",

	// 		"description" => "Ảnh khách hàng đánh giá 3(Tỉ lệ: 200x200px)",

	// 		"default" => "",

	// 		"type" => "image"),

	// array(	"name" => "home_content_danhgia_3",

	// 		"label" => "Nội dung đánh giá 3",

	// 		"description" => "Nội dung đánh giá",

	// 		"default" => "Chúng tôi luôn mang sản phẩm tốt nhất đến tay khách hàng bởi vậy việc chọn một nhà cung cấp tin cậy như bu lông Nam Hải là đương nhiên. Tiêu chuẩn bu lông chính xác, bu lông ốc vít đa dạng chủng loại và kích thước. Hàng hóa luôn sẵn kho, nhập khẩu chính hãng không qua trung gian nên giá rất tốt. Cảm ơn các bạn!",

	// 		"type" => "textarea"),

	// array(	"name" => "home_name_danhgia_3",

	// 		"label" => "Tên khách đánh giá 3",

	// 		"description" => "Tên khách đánh giá 3",

	// 		"default" => "<b>HOÀNG MINH</b> / GĐ THIẾT BỊ ĐIỆN SINO",

	// 		"type" => "text"),

			

	// array(	"nameSection" => "Khách hàng thân thiết"),

	// array(	"name" => "home_title_doitac",

	// 		"label" => "Tiêu đề mục khách hàng thân thiết",

	// 		"description" => "Tiêu đề in đậm ở giữa",

	// 		"default" => "KHÁCH HÀNG THÂN THIẾT",

	// 		"partial" => ".home-box-kh-thanthiet h3",

	// 		"type" => "text"),

			

	// array(	"name" => "home_number_doi_tac",

	// 		"label" => "Số đối tác sẽ hiển thị",

	// 		"description" => "Liên quan đến các ô bên dưới. Lưu xong nhấn F5 để số lượng nhập bên dưới cập nhật",

	// 		"default" => "6",

	// 		'choices' => array('1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7','8' => '8', ),

	// 		"type" => "select"),			

	// array(	"name" => "home_image_doitac",

	// 		"label" => "Ảnh đối tác",

	// 		"description" => "Ảnh đối tác, khách hàng thân thiết(Tỉ lệ: 160x90px)",

	// 		"default" => "",

	// 		"repeat" => "home_number_doi_tac",

	// 		"type" => "image"),

			

	// array(	"nameSection" => "Cài đặt khác"),

	// array(	"name" => "home_slogan",

	// 		"label" => "Nội dung slogan",

	// 		"description" => "Nội dung slogan dưới slider",

	// 		"default" => "Bulong Nam Hải – Cùng bạn phát triển!",

	// 		"type" => "text"),

			

);

$arrOpt=array_merge($arrOpt,$options);



?>