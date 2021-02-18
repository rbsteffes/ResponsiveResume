<?php
if( ! defined( 'ABSPATH' ) ) {
    exit;
}

$seostheme_pro_baw = wp_get_theme();
if ( $seostheme_pro_baw == "BAW" ) {

		if ( ! function_exists( 'baw_seos_buy' ) ) :
			function baw_seos_buy( $wp_customize ) {
				
/********************************* Image Slider **************************************/				
				
			$wp_customize->add_panel( 'custom_images_panel', array(
				'title'			=> __('Image Slider PRO', 'baw'),
				'priority'		=> 2,

			));

			$wp_customize->add_section( 'custom_images_options', array(
				'title'			=> __('General Options', 'sbaw'),
				'panel'			=> 'custom_images_panel',	
				'description'    => __( '<a target="_blank" href="https://seosthemes.info/black-and-white-wordpress-theme/">Preview Pro Version</a>', 'baw' ),
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
						'title'			=> __('Image Slider '.$im, 'baw'),
						'panel'			=> 'custom_images_panel',	
						'description'    => __( '<a target="_blank" href="https://seosthemes.info/black-and-white-wordpress-theme/">Preview Pro Version</a>', 'baw' ),
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
				'title'			=> __('Gallery PRO', 'baw'),
				'priority'		=> 2,

			));

			for ($im=1;$im<=30; $im++) {
				$wp_customize->add_section( 'baw_gallery_options'.$im, array(
					'title'			=> __('Album'.$im, 'baw'),
					'panel'			=> 'gallery_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/black-and-white-wordpress-theme/">Preview Pro Version</a>', 'baw' ),
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
							'section'	=> 'baw_gallery_options'.$im,
							'settings'	=> 'buy_setting_gallery'.$im,
						)
					)
				);
			}

/********************************* Three Slider **************************************/	

				$wp_customize->add_section( 'baw_three_slider_options', array(
					'title'			=> __('Three Slider PRO', 'baw'),
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/black-and-white-wordpress-theme/">Preview Pro Version</a>', 'baw' ),
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
							'section'	=> 'baw_three_slider_options',
							'settings'	=> 'buy_setting_three_slider',
						)
					)
				);	

/********************************* All Google Fonts **************************************/	

			$wp_customize->add_panel( 'baw_google_fonts_panel', array(
				'title'			=> __('All Google Fonts PRO', 'baw'),
				'priority'		=> 11,

			));	

				$wp_customize->add_section( 'baw_google_fonts_title_options', array(
					'title'			=> __('Site Title Font', 'baw'),
					'panel'			=> 'baw_google_fonts_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/black-and-white-wordpress-theme/">Preview Pro Version</a>', 'baw' ),
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
							'section'	=> 'baw_google_fonts_title_options',
							'settings'	=> 'buy_setting_google_fonts_title',
						)
					)
				);			
			
				$wp_customize->add_section( 'baw_description_title_options', array(
					'title'			=> __('Site Describtion Font', 'baw'),
					'panel'			=> 'baw_google_fonts_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/black-and-white-wordpress-theme/">Preview Pro Version</a>', 'baw' ),
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
							'section'	=> 'baw_description_title_options',
							'settings'	=> 'buy_setting_gdescription',
						)
					)
				);			
						
				$wp_customize->add_section( 'baw_menu_font_title_options', array(
					'title'			=> __('Menu Font', 'baw'),
					'panel'			=> 'baw_google_fonts_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/black-and-white-wordpress-theme/">Preview Pro Version</a>', 'baw' ),
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
							'section'	=> 'baw_menu_font_title_options',
							'settings'	=> 'buy_setting_menu_font',
						)
					)
				);			
									
				$wp_customize->add_section( 'baw_content_font_title_options', array(
					'title'			=> __('Content Font', 'baw'),
					'panel'			=> 'baw_google_fonts_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/black-and-white-wordpress-theme/">Preview Pro Version</a>', 'baw' ),
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
							'section'	=> 'baw_content_font_title_options',
							'settings'	=> 'buy_setting_content_font',
						)
					)
				);			
												
				$wp_customize->add_section( 'baw_h_font_title_options', array(
					'title'			=> __('H1,H2,H3,H4,H5,H6', 'baw'),
					'panel'			=> 'baw_google_fonts_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/black-and-white-wordpress-theme/">Preview Pro Version</a>', 'baw' ),
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
							'section'	=> 'baw_h_font_title_options',
							'settings'	=> 'buy_setting_h_font',
						)
					)
				);			


