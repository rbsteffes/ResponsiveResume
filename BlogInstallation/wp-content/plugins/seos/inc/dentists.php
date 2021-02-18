<?php
if( ! defined( 'ABSPATH' ) ) {
    exit;
}

$seostheme_pro_dentists = wp_get_theme();
if ( $seostheme_pro_dentists == "Dentists" ) {

		if ( ! function_exists( 'dentists_seos_buy' ) ) :
			function dentists_seos_buy( $wp_customize ) {
				
/********************************* Image Slider **************************************/				
				
			$wp_customize->add_panel( 'custom_images_panel', array(
				'title'			=> __('Image Slider PRO', 'dentists'),
				'priority'		=> 2,

			));

			$wp_customize->add_section( 'custom_images_options', array(
				'title'			=> __('General Options', 'sbaw'),
				'panel'			=> 'custom_images_panel',	
				'description'    => __( '<a target="_blank" href="https://seosthemes.info/wordpress-dentists-theme/">Preview Pro Version</a>', 'dentists' ),
				'priority'		=> 1,
			));
			$wp_customize->add_setting( 'buy_setting_image_slider', array(
				'capability'		=> 'edit_theme_options',
				'sanitize_callback'	=> 'sanitize_text_field',
				'type'	=> 'button',				
			));
			$wp_customize->add_control(
				new WP_Customize_Control(
					$wp_customize,'buy_setting_image_slider', array(
						'section'	=> 'custom_images_options',
						'settings'	=> 'buy_setting_image_slider',
					)
				)
			);
			
				for ($im=1;$im<=20; $im++) {
					$wp_customize->add_section( 'custom_images_slider_options'.$im, array(
						'title'			=> __('Image Slider '.$im, 'dentists'),
						'panel'			=> 'custom_images_panel',	
						'description'    => __( '<a target="_blank" href="https://seosthemes.info/wordpress-dentists-theme/">Preview Pro Version</a>', 'dentists' ),
						'priority'		=> 1,
					));
					$wp_customize->add_setting( 'buy_setting_image_slider'.$im, array(
						'capability'		=> 'edit_theme_options',
						'sanitize_callback'	=> 'sanitize_text_field',
						'type'	=> 'button',				
					));
					$wp_customize->add_control(
						new WP_Customize_Control(
							$wp_customize,'buy_setting_image_slider'.$im, array(
								'section'	=> 'custom_images_slider_options'.$im,
								'settings'	=> 'buy_setting_image_slider'.$im,
							)
						)
					);
					
			}
			
/********************************* Gallery **************************************/				
			$wp_customize->add_panel( 'gallery_panel', array(
				'title'			=> __('Gallery PRO', 'dentists'),
				'priority'		=> 2,

			));

			for ($im=1;$im<=30; $im++) {
				$wp_customize->add_section( 'dentists_gallery_options'.$im, array(
					'title'			=> __('Album'.$im, 'dentists'),
					'panel'			=> 'gallery_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/wordpress-dentists-theme/">Preview Pro Version</a>', 'dentists' ),
					'priority'		=> 1,
				));
				$wp_customize->add_setting( 'buy_setting_gallery'.$im, array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback'	=> 'sanitize_text_field',
					'type'	=> 'button',				
				));
				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,'buy_setting_gallery'.$im, array(
							'section'	=> 'dentists_gallery_options'.$im,
							'settings'	=> 'buy_setting_gallery'.$im,
						)
					)
				);
			}

/********************************* Three Slider **************************************/	

				$wp_customize->add_section( 'dentists_three_slider_options', array(
					'title'			=> __('Home Page Options PRO', 'dentists'),
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/wordpress-dentists-theme/">Preview Pro Version</a>', 'dentists' ),
					'priority'		=> 10,
				));
				$wp_customize->add_setting( 'buy_setting_three_slider', array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback'	=> 'sanitize_text_field',
					'type'	=> 'button',				
				));
				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,'buy_setting_three_slider', array(
							'section'	=> 'dentists_three_slider_options',
							'settings'	=> 'buy_setting_three_slider',
						)
					)
				);	

