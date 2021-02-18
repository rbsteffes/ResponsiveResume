<?php
if( ! defined( 'ABSPATH' ) ) {
    exit;
}

$seostheme_pro_all_colors = wp_get_theme();
if ( $seostheme_pro_all_colors == "All Colors" ) {

		if ( ! function_exists( 'all_colors_seos_buy' ) ) :
			function all_colors_seos_buy( $wp_customize ) {
				
/********************************* Image Slider **************************************/				
				
			$wp_customize->add_panel( 'custom_images_panel', array(
				'title'			=> __('Image Slider PRO', 'all-colors'),
				'priority'		=> 2,

			));

			$wp_customize->add_section( 'custom_images_options', array(
				'title'			=> __('General Options', 'all_colors'),
				'panel'			=> 'custom_images_panel',	
				'description'    => __( '<a target="_blank" href="https://seosthemes.info/all-colors-wordpress-theme/">Preview Pro Version</a>', 'all-colors' ),
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
						'title'			=> __('Image Slider '.$im, 'all-colors'),
						'panel'			=> 'custom_images_panel',	
						'description'    => __( '<a target="_blank" href="https://seosthemes.info/all-colors-wordpress-theme/">Preview Pro Version</a>', 'all-colors' ),
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
			
/********************************* Before Header **************************************/	
			


				$wp_customize->add_section( 'all_colors_before', array(
					'title'			=> __('Before Header PRO', 'all-colors'),
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/all-colors-wordpress-theme/">Preview Pro Version</a>', 'all-colors' ),
					'priority'		=> 2,
				));
				$wp_customize->add_setting( 'all_colors_before_header', array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback'	=> 'sanitize_text_field',
					'type'	=> 'button',				
				));
				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,'all_colors_before_header', array(
							'section'	=> 'all_colors_before',
							'settings'	=> 'all_colors_before_header',
						)
					)
				);			
/********************************* Hide Entry Meta **************************************/	
			


				$wp_customize->add_section( 'all_colors_Hide', array(
					'title'			=> __('Hide Entry Meta PRO', 'all-colors'),
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/all-colors-wordpress-theme/">Preview Pro Version</a>', 'all-colors' ),
					'priority'		=> 2,
				));
				$wp_customize->add_setting( 'all_colors_hide_meta', array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback'	=> 'sanitize_text_field',
					'type'	=> 'button',				
				));
				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,'all_colors_befoall_colors_hide_metare_header', array(
							'section'	=> 'all_colors_Hide',
							'settings'	=> 'all_colors_hide_meta',
						)
					)
				);			
/********************************* Gallery **************************************/				
			$wp_customize->add_panel( 'gallery_panel', array(
				'title'			=> __('Gallery PRO', 'all-colors'),
				'priority'		=> 2,

			));

			for ($im=1;$im<=30; $im++) {
				$wp_customize->add_section( 'all_colors_gallery_options'.$im, array(
					'title'			=> __('Album'.$im, 'all-colors'),
					'panel'			=> 'gallery_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/all-colors-wordpress-theme/">Preview Pro Version</a>', 'all-colors' ),
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
							'section'	=> 'all_colors_gallery_options'.$im,
							'settings'	=> 'buy_setting_gallery'.$im,
						)
					)
				);
			}


			
/********************************* Testimonials **************************************/	
			


				$wp_customize->add_section( 'all_colors_testimonials', array(
					'title'			=> __('Testimonials PRO', 'all-colors'),
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/all-colors-wordpress-theme/">Preview Pro Version</a>', 'all-colors' ),
					'priority'		=> 2,
				));
				$wp_customize->add_setting( 'all_colors_setting_testimonials', array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback'	=> 'sanitize_text_field',
					'type'	=> 'button',				
				));
				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,'all_colors_setting_testimonials', array(
							'section'	=> 'all_colors_testimonials',
							'settings'	=> 'all_colors_setting_testimonials',
						)
					)
				);
			
						