/********************************* Animations **************************************/

				$wp_customize->add_panel( 'baw_animations_panel', array(
					'title'			=> __('Animations PRO', 'baw'),
					'priority'		=> 11,

				));
				$wp_customize->add_section( 'baw_title_animations_options', array(
					'title'			=> __('Site Title Animation', 'baw'),
					'panel'			=> 'baw_animations_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/black-and-white-wordpress-theme/">Preview Pro Version</a>', 'baw' ),
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
							'section'	=> 'baw_title_animations_options',
							'settings'	=> 'buy_setting_title_animations',
						)
					)
				);	


				$wp_customize->add_section( 'baw_tagline_animations_options', array(
					'title'			=> __('Site Tagline Animation', 'baw'),
					'panel'			=> 'baw_animations_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/black-and-white-wordpress-theme/">Preview Pro Version</a>', 'baw' ),
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
							'section'	=> 'baw_tagline_animations_options',
							'settings'	=> 'buy_setting_tagline_animations',
						)
					)
				);	



				$wp_customize->add_section( 'baw_sub_menu_animations_options', array(
					'title'			=> __('Sub Menu Animation', 'baw'),
					'panel'			=> 'baw_animations_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/black-and-white-wordpress-theme/">Preview Pro Version</a>', 'baw' ),
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
							'section'	=> 'baw_sub_menu_animations_options',
							'settings'	=> 'buy_setting_sub_menu_animations',
						)
					)
				);	



				$wp_customize->add_section( 'baw_gallery_animations_options', array(
					'title'			=> __('Gallery Animations', 'baw'),
					'panel'			=> 'baw_animations_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/black-and-white-wordpress-theme/">Preview Pro Version</a>', 'baw' ),
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
							'section'	=> 'baw_gallery_animations_options',
							'settings'	=> 'buy_setting_gallery_animations',
						)
					)
				);

				$wp_customize->add_section( 'baw_about_animations_options', array(
					'title'			=> __('About US Animation', 'baw'),
					'panel'			=> 'baw_animations_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/black-and-white-wordpress-theme/">Preview Pro Version</a>', 'baw' ),
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
							'section'	=> 'baw_about_animations_options',
							'settings'	=> 'buy_setting_about_animations',
						)
					)
				);	



				$wp_customize->add_section( 'baw_sidebar_animations_options', array(
					'title'			=> __('Sidebar Animation', 'baw'),
					'panel'			=> 'baw_animations_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/black-and-white-wordpress-theme/">Preview Pro Version</a>', 'baw' ),
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
							'section'	=> 'baw_sidebar_animations_options',
							'settings'	=> 'buy_setting_sidebar_animations',
						)
					)
				);	


				$wp_customize->add_section( 'baw_article_animations_options', array(
					'title'			=> __('Article Animation', 'baw'),
					'panel'			=> 'baw_animations_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/black-and-white-wordpress-theme/">Preview Pro Version</a>', 'baw' ),
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
							'section'	=> 'baw_article_animations_options',
							'settings'	=> 'buy_setting_article_animations',
						)
					)
				);	



				$wp_customize->add_section( 'baw_footer_animations_options', array(
					'title'			=> __('Footer Animation', 'baw'),
					'panel'			=> 'baw_animations_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/black-and-white-wordpress-theme/">Preview Pro Version</a>', 'baw' ),
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
							'section'	=> 'baw_footer_animations_options',
							'settings'	=> 'buy_setting_footer_animations',
						)
					)
				);	



/**************************************** About US Custom Post Type ********************************/


				$wp_customize->add_section( 'baw_footer_abouut_us_options', array(
					'title'			=> __('About US Custom Post Type PRO', 'baw'),
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/black-and-white-wordpress-theme/">Preview Pro Version</a>', 'baw' ),
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
							'section'	=> 'baw_footer_abouut_us_options',
							'settings'	=> 'buy_setting_abouut_us',
						)
					)
				);	


/********************************* Hide Entry Meta **************************************/

				$wp_customize->add_section( 'baw_meta_options', array(
					'title'			=> __('Hide Entry Meta PRO', 'baw'),
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/black-and-white-wordpress-theme/">Preview Pro Version</a>', 'baw' ),
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
							'section'	=> 'baw_meta_options',
							'settings'	=> 'buy_setting_meta',
						)
					)
				);	