/********************************* All Google Fonts **************************************/	

			$wp_customize->add_panel( 'dentists_google_fonts_panel', array(
				'title'			=> __('All Google Fonts PRO', 'dentists'),
				'priority'		=> 11,

			));	

				$wp_customize->add_section( 'dentists_google_fonts_title_options', array(
					'title'			=> __('Site Title Font', 'dentists'),
					'panel'			=> 'dentists_google_fonts_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/wordpress-dentists-theme/">Preview Pro Version</a>', 'dentists' ),
					'priority'		=> 1,
				));
				$wp_customize->add_setting( 'buy_setting_google_fonts_title', array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback'	=> 'sanitize_text_field',
					'type'	=> 'button',				
				));
				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,'buy_setting_google_fonts_title', array(
							'section'	=> 'dentists_google_fonts_title_options',
							'settings'	=> 'buy_setting_google_fonts_title',
						)
					)
				);			
			
				$wp_customize->add_section( 'dentists_description_title_options', array(
					'title'			=> __('Site Describtion Font', 'dentists'),
					'panel'			=> 'dentists_google_fonts_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/wordpress-dentists-theme/">Preview Pro Version</a>', 'dentists' ),
					'priority'		=> 1,
				));
				$wp_customize->add_setting( 'buy_setting_gdescription', array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback'	=> 'sanitize_text_field',
					'type'	=> 'button',				
				));
				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,'buy_setting_gdescription', array(
							'section'	=> 'dentists_description_title_options',
							'settings'	=> 'buy_setting_gdescription',
						)
					)
				);			
						
				$wp_customize->add_section( 'dentists_menu_font_title_options', array(
					'title'			=> __('Menu Font', 'dentists'),
					'panel'			=> 'dentists_google_fonts_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/wordpress-dentists-theme/">Preview Pro Version</a>', 'dentists' ),
					'priority'		=> 1,
				));
				$wp_customize->add_setting( 'buy_setting_menu_font', array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback'	=> 'sanitize_text_field',
					'type'	=> 'button',				
				));
				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,'buy_setting_menu_font', array(
							'section'	=> 'dentists_menu_font_title_options',
							'settings'	=> 'buy_setting_menu_font',
						)
					)
				);			
									
				$wp_customize->add_section( 'dentists_content_font_title_options', array(
					'title'			=> __('Content Font', 'dentists'),
					'panel'			=> 'dentists_google_fonts_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/wordpress-dentists-theme/">Preview Pro Version</a>', 'dentists' ),
					'priority'		=> 1,
				));
				$wp_customize->add_setting( 'buy_setting_content_font', array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback'	=> 'sanitize_text_field',
					'type'	=> 'button',				
				));
				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,'buy_setting_content_font', array(
							'section'	=> 'dentists_content_font_title_options',
							'settings'	=> 'buy_setting_content_font',
						)
					)
				);			
												
				$wp_customize->add_section( 'dentists_h_font_title_options', array(
					'title'			=> __('H1,H2,H3,H4,H5,H6', 'dentists'),
					'panel'			=> 'dentists_google_fonts_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/wordpress-dentists-theme/">Preview Pro Version</a>', 'dentists' ),
					'priority'		=> 1,
				));
				$wp_customize->add_setting( 'buy_setting_h_font', array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback'	=> 'sanitize_text_field',
					'type'	=> 'button',				
				));
				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,'buy_setting_h_font', array(
							'section'	=> 'dentists_h_font_title_options',
							'settings'	=> 'buy_setting_h_font',
						)
					)
				);			


