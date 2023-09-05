<?php
//about theme info
add_action( 'admin_menu', 'vw_landing_page_gettingstarted' );
function vw_landing_page_gettingstarted() {    	
	add_theme_page( esc_html__('About VW Landing Page', 'vw-landing-page'), esc_html__('About VW Landing Page', 'vw-landing-page'), 'edit_theme_options', 'vw_landing_page_guide', 'vw_landing_page_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function vw_landing_page_admin_theme_style() {
   wp_enqueue_style('vw-landing-page-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getstart/getstart.css');
   wp_enqueue_script('vw-landing-page-tabs', esc_url(get_template_directory_uri()) . '/inc/getstart/js/tab.js');
}
add_action('admin_enqueue_scripts', 'vw_landing_page_admin_theme_style');

//guidline for about theme
function vw_landing_page_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'vw-landing-page' );
?>

<div class="wrapper-info">
    <div class="col-left">
    	<h2><?php esc_html_e( 'Welcome to VW Landing Page Theme', 'vw-landing-page' ); ?> <span class="version">Version: <?php echo esc_html($theme['Version']);?></span></h2>
    	<p><?php esc_html_e('All our WordPress themes are modern, minimalist, 100% responsive, seo-friendly,feature-rich, and multipurpose that best suit designers, bloggers and other professionals who are working in the creative fields.','vw-landing-page'); ?></p>
    </div>
    <div class="col-right">
    	<div class="logo">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/final-logo.png" alt="" />
		</div>
		<div class="update-now">
			<h4><?php esc_html_e('Buy VW Landing Page at 20% Discount','vw-landing-page'); ?></h4>
			<h4><?php esc_html_e('Use Coupon','vw-landing-page'); ?> ( <span><?php esc_html_e('vwpro20','vw-landing-page'); ?></span> ) </h4> 
			<div class="info-link">
				<a href="<?php echo esc_url( VW_LANDING_PAGE_BUY_NOW ); ?>" target="_blank"> <?php esc_html_e( 'Upgrade to Pro', 'vw-landing-page' ); ?></a>
			</div>
		</div>
    </div>

    <div class="tab-sec">
		<div class="tab">
			<button class="tablinks" onclick="vw_landing_page_open_tab(event, 'lite_theme')"><?php esc_html_e( 'Setup With Customizer', 'vw-landing-page' ); ?></button>
			<button class="tablinks" onclick="vw_landing_page_open_tab(event, 'block_pattern')"><?php esc_html_e( 'Setup With Block Pattern', 'vw-landing-page' ); ?></button> 
		  	<button class="tablinks" onclick="vw_landing_page_open_tab(event, 'gutenberg_editor')"><?php esc_html_e( 'Setup With Gutunberg Block', 'vw-landing-page' ); ?></button>
		  	<button class="tablinks" onclick="vw_landing_page_open_tab(event, 'product_addons_editor')"><?php esc_html_e( 'Woocommerce Product Addons', 'vw-landing-page' ); ?></button>
		  	<button class="tablinks" onclick="vw_landing_page_open_tab(event, 'theme_pro')"><?php esc_html_e( 'Get Premium', 'vw-landing-page' ); ?></button>
		  	<button class="tablinks" onclick="vw_landing_page_open_tab(event, 'free_pro')"><?php esc_html_e( 'Support', 'vw-landing-page' ); ?></button>
		</div>

		<!-- Tab content -->
		<?php
			$vw_landing_page_plugin_custom_css = '';
			if(class_exists('Ibtana_Visual_Editor_Menu_Class')){
				$vw_landing_page_plugin_custom_css ='display: block';
			}
		?>
		<div id="lite_theme" class="tabcontent open">
			<?php if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
				$plugin_ins = VW_Landing_Page_Plugin_Activation_Settings::get_instance();
				$vw_landing_page_actions = $plugin_ins->recommended_actions;
				?>
				<div class="vw-landing-page-recommended-plugins">
				    <div class="vw-landing-page-action-list">
				        <?php if ($vw_landing_page_actions): foreach ($vw_landing_page_actions as $key => $vw_landing_page_actionValue): ?>
				                <div class="vw-landing-page-action" id="<?php echo esc_attr($vw_landing_page_actionValue['id']);?>">
			                        <div class="action-inner">
			                            <h3 class="action-title"><?php echo esc_html($vw_landing_page_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($vw_landing_page_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($vw_landing_page_actionValue['link']); ?>
			                            <a class="ibtana-skip-btn" get-start-tab-id="lite-theme-tab" href="javascript:void(0);"><?php esc_html_e('Skip','vw-landing-page'); ?></a>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php } ?>
			<div class="lite-theme-tab" style="<?php echo esc_attr($vw_landing_page_plugin_custom_css); ?>">
				<h3><?php esc_html_e( 'Lite Theme Information', 'vw-landing-page' ); ?></h3>
				<hr class="h3hr">
			  	<p><?php esc_html_e('VW Landing Page is a clutter-free, modern, thoughtfully designed and visually appealing landing page WordPress theme whose flexible layout suits numerous websites and businesses like digital marketing agency, web designing agency, corporate company, consultancy, creative agency, advertising firm, startup firm, small local business, entertainment firm, product review page, mobile phones and gadgets website, news agency, eCommerce site, online shop and many more. This landing page theme is fully responsive to load on any device whether it is mobile, tab, laptop or desktop; SEO enabled to give higher search rank; social media linked to reach people easily; cross-browser compatible and multilingual. It has judiciously placed call to action (CTA) buttons to increase the conversion rate of ads. VW Landing Page offers tons of customization options for every element, so you can design the website on your conditions. It lets you experiment with website look as it comes with a fully explained documentation that helps you whenever and wherever you get stuck. It has sensibly designed sections like gallery, testimonial, successful projects stats, services, about us and several others. Its professional look is important to win customer trust. This landing page theme is coded maintaining WordPress standards and it is based on the new WordPress version. ','vw-landing-page'); ?></p>
			  	<div class="col-left-inner">
			  		<h4><?php esc_html_e( 'Theme Documentation', 'vw-landing-page' ); ?></h4>
					<p><?php esc_html_e( 'If you need any assistance regarding setting up and configuring the Theme, our documentation is there.', 'vw-landing-page' ); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( VW_LANDING_PAGE_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'vw-landing-page' ); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Theme Customizer', 'vw-landing-page'); ?></h4>
					<p> <?php esc_html_e('To begin customizing your website, start by clicking "Customize".', 'vw-landing-page'); ?></p>
					<div class="info-link">
						<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'vw-landing-page'); ?></a>
					</div>
					<hr>				
					<h4><?php esc_html_e('Having Trouble, Need Support?', 'vw-landing-page'); ?></h4>
					<p> <?php esc_html_e('Our dedicated team is well prepared to help you out in case of queries and doubts regarding our theme.', 'vw-landing-page'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( VW_LANDING_PAGE_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'vw-landing-page'); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Reviews & Testimonials', 'vw-landing-page'); ?></h4>
					<p> <?php esc_html_e('All the features and aspects of this WordPress Theme are phenomenal. I\'d recommend this theme to all.', 'vw-landing-page'); ?>  </p>
					<div class="info-link">
						<a href="<?php echo esc_url( VW_LANDING_PAGE_REVIEW ); ?>" target="_blank"><?php esc_html_e('Reviews', 'vw-landing-page'); ?></a>
					</div>
			  		<div class="link-customizer">
						<h3><?php esc_html_e( 'Link to customizer', 'vw-landing-page' ); ?></h3>
						<hr class="h3hr">
						<div class="first-row">
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','vw-landing-page'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-welcome-write-blog"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_landing_page_topbar') ); ?>" target="_blank"><?php esc_html_e('Topbar Settings','vw-landing-page'); ?></a>
								</div>
							</div>
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-slides"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_landing_page_slidersettings') ); ?>" target="_blank"><?php esc_html_e('Slider Section','vw-landing-page'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_landing_page_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','vw-landing-page'); ?></a>
								</div>
							</div>
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','vw-landing-page'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-admin-customizer"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=vw_landing_page_typography') ); ?>" target="_blank"><?php esc_html_e('Typography','vw-landing-page'); ?></a>
								</div>
							</div>

							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_landing_page_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','vw-landing-page'); ?></a>
								</div>
								 <div class="row-box2">
									<span class="dashicons dashicons-align-center"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_landing_page_woocommerce_section') ); ?>" target="_blank"><?php esc_html_e('WooCommerce Layout','vw-landing-page'); ?></a>
								</div> 
							</div>
							
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_landing_page_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','vw-landing-page'); ?></a>
								</div>
								 <div class="row-box2">
									<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','vw-landing-page'); ?></a>
								</div> 
							</div>
						</div>
					</div>
			  	</div>
				<div class="col-right-inner">
					<h3 class="page-template"><?php esc_html_e('How to set up Home Page Template','vw-landing-page'); ?></h3>
				  	<hr class="h3hr">
					<p><?php esc_html_e('Follow these instructions to setup Home page.','vw-landing-page'); ?></p>
	                <ul>
	                  	<p><span class="strong"><?php esc_html_e('1. Create a new page :','vw-landing-page'); ?></span><?php esc_html_e(' Go to ','vw-landing-page'); ?>
					  	<b><?php esc_html_e(' Dashboard >> Pages >> Add New Page','vw-landing-page'); ?></b></p>

	                  	<p><?php esc_html_e('Name it as "Home" then select the template "Custom Home Page".','vw-landing-page'); ?></p>
	                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/home-page-template.png" alt="" />
	                  	<p><span class="strong"><?php esc_html_e('2. Set the front page:','vw-landing-page'); ?></span><?php esc_html_e(' Go to ','vw-landing-page'); ?>
					  	<b><?php esc_html_e(' Settings >> Reading ','vw-landing-page'); ?></b></p>
					  	<p><?php esc_html_e('Select the option of Static Page, now select the page you created to be the homepage, while another page to be your default page.','vw-landing-page'); ?></p>
	                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/set-front-page.png" alt="" />
	                  	<p><?php esc_html_e(' Once you are done with this, then follow the','vw-landing-page'); ?> <a class="doc-links" href="https://www.vwthemesdemo.com/docs/free-vw-landing-page/" target="_blank"><?php esc_html_e('Documentation','vw-landing-page'); ?></a></p>
	                </ul>
			  	</div>
			</div>
		</div>

		<div id="block_pattern" class="tabcontent">
			<?php if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
			$plugin_ins = VW_Landing_Page_Plugin_Activation_Settings::get_instance();
			$vw_landing_page_actions = $plugin_ins->recommended_actions;
			?>
				<div class="vw-landing-page-recommended-plugins">
				    <div class="vw-landing-page-action-list">
				        <?php if ($vw_landing_page_actions): foreach ($vw_landing_page_actions as $key => $vw_landing_page_actionValue): ?>
				                <div class="vw-landing-page-action" id="<?php echo esc_attr($vw_landing_page_actionValue['id']);?>">
			                        <div class="action-inner">
			                            <h3 class="action-title"><?php echo esc_html($vw_landing_page_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($vw_landing_page_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($vw_landing_page_actionValue['link']); ?>
			                            <a class="ibtana-skip-btn" href="javascript:void(0);" get-start-tab-id="gutenberg-editor-tab"><?php esc_html_e('Skip','vw-landing-page'); ?></a>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php } ?>
			<div class="gutenberg-editor-tab" style="<?php echo esc_attr($vw_landing_page_plugin_custom_css); ?>">
				<div class="block-pattern-img">
				  	<h3><?php esc_html_e( 'Block Patterns', 'vw-landing-page' ); ?></h3>
					<hr class="h3hr">
					<p><?php esc_html_e('Follow the below instructions to setup Home page with Block Patterns.','vw-landing-page'); ?></p>
	              		<p><b><?php esc_html_e('Click on Below Add new page button >> Click on "+" Icon.','vw-landing-page'); ?></span></b></p>
	              	<div class="vw-landing-page-pattern-page">
				    	<a href="javascript:void(0)" class="vw-pattern-page-btn button-primary button"><?php esc_html_e('Add New Page','vw-landing-page'); ?></a>
				    </div>
				    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/block-pattern1.png" alt="" />
				    	<p><b><?php esc_html_e('Click on Patterns Tab >> Click on Theme Name >> Click on Sections >> Publish.','vw-landing-page'); ?></span></b></p>
	              	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/block-pattern.png" alt="" />		
	            </div>

	            <div class="block-pattern-link-customizer">
	              	<div class="link-customizer-with-block-pattern">
						<h3><?php esc_html_e( 'Link to customizer', 'vw-landing-page' ); ?></h3>
						<hr class="h3hr">
						<div class="first-row">
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','vw-landing-page'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-networking"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_landing_page_social_icon_settings') ); ?>" target="_blank"><?php esc_html_e('Social Icons','vw-landing-page'); ?></a>
								</div>
							</div>
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','vw-landing-page'); ?></a>
								</div>
								
								<div class="row-box2">
									<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_landing_page_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','vw-landing-page'); ?></a>
								</div>
							</div>

							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_landing_page_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','vw-landing-page'); ?></a>
								</div>
								 <div class="row-box2">
									<span class="dashicons dashicons-align-center"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_landing_page_woocommerce_section') ); ?>" target="_blank"><?php esc_html_e('WooCommerce Layout','vw-landing-page'); ?></a>
								</div> 
							</div>
							
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_landing_page_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','vw-landing-page'); ?></a>
								</div>
								 <div class="row-box2">
									<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','vw-landing-page'); ?></a>
								</div> 
							</div>
						</div>
					</div>	
				</div>
	        </div>
		</div>

		<div id="gutenberg_editor" class="tabcontent">
			<?php if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
			$plugin_ins = VW_Landing_Page_Plugin_Activation_Settings::get_instance();
			$vw_landing_page_actions = $plugin_ins->recommended_actions;
			?>
				<div class="vw-landing-page-recommended-plugins">
				    <div class="vw-landing-page-action-list">
				        <?php if ($vw_landing_page_actions): foreach ($vw_landing_page_actions as $key => $vw_landing_page_actionValue): ?>
				                <div class="vw-landing-page-action" id="<?php echo esc_attr($vw_landing_page_actionValue['id']);?>">
			                        <div class="action-inner plugin-activation-redirect">
			                            <h3 class="action-title"><?php echo esc_html($vw_landing_page_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($vw_landing_page_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($vw_landing_page_actionValue['link']); ?>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php }else{ ?>
				<h3><?php esc_html_e( 'Gutunberg Blocks', 'vw-landing-page' ); ?></h3>
				<hr class="h3hr">
				<div class="vw-landing-page-pattern-page">
			    	<a href="<?php echo esc_url( admin_url( 'admin.php?page=ibtana-visual-editor-templates' ) ); ?>" class="vw-pattern-page-btn ibtana-dashboard-page-btn button-primary button"><?php esc_html_e('Ibtana Settings','vw-landing-page'); ?></a>
			    </div>

			    <div class="link-customizer-with-guternberg-ibtana">
					<h3><?php esc_html_e( 'Link to customizer', 'vw-landing-page' ); ?></h3>
					<hr class="h3hr">
					<div class="first-row">
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','vw-landing-page'); ?></a>
							</div>
							<div class="row-box2">
								<span class="dashicons dashicons-networking"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_landing_page_social_icon_settings') ); ?>" target="_blank"><?php esc_html_e('Social Icons','vw-landing-page'); ?></a>
							</div>
						</div>
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','vw-landing-page'); ?></a>
							</div>
							
							<div class="row-box2">
								<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_landing_page_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','vw-landing-page'); ?></a>
							</div>
						</div>

						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_landing_page_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','vw-landing-page'); ?></a>
							</div>
							 <div class="row-box2">
								<span class="dashicons dashicons-align-center"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_landing_page_woocommerce_section') ); ?>" target="_blank"><?php esc_html_e('WooCommerce Layout','vw-landing-page'); ?></a>
							</div> 
						</div>
						
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_landing_page_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','vw-landing-page'); ?></a>
							</div>
							 <div class="row-box2">
								<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','vw-landing-page'); ?></a>
							</div> 
						</div>
					</div>
				</div>
			<?php } ?>
		</div>

		<div id="product_addons_editor" class="tabcontent">
			<?php if(!class_exists('IEPA_Loader')){
				$plugin_ins = VW_Landing_Page_Plugin_Activation_Woo_Products::get_instance();
				$vw_landing_page_actions = $plugin_ins->recommended_actions;
				?>
				<div class="vw-landing-page-recommended-plugins">
					    <div class="vw-landing-page-action-list">
					        <?php if ($vw_landing_page_actions): foreach ($vw_landing_page_actions as $key => $vw_landing_page_actionValue): ?>
					                <div class="vw-landing-page-action" id="<?php echo esc_attr($vw_landing_page_actionValue['id']);?>">
				                        <div class="action-inner plugin-activation-redirect">
				                            <h3 class="action-title"><?php echo esc_html($vw_landing_page_actionValue['title']); ?></h3>
				                            <div class="action-desc"><?php echo esc_html($vw_landing_page_actionValue['desc']); ?></div>
				                            <?php echo wp_kses_post($vw_landing_page_actionValue['link']); ?>
				                        </div>
					                </div>
					            <?php endforeach;
					        endif; ?>
					    </div>
				</div>
			<?php }else{ ?>
				<h3><?php esc_html_e( 'Woocommerce Products Blocks', 'vw-landing-page' ); ?></h3>
				<hr class="h3hr">
				<div class="vw-landing-page-pattern-page">
					<p><?php esc_html_e('Follow the below instructions to setup Products Templates.','vw-landing-page'); ?></p>
					<p><b><?php esc_html_e('1. First you need to activate these plugins','vw-landing-page'); ?></b></p>
						<p><?php esc_html_e('1. Ibtana - WordPress Website Builder ','vw-landing-page'); ?></p>
						<p><?php esc_html_e('2. Ibtana - Ecommerce Product Addons.','vw-landing-page'); ?></p>
						<p><?php esc_html_e('3. Woocommerce','vw-landing-page'); ?></p>

					<p><b><?php esc_html_e('2. Go To Dashboard >> Ibtana Settings >> Woocommerce Templates','vw-landing-page'); ?></span></b></p>
	              	<div class="vw-landing-page-pattern-page">
			    		<a href="<?php echo esc_url( admin_url( 'admin.php?page=ibtana-visual-editor-woocommerce-templates&ive_wizard_view=parent' ) ); ?>" class="vw-pattern-page-btn ibtana-dashboard-page-btn button-primary button"><?php esc_html_e('Woocommerce Templates','vw-landing-page'); ?></a>
			    	</div>
	              	<p><?php esc_html_e('You can create a template as you like.','vw-landing-page'); ?></span></p>
			    </div>
			<?php } ?>
		</div>

		<div id="theme_pro" class="tabcontent">
		  	<h3><?php esc_html_e( 'Premium Theme Information', 'vw-landing-page' ); ?></h3>
			<hr class="h3hr">
		    <div class="col-left-pro">
		    	<p><?php esc_html_e('This WordPress landing page theme has the potential to maximize the efficiency of your website by designing a professional looking landing page that will easily attract visitors with its stunning look. It is creatively designed with the use of eye-catching colours and beautiful fonts to compel visitors to visit your landing page and hence to your website. It is made to fit diverse website types like corporate company, small business, blog, eCommerce, freelancing, portfolio and online shop. This WordPress landing page theme gives an ideal platform to effortlessly take your business to great heights of success regardless of your coding skills. The use of call to action (CTA) button will increase the conversion rates that will ultimately generate necessary leads for your business. Designing own website has never been so easy for non-professional coders. Even though it has a stack of highly functional features, but it does not bloat the website.','vw-landing-page'); ?></p>
		    	<div class="pro-links">
			    	<a href="<?php echo esc_url( VW_LANDING_PAGE_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'vw-landing-page'); ?></a>
					<a href="<?php echo esc_url( VW_LANDING_PAGE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'vw-landing-page'); ?></a>
					<a href="<?php echo esc_url( VW_LANDING_PAGE_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'vw-landing-page'); ?></a>
				</div>
		    </div>
		    <div class="col-right-pro">
		    	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/responsive.png" alt="" />
		    </div>
		    <div class="featurebox">
			    <h3><?php esc_html_e( 'Theme Features', 'vw-landing-page' ); ?></h3>
				<hr class="h3hr">
				<div class="table-image">
					<table class="tablebox">
						<thead>
							<tr>
								<th></th>
								<th><?php esc_html_e('Free Themes', 'vw-landing-page'); ?></th>
								<th><?php esc_html_e('Premium Themes', 'vw-landing-page'); ?></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?php esc_html_e('Theme Customization', 'vw-landing-page'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Responsive Design', 'vw-landing-page'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Logo Upload', 'vw-landing-page'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Social Media Links', 'vw-landing-page'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Slider Settings', 'vw-landing-page'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Number of Slides', 'vw-landing-page'); ?></td>
								<td class="table-img"><?php esc_html_e('4', 'vw-landing-page'); ?></td>
								<td class="table-img"><?php esc_html_e('Unlimited', 'vw-landing-page'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Template Pages', 'vw-landing-page'); ?></td>
								<td class="table-img"><?php esc_html_e('3', 'vw-landing-page'); ?></td>
								<td class="table-img"><?php esc_html_e('6', 'vw-landing-page'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Home Page Template', 'vw-landing-page'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'vw-landing-page'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'vw-landing-page'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Theme sections', 'vw-landing-page'); ?></td>
								<td class="table-img"><?php esc_html_e('2', 'vw-landing-page'); ?></td>
								<td class="table-img"><?php esc_html_e('17', 'vw-landing-page'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Contact us Page Template', 'vw-landing-page'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('1', 'vw-landing-page'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Blog Templates & Layout', 'vw-landing-page'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('3(Full width/Left/Right Sidebar)', 'vw-landing-page'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Page Templates & Layout', 'vw-landing-page'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('2(Left/Right Sidebar)', 'vw-landing-page'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Color Pallete For Particular Sections', 'vw-landing-page'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Global Color Option', 'vw-landing-page'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Reordering', 'vw-landing-page'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Demo Importer', 'vw-landing-page'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Allow To Set Site Title, Tagline, Logo', 'vw-landing-page'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Enable Disable Options On All Sections, Logo', 'vw-landing-page'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Full Documentation', 'vw-landing-page'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Latest WordPress Compatibility', 'vw-landing-page'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Woo-Commerce Compatibility', 'vw-landing-page'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Support 3rd Party Plugins', 'vw-landing-page'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Secure and Optimized Code', 'vw-landing-page'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Exclusive Functionalities', 'vw-landing-page'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Enable / Disable', 'vw-landing-page'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Section Google Font Choices', 'vw-landing-page'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Gallery', 'vw-landing-page'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Simple & Mega Menu Option', 'vw-landing-page'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Support to add custom CSS / JS ', 'vw-landing-page'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Shortcodes', 'vw-landing-page'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Background, Colors, Header, Logo & Menu', 'vw-landing-page'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Premium Membership', 'vw-landing-page'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Budget Friendly Value', 'vw-landing-page'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Priority Error Fixing', 'vw-landing-page'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Feature Addition', 'vw-landing-page'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('All Access Theme Pass', 'vw-landing-page'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Seamless Customer Support', 'vw-landing-page'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td></td>
								<td class="table-img"></td>
								<td class="update-link"><a href="<?php echo esc_url( VW_LANDING_PAGE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Upgrade to Pro', 'vw-landing-page'); ?></a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div id="free_pro" class="tabcontent">
		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-star-filled"></span><?php esc_html_e('Pro Version', 'vw-landing-page'); ?></h4>
				<p> <?php esc_html_e('To gain access to extra theme options and more interesting features, upgrade to pro version.', 'vw-landing-page'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_LANDING_PAGE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Get Pro', 'vw-landing-page'); ?></a>
				</div>
		  	</div>
		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-cart"></span><?php esc_html_e('Pre-purchase Queries', 'vw-landing-page'); ?></h4>
				<p> <?php esc_html_e('If you have any pre-sale query, we are prepared to resolve it.', 'vw-landing-page'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_LANDING_PAGE_CONTACT ); ?>" target="_blank"><?php esc_html_e('Question', 'vw-landing-page'); ?></a>
				</div>
		  	</div>
		  	<div class="col-3">		  		
		  		<h4><span class="dashicons dashicons-admin-customizer"></span><?php esc_html_e('Child Theme', 'vw-landing-page'); ?></h4>
				<p> <?php esc_html_e('For theme file customizations, make modifications in the child theme and not in the main theme file.', 'vw-landing-page'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_LANDING_PAGE_CHILD_THEME ); ?>" target="_blank"><?php esc_html_e('About Child Theme', 'vw-landing-page'); ?></a>
				</div>
		  	</div>

		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-admin-comments"></span><?php esc_html_e('Frequently Asked Questions', 'vw-landing-page'); ?></h4>
				<p> <?php esc_html_e('We have gathered top most, frequently asked questions and answered them for your easy understanding. We will list down more as we get new challenging queries. Check back often.', 'vw-landing-page'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_LANDING_PAGE_FAQ ); ?>" target="_blank"><?php esc_html_e('View FAQ','vw-landing-page'); ?></a>
				</div>
		  	</div>

		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-sos"></span><?php esc_html_e('Support Queries', 'vw-landing-page'); ?></h4>
				<p> <?php esc_html_e('If you have any queries after purchase, you can contact us. We are eveready to help you out.', 'vw-landing-page'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_LANDING_PAGE_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Contact Us', 'vw-landing-page'); ?></a>
				</div>
		  	</div>
		</div>
	</div>
</div>
<?php } ?>