/********************************* Header Options **************************************/


				$wp_customize->add_section( 'baw_menu_header__options', array(
					'title'			=> __('Menu PRO', 'baw'),
					'panel'			=> 'header',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/black-and-white-wordpress-theme/">Preview Pro Version</a>', 'baw' ),
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
							'section'	=> 'baw_menu_header__options',
							'settings'	=> 'buy_menu_header__',
						)
					)
				);	

/********************************* Custom Images **************************************/

				$wp_customize->add_panel( 'baw_custom_images_panel', array(
					'title'			=> __('Custom Images PRO', 'baw'),
					'priority'		=> 13,

				));

				$wp_customize->add_section( 'baw_custom_images_general_options', array(
					'title'			=> __('General', 'baw'),
					'panel'			=> 'baw_custom_images_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/black-and-white-wordpress-theme/">Preview Pro Version</a>', 'baw' ),
					'priority'		=> 1,
				));
				$wp_customize->add_setting( 'buy_custom_images_general', array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback'	=> 'sanitize_text_field',
					'type'	=> 'button',				
				));
				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,'buy_custom_images_general', array(
							'section'	=> 'baw_custom_images_general_options',
							'settings'	=> 'buy_custom_images_general',
						)
					)
				);	
		for ($i=1;$i<=36; $i++) {
				$wp_customize->add_section( 'baw_custom_images_options'.$i, array(
					'title'			=> __('Image '.$i, 'baw'),
					'panel'			=> 'baw_custom_images_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/black-and-white-wordpress-theme/">Preview Pro Version</a>', 'baw' ),
					'priority'		=> 1,
				));
				$wp_customize->add_setting( 'buy_custom_images_'.$i, array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback'	=> 'sanitize_text_field',
					'type'	=> 'button',				
				));
				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,'buy_custom_images_'.$i, array(
							'section'	=> 'baw_custom_images_options'.$i,
							'settings'	=> 'buy_custom_images_'.$i,
						)
					)
				);
			}
/********************************* Counter **************************************/

				$wp_customize->add_panel( 'baw_counter_panel', array(
					'title'			=> __('Counter PRO', 'baw'),
					'priority'		=> 62,

				));

				$wp_customize->add_section( 'baw_counter_general_options', array(
					'title'			=> __('Counter Options', 'baw'),
					'panel'			=> 'baw_counter_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/black-and-white-wordpress-theme/">Preview Pro Version</a>', 'baw' ),
					'priority'		=> 1,
				));
				$wp_customize->add_setting( 'buy_counter_general', array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback'	=> 'sanitize_text_field',
					'type'	=> 'button',				
				));
				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,'buy_counter_general', array(
							'section'	=> 'baw_counter_general_options',
							'settings'	=> 'buy_counter_general',
						)
					)
				);
				
		for ($i=1;$i<=10; $i++) {
				$wp_customize->add_section( 'baw_counter_options'.$i, array(
					'title'			=> __('Counter '.$i, 'baw'),
					'panel'			=> 'baw_counter_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/black-and-white-wordpress-theme/">Preview Pro Version</a>', 'baw' ),
					'priority'		=> 1,
				));
				$wp_customize->add_setting( 'buy_counter_'.$i, array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback'	=> 'sanitize_text_field',
					'type'	=> 'button',				
				));
				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,'buy_counter_'.$i, array(
							'section'	=> 'baw_counter_options'.$i,
							'settings'	=> 'buy_counter_'.$i,
						)
					)
				);
			}
			
/********************************* 'Font Size **************************************/			
			
				$wp_customize->add_section( 'baw_font_size_options1', array(
					'title'			=> __('Font Size', 'baw'),
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/black-and-white-wordpress-theme/">Preview Pro Version</a>', 'baw' ),
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
							'section'	=> 'baw_font_size_options1',
							'settings'	=> 'buy_font_size_general',
						)
					)
				);			


/********************************* 'Loader **************************************/			
			
				$wp_customize->add_section( 'baw_Loader_options1', array(
					'title'			=> __('Loader PRO', 'baw'),
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/black-and-white-wordpress-theme/">Preview Pro Version</a>', 'baw' ),
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
							'section'	=> 'baw_Loader_options1',
							'settings'	=> 'buy_Loader',
						)
					)
				);									