/********************************* Animations **************************************/

				$wp_customize->add_panel( 'dentists_animations_panel', array(
					'title'			=> __('Animations PRO', 'dentists'),
					'priority'		=> 11,

				));
				$wp_customize->add_section( 'dentists_title_animations_options', array(
					'title'			=> __('Site Title Animation', 'dentists'),
					'panel'			=> 'dentists_animations_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/wordpress-dentists-theme/">Preview Pro Version</a>', 'dentists' ),
					'priority'		=> 1,
				));
				$wp_customize->add_setting( 'buy_setting_title_animations', array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback'	=> 'sanitize_text_field',
					'type'	=> 'button',				
				));
				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,'buy_setting_title_animations', array(
							'section'	=> 'dentists_title_animations_options',
							'settings'	=> 'buy_setting_title_animations',
						)
					)
				);	


				$wp_customize->add_section( 'dentists_tagline_animations_options', array(
					'title'			=> __('Site Tagline Animation', 'dentists'),
					'panel'			=> 'dentists_animations_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/wordpress-dentists-theme/">Preview Pro Version</a>', 'dentists' ),
					'priority'		=> 1,
				));
				$wp_customize->add_setting( 'buy_setting_tagline_animations', array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback'	=> 'sanitize_text_field',
					'type'	=> 'button',				
				));
				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,'buy_setting_tagline_animations', array(
							'section'	=> 'dentists_tagline_animations_options',
							'settings'	=> 'buy_setting_tagline_animations',
						)
					)
				);	



				$wp_customize->add_section( 'dentists_sub_menu_animations_options', array(
					'title'			=> __('Sub Menu Animation', 'dentists'),
					'panel'			=> 'dentists_animations_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/wordpress-dentists-theme/">Preview Pro Version</a>', 'dentists' ),
					'priority'		=> 1,
				));
				$wp_customize->add_setting( 'buy_setting_sub_menu_animations', array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback'	=> 'sanitize_text_field',
					'type'	=> 'button',				
				));
				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,'buy_setting_sub_menu_animations', array(
							'section'	=> 'dentists_sub_menu_animations_options',
							'settings'	=> 'buy_setting_sub_menu_animations',
						)
					)
				);	



				$wp_customize->add_section( 'dentists_gallery_animations_options', array(
					'title'			=> __('Gallery Animations', 'dentists'),
					'panel'			=> 'dentists_animations_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/wordpress-dentists-theme/">Preview Pro Version</a>', 'dentists' ),
					'priority'		=> 1,
				));
				$wp_customize->add_setting( 'buy_setting_gallery_animations', array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback'	=> 'sanitize_text_field',
					'type'	=> 'button',				
				));
				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,'buy_setting_gallery_animations', array(
							'section'	=> 'dentists_gallery_animations_options',
							'settings'	=> 'buy_setting_gallery_animations',
						)
					)
				);

				$wp_customize->add_section( 'dentists_about_animations_options', array(
					'title'			=> __('About US Animation', 'dentists'),
					'panel'			=> 'dentists_animations_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/wordpress-dentists-theme/">Preview Pro Version</a>', 'dentists' ),
					'priority'		=> 1,
				));
				$wp_customize->add_setting( 'buy_setting_about_animations', array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback'	=> 'sanitize_text_field',
					'type'	=> 'button',				
				));
				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,'buy_setting_about_animations', array(
							'section'	=> 'dentists_about_animations_options',
							'settings'	=> 'buy_setting_about_animations',
						)
					)
				);	



				$wp_customize->add_section( 'dentists_sidebar_animations_options', array(
					'title'			=> __('Sidebar Animation', 'dentists'),
					'panel'			=> 'dentists_animations_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/wordpress-dentists-theme/">Preview Pro Version</a>', 'dentists' ),
					'priority'		=> 1,
				));
				$wp_customize->add_setting( 'buy_setting_sidebar_animations', array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback'	=> 'sanitize_text_field',
					'type'	=> 'button',				
				));
				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,'buy_setting_sidebar_animations', array(
							'section'	=> 'dentists_sidebar_animations_options',
							'settings'	=> 'buy_setting_sidebar_animations',
						)
					)
				);	


				$wp_customize->add_section( 'dentists_article_animations_options', array(
					'title'			=> __('Article Animation', 'dentists'),
					'panel'			=> 'dentists_animations_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/wordpress-dentists-theme/">Preview Pro Version</a>', 'dentists' ),
					'priority'		=> 1,
				));
				$wp_customize->add_setting( 'buy_setting_article_animations', array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback'	=> 'sanitize_text_field',
					'type'	=> 'button',				
				));
				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,'buy_setting_article_animations', array(
							'section'	=> 'dentists_article_animations_options',
							'settings'	=> 'buy_setting_article_animations',
						)
					)
				);	



				$wp_customize->add_section( 'dentists_footer_animations_options', array(
					'title'			=> __('Footer Animation', 'dentists'),
					'panel'			=> 'dentists_animations_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/wordpress-dentists-theme/">Preview Pro Version</a>', 'dentists' ),
					'priority'		=> 1,
				));
				$wp_customize->add_setting( 'buy_setting_footer_animations', array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback'	=> 'sanitize_text_field',
					'type'	=> 'button',				
				));
				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,'buy_setting_footer_animations', array(
							'section'	=> 'dentists_footer_animations_options',
							'settings'	=> 'buy_setting_footer_animations',
						)
					)
				);	