/********************************* Custom Images **************************************/	
			


				$wp_customize->add_section( 'all_colors_Custom_Images', array(
					'title'			=> __('Custom Images PRO', 'all-colors'),
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/all-colors-wordpress-theme/">Preview Pro Version</a>', 'all-colors' ),
					'priority'		=> 2,
				));
				$wp_customize->add_setting( 'all_colors_setting_Custom_Images', array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback'	=> 'sanitize_text_field',
					'type'	=> 'button',				
				));
				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,'all_colors_setting_Custom_Images', array(
							'section'	=> 'all_colors_Custom_Images',
							'settings'	=> 'all_colors_setting_Custom_Images',
						)
					)
				);
			
			
/********************************* Social Icons **************************************/	
			


				$wp_customize->add_section( 'all_colors_social', array(
					'title'			=> __('Social Media PRO', 'all-colors'),
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/all-colors-wordpress-theme/">Preview Pro Version</a>', 'all-colors' ),
					'priority'		=> 2,
				));
				$wp_customize->add_setting( 'all_colors_social_icons', array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback'	=> 'sanitize_text_field',
					'type'	=> 'button',				
				));
				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,'all_colors_social_icons', array(
							'section'	=> 'all_colors_social',
							'settings'	=> 'all_colors_social_icons',
						)
					)
				);
			
			
			
/********************************* Home Page Parallax Image **************************************/	
			


				$wp_customize->add_section( 'all_colors_Parallax', array(
					'title'			=> __('Home Page Parallax Image PRO', 'all-colors'),
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/all-colors-wordpress-theme/">Preview Pro Version</a>', 'all-colors' ),
					'priority'		=> 2,
				));
				$wp_customize->add_setting( 'all_colors_setting_Parallax', array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback'	=> 'sanitize_text_field',
					'type'	=> 'button',				
				));
				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,'all_colors_setting_Parallax', array(
							'section'	=> 'all_colors_Parallax',
							'settings'	=> 'all_colors_setting_Parallax',
						)
					)
				);
			
			
			
/********************************* Recent Posts Slider **************************************/	
			


				$wp_customize->add_section( 'all_colors_Recent_Posts', array(
					'title'			=> __('Recent Posts Slider PRO', 'all-colors'),
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/all-colors-wordpress-theme/">Preview Pro Version</a>', 'all-colors' ),
					'priority'		=> 2,
				));
				$wp_customize->add_setting( 'all_colors_setting_Recent_Posts', array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback'	=> 'sanitize_text_field',
					'type'	=> 'button',				
				));
				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,'all_colors_setting_Recent_Posts', array(
							'section'	=> 'all_colors_Recent_Posts',
							'settings'	=> 'all_colors_setting_Recent_Posts',
						)
					)
				);
			



/********************************* All Google Fonts **************************************/	

			$wp_customize->add_panel( 'all_colors_google_fonts_panel', array(
				'title'			=> __('All Google Fonts PRO', 'all-colors'),
				'priority'		=> 11,

			));	

				$wp_customize->add_section( 'all_colors_google_fonts_title_options', array(
					'title'			=> __('Site Title Font', 'all-colors'),
					'panel'			=> 'all_colors_google_fonts_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/all-colors-wordpress-theme/">Preview Pro Version</a>', 'all-colors' ),
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
							'section'	=> 'all_colors_google_fonts_title_options',
							'settings'	=> 'buy_setting_google_fonts_title',
						)
					)
				);			
			
				$wp_customize->add_section( 'all_colors_description_title_options', array(
					'title'			=> __('Site Describtion Font', 'all-colors'),
					'panel'			=> 'all_colors_google_fonts_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/all-colors-wordpress-theme/">Preview Pro Version</a>', 'all-colors' ),
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
							'section'	=> 'all_colors_description_title_options',
							'settings'	=> 'buy_setting_gdescription',
						)
					)
				);			
						
				$wp_customize->add_section( 'all_colors_menu_font_title_options', array(
					'title'			=> __('Menu Font', 'all-colors'),
					'panel'			=> 'all_colors_google_fonts_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/all-colors-wordpress-theme/">Preview Pro Version</a>', 'all-colors' ),
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
							'section'	=> 'all_colors_menu_font_title_options',
							'settings'	=> 'buy_setting_menu_font',
						)
					)
				);			
									
				$wp_customize->add_section( 'all_colors_content_font_title_options', array(
					'title'			=> __('Content Font', 'all-colors'),
					'panel'			=> 'all_colors_google_fonts_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/all-colors-wordpress-theme/">Preview Pro Version</a>', 'all-colors' ),
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
							'section'	=> 'all_colors_content_font_title_options',
							'settings'	=> 'buy_setting_content_font',
						)
					)
				);			
												
				$wp_customize->add_section( 'all_colors_h_font_title_options', array(
					'title'			=> __('H1,H2,H3,H4,H5,H6', 'all-colors'),
					'panel'			=> 'all_colors_google_fonts_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/all-colors-wordpress-theme/">Preview Pro Version</a>', 'all-colors' ),
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
							'section'	=> 'all_colors_h_font_title_options',
							'settings'	=> 'buy_setting_h_font',
						)
					)
				);			


