<?php
/**
 * VW Landing Page: Block Patterns
 *
 * @package VW Landing Page
 * @since   1.0.0
 */

/**
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {

	register_block_pattern_category(
		'vw-landing-page',
		array( 'label' => __( 'VW Landing Page', 'vw-landing-page' ) )
	);
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {
	register_block_pattern(
		'vw-landing-page/banner-section',
		array(
			'title'      => __( 'Banner Section', 'vw-landing-page' ),
			'categories' => array( 'vw-landing-page' ),
			'content'    => "<!-- wp:cover {\"url\":\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/banner.png\",\"id\":48,\"dimRatio\":40,\"overlayColor\":\"black\",\"align\":\"full\",\"className\":\"banner-section my-0\"} -->\n<div class=\"wp-block-cover alignfull has-background-dim-40 has-black-background-color has-background-dim banner-section my-0\" style=\"background-image:url(" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/banner.png)\"><div class=\"wp-block-cover__inner-container\"><!-- wp:columns {\"align\":\"wide\",\"className\":\"mx-5 px-lg-5\"} -->\n<div class=\"wp-block-columns alignwide mx-5 px-lg-5\"><!-- wp:column {\"className\":\"banner-box ps-3\"} -->\n<div class=\"wp-block-column banner-box ps-3\"><!-- wp:heading {\"level\":1,\"className\":\"m-0\",\"textColor\":\"white\",\"style\":{\"typography\":{\"fontSize\":45}}} -->\n<h1 class=\"m-0 has-white-color has-text-color\" style=\"font-size:45px\">LOREM IPSUM IS SIMPLY</h1>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"className\":\"mt-0\",\"textColor\":\"white\",\"style\":{\"typography\":{\"fontSize\":14}}} -->\n<p class=\"mt-0 has-white-color has-text-color\" style=\"font-size:14px\">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons {\"className\":\"m-0\"} -->\n<div class=\"wp-block-buttons m-0\"><!-- wp:button {\"style\":{\"color\":{\"gradient\":\"linear-gradient(90deg,rgb(254,183,91) 0%,rgb(222,64,187) 100%)\"}},\"textColor\":\"white\"} -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link has-white-color has-text-color has-background\" style=\"background:linear-gradient(90deg,rgb(254,183,91) 0%,rgb(222,64,187) 100%)\">READ MORE</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class=\"wp-block-column\"></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->\n\n<!-- wp:paragraph -->\n<p></p>\n<!-- /wp:paragraph --></div></div>\n<!-- /wp:cover -->",
		)
	);

	register_block_pattern(
		'vw-landing-page/features-section',
		array(
			'title'      => __( 'Features Section', 'vw-landing-page' ),
			'categories' => array( 'vw-landing-page' ),
			'content'    => "<!-- wp:cover {\"minHeight\":150,\"customGradient\":\"linear-gradient(90deg,rgb(254,183,91) 0%,rgb(222,64,187) 100%)\",\"align\":\"full\",\"className\":\"features-section py-5 my-0\"} -->\n<div class=\"wp-block-cover alignfull has-background-dim has-background-gradient features-section py-5 my-0\" style=\"background:linear-gradient(90deg,rgb(254,183,91) 0%,rgb(222,64,187) 100%);min-height:150px\"><div class=\"wp-block-cover__inner-container\"><!-- wp:columns {\"align\":\"wide\",\"className\":\"mx-lg-5 mx-0 px-5 my-0\"} -->\n<div class=\"wp-block-columns alignwide mx-lg-5 mx-0 px-5 my-0\"><!-- wp:column {\"className\":\"feature-box mb-md-0 mb-4\"} -->\n<div class=\"wp-block-column feature-box mb-md-0 mb-4\"><!-- wp:heading {\"className\":\"mb-2 mt-0\",\"textColor\":\"white\",\"style\":{\"typography\":{\"fontSize\":18}}} -->\n<h2 class=\"mb-2 mt-0 has-white-color has-text-color\" style=\"font-size:18px\">FEATURES TITLE 1</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"className\":\"mb-0 mt-0\",\"textColor\":\"white\",\"style\":{\"typography\":{\"fontSize\":14}}} -->\n<p class=\"mb-0 mt-0 has-white-color has-text-color\" style=\"font-size:14px\">Lorem Ipsum&nbsp;is simply dummy text of the printing</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"className\":\"feature-box mb-md-0 mb-4\"} -->\n<div class=\"wp-block-column feature-box mb-md-0 mb-4\"><!-- wp:heading {\"className\":\"mb-2 mt-0\",\"textColor\":\"white\",\"style\":{\"typography\":{\"fontSize\":18}}} -->\n<h2 class=\"mb-2 mt-0 has-white-color has-text-color\" style=\"font-size:18px\">FEATURES TITLE 2</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"className\":\"mb-0 mt-0\",\"textColor\":\"white\",\"style\":{\"typography\":{\"fontSize\":14}}} -->\n<p class=\"mb-0 mt-0 has-white-color has-text-color\" style=\"font-size:14px\">Lorem Ipsum&nbsp;is simply dummy text of the printing</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"className\":\"feature-box mb-md-0 mb-4\"} -->\n<div class=\"wp-block-column feature-box mb-md-0 mb-4\"><!-- wp:heading {\"className\":\"mb-2 mt-0\",\"textColor\":\"white\",\"style\":{\"typography\":{\"fontSize\":18}}} -->\n<h2 class=\"mb-2 mt-0 has-white-color has-text-color\" style=\"font-size:18px\">FEATURES TITLE 3</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"className\":\"mb-0 mt-0\",\"textColor\":\"white\",\"style\":{\"typography\":{\"fontSize\":14}}} -->\n<p class=\"mb-0 mt-0 has-white-color has-text-color\" style=\"font-size:14px\">Lorem Ipsum&nbsp;is simply dummy text of the printing</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div></div>\n<!-- /wp:cover -->",
		)
	);

	register_block_pattern(
		'vw-landing-page/about-section',
		array(
			'title'      => __( 'About Section', 'vw-landing-page' ),
			'categories' => array( 'vw-landing-page' ),
			'content'    => "<!-- wp:cover {\"url\":\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/map-bg.png\",\"id\":87,\"overlayColor\":\"white\",\"align\":\"wide\",\"className\":\"about-section\"} -->\n<div class=\"wp-block-cover alignwide has-white-background-color has-background-dim about-section\" style=\"background-image:url(" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/map-bg.png)\"><div class=\"wp-block-cover__inner-container\"><!-- wp:columns {\"align\":\"wide\",\"className\":\"mx-5 px-5\"} -->\n<div class=\"wp-block-columns alignwide mx-5 px-5\"><!-- wp:column {\"width\":\"66.66%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:66.66%\"><!-- wp:heading {\"level\":3,\"className\":\"mt-0\",\"style\":{\"color\":{\"text\":\"#222222\"},\"typography\":{\"fontSize\":30}}} -->\n<h3 class=\"mt-0 has-text-color\" style=\"color:#222222;font-size:30px\">ABOUT US</h3>\n<!-- /wp:heading -->\n\n<!-- wp:heading {\"level\":4,\"className\":\"mt-0\",\"style\":{\"color\":{\"text\":\"#222222\"},\"typography\":{\"fontSize\":22}}} -->\n<h4 class=\"mt-0 has-text-color\" style=\"color:#222222;font-size:22px\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</h4>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"className\":\"mt-0\",\"style\":{\"color\":{\"text\":\"#818a9b\"},\"typography\":{\"fontSize\":15}}} -->\n<p class=\"mt-0 has-text-color\" style=\"color:#818a9b;font-size:15px\">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons {\"className\":\"mt-0\"} -->\n<div class=\"wp-block-buttons mt-0\"><!-- wp:button {\"style\":{\"color\":{\"gradient\":\"linear-gradient(90deg,rgb(254,183,91) 0%,rgb(222,64,187) 100%)\"}},\"textColor\":\"white\"} -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link has-white-color has-text-color has-background\" style=\"background:linear-gradient(90deg,rgb(254,183,91) 0%,rgb(222,64,187) 100%)\">READ MORE</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"width\":\"33.33%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:33.33%\"><!-- wp:image {\"id\":105,\"sizeSlug\":\"large\",\"linkDestination\":\"none\",\"className\":\"mt-md-0 mt-4\"} -->\n<figure class=\"wp-block-image size-large mt-md-0 mt-4\"><img src=\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/about-img.png\" alt=\"\" class=\"wp-image-105\"/></figure>\n<!-- /wp:image --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div></div>\n<!-- /wp:cover -->",
		)
	);
}