/**************************************** Doctors Custom Post Type ********************************/


				$wp_customize->add_section( 'dentists_footer_abouut_us_options', array(
					'title'			=> __('Doctors Custom Post Type PRO', 'dentists'),
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/wordpress-dentists-theme/">Preview Pro Version</a>', 'dentists' ),
					'priority'		=> 12,
				));
				$wp_customize->add_setting( 'buy_setting_abouut_us', array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback'	=> 'sanitize_text_field',
					'type'	=> 'button',				
				));
				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,'buy_setting_abouut_us', array(
							'section'	=> 'dentists_footer_abouut_us_options',
							'settings'	=> 'buy_setting_abouut_us',
						)
					)
				);	


/********************************* Disable Options **************************************/

				$wp_customize->add_section( 'dentists_meta_options', array(
					'title'			=> __('Disable Options PRO', 'dentists'),
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/wordpress-dentists-theme/">Preview Pro Version</a>', 'dentists' ),
					'priority'		=> 12,
				));
				$wp_customize->add_setting( 'buy_setting_meta', array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback'	=> 'sanitize_text_field',
					'type'	=> 'button',				
				));
				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,'buy_setting_meta', array(
							'section'	=> 'dentists_meta_options',
							'settings'	=> 'buy_setting_meta',
						)
					)
				);	

/********************************* Header Options **************************************/


				$wp_customize->add_section( 'dentists_menu_header__options', array(
					'title'			=> __('Menu PRO', 'dentists'),
					'panel'			=> 'header',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/wordpress-dentists-theme/">Preview Pro Version</a>', 'dentists' ),
					'priority'		=> 1,
				));
				$wp_customize->add_setting( 'buy_menu_header__', array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback'	=> 'sanitize_text_field',
					'type'	=> 'button',				
				));
				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,'buy_menu_header__', array(
							'section'	=> 'dentists_menu_header__options',
							'settings'	=> 'buy_menu_header__',
						)
					)
				);	

/********************************* Custom Images **************************************/



				$wp_customize->add_section( 'dentists_custom_images_general_options', array(
					'title'			=> __('Article Colors PRO', 'dentists'),
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/wordpress-dentists-theme/">Preview Pro Version</a>', 'dentists' ),
					'priority'		=> 31,
				));
				$wp_customize->add_setting( 'buy_custom_images_general', array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback'	=> 'sanitize_text_field',
					'type'	=> 'button',				
				));
				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,'buy_custom_images_general', array(
							'section'	=> 'dentists_custom_images_general_options',
							'settings'	=> 'buy_custom_images_general',
						)
					)
				);	

/********************************* Counter **************************************/


				$wp_customize->add_section( 'dentists_counter_general_options', array(
					'title'			=> __('Header Contacts PRO', 'dentists'),
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/wordpress-dentists-theme/">Preview Pro Version</a>', 'dentists' ),
					'priority'		=> 32,
				));
				$wp_customize->add_setting( 'buy_counter_general', array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback'	=> 'sanitize_text_field',
					'type'	=> 'button',				
				));
				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,'buy_counter_general', array(
							'section'	=> 'dentists_counter_general_options',
							'settings'	=> 'buy_counter_general',
						)
					)
				);
				
			
/********************************* 'Font Size **************************************/			
			
				$wp_customize->add_section( 'dentists_font_size_options1', array(
					'title'			=> __('Font Size', 'dentists'),
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/wordpress-dentists-theme/">Preview Pro Version</a>', 'dentists' ),
					'priority'		=> 63,
				));
				$wp_customize->add_setting( 'buy_font_size_general', array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback'	=> 'sanitize_text_field',
					'type'	=> 'button',				
				));
				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,'buy_font_size_general', array(
							'section'	=> 'dentists_font_size_options1',
							'settings'	=> 'buy_font_size_general',
						)
					)
				);			

				
			
/********************************* Menu Options **************************************/			
			
				$wp_customize->add_section( 'dentists_Menu_Options', array(
					'title'			=> __('Menu Options', 'dentists'),
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/wordpress-dentists-theme/">Preview Pro Version</a>', 'dentists' ),
					'priority'		=> 63,
				));
				$wp_customize->add_setting( 'buy_Menu_Options', array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback'	=> 'sanitize_text_field',
					'type'	=> 'button',				
				));
				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,'buy_Menu_Options', array(
							'section'	=> 'dentists_Menu_Options',
							'settings'	=> 'buy_Menu_Options',
						)
					)
				);			


/********************************* 'Back To Top Button Options **************************************/			
			
				$wp_customize->add_section( 'dentists_Loader_options1', array(
					'title'			=> __('Back To Top Button Options PRO', 'dentists'),
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/wordpress-dentists-theme/">Preview Pro Version</a>', 'dentists' ),
					'priority'		=> 81,
				));
				$wp_customize->add_setting( 'buy_Loader', array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback'	=> 'sanitize_text_field',
					'type'	=> 'button',				
				));
				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,'buy_Loader', array(
							'section'	=> 'dentists_Loader_options1',
							'settings'	=> 'buy_Loader',
						)
					)
				);									
			