/********************************* Homepage Images **************************************/
		for ($im=4;$im<=30; $im++) {
			
		$wp_customize->add_section( 'seos_custom_images_sections'.$im , array(
			'title'       => __( 'Image '.$im, 'all-colors' ),
			'panel'     => 'seos__custom_images_panel',
			'priority'    => 3,
			'description'    => __( '<a target="_blank" href="https://seosthemes.info/all-colors-wordpress-theme/">Preview Pro Version</a>', 'all-colors' ),	
		) );
		
				$wp_customize->add_setting( 'buy_setting_images_sections'.$im, array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback'	=> 'sanitize_text_field',
					'type'	=> 'button',				
				));
				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,'buy_setting_images_sections'.$im, array(
							'section'	=> 'seos_custom_images_sections'.$im,
							'settings'	=> 'buy_setting_images_sections'.$im,
						)
					)
				);	
				
	}

/********************************* Animations **************************************/

				$wp_customize->add_panel( 'all_colors_animations_panel', array(
					'title'			=> __('Animations PRO', 'all-colors'),
					'priority'		=> 11,

				));
				$wp_customize->add_section( 'all_colors_title_animations_options', array(
					'title'			=> __('Site Title Animation', 'all-colors'),
					'panel'			=> 'all_colors_animations_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/all-colors-wordpress-theme/">Preview Pro Version</a>', 'all-colors' ),
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
							'section'	=> 'all_colors_title_animations_options',
							'settings'	=> 'buy_setting_title_animations',
						)
					)
				);	


				$wp_customize->add_section( 'all_colors_tagline_animations_options', array(
					'title'			=> __('Site Tagline Animation', 'all-colors'),
					'panel'			=> 'all_colors_animations_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/all-colors-wordpress-theme/">Preview Pro Version</a>', 'all-colors' ),
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
							'section'	=> 'all_colors_tagline_animations_options',
							'settings'	=> 'buy_setting_tagline_animations',
						)
					)
				);	



				$wp_customize->add_section( 'all_colors_sub_menu_animations_options', array(
					'title'			=> __('Sub Menu Animation', 'all-colors'),
					'panel'			=> 'all_colors_animations_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/all-colors-wordpress-theme/">Preview Pro Version</a>', 'all-colors' ),
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
							'section'	=> 'all_colors_sub_menu_animations_options',
							'settings'	=> 'buy_setting_sub_menu_animations',
						)
					)
				);	



				$wp_customize->add_section( 'all_colors_gallery_animations_options', array(
					'title'			=> __('Gallery Animations', 'all-colors'),
					'panel'			=> 'all_colors_animations_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/all-colors-wordpress-theme/">Preview Pro Version</a>', 'all-colors' ),
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
							'section'	=> 'all_colors_gallery_animations_options',
							'settings'	=> 'buy_setting_gallery_animations',
						)
					)
				);

				$wp_customize->add_section( 'all_colors_about_animations_options', array(
					'title'			=> __('Custom Images Animation', 'all-colors'),
					'panel'			=> 'all_colors_animations_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/all-colors-wordpress-theme/">Preview Pro Version</a>', 'all-colors' ),
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
							'section'	=> 'all_colors_about_animations_options',
							'settings'	=> 'buy_setting_about_animations',
						)
					)
				);	



				$wp_customize->add_section( 'all_colors_sidebar_animations_options', array(
					'title'			=> __('Sidebar Animation', 'all-colors'),
					'panel'			=> 'all_colors_animations_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/all-colors-wordpress-theme/">Preview Pro Version</a>', 'all-colors' ),
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
							'section'	=> 'all_colors_sidebar_animations_options',
							'settings'	=> 'buy_setting_sidebar_animations',
						)
					)
				);	


				$wp_customize->add_section( 'all_colors_article_animations_options', array(
					'title'			=> __('Article Animation', 'all-colors'),
					'panel'			=> 'all_colors_animations_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/all-colors-wordpress-theme/">Preview Pro Version</a>', 'all-colors' ),
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
							'section'	=> 'all_colors_article_animations_options',
							'settings'	=> 'buy_setting_article_animations',
						)
					)
				);	



				$wp_customize->add_section( 'all_colors_footer_animations_options', array(
					'title'			=> __('Footer Animation', 'all-colors'),
					'panel'			=> 'all_colors_animations_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/all-colors-wordpress-theme/">Preview Pro Version</a>', 'all-colors' ),
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
							'section'	=> 'all_colors_footer_animations_options',
							'settings'	=> 'buy_setting_footer_animations',
						)
					)
				);