/********************************* 'Parallax Images **************************************/			


				$wp_customize->add_panel( 'baw_parallax_images_panel', array(
					'title'			=> __('Parallax Images PRO', 'baw'),					
					'priority'		=> 65,

				));
		for ($i=1;$i<=10; $i++) {				
				$wp_customize->add_section( 'baw_parallax_images_'.$i, array(
					'title'			=> __('Image '.$i, 'baw'),
					'panel'			=> 'baw_parallax_images_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/black-and-white-wordpress-theme/">Preview Pro Version</a>', 'baw' ),
					'priority'		=> 63,
				));
				$wp_customize->add_setting( 'baw_parallax_images__'.$i, array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback'	=> 'sanitize_text_field',
					'type'	=> 'button',				
				));
				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,'baw_parallax_images__'.$i, array(
							'section'	=> 'baw_parallax_images_'.$i,
							'settings'	=> 'baw_parallax_images__'.$i,
						)
					)
				);
		}				
				
		}
		endif;
		 
		add_action('customize_register', 'baw_seos_buy');
		
		function seos_styles_customize_styles( $input ) { ?>
			<style type="text/css">
				<?php for($i=1;$i<=20;$i++) { echo "#_customize-input-buy_setting_image_slider".$i.","; } ?> #_customize-input-buy_setting_image_slider<?php echo $i ;?>{ display: none; }
				<?php for($i=1;$i<=30;$i++) { echo "#_customize-input-buy_setting_gallery".$i.","; } ?> #_customize-input-buy_setting_gallery<?php echo $i ;?>{ display: none; }
				<?php for($i=1;$i<=36;$i++) { echo "#_customize-input-buy_custom_images_".$i.","; } ?> #_customize-input-buy_custom_images_<?php echo $i ;?>{ display: none; }
				<?php for($i=1;$i<=10;$i++) { echo "#_customize-input-buy_counter_".$i.","; } ?> #_customize-input-buy_counter_<?php echo $i ;?>{ display: none; }
				<?php for($i=1;$i<=10;$i++) { echo "#_customize-input-baw_parallax_images__".$i.","; } ?> #_customize-input-baw_parallax_images__<?php echo $i ;?>{ display: none; }
				#_customize-input-buy_Loader,
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
				<?php for($i=1;$i<=30;$i++) { echo "#accordion-section-baw_gallery_options".$i." h3,"; } ?>
				<?php for($i=1;$i<=36;$i++) { echo "#accordion-section-baw_custom_images_options".$i." h3,"; } ?>
				<?php for($i=1;$i<=10;$i++) { echo "#accordion-section-baw_counter_options".$i." h3,"; } ?>
				<?php for($i=1;$i<=10;$i++) { echo "#accordion-section-baw_parallax_images_".$i." h3,"; } ?>
				#accordion-section-baw_Loader_options1 h3,
				#accordion-panel-baw_parallax_images_panel h3,
				#accordion-section-baw_font_size_options1 h3,
				#accordion-section-baw_counter_general_options h3,
				#accordion-panel-baw_counter_panel h3,
				#accordion-section-baw_custom_images_general_options h3,
				#accordion-panel-baw_custom_images_panel h3,
				#accordion-section-baw_menu_header__options h3,
				#accordion-section-baw_meta_options h3,
				#accordion-section-baw_footer_animations_options h3,
				#accordion-section-baw_article_animations_options h3,
				#accordion-section-baw_about_animations_options h3,
				#accordion-section-baw_sidebar_animations_options h3,
				#accordion-section-baw_gallery_animations_options h3,
				#accordion-section-baw_sub_menu_animations_options h3,
				#accordion-section-baw_tagline_animations_options h3,
				#accordion-section-baw_title_animations_options h3,
				#accordion-section-baw_footer_abouut_us_options h3,
				#accordion-panel-baw_animations_panel h3,
				#accordion-section-baw_h_font_title_options h3,
				#accordion-section-baw_content_font_title_options h3,
				#accordion-section-baw_menu_font_title_options h3,
				#accordion-section-baw_description_title_options h3,
				#accordion-section-baw_google_fonts_title_options h3,
				#accordion-panel-custom_images_panel h3,
				#accordion-section-baw_three_slider_options h3,
				#accordion-panel-gallery_panel h3,
				#accordion-panel-baw_google_fonts_panel h3,
				#accordion-section-custom_images_options h3 {
					color: red !important;
				}

			</style>
		<?php }
		
		add_action( 'customize_controls_print_styles', 'seos_styles_customize_styles');	
		
}