/********************************* Read More Button Options **************************************/			
			
				$wp_customize->add_section( 'dentists_READ_options1', array(
					'title'			=> __('Read More Button Options PRO', 'dentists'),
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/wordpress-dentists-theme/">Preview Pro Version</a>', 'dentists' ),
					'priority'		=> 81,
				));
				$wp_customize->add_setting( 'buy_read_more', array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback'	=> 'sanitize_text_field',
					'type'	=> 'button',				
				));
				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,'buy_read_more', array(
							'section'	=> 'dentists_READ_options1',
							'settings'	=> 'buy_read_more',
						)
					)
				);									
						
/********************************* WooCommerce Cart Options **************************************/			
			
				$wp_customize->add_section( 'dentists_woo_cart', array(
					'title'			=> __('WooCommerce Cart Options PRO', 'dentists'),
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/wordpress-dentists-theme/">Preview Pro Version</a>', 'dentists' ),
					'priority'		=> 81,
				));
				$wp_customize->add_setting( 'buy_woo_cart', array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback'	=> 'sanitize_text_field',
					'type'	=> 'button',				
				));
				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,'buy_woo_cart', array(
							'section'	=> 'dentists_woo_cart',
							'settings'	=> 'buy_woo_cart',
						)
					)
				);									
									
/********************************* Footer Options **************************************/			
			
				$wp_customize->add_section( 'dentists_footer', array(
					'title'			=> __('Footer Options PRO', 'dentists'),
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/wordpress-dentists-theme/">Preview Pro Version</a>', 'dentists' ),
					'priority'		=> 81,
				));
				$wp_customize->add_setting( 'buy_footer', array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback'	=> 'sanitize_text_field',
					'type'	=> 'button',				
				));
				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,'buy_footer', array(
							'section'	=> 'dentists_footer',
							'settings'	=> 'buy_footer',
						)
					)
				);											
/********************************* Recent News **************************************/			
			
				$wp_customize->add_section( 'dentists_Recent_News', array(
					'title'			=> __('Recent News PRO', 'dentists'),
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/wordpress-dentists-theme/">Preview Pro Version</a>', 'dentists' ),
					'priority'		=> 81,
				));
				$wp_customize->add_setting( 'buy_Recent_News', array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback'	=> 'sanitize_text_field',
					'type'	=> 'button',				
				));
				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,'buy_Recent_News', array(
							'section'	=> 'dentists_Recent_News',
							'settings'	=> 'buy_Recent_News',
						)
					)
				);

