<?php
	
	/*----------------------First highlight color-------------------*/

	$vw_landing_page_first_color = get_theme_mod('vw_landing_page_first_color');

	$vw_landing_page_custom_css = '';

	if($vw_landing_page_first_color != false){
		$vw_landing_page_custom_css .='.pagination a:hover, .pagination .current, #comments a.comment-reply-link, .nav-previous a:hover, .nav-next a:hover, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current, #preloader{';
			$vw_landing_page_custom_css .='background-color: '.esc_attr($vw_landing_page_first_color).';';
		$vw_landing_page_custom_css .='}';
	}
	if($vw_landing_page_first_color != false){
		$vw_landing_page_custom_css .='a, .custom-social-icons i:hover, #footer .custom-social-icons i:hover, #footer li a:hover, #sidebar li a:hover , .post-navigation a:hover .post-title,.post-navigation a:focus .post-title, .post-navigation a:hover,.post-navigation a:focus, .main-navigation a:hover, .main-navigation ul.sub-menu a:hover, .entry-content a, #sidebar .textwidget p a, .textwidget p a, #comments p a, .slider .inner_carousel p a, #footer .more-button a:hover, #footer .more-button:hover i, .post-main-box:hover h2 a, .post-main-box:hover .post-info a, .single-post .post-info:hover a, .logo .site-title a:hover, #slider .inner_carousel h1 a:hover, .content-vw p a{';
			$vw_landing_page_custom_css .='color: '.esc_attr($vw_landing_page_first_color).';';
		$vw_landing_page_custom_css .='}';
	}
	if($vw_landing_page_first_color != false){
		$vw_landing_page_custom_css .='.post-main-box, #sidebar .widget{
		box-shadow: 0px 15px 10px -15px '.esc_attr($vw_landing_page_first_color).';
		}';
	}
	if($vw_landing_page_first_color != false){
		$vw_landing_page_custom_css .='.main-navigation ul ul{';
			$vw_landing_page_custom_css .='border-top-color: '.esc_attr($vw_landing_page_first_color).';';
		$vw_landing_page_custom_css .='}';
	}
	if($vw_landing_page_first_color != false){
		$vw_landing_page_custom_css .='.main-navigation ul ul{';
			$vw_landing_page_custom_css .='border-bottom-color: '.esc_attr($vw_landing_page_first_color).';';
		$vw_landing_page_custom_css .='}';
	}

	/*---------------Second highlight color-------------------*/

	$vw_landing_page_second_color = get_theme_mod('vw_landing_page_second_color');

	if($vw_landing_page_first_color != false || $vw_landing_page_second_color != false){
		$vw_landing_page_custom_css .='input[type="submit"], #topbar, #slider .carousel-control-prev-icon:hover, #slider .carousel-control-next-icon:hover, #slider .view-more:hover, .view-more, #info-section, #footer-2, #comments input[type="submit"], #sidebar .custom-social-icons i,#footer .custom-social-icons i, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, nav.woocommerce-MyAccount-navigation ul li, .scrollup i, #sidebar .widget_price_filter .ui-slider .ui-slider-range, #sidebar .widget_price_filter .ui-slider .ui-slider-handle, #sidebar .woocommerce-product-search button, #footer .widget_price_filter .ui-slider .ui-slider-range, #footer .widget_price_filter .ui-slider .ui-slider-handle, #footer .woocommerce-product-search button, #footer a.custom_read_more, #sidebar a.custom_read_more, .wp-block-button__link, #footer .wp-block-search .wp-block-search__button, #sidebar .wp-block-search .wp-block-search__button,.bradcrumbs a:hover, .bradcrumbs span, .post-categories li a:hover{
		background: linear-gradient(-90deg, '.esc_attr($vw_landing_page_first_color).', '.esc_attr($vw_landing_page_second_color).');
		}';
	}
	if($vw_landing_page_first_color != false || $vw_landing_page_second_color != false){
		$vw_landing_page_custom_css .='#slider .carousel-caption{
		border-image: linear-gradient(to bottom, '.esc_attr($vw_landing_page_first_color).', '.esc_attr($vw_landing_page_second_color).') 1 100%;
		}';
	}
	if($vw_landing_page_first_color != false || $vw_landing_page_second_color != false){
		$vw_landing_page_custom_css .='#about-section hr,.post-info hr{
		border-image: linear-gradient(to left, '.esc_attr($vw_landing_page_first_color).', '.esc_attr($vw_landing_page_second_color).') 1;
		}';
	}
	if($vw_landing_page_first_color != false || $vw_landing_page_second_color != false){
		$vw_landing_page_custom_css .='#footer h3:after, #footer .wp-block-search .wp-block-search__label:after{
		border-image: linear-gradient(to left, '.esc_attr($vw_landing_page_first_color).', '.esc_attr($vw_landing_page_second_color).') 1;
		}';
	}
	if($vw_landing_page_second_color != false){
		$vw_landing_page_custom_css .='.loader-line{';
			$vw_landing_page_custom_css .='border-color: '.esc_attr($vw_landing_page_second_color).';';
		$vw_landing_page_custom_css .='}';
	}
	
	/*---------------------------Width Layout -------------------*/

	$theme_lay = get_theme_mod( 'vw_landing_page_width_option','Full Width');
    if($theme_lay == 'Boxed'){
		$vw_landing_page_custom_css .='body{';
			$vw_landing_page_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$vw_landing_page_custom_css .='}';
		$vw_landing_page_custom_css .='.scrollup i{';
		  $vw_landing_page_custom_css .='right: 100px;';
		$vw_landing_page_custom_css .='}';
		$vw_landing_page_custom_css .='.scrollup.left i{';
		  $vw_landing_page_custom_css .='left: 100px;';
		$vw_landing_page_custom_css .='}';
	}else if($theme_lay == 'Wide Width'){
		$vw_landing_page_custom_css .='body{';
			$vw_landing_page_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$vw_landing_page_custom_css .='}';
		$vw_landing_page_custom_css .='.scrollup i{';
		  $vw_landing_page_custom_css .='right: 30px;';
		$vw_landing_page_custom_css .='}';
		$vw_landing_page_custom_css .='.scrollup.left i{';
		  $vw_landing_page_custom_css .='left: 30px;';
		$vw_landing_page_custom_css .='}';
	}else if($theme_lay == 'Full Width'){
		$vw_landing_page_custom_css .='body{';
			$vw_landing_page_custom_css .='max-width: 100%;';
		$vw_landing_page_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/

	$theme_lay = get_theme_mod( 'vw_landing_page_slider_opacity_color','0.6');
	if($theme_lay == '0'){
		$vw_landing_page_custom_css .='#slider img{';
			$vw_landing_page_custom_css .='opacity:0';
		$vw_landing_page_custom_css .='}';
		}else if($theme_lay == '0.1'){
		$vw_landing_page_custom_css .='#slider img{';
			$vw_landing_page_custom_css .='opacity:0.1';
		$vw_landing_page_custom_css .='}';
		}else if($theme_lay == '0.2'){
		$vw_landing_page_custom_css .='#slider img{';
			$vw_landing_page_custom_css .='opacity:0.2';
		$vw_landing_page_custom_css .='}';
		}else if($theme_lay == '0.3'){
		$vw_landing_page_custom_css .='#slider img{';
			$vw_landing_page_custom_css .='opacity:0.3';
		$vw_landing_page_custom_css .='}';
		}else if($theme_lay == '0.4'){
		$vw_landing_page_custom_css .='#slider img{';
			$vw_landing_page_custom_css .='opacity:0.4';
		$vw_landing_page_custom_css .='}';
		}else if($theme_lay == '0.5'){
		$vw_landing_page_custom_css .='#slider img{';
			$vw_landing_page_custom_css .='opacity:0.5';
		$vw_landing_page_custom_css .='}';
		}else if($theme_lay == '0.6'){
		$vw_landing_page_custom_css .='#slider img{';
			$vw_landing_page_custom_css .='opacity:0.6';
		$vw_landing_page_custom_css .='}';
		}else if($theme_lay == '0.7'){
		$vw_landing_page_custom_css .='#slider img{';
			$vw_landing_page_custom_css .='opacity:0.7';
		$vw_landing_page_custom_css .='}';
		}else if($theme_lay == '0.8'){
		$vw_landing_page_custom_css .='#slider img{';
			$vw_landing_page_custom_css .='opacity:0.8';
		$vw_landing_page_custom_css .='}';
		}else if($theme_lay == '0.9'){
		$vw_landing_page_custom_css .='#slider img{';
			$vw_landing_page_custom_css .='opacity:0.9';
		$vw_landing_page_custom_css .='}';
		}

	/*---------------------- Slider Image Overlay ------------------------*/

	$vw_landing_page_slider_image_overlay = get_theme_mod('vw_landing_page_slider_image_overlay', true);
	if($vw_landing_page_slider_image_overlay == false){
		$vw_landing_page_custom_css .='#slider img{';
			$vw_landing_page_custom_css .='opacity:1;';
		$vw_landing_page_custom_css .='}';
	}

	$vw_landing_page_slider_image_overlay_color = get_theme_mod('vw_landing_page_slider_image_overlay_color', true);
	if($vw_landing_page_slider_image_overlay_color != false){
		$vw_landing_page_custom_css .='#slider{';
			$vw_landing_page_custom_css .='background-color: '.esc_attr($vw_landing_page_slider_image_overlay_color).';';
		$vw_landing_page_custom_css .='}';
	}

	/*---------------------Slider Content Layout -------------------*/

	$theme_lay = get_theme_mod( 'vw_landing_page_slider_content_option','Left');
    if($theme_lay == 'Left'){
		$vw_landing_page_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$vw_landing_page_custom_css .='text-align:left; left:15%; right:35%;';
		$vw_landing_page_custom_css .='}';
	}else if($theme_lay == 'Center'){
		$vw_landing_page_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$vw_landing_page_custom_css .='text-align:center; left:20%; right:20%;';
		$vw_landing_page_custom_css .='}';
		$vw_landing_page_custom_css .='#slider .carousel-caption{';
			$vw_landing_page_custom_css .='border-left:none;';
		$vw_landing_page_custom_css .='}';
	}else if($theme_lay == 'Right'){
		$vw_landing_page_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$vw_landing_page_custom_css .='text-align:right; left:35%; right:16%;';
		$vw_landing_page_custom_css .='}';
		$vw_landing_page_custom_css .='#slider .carousel-caption{';
			$vw_landing_page_custom_css .='border-left:none; border-right:solid 5px;';
		$vw_landing_page_custom_css .='}';
		$vw_landing_page_custom_css .='#slider .inner_carousel{';
			$vw_landing_page_custom_css .='padding-right: 20px;';
	}

	/*------------- Slider Content Padding Settings ------------------*/

	$vw_landing_page_slider_content_padding_top_bottom = get_theme_mod('vw_landing_page_slider_content_padding_top_bottom');
	$vw_landing_page_slider_content_padding_left_right = get_theme_mod('vw_landing_page_slider_content_padding_left_right');
	if($vw_landing_page_slider_content_padding_top_bottom != false || $vw_landing_page_slider_content_padding_left_right != false){
		$vw_landing_page_custom_css .='#slider .carousel-caption{';
			$vw_landing_page_custom_css .='top: '.esc_attr($vw_landing_page_slider_content_padding_top_bottom).'; bottom: '.esc_attr($vw_landing_page_slider_content_padding_top_bottom).';left: '.esc_attr($vw_landing_page_slider_content_padding_left_right).';right: '.esc_attr($vw_landing_page_slider_content_padding_left_right).';';
		$vw_landing_page_custom_css .='}';
	}

	/*---------------------------Slider Height ------------*/

	$vw_landing_page_slider_height = get_theme_mod('vw_landing_page_slider_height');
	if($vw_landing_page_slider_height != false){
		$vw_landing_page_custom_css .='#slider img{';
			$vw_landing_page_custom_css .='height: '.esc_attr($vw_landing_page_slider_height).';';
		$vw_landing_page_custom_css .='}';
	}

	/*---------------------------Blog Layout -------------------*/

	$theme_lay = get_theme_mod( 'vw_landing_page_blog_layout_option','Default');
    if($theme_lay == 'Default'){
		$vw_landing_page_custom_css .='.post-main-box{';
			$vw_landing_page_custom_css .='';
		$vw_landing_page_custom_css .='}';
	}else if($theme_lay == 'Center'){
		$vw_landing_page_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .content-bttn{';
			$vw_landing_page_custom_css .='text-align:center;';
		$vw_landing_page_custom_css .='}';
		$vw_landing_page_custom_css .='.post-info{';
			$vw_landing_page_custom_css .='margin-top:10px;';
		$vw_landing_page_custom_css .='}';
		$vw_landing_page_custom_css .='.post-info hr{';
			$vw_landing_page_custom_css .='margin:10px auto;';
		$vw_landing_page_custom_css .='}';
	}else if($theme_lay == 'Left'){
		$vw_landing_page_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .content-bttn, #our-services p{';
			$vw_landing_page_custom_css .='text-align:Left;';
		$vw_landing_page_custom_css .='}';
		$vw_landing_page_custom_css .='.post-info hr{';
			$vw_landing_page_custom_css .='margin-bottom:10px;';
		$vw_landing_page_custom_css .='}';
		$vw_landing_page_custom_css .='.post-main-box h2{';
			$vw_landing_page_custom_css .='margin-top:10px;';
		$vw_landing_page_custom_css .='}';
	}

	/*--------------------- Blog Page Posts -------------------*/

	$vw_landing_page_blog_page_posts_settings = get_theme_mod( 'vw_landing_page_blog_page_posts_settings','Into Blocks');
    if($vw_landing_page_blog_page_posts_settings == 'Without Blocks'){
		$vw_landing_page_custom_css .='.post-main-box{';
			$vw_landing_page_custom_css .='box-shadow: none; border: none; margin:30px 0;';
		$vw_landing_page_custom_css .='}';
	}

	// featured image dimention
	$vw_landing_page_blog_post_featured_image_dimension = get_theme_mod('vw_landing_page_blog_post_featured_image_dimension', 'default');
	$vw_landing_page_blog_post_featured_image_custom_width = get_theme_mod('vw_landing_page_blog_post_featured_image_custom_width',250);
	$vw_landing_page_blog_post_featured_image_custom_height = get_theme_mod('vw_landing_page_blog_post_featured_image_custom_height',250);
	if($vw_landing_page_blog_post_featured_image_dimension == 'custom'){
		$vw_landing_page_custom_css .='.box-image img{';
			$vw_landing_page_custom_css .='width: '.esc_attr($vw_landing_page_blog_post_featured_image_custom_width).'; height: '.esc_attr($vw_landing_page_blog_post_featured_image_custom_height).';';
		$vw_landing_page_custom_css .='}';
	}


	/*-------------------Responsive Media -----------------------*/

	$vw_landing_page_resp_topbar = get_theme_mod( 'vw_landing_page_resp_topbar_hide_show',false);
	if($vw_landing_page_resp_topbar == true && get_theme_mod( 'vw_landing_page_topbar_hide_show', false) == false){
    	$vw_landing_page_custom_css .='#topbar{';
			$vw_landing_page_custom_css .='display:none;';
		$vw_landing_page_custom_css .='} ';
	}
    if($vw_landing_page_resp_topbar == true){
    	$vw_landing_page_custom_css .='@media screen and (max-width:575px) {';
		$vw_landing_page_custom_css .='#topbar{';
			$vw_landing_page_custom_css .='display:block;';
		$vw_landing_page_custom_css .='} }';
	}else if($vw_landing_page_resp_topbar == false){
		$vw_landing_page_custom_css .='@media screen and (max-width:575px) {';
		$vw_landing_page_custom_css .='#topbar{';
			$vw_landing_page_custom_css .='display:none;';
		$vw_landing_page_custom_css .='} }';
	}

	$vw_landing_page_resp_stickyheader = get_theme_mod( 'vw_landing_page_stickyheader_hide_show',false);
	if($vw_landing_page_resp_stickyheader == true && get_theme_mod( 'vw_landing_page_sticky_header',false) != true){
    	$vw_landing_page_custom_css .='.header-fixed{';
			$vw_landing_page_custom_css .='position:static;';
		$vw_landing_page_custom_css .='} ';
	}
    if($vw_landing_page_resp_stickyheader == true){
    	$vw_landing_page_custom_css .='@media screen and (max-width:575px) {';
		$vw_landing_page_custom_css .='.header-fixed{';
			$vw_landing_page_custom_css .='position:fixed;';
		$vw_landing_page_custom_css .='} }';
	}else if($vw_landing_page_resp_stickyheader == false){
		$vw_landing_page_custom_css .='@media screen and (max-width:575px){';
		$vw_landing_page_custom_css .='.header-fixed{';
			$vw_landing_page_custom_css .='position:static;';
		$vw_landing_page_custom_css .='} }';
	}

	$vw_landing_page_resp_slider = get_theme_mod( 'vw_landing_page_resp_slider_hide_show',false);
	if($vw_landing_page_resp_slider == true && get_theme_mod( 'vw_landing_page_slider_hide_show', false) == false){
    	$vw_landing_page_custom_css .='#slider{';
			$vw_landing_page_custom_css .='display:none;';
		$vw_landing_page_custom_css .='} ';
	}
    if($vw_landing_page_resp_slider == true){
    	$vw_landing_page_custom_css .='@media screen and (max-width:575px) {';
		$vw_landing_page_custom_css .='#slider{';
			$vw_landing_page_custom_css .='display:block;';
		$vw_landing_page_custom_css .='} }';
	}else if($vw_landing_page_resp_slider == false){
		$vw_landing_page_custom_css .='@media screen and (max-width:575px) {';
		$vw_landing_page_custom_css .='#slider{';
			$vw_landing_page_custom_css .='display:none;';
		$vw_landing_page_custom_css .='} }';
	}

	$vw_landing_page_resp_sidebar = get_theme_mod( 'vw_landing_page_sidebar_hide_show',true);
    if($vw_landing_page_resp_sidebar == true){
    	$vw_landing_page_custom_css .='@media screen and (max-width:575px) {';
		$vw_landing_page_custom_css .='#sidebar{';
			$vw_landing_page_custom_css .='display:block;';
		$vw_landing_page_custom_css .='} }';
	}else if($vw_landing_page_resp_sidebar == false){
		$vw_landing_page_custom_css .='@media screen and (max-width:575px) {';
		$vw_landing_page_custom_css .='#sidebar{';
			$vw_landing_page_custom_css .='display:none;';
		$vw_landing_page_custom_css .='} }';
	}

	$vw_landing_page_resp_scroll_top = get_theme_mod( 'vw_landing_page_resp_scroll_top_hide_show',true);
	if($vw_landing_page_resp_scroll_top == true && get_theme_mod( 'vw_landing_page_hide_show_scroll',true) != true){
    	$vw_landing_page_custom_css .='.scrollup i{';
			$vw_landing_page_custom_css .='visibility:hidden !important;';
		$vw_landing_page_custom_css .='} ';
	}
    if($vw_landing_page_resp_scroll_top == true){
    	$vw_landing_page_custom_css .='@media screen and (max-width:575px) {';
		$vw_landing_page_custom_css .='.scrollup i{';
			$vw_landing_page_custom_css .='visibility:visible !important;';
		$vw_landing_page_custom_css .='} }';
	}else if($vw_landing_page_resp_scroll_top == false){
		$vw_landing_page_custom_css .='@media screen and (max-width:575px){';
		$vw_landing_page_custom_css .='.scrollup i{';
			$vw_landing_page_custom_css .='visibility:hidden !important;';
		$vw_landing_page_custom_css .='} }';
	}

	$vw_landing_page_resp_menu_toggle_btn_bg_color = get_theme_mod('vw_landing_page_resp_menu_toggle_btn_bg_color');
	if($vw_landing_page_resp_menu_toggle_btn_bg_color != false){
		$vw_landing_page_custom_css .='.toggle-nav i{';
			$vw_landing_page_custom_css .='background-color: '.esc_attr($vw_landing_page_resp_menu_toggle_btn_bg_color).';';
		$vw_landing_page_custom_css .='}';
	}

	/*------------- Top Bar Settings ------------------*/

	$vw_landing_page_topbar_padding_top_bottom = get_theme_mod('vw_landing_page_topbar_padding_top_bottom');
	if($vw_landing_page_topbar_padding_top_bottom != false){
		$vw_landing_page_custom_css .='#topbar{';
			$vw_landing_page_custom_css .='padding-top: '.esc_attr($vw_landing_page_topbar_padding_top_bottom).'; padding-bottom: '.esc_attr($vw_landing_page_topbar_padding_top_bottom).';';
		$vw_landing_page_custom_css .='}';
	}

	$vw_landing_page_navigation_menu_font_size = get_theme_mod('vw_landing_page_navigation_menu_font_size');
	if($vw_landing_page_navigation_menu_font_size != false){
		$vw_landing_page_custom_css .='.main-navigation a{';
			$vw_landing_page_custom_css .='font-size: '.esc_attr($vw_landing_page_navigation_menu_font_size).';';
		$vw_landing_page_custom_css .='}';
	}

	$vw_landing_page_header_menus_color = get_theme_mod('vw_landing_page_header_menus_color');
	if($vw_landing_page_header_menus_color != false){
		$vw_landing_page_custom_css .='.main-navigation a{';
			$vw_landing_page_custom_css .='color: '.esc_attr($vw_landing_page_header_menus_color).';';
		$vw_landing_page_custom_css .='}';
	}

	$vw_landing_page_header_menus_hover_color = get_theme_mod('vw_landing_page_header_menus_hover_color');
	if($vw_landing_page_header_menus_hover_color != false){
		$vw_landing_page_custom_css .='.main-navigation a:hover{';
			$vw_landing_page_custom_css .='color: '.esc_attr($vw_landing_page_header_menus_hover_color).';';
		$vw_landing_page_custom_css .='}';
	}

	$vw_landing_page_header_submenus_color = get_theme_mod('vw_landing_page_header_submenus_color');
	if($vw_landing_page_header_submenus_color != false){
		$vw_landing_page_custom_css .='.main-navigation ul ul a{';
			$vw_landing_page_custom_css .='color: '.esc_attr($vw_landing_page_header_submenus_color).';';
		$vw_landing_page_custom_css .='}';
	}

	$vw_landing_page_header_submenus_hover_color = get_theme_mod('vw_landing_page_header_submenus_hover_color');
	if($vw_landing_page_header_submenus_hover_color != false){
		$vw_landing_page_custom_css .='.main-navigation ul.sub-menu a:hover{';
			$vw_landing_page_custom_css .='color: '.esc_attr($vw_landing_page_header_submenus_hover_color).';';
		$vw_landing_page_custom_css .='}';
	}

	$vw_landing_page_menus_item = get_theme_mod( 'vw_landing_page_menus_item_style','None');
    if($vw_landing_page_menus_item == 'None'){
		$vw_landing_page_custom_css .='.main-navigation a{';
			$vw_landing_page_custom_css .='';
		$vw_landing_page_custom_css .='}';
	}else if($vw_landing_page_menus_item == 'Zoom In'){
		$vw_landing_page_custom_css .='.main-navigation a:hover{';
			$vw_landing_page_custom_css .='transition: all 0.3s ease-in-out !important; transform: scale(1.2) !important; color: #de40bb;';
		$vw_landing_page_custom_css .='}';
	}

	$vw_landing_page_navigation_menu_font_weight = get_theme_mod('vw_landing_page_navigation_menu_font_weight','600');
	if($vw_landing_page_navigation_menu_font_weight != false){
		$vw_landing_page_custom_css .='.main-navigation a{';
			$vw_landing_page_custom_css .='font-weight: '.esc_attr($vw_landing_page_navigation_menu_font_weight).';';
		$vw_landing_page_custom_css .='}';
	}

	$vw_landing_page_theme_lay = get_theme_mod( 'vw_landing_page_menu_text_transform','Uppercase');
	if($vw_landing_page_theme_lay == 'Capitalize'){
		$vw_landing_page_custom_css .='.main-navigation a{';
			$vw_landing_page_custom_css .='text-transform:Capitalize;';
		$vw_landing_page_custom_css .='}';
	}
	if($vw_landing_page_theme_lay == 'Lowercase'){
		$vw_landing_page_custom_css .='.main-navigation a{';
			$vw_landing_page_custom_css .='text-transform:Lowercase;';
		$vw_landing_page_custom_css .='}';
	}
	if($vw_landing_page_theme_lay == 'Uppercase'){
		$vw_landing_page_custom_css .='.main-navigation a{';
			$vw_landing_page_custom_css .='text-transform:Uppercase;';
		$vw_landing_page_custom_css .='}';
	}

	/*-------------- Sticky Header Padding ----------------*/

	$vw_landing_page_sticky_header_padding = get_theme_mod('vw_landing_page_sticky_header_padding');
	if($vw_landing_page_sticky_header_padding != false){
		$vw_landing_page_custom_css .='.header-fixed{';
			$vw_landing_page_custom_css .='padding: '.esc_attr($vw_landing_page_sticky_header_padding).';';
		$vw_landing_page_custom_css .='}';
	}

	/*------------------ Search Settings -----------------*/
	
	$vw_landing_page_search_padding_top_bottom = get_theme_mod('vw_landing_page_search_padding_top_bottom');
	$vw_landing_page_search_padding_left_right = get_theme_mod('vw_landing_page_search_padding_left_right');
	$vw_landing_page_search_font_size = get_theme_mod('vw_landing_page_search_font_size');
	$vw_landing_page_search_border_radius = get_theme_mod('vw_landing_page_search_border_radius');
	if($vw_landing_page_search_padding_top_bottom != false || $vw_landing_page_search_padding_left_right != false || $vw_landing_page_search_font_size != false || $vw_landing_page_search_border_radius != false){
		$vw_landing_page_custom_css .='.search-box i{';
			$vw_landing_page_custom_css .='padding-top: '.esc_attr($vw_landing_page_search_padding_top_bottom).'; padding-bottom: '.esc_attr($vw_landing_page_search_padding_top_bottom).';padding-left: '.esc_attr($vw_landing_page_search_padding_left_right).';padding-right: '.esc_attr($vw_landing_page_search_padding_left_right).';font-size: '.esc_attr($vw_landing_page_search_font_size).';border-radius: '.esc_attr($vw_landing_page_search_border_radius).'px;';
		$vw_landing_page_custom_css .='}';
	}

	/*---------------- Button Settings ------------------*/

	$vw_landing_page_button_padding_top_bottom = get_theme_mod('vw_landing_page_button_padding_top_bottom');
	$vw_landing_page_button_padding_left_right = get_theme_mod('vw_landing_page_button_padding_left_right');
	if($vw_landing_page_button_padding_top_bottom != false || $vw_landing_page_button_padding_left_right != false){
		$vw_landing_page_custom_css .='.post-main-box .view-more{';
			$vw_landing_page_custom_css .='padding-top: '.esc_attr($vw_landing_page_button_padding_top_bottom).'; padding-bottom: '.esc_attr($vw_landing_page_button_padding_top_bottom).';padding-left: '.esc_attr($vw_landing_page_button_padding_left_right).';padding-right: '.esc_attr($vw_landing_page_button_padding_left_right).';';
		$vw_landing_page_custom_css .='}';
	}

	$vw_landing_page_button_border_radius = get_theme_mod('vw_landing_page_button_border_radius');
	if($vw_landing_page_button_border_radius != false){
		$vw_landing_page_custom_css .='.post-main-box .view-more{';
			$vw_landing_page_custom_css .='border-radius: '.esc_attr($vw_landing_page_button_border_radius).'px;';
		$vw_landing_page_custom_css .='}';
	}

	$vw_landing_page_button_font_size = get_theme_mod('vw_landing_page_button_font_size',14);
	$vw_landing_page_custom_css .='.post-main-box .view-more{';
		$vw_landing_page_custom_css .='font-size: '.esc_attr($vw_landing_page_button_font_size).';';
	$vw_landing_page_custom_css .='}';

	$vw_landing_page_theme_lay = get_theme_mod( 'vw_landing_page_button_text_transform','Uppercase');
	if($vw_landing_page_theme_lay == 'Capitalize'){
		$vw_landing_page_custom_css .='.post-main-box .view-more{';
			$vw_landing_page_custom_css .='text-transform:Capitalize;';
		$vw_landing_page_custom_css .='}';
	}
	if($vw_landing_page_theme_lay == 'Lowercase'){
		$vw_landing_page_custom_css .='.post-main-box .view-more{';
			$vw_landing_page_custom_css .='text-transform:Lowercase;';
		$vw_landing_page_custom_css .='}';
	}
	if($vw_landing_page_theme_lay == 'Uppercase'){ 
		$vw_landing_page_custom_css .='.post-main-box .view-more{';
			$vw_landing_page_custom_css .='text-transform:Uppercase;';
		$vw_landing_page_custom_css .='}';
	}

	$vw_landing_page_button_letter_spacing = get_theme_mod('vw_landing_page_button_letter_spacing',14);
	$vw_landing_page_custom_css .='.post-main-box .view-more{';
		$vw_landing_page_custom_css .='letter-spacing: '.esc_attr($vw_landing_page_button_letter_spacing).';';
	$vw_landing_page_custom_css .='}';

	/*------------- Single Blog Page------------------*/

	$vw_landing_page_featured_image_border_radius = get_theme_mod('vw_landing_page_featured_image_border_radius', 0);
	if($vw_landing_page_featured_image_border_radius != false){
		$vw_landing_page_custom_css .='.box-image img, .feature-box img{';
			$vw_landing_page_custom_css .='border-radius: '.esc_attr($vw_landing_page_featured_image_border_radius).'px;';
		$vw_landing_page_custom_css .='}';
	}

	$vw_landing_page_featured_image_box_shadow = get_theme_mod('vw_landing_page_featured_image_box_shadow',0);
	if($vw_landing_page_featured_image_box_shadow != false){
		$vw_landing_page_custom_css .='.box-image img, .feature-box img, #content-vw img{';
			$vw_landing_page_custom_css .='box-shadow: '.esc_attr($vw_landing_page_featured_image_box_shadow).'px '.esc_attr($vw_landing_page_featured_image_box_shadow).'px '.esc_attr($vw_landing_page_featured_image_box_shadow).'px #cccccc;';
		$vw_landing_page_custom_css .='}';
	}

	$vw_landing_page_single_blog_post_navigation_show_hide = get_theme_mod('vw_landing_page_single_blog_post_navigation_show_hide',true);
	if($vw_landing_page_single_blog_post_navigation_show_hide != true){
		$vw_landing_page_custom_css .='.post-navigation{';
			$vw_landing_page_custom_css .='display: none;';
		$vw_landing_page_custom_css .='}';
	}

	$vw_landing_page_single_blog_comment_title = get_theme_mod('vw_landing_page_single_blog_comment_title', 'Leave a Reply');
	if($vw_landing_page_single_blog_comment_title == ''){
		$vw_landing_page_custom_css .='#comments h2#reply-title {';
			$vw_landing_page_custom_css .='display: none;';
		$vw_landing_page_custom_css .='}';
	}

	$vw_landing_page_single_blog_comment_button_text = get_theme_mod('vw_landing_page_single_blog_comment_button_text', 'Post Comment');
	if($vw_landing_page_single_blog_comment_button_text == ''){
		$vw_landing_page_custom_css .='#comments p.form-submit {';
			$vw_landing_page_custom_css .='display: none;';
		$vw_landing_page_custom_css .='}';
	}

	$vw_landing_page_comment_width = get_theme_mod('vw_landing_page_single_blog_comment_width');
	if($vw_landing_page_comment_width != false){
		$vw_landing_page_custom_css .='#comments textarea{';
			$vw_landing_page_custom_css .='width: '.esc_attr($vw_landing_page_comment_width).';';
		$vw_landing_page_custom_css .='}';
	}

	/*-------------- Copyright Alignment ----------------*/

	$vw_landing_page_copyright_background_color_first = get_theme_mod('vw_landing_page_copyright_background_color_first');

	$vw_landing_page_copyright_background_color_second = get_theme_mod('vw_landing_page_copyright_background_color_second');

	if($vw_landing_page_copyright_background_color_first != false || $vw_landing_page_copyright_background_color_second != false){
		$vw_landing_page_custom_css .='#footer-2{
		background-image: linear-gradient(90deg, '.esc_attr($vw_landing_page_copyright_background_color_first).' 0%, '.esc_attr($vw_landing_page_copyright_background_color_second).' 100%);
		}';
	}
	
	$vw_landing_page_footer_widgets_heading = get_theme_mod( 'vw_landing_page_footer_widgets_heading','Left');
    if($vw_landing_page_footer_widgets_heading == 'Left'){
		$vw_landing_page_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
		$vw_landing_page_custom_css .='text-align: left;';
		$vw_landing_page_custom_css .='}';
	}else if($vw_landing_page_footer_widgets_heading == 'Center'){
		$vw_landing_page_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
			$vw_landing_page_custom_css .='text-align: center; position:relative;';
		$vw_landing_page_custom_css .='}';
		$vw_landing_page_custom_css .='#footer h3:after, #footer .wp-block-search .wp-block-search__label:after{';
			$vw_landing_page_custom_css .='margin: 0 auto;';
		$vw_landing_page_custom_css .='}';
	}else if($vw_landing_page_footer_widgets_heading == 'Right'){
		$vw_landing_page_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
			$vw_landing_page_custom_css .='text-align: right; position:relative;';
		$vw_landing_page_custom_css .='}';
		$vw_landing_page_custom_css .='#footer h3:after, #footer .wp-block-search .wp-block-search__label:after{';
			$vw_landing_page_custom_css .='margin-left: auto;';
		$vw_landing_page_custom_css .='}';
	}

	$vw_landing_page_footer_widgets_content = get_theme_mod( 'vw_landing_page_footer_widgets_content','Left');
    if($vw_landing_page_footer_widgets_content == 'Left'){
		$vw_landing_page_custom_css .='#footer .widget{';
		$vw_landing_page_custom_css .='text-align: left;';
		$vw_landing_page_custom_css .='}';
	}else if($vw_landing_page_footer_widgets_content == 'Center'){
		$vw_landing_page_custom_css .='#footer .widget{';
			$vw_landing_page_custom_css .='text-align: center;';
		$vw_landing_page_custom_css .='}';
	}else if($vw_landing_page_footer_widgets_content == 'Right'){
		$vw_landing_page_custom_css .='#footer .widget{';
			$vw_landing_page_custom_css .='text-align: right;';
		$vw_landing_page_custom_css .='}';
	}

	$vw_landing_page_footer_background_color = get_theme_mod('vw_landing_page_footer_background_color');
	if($vw_landing_page_footer_background_color != false){
		$vw_landing_page_custom_css .='#footer{';
			$vw_landing_page_custom_css .='background-color: '.esc_attr($vw_landing_page_footer_background_color).';';
		$vw_landing_page_custom_css .='}';
	}

	$vw_landing_page_copyright_font_size = get_theme_mod('vw_landing_page_copyright_font_size');
	if($vw_landing_page_copyright_font_size != false){
		$vw_landing_page_custom_css .='.copyright p{';
			$vw_landing_page_custom_css .='font-size: '.esc_attr($vw_landing_page_copyright_font_size).';';
		$vw_landing_page_custom_css .='}';
	}

	$vw_landing_page_copyright_padding_top_bottom = get_theme_mod('vw_landing_page_copyright_padding_top_bottom');
	if($vw_landing_page_copyright_padding_top_bottom != false){
		$vw_landing_page_custom_css .='#footer-2{';
			$vw_landing_page_custom_css .='padding-top: '.esc_attr($vw_landing_page_copyright_padding_top_bottom).'; padding-bottom: '.esc_attr($vw_landing_page_copyright_padding_top_bottom).';';
		$vw_landing_page_custom_css .='}';
	}

	$vw_landing_page_copyright_alignment = get_theme_mod('vw_landing_page_copyright_alignment');
	if($vw_landing_page_copyright_alignment != false){
		$vw_landing_page_custom_css .='.copyright p{';
			$vw_landing_page_custom_css .='text-align: '.esc_attr($vw_landing_page_copyright_alignment).';';
		$vw_landing_page_custom_css .='}';
	}

	$vw_landing_page_footer_padding = get_theme_mod('vw_landing_page_footer_padding');
	if($vw_landing_page_footer_padding != false){
		$vw_landing_page_custom_css .='#footer {';
			$vw_landing_page_custom_css .='padding: '.esc_attr($vw_landing_page_footer_padding).' 0;';
		$vw_landing_page_custom_css .='}';
	}

	$vw_landing_page_footer_icon = get_theme_mod('vw_landing_page_footer_icon');
	if($vw_landing_page_footer_icon == false){
		$vw_landing_page_custom_css .='.copyright p{';
			$vw_landing_page_custom_css .='width:100%; text-align:center; float:none;';
		$vw_landing_page_custom_css .='}';
	}

	$vw_landing_page_footer_background_image = get_theme_mod('vw_landing_page_footer_background_image');
	if($vw_landing_page_footer_background_image != false){
		$vw_landing_page_custom_css .='#footer{';
			$vw_landing_page_custom_css .='background: url('.esc_attr($vw_landing_page_footer_background_image).');';
		$vw_landing_page_custom_css .='}';
	}

	$vw_landing_page_theme_lay = get_theme_mod( 'vw_landing_page_img_footer','scroll');
	if($vw_landing_page_theme_lay == 'fixed'){
		$vw_landing_page_custom_css .='#footer{';
			$vw_landing_page_custom_css .='background-attachment: fixed !important;';
		$vw_landing_page_custom_css .='}';
	}elseif ($vw_landing_page_theme_lay == 'scroll'){
		$vw_landing_page_custom_css .='#footer{';
			$vw_landing_page_custom_css .='background-attachment: scroll !important;';
		$vw_landing_page_custom_css .='}';
	}

	$vw_landing_page_footer_img_position = get_theme_mod('vw_landing_page_footer_img_position','center center');
	if($vw_landing_page_footer_img_position != false){
		$vw_landing_page_custom_css .='#footer{';
			$vw_landing_page_custom_css .='background-position: '.esc_attr($vw_landing_page_footer_img_position).'!important;';
		$vw_landing_page_custom_css .='}';
	} 
	/*----------------Sroll to top Settings ------------------*/

	$vw_landing_page_scroll_to_top_font_size = get_theme_mod('vw_landing_page_scroll_to_top_font_size');
	if($vw_landing_page_scroll_to_top_font_size != false){
		$vw_landing_page_custom_css .='.scrollup i{';
			$vw_landing_page_custom_css .='font-size: '.esc_attr($vw_landing_page_scroll_to_top_font_size).';';
		$vw_landing_page_custom_css .='}';
	}

	$vw_landing_page_scroll_to_top_padding = get_theme_mod('vw_landing_page_scroll_to_top_padding');
	$vw_landing_page_scroll_to_top_padding = get_theme_mod('vw_landing_page_scroll_to_top_padding');
	if($vw_landing_page_scroll_to_top_padding != false){
		$vw_landing_page_custom_css .='.scrollup i{';
			$vw_landing_page_custom_css .='padding-top: '.esc_attr($vw_landing_page_scroll_to_top_padding).';padding-bottom: '.esc_attr($vw_landing_page_scroll_to_top_padding).';';
		$vw_landing_page_custom_css .='}';
	}

	$vw_landing_page_scroll_to_top_width = get_theme_mod('vw_landing_page_scroll_to_top_width');
	if($vw_landing_page_scroll_to_top_width != false){
		$vw_landing_page_custom_css .='.scrollup i{';
			$vw_landing_page_custom_css .='width: '.esc_attr($vw_landing_page_scroll_to_top_width).';';
		$vw_landing_page_custom_css .='}';
	}

	$vw_landing_page_scroll_to_top_height = get_theme_mod('vw_landing_page_scroll_to_top_height');
	if($vw_landing_page_scroll_to_top_height != false){
		$vw_landing_page_custom_css .='.scrollup i{';
			$vw_landing_page_custom_css .='height: '.esc_attr($vw_landing_page_scroll_to_top_height).';';
		$vw_landing_page_custom_css .='}';
	}

	$vw_landing_page_scroll_to_top_border_radius = get_theme_mod('vw_landing_page_scroll_to_top_border_radius');
	if($vw_landing_page_scroll_to_top_border_radius != false){
		$vw_landing_page_custom_css .='.scrollup i{';
			$vw_landing_page_custom_css .='border-radius: '.esc_attr($vw_landing_page_scroll_to_top_border_radius).'px;';
		$vw_landing_page_custom_css .='}';
	}

	/*----------------Social Icons Settings ------------------*/

	$vw_landing_page_social_icon_font_size = get_theme_mod('vw_landing_page_social_icon_font_size');
	if($vw_landing_page_social_icon_font_size != false){
		$vw_landing_page_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$vw_landing_page_custom_css .='font-size: '.esc_attr($vw_landing_page_social_icon_font_size).';';
		$vw_landing_page_custom_css .='}';
	}

	$vw_landing_page_social_icon_padding = get_theme_mod('vw_landing_page_social_icon_padding');
	if($vw_landing_page_social_icon_padding != false){
		$vw_landing_page_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$vw_landing_page_custom_css .='padding: '.esc_attr($vw_landing_page_social_icon_padding).';';
		$vw_landing_page_custom_css .='}';
	}

	$vw_landing_page_social_icon_width = get_theme_mod('vw_landing_page_social_icon_width');
	if($vw_landing_page_social_icon_width != false){
		$vw_landing_page_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$vw_landing_page_custom_css .='width: '.esc_attr($vw_landing_page_social_icon_width).';';
		$vw_landing_page_custom_css .='}';
	}

	$vw_landing_page_social_icon_height = get_theme_mod('vw_landing_page_social_icon_height');
	if($vw_landing_page_social_icon_height != false){
		$vw_landing_page_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$vw_landing_page_custom_css .='height: '.esc_attr($vw_landing_page_social_icon_height).';';
		$vw_landing_page_custom_css .='}';
	}

	$vw_landing_page_social_icon_border_radius = get_theme_mod('vw_landing_page_social_icon_border_radius');
	if($vw_landing_page_social_icon_border_radius != false){
		$vw_landing_page_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$vw_landing_page_custom_css .='border-radius: '.esc_attr($vw_landing_page_social_icon_border_radius).'px;';
		$vw_landing_page_custom_css .='}';
	}

	/*----------------Woocommerce Products Settings ------------------*/

	$vw_landing_page_products_padding_top_bottom = get_theme_mod('vw_landing_page_products_padding_top_bottom');
	if($vw_landing_page_products_padding_top_bottom != false){
		$vw_landing_page_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$vw_landing_page_custom_css .='padding-top: '.esc_attr($vw_landing_page_products_padding_top_bottom).'!important; padding-bottom: '.esc_attr($vw_landing_page_products_padding_top_bottom).'!important;';
		$vw_landing_page_custom_css .='}';
	}

	$vw_landing_page_products_padding_left_right = get_theme_mod('vw_landing_page_products_padding_left_right');
	if($vw_landing_page_products_padding_left_right != false){
		$vw_landing_page_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$vw_landing_page_custom_css .='padding-left: '.esc_attr($vw_landing_page_products_padding_left_right).'!important; padding-right: '.esc_attr($vw_landing_page_products_padding_left_right).'!important;';
		$vw_landing_page_custom_css .='}';
	}

	$vw_landing_page_products_box_shadow = get_theme_mod('vw_landing_page_products_box_shadow');
	if($vw_landing_page_products_box_shadow != false){
		$vw_landing_page_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
				$vw_landing_page_custom_css .='box-shadow: '.esc_attr($vw_landing_page_products_box_shadow).'px '.esc_attr($vw_landing_page_products_box_shadow).'px '.esc_attr($vw_landing_page_products_box_shadow).'px #ddd;';
		$vw_landing_page_custom_css .='}';
	}

	$vw_landing_page_products_border_radius = get_theme_mod('vw_landing_page_products_border_radius', 0);
	if($vw_landing_page_products_border_radius != false){
		$vw_landing_page_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$vw_landing_page_custom_css .='border-radius: '.esc_attr($vw_landing_page_products_border_radius).'px;';
		$vw_landing_page_custom_css .='}';
	}

	$vw_landing_page_products_btn_padding_top_bottom = get_theme_mod('vw_landing_page_products_btn_padding_top_bottom');
	if($vw_landing_page_products_btn_padding_top_bottom != false){
		$vw_landing_page_custom_css .='.woocommerce a.button{';
			$vw_landing_page_custom_css .='padding-top: '.esc_attr($vw_landing_page_products_btn_padding_top_bottom).' !important; padding-bottom: '.esc_attr($vw_landing_page_products_btn_padding_top_bottom).' !important;';
		$vw_landing_page_custom_css .='}';
	}

	$vw_landing_page_products_btn_padding_left_right = get_theme_mod('vw_landing_page_products_btn_padding_left_right');
	if($vw_landing_page_products_btn_padding_left_right != false){
		$vw_landing_page_custom_css .='.woocommerce a.button{';
			$vw_landing_page_custom_css .='padding-left: '.esc_attr($vw_landing_page_products_btn_padding_left_right).' !important; padding-right: '.esc_attr($vw_landing_page_products_btn_padding_left_right).' !important;';
		$vw_landing_page_custom_css .='}';
	}

	$vw_landing_page_products_button_border_radius = get_theme_mod('vw_landing_page_products_button_border_radius', 0);
	if($vw_landing_page_products_button_border_radius != false){
		$vw_landing_page_custom_css .='.woocommerce ul.products li.product .button, a.checkout-button.button.alt.wc-forward,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
			$vw_landing_page_custom_css .='border-radius: '.esc_attr($vw_landing_page_products_button_border_radius).'px;';
		$vw_landing_page_custom_css .='}';
	}

	$vw_landing_page_woocommerce_sale_position = get_theme_mod( 'vw_landing_page_woocommerce_sale_position','right');
    if($vw_landing_page_woocommerce_sale_position == 'left'){
		$vw_landing_page_custom_css .='.woocommerce ul.products li.product .onsale{';
			$vw_landing_page_custom_css .='left: -10px; right: auto;';
		$vw_landing_page_custom_css .='}';
	}else if($vw_landing_page_woocommerce_sale_position == 'right'){
		$vw_landing_page_custom_css .='.woocommerce ul.products li.product .onsale{';
			$vw_landing_page_custom_css .='left: auto; right: 0;';
		$vw_landing_page_custom_css .='}';
	}

	$vw_landing_page_woocommerce_sale_font_size = get_theme_mod('vw_landing_page_woocommerce_sale_font_size');
	if($vw_landing_page_woocommerce_sale_font_size != false){
		$vw_landing_page_custom_css .='.woocommerce span.onsale{';
			$vw_landing_page_custom_css .='font-size: '.esc_attr($vw_landing_page_woocommerce_sale_font_size).';';
		$vw_landing_page_custom_css .='}';
	}

	$vw_landing_page_woocommerce_sale_border_radius = get_theme_mod('vw_landing_page_woocommerce_sale_border_radius', 0);
	if($vw_landing_page_woocommerce_sale_border_radius != false){
		$vw_landing_page_custom_css .='.woocommerce span.onsale{';
			$vw_landing_page_custom_css .='border-radius: '.esc_attr($vw_landing_page_woocommerce_sale_border_radius).'px;';
		$vw_landing_page_custom_css .='}';
	}

	/*------------------ Logo  -------------------*/

	// Site title Font Size
	$vw_landing_page_site_title_font_size = get_theme_mod('vw_landing_page_site_title_font_size');
	if($vw_landing_page_site_title_font_size != false){
		$vw_landing_page_custom_css .='.logo h1, .logo p.site-title{';
			$vw_landing_page_custom_css .='font-size: '.esc_attr($vw_landing_page_site_title_font_size).';';
		$vw_landing_page_custom_css .='}';
	}

	// Site tagline Font Size
	$vw_landing_page_site_tagline_font_size = get_theme_mod('vw_landing_page_site_tagline_font_size');
	if($vw_landing_page_site_tagline_font_size != false){
		$vw_landing_page_custom_css .='.logo p.site-description{';
			$vw_landing_page_custom_css .='font-size: '.esc_attr($vw_landing_page_site_tagline_font_size).';';
		$vw_landing_page_custom_css .='}';
	}

	$vw_landing_page_logo_padding = get_theme_mod('vw_landing_page_logo_padding');
	if($vw_landing_page_logo_padding != false){
		$vw_landing_page_custom_css .='.logo{';
			$vw_landing_page_custom_css .='padding: '.esc_attr($vw_landing_page_logo_padding).';';
		$vw_landing_page_custom_css .='}';
	}

	$vw_landing_page_logo_margin = get_theme_mod('vw_landing_page_logo_margin');
	if($vw_landing_page_logo_margin != false){
		$vw_landing_page_custom_css .='.logo{';
			$vw_landing_page_custom_css .='margin: '.esc_attr($vw_landing_page_logo_margin).';';
		$vw_landing_page_custom_css .='}';
	}

	$vw_landing_page_site_title_color = get_theme_mod('vw_landing_page_site_title_color');
	if($vw_landing_page_site_title_color != false){
		$vw_landing_page_custom_css .='p.site-title a{';
			$vw_landing_page_custom_css .='color: '.esc_attr($vw_landing_page_site_title_color).'!important;';
		$vw_landing_page_custom_css .='}';
	}

	$vw_landing_page_site_tagline_color = get_theme_mod('vw_landing_page_site_tagline_color');
	if($vw_landing_page_site_tagline_color != false){
		$vw_landing_page_custom_css .='.logo p.site-description{';
			$vw_landing_page_custom_css .='color: '.esc_attr($vw_landing_page_site_tagline_color).';';
		$vw_landing_page_custom_css .='}';
	}

	$vw_landing_page_logo_width = get_theme_mod('vw_landing_page_logo_width');
	if($vw_landing_page_logo_width != false){
		$vw_landing_page_custom_css .='.logo img{';
			$vw_landing_page_custom_css .='width: '.esc_attr($vw_landing_page_logo_width).';';
		$vw_landing_page_custom_css .='}';
	}

	$vw_landing_page_logo_height = get_theme_mod('vw_landing_page_logo_height');
	if($vw_landing_page_logo_height != false){
		$vw_landing_page_custom_css .='.logo img{';
			$vw_landing_page_custom_css .='height: '.esc_attr($vw_landing_page_logo_height).';';
		$vw_landing_page_custom_css .='}';
	}

	// Woocommerce img

	$vw_landing_page_shop_featured_image_border_radius = get_theme_mod('vw_landing_page_shop_featured_image_border_radius', 0);
	if($vw_landing_page_shop_featured_image_border_radius != false){
		$vw_landing_page_custom_css .='.woocommerce ul.products li.product a img{';
			$vw_landing_page_custom_css .='border-radius: '.esc_attr($vw_landing_page_shop_featured_image_border_radius).'px;';
		$vw_landing_page_custom_css .='}';
	}

	$vw_landing_page_shop_featured_image_box_shadow = get_theme_mod('vw_landing_page_shop_featured_image_box_shadow');
	if($vw_landing_page_shop_featured_image_box_shadow != false){
		$vw_landing_page_custom_css .='.woocommerce ul.products li.product a img{';
				$vw_landing_page_custom_css .='box-shadow: '.esc_attr($vw_landing_page_shop_featured_image_box_shadow).'px '.esc_attr($vw_landing_page_shop_featured_image_box_shadow).'px '.esc_attr($vw_landing_page_shop_featured_image_box_shadow).'px #ddd;';
		$vw_landing_page_custom_css .='}';
	}

	/*------------------ Preloader Background Color  -------------------*/

	$vw_landing_page_preloader_bg_color = get_theme_mod('vw_landing_page_preloader_bg_color');
	if($vw_landing_page_preloader_bg_color != false){
		$vw_landing_page_custom_css .='#preloader{';
			$vw_landing_page_custom_css .='background-color: '.esc_attr($vw_landing_page_preloader_bg_color).';';
		$vw_landing_page_custom_css .='}';
	}

	$vw_landing_page_preloader_border_color = get_theme_mod('vw_landing_page_preloader_border_color');
	if($vw_landing_page_preloader_border_color != false){
		$vw_landing_page_custom_css .='.loader-line{';
			$vw_landing_page_custom_css .='border-color: '.esc_attr($vw_landing_page_preloader_border_color).'!important;';
		$vw_landing_page_custom_css .='}';
	}

	$vw_landing_page_preloader_bg_img = get_theme_mod('vw_landing_page_preloader_bg_img');
	if($vw_landing_page_preloader_bg_img != false){
		$vw_landing_page_custom_css .='#preloader{';
			$vw_landing_page_custom_css .='background: url('.esc_attr($vw_landing_page_preloader_bg_img).');-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;';
		$vw_landing_page_custom_css .='}';
	}

	// Header Background Color
	$vw_landing_page_header_background_color = get_theme_mod('vw_landing_page_header_background_color');
	if($vw_landing_page_header_background_color != false){
		$vw_landing_page_custom_css .='.main-header{';
			$vw_landing_page_custom_css .='background-color: '.esc_attr($vw_landing_page_header_background_color).';';
		$vw_landing_page_custom_css .='}';
	}

	$vw_landing_page_header_img_position = get_theme_mod('vw_landing_page_header_img_position','center top');
	if($vw_landing_page_header_img_position != false){
		$vw_landing_page_custom_css .='.home-page-header{';
			$vw_landing_page_custom_css .='background-position: '.esc_attr($vw_landing_page_header_img_position).'!important;';
		$vw_landing_page_custom_css .='}';
	}
	
	/*----------------Woocommerce Products Settings ------------------*/

	$vw_landing_page_related_product_show_hide = get_theme_mod('vw_landing_page_related_product_show_hide',true);
	if($vw_landing_page_related_product_show_hide != true){
		$vw_landing_page_custom_css .='.related.products{';
			$vw_landing_page_custom_css .='display: none;';
		$vw_landing_page_custom_css .='}';
	}