/********************************* Counter **************************************/

				$wp_customize->add_panel( 'all_colors_counter_panel', array(
					'title'			=> __('Counter PRO', 'all-colors'),
					'priority'		=> 62,

				));

				$wp_customize->add_section( 'all_colors_counter_general_options', array(
					'title'			=> __('Counter Options', 'all-colors'),
					'panel'			=> 'all_colors_counter_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/all-colors-wordpress-theme/">Preview Pro Version</a>', 'all-colors' ),
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
							'section'	=> 'all_colors_counter_general_options',
							'settings'	=> 'buy_counter_general',
						)
					)
				);
				
		for ($i=1;$i<=10; $i++) {
				$wp_customize->add_section( 'all_colors_counter_options'.$i, array(
					'title'			=> __('Counter '.$i, 'all-colors'),
					'panel'			=> 'all_colors_counter_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/all-colors-wordpress-theme/">Preview Pro Version</a>', 'all-colors' ),
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
							'section'	=> 'all_colors_counter_options'.$i,
							'settings'	=> 'buy_counter_'.$i,
						)
					)
				);
			}
			
/********************************* 'Font Size **************************************/			
			
				$wp_customize->add_section( 'all_colors_font_size_options1', array(
					'title'			=> __('Font Size PRO', 'all-colors'),
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/all-colors-wordpress-theme/">Preview Pro Version</a>', 'all-colors' ),
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
							'section'	=> 'all_colors_font_size_options1',
							'settings'	=> 'buy_font_size_general',
						)
					)
				);			

		}
		endif;
		 
		add_action('customize_register', 'all_colors_seos_buy');
		
		function all_colors_styles_customize_styles( $input ) { ?>
			<style type="text/css">
				<?php for($i=1;$i<=20;$i++) { echo "#_customize-input-buy_setting_image_slider".$i.","; } ?> #_customize-input-buy_setting_image_slider<?php echo $i ;?>{ display: none; }
				<?php for($i=1;$i<=30;$i++) { echo "#_customize-input-buy_setting_testimonials".$i.","; } ?> #_customize-input-buy_setting_testimonials<?php echo $i ;?>{ display: none; }
				<?php for($i=1;$i<=30;$i++) { echo "#_customize-input-buy_setting_gallery".$i.","; } ?> #_customize-input-buy_setting_gallery<?php echo $i ;?>{ display: none; }
				<?php for($i=1;$i<=36;$i++) { echo "#_customize-input-buy_custom_images_".$i.","; } ?> #_customize-input-buy_custom_images_<?php echo $i ;?>{ display: none; }
				<?php for($i=1;$i<=10;$i++) { echo "#_customize-input-buy_counter_".$i.","; } ?> #_customize-input-buy_counter_<?php echo $i ;?>{ display: none; }
				<?php for($i=1;$i<=10;$i++) { echo "#_customize-input-all_colors_parallax_images__".$i.","; } ?> #_customize-input-all_colors_parallax_images__<?php echo $i ;?>{ display: none; }
				<?php for($i=4;$i<=30;$i++) { echo "#_customize-input-buy_setting_images_sections".$i.","; } ?> #_customize-input-buy_setting_images_sections<?php echo $i ;?>{ display: none; }
				#_customize-input-all_colors_setting_Recent_Posts,
				#_customize-input-all_colors_setting_Parallax,
				#_customize-input-buy_Search_Options,
				#_customize-input-all_colors_setting_Custom_Images,
				#accordion-section-custom_Sticky_Slider,
				#_customize-input-buy_setting_testimonials,
				#_customize-input-buy__About_US_Section,
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
				#_customize-input-all_colors_before_header,
				#_customize-input-all_colors_social_icons,
				#_customize-input-buy_setting_google_fonts_title,
				#_customize-input-all_colors_befoall_colors_hide_metare_header,
				#_customize-input-all_colors_setting_testimonials,
				#_customize-input-buy_setting_image_slider{ 
				    display: none; 
				}
				
				<?php for($i=1;$i<=20;$i++) { echo "#accordion-section-custom_images_slider_options".$i." h3,"; } ?>
				<?php for($i=1;$i<=30;$i++) { echo "#accordion-section-custom_images_testimonials_options".$i." h3,"; } ?>
				<?php for($i=1;$i<=30;$i++) { echo "#accordion-section-all_colors_gallery_options".$i." h3,"; } ?>
				<?php for($i=1;$i<=36;$i++) { echo "#accordion-section-all_colors_custom_images_options".$i." h3,"; } ?>
				<?php for($i=1;$i<=10;$i++) { echo "#accordion-section-all_colors_counter_options".$i." h3,"; } ?>
				<?php for($i=1;$i<=10;$i++) { echo "#accordion-section-all_colors_parallax_images_".$i." h3,"; } ?>
				<?php for($i=4;$i<=30;$i++) { echo "#accordion-section-seos_custom_images_sections".$i." h3,"; } ?>
				#accordion-section-all_colors_Recent_Posts h3,
				#accordion-section-all_colors_Parallax h3,
				#accordion-section-all_colors_Custom_Images h3,
				#accordion-section-all_colors_testimonials h3,
				#accordion-section-all_colors_Hide h3,
				#accordion-section-all_colors_social h3,
				#accordion-section-custom_Sticky_Slider h3,
				#accordion-section-all_colors_before h3,
				#accordion-section-all_colors_cat_options h3,
				#accordion-section-custom_Search_Options h3,
				#accordion-section-all_colors_About_US_Section h3,
				#accordion-section-custom_testimonials_options h3,
				#accordion-section-all_colors_Loader_options1 h3,
				#accordion-panel-custom_testimonials_panel h3,
				#accordion-panel-all_colors_parallax_images_panel h3,
				#accordion-section-all_colors_font_size_options1 h3,
				#accordion-section-all_colors_counter_general_options h3,
				#accordion-panel-all_colors_counter_panel h3,
				#accordion-section-all_colors_custom_images_general_options h3,
				#accordion-panel-all_colors_custom_images_panel h3,
				#accordion-section-all_colors_menu_header__options h3,
				#accordion-section-all_colors_meta_options h3,
				#accordion-section-all_colors_footer_animations_options h3,
				#accordion-section-all_colors_article_animations_options h3,
				#accordion-section-all_colors_about_animations_options h3,
				#accordion-section-all_colors_sidebar_animations_options h3,
				#accordion-section-all_colors_gallery_animations_options h3,
				#accordion-section-all_colors_sub_menu_animations_options h3,
				#accordion-section-all_colors_tagline_animations_options h3,
				#accordion-section-all_colors_title_animations_options h3,
				#accordion-section-all_colors_footer_abouut_us_options h3,
				#accordion-panel-all_colors_animations_panel h3,
				#accordion-section-all_colors_h_font_title_options h3,
				#accordion-section-all_colors_content_font_title_options h3,
				#accordion-section-all_colors_menu_font_title_options h3,
				#accordion-section-all_colors_description_title_options h3,
				#accordion-section-all_colors_google_fonts_title_options h3,
				#accordion-panel-custom_images_panel h3,
				#accordion-section-all_colors_three_slider_options h3,
				#accordion-panel-gallery_panel h3,
				#accordion-panel-all_colors_google_fonts_panel h3,
				#accordion-section-custom_images_options h3 {
					color: red !important;
				}

			</style>
		<?php }
		
		add_action( 'customize_controls_print_styles', 'all_colors_styles_customize_styles');	
		
}