/********************************* Copy Protection **************************************/			
			
				$wp_customize->add_section( 'dentists_Copy_Protection', array(
					'title'			=> __('Copy Protection PRO', 'dentists'),
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/wordpress-dentists-theme/">Preview Pro Version</a>', 'dentists' ),
					'priority'		=> 81,
				));
				$wp_customize->add_setting( 'buy_Copy_Protection', array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback'	=> 'sanitize_text_field',
					'type'	=> 'button',				
				));
				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,'buy_Copy_Protection', array(
							'section'	=> 'dentists_Copy_Protection',
							'settings'	=> 'buy_Copy_Protection',
						)
					)
				);									
			
				
		}
		endif;
		 
		add_action('customize_register', 'dentists_seos_buy');
		
		function seos_styles_customize_styles( $input ) { ?>
			<style type="text/css">
				<?php for($i=1;$i<=20;$i++) { echo "#_customize-input-buy_setting_image_slider".$i.","; } ?> #_customize-input-buy_setting_image_slider<?php echo $i ;?>{ display: none; }
				<?php for($i=1;$i<=30;$i++) { echo "#_customize-input-buy_setting_gallery".$i.","; } ?> #_customize-input-buy_setting_gallery<?php echo $i ;?>{ display: none; }
				<?php for($i=1;$i<=36;$i++) { echo "#_customize-input-buy_custom_images_".$i.","; } ?> #_customize-input-buy_custom_images_<?php echo $i ;?>{ display: none; }
				<?php for($i=1;$i<=10;$i++) { echo "#_customize-input-buy_counter_".$i.","; } ?> #_customize-input-buy_counter_<?php echo $i ;?>{ display: none; }
				<?php for($i=1;$i<=10;$i++) { echo "#_customize-input-dentists_parallax_images__".$i.","; } ?> #_customize-input-dentists_parallax_images__<?php echo $i ;?>{ display: none; }
				#_customize-input-buy_Menu_Options,
				#_customize-input-buy_Copy_Protection,
				#_customize-input-buy_Recent_News,
				#_customize-input-buy_footer,
				#_customize-input-buy_woo_cart,
				#_customize-input-buy_Loader,
				#_customize-input-buy_read_more,
				#_customize-input-buy_font_size_general,
				#_customize-input-buy_counter_general,
				#_customize-input-buy_custom_images_general,
				#_customize-input-buy_menu_header__,
				#_customize-input-buy_setting_meta,
				#_customize-input-buy_setting_three_slider,
				#_customize-input-buy_setting_abouut_us,
				#_customize-input-buy_setting_footer_animations,
				#_customize-input-buy_setting_article_animations,
				#_customize-input-buy_setting_title_animations,
				#_customize-input-buy_setting_sidebar_animations,
				#_customize-input-buy_setting_about_animations,
				#_customize-input-buy_setting_gallery_animations,
				#_customize-input-buy_setting_sub_menu_animations,
				#_customize-input-buy_setting_tagline_animations, 
				#_customize-input-buy_setting_menu_font,
				#_customize-input-buy_setting_content_font,
				#_customize-input-buy_setting_h_font,
				#_customize-input-buy_setting_gdescription,
				#_customize-input-buy_setting_google_fonts_title,
				#_customize-input-buy_setting_image_slider{ 
				    display: none; 
				}
				
				<?php for($i=1;$i<=20;$i++) { echo "#accordion-section-custom_images_slider_options".$i." h3,"; } ?>
				<?php for($i=1;$i<=30;$i++) { echo "#accordion-section-dentists_gallery_options".$i." h3,"; } ?>
				<?php for($i=1;$i<=36;$i++) { echo "#accordion-section-dentists_custom_images_options".$i." h3,"; } ?>
				<?php for($i=1;$i<=10;$i++) { echo "#accordion-section-dentists_counter_options".$i." h3,"; } ?>
				<?php for($i=1;$i<=10;$i++) { echo "#accordion-section-dentists_parallax_images_".$i." h3,"; } ?>
				#accordion-section-dentists_Menu_Options h3,
				#accordion-section-dentists_Copy_Protection h3,
				#accordion-section-dentists_Recent_News h3,
				#accordion-section-dentists_woo_cart h3,
				#accordion-section-dentists_footer h3,
				#accordion-section-dentists_READ_options1 h3,
				#accordion-section-dentists_Loader_options1 h3,
				#accordion-panel-dentists_parallax_images_panel h3,
				#accordion-section-dentists_font_size_options1 h3,
				#accordion-section-dentists_counter_general_options h3,
				#accordion-panel-dentists_counter_panel h3,
				#accordion-section-dentists_custom_images_general_options h3,
				#accordion-panel-dentists_custom_images_panel h3,
				#accordion-section-dentists_menu_header__options h3,
				#accordion-section-dentists_meta_options h3,
				#accordion-section-dentists_footer_animations_options h3,
				#accordion-section-dentists_article_animations_options h3,
				#accordion-section-dentists_about_animations_options h3,
				#accordion-section-dentists_sidebar_animations_options h3,
				#accordion-section-dentists_gallery_animations_options h3,
				#accordion-section-dentists_sub_menu_animations_options h3,
				#accordion-section-dentists_tagline_animations_options h3,
				#accordion-section-dentists_title_animations_options h3,
				#accordion-section-dentists_footer_abouut_us_options h3,
				#accordion-panel-dentists_animations_panel h3,
				#accordion-section-dentists_h_font_title_options h3,
				#accordion-section-dentists_content_font_title_options h3,
				#accordion-section-dentists_menu_font_title_options h3,
				#accordion-section-dentists_description_title_options h3,
				#accordion-section-dentists_google_fonts_title_options h3,
				#accordion-panel-custom_images_panel h3,
				#accordion-section-dentists_three_slider_options h3,
				#accordion-panel-gallery_panel h3,
				#accordion-panel-dentists_google_fonts_panel h3,
				#accordion-section-custom_images_options h3 {
					color: red !important;
				}

			</style>
		<?php }
		
		add_action( 'customize_controls_print_styles', 'seos_styles_customize_styles');	
		
}