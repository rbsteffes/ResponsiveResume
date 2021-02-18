<?php
if( ! defined( 'ABSPATH' ) ) {
    exit;
}

$seostheme_pro_photo_studio = wp_get_theme();
if ( $seostheme_pro_photo_studio == "Photo Studio" ) {

		if ( ! function_exists( 'photo_studio_seos_buy' ) ) :
			function photo_studio_seos_buy( $wp_customize ) {
				
/********************************* Image Slider **************************************/				
				
			$wp_customize->add_panel( 'custom_images_panel', array(
				'title'			=> __('Image Slider PRO', 'photo_studio'),
				'priority'		=> 2,

			));

			$wp_customize->add_section( 'custom_images_options', array(
				'title'			=> __('General Options', 'seos'),
				'panel'			=> 'custom_images_panel',	
				'description'    => __( '<a target="_blank" href="https://seosthemes.info/photo-wordpress-theme/">Preview Pro Version</a>', 'photo_studio' ),
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
						'title'			=> __('Image Slider '.$im, 'photo_studio'),
						'panel'			=> 'custom_images_panel',	
						'description'    => __( '<a target="_blank" href="https://seosthemes.info/photo-wordpress-theme/">Preview Pro Version</a>', 'photo_studio' ),
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
				'title'			=> __('Gallery PRO', 'photo_studio'),
				'priority'		=> 2,

			));

			for ($im=1;$im<=30; $im++) {
				$wp_customize->add_section( 'photo_studio_gallery_options'.$im, array(
					'title'			=> __('Album'.$im, 'photo_studio'),
					'panel'			=> 'gallery_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/photo-wordpress-theme/">Preview Pro Version</a>', 'photo_studio' ),
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
							'section'	=> 'photo_studio_gallery_options'.$im,
							'settings'	=> 'buy_setting_gallery'.$im,
						)
					)
				);
			}
/********************************* Home Page Images **************************************/


	for($photo=3;$photo<=50;$photo++) {		
		$wp_customize->add_section( 'photo_studio_home_images'.$photo , array(
			'title'       => __( 'Image'.$photo , 'photo-studio' ),
			'description'    => __( '<a target="_blank" href="https://seosthemes.info/photo-wordpress-theme/">Preview Pro Version</a>', 'photo_studio' ),
			'priority'		=> 3,
			'panel'		=> 'photo_studio_home_images_panel',
		) );
				$wp_customize->add_setting( 'photo_studio_home_images_image'.$photo, array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback'	=> 'sanitize_text_field',
					'type'	=> 'button',				
				));
				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,'photo_studio_home_images_image'.$photo, array(
							'section'	=> 'photo_studio_home_images'.$photo,
							'settings'	=> 'photo_studio_home_images_image'.$photo,
						)
					)
				);		
	}
/********************************* 'Home Page Parallax Image **************************************/			



		for ($i=1;$i<=1; $i++) {				
				$wp_customize->add_section( 'photo_studio_parallax_images_'.$i, array(
					'title'			=> __('Home Page Parallax Image ', 'photo_studio'),	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/photo-wordpress-theme/">Preview Pro Version</a>', 'photo_studio' ),
					'priority'		=> 3,
				));
				$wp_customize->add_setting( 'photo_studio_parallax_images__'.$i, array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback'	=> 'sanitize_text_field',
					'type'	=> 'button',				
				));
				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,'photo_studio_parallax_images__'.$i, array(
							'section'	=> 'photo_studio_parallax_images_'.$i,
							'settings'	=> 'photo_studio_parallax_images__'.$i,
						)
					)
				);
		}

/********************************* Home Page Home Page Columns **************************************/			



					
				$wp_customize->add_section( 'photo_studio_Home_Page_Columns', array(
					'title'			=> __('Home Page Columns ', 'photo_studio'),	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/photo-wordpress-theme/">Preview Pro Version</a>', 'photo_studio' ),
					'priority'		=> 3,
				));
				$wp_customize->add_setting( 'photo_studio_Home_Page_Columns_', array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback'	=> 'sanitize_text_field',
					'type'	=> 'button',				
				));
				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,'photo_studio_Home_Page_Columns_', array(
							'section'	=> 'photo_studio_Home_Page_Columns',
							'settings'	=> 'photo_studio_Home_Page_Columns_',
						)
					)
				);
			
/********************************* Grid Gallery **************************************/	

				$wp_customize->add_section( 'photo_studio_three_slider_options', array(
					'title'			=> __('Grid Gallery PRO', 'photo_studio'),
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/photo-wordpress-theme/">Preview Pro Version</a>', 'photo_studio' ),
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
							'section'	=> 'photo_studio_three_slider_options',
							'settings'	=> 'buy_setting_three_slider',
						)
					)
				);	

/********************************* All Google Fonts **************************************/	

			$wp_customize->add_panel( 'photo_studio_google_fonts_panel', array(
				'title'			=> __('All Google Fonts PRO', 'photo_studio'),
				'priority'		=> 11,

			));	

				$wp_customize->add_section( 'photo_studio_google_fonts_title_options', array(
					'title'			=> __('Site Title Font', 'photo_studio'),
					'panel'			=> 'photo_studio_google_fonts_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/photo-wordpress-theme/">Preview Pro Version</a>', 'photo_studio' ),
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
							'section'	=> 'photo_studio_google_fonts_title_options',
							'settings'	=> 'buy_setting_google_fonts_title',
						)
					)
				);			
			
				$wp_customize->add_section( 'photo_studio_description_title_options', array(
					'title'			=> __('Site Describtion Font', 'photo_studio'),
					'panel'			=> 'photo_studio_google_fonts_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/photo-wordpress-theme/">Preview Pro Version</a>', 'photo_studio' ),
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
							'section'	=> 'photo_studio_description_title_options',
							'settings'	=> 'buy_setting_gdescription',
						)
					)
				);			
						
				$wp_customize->add_section( 'photo_studio_menu_font_title_options', array(
					'title'			=> __('Menu Font', 'photo_studio'),
					'panel'			=> 'photo_studio_google_fonts_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/photo-wordpress-theme/">Preview Pro Version</a>', 'photo_studio' ),
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
							'section'	=> 'photo_studio_menu_font_title_options',
							'settings'	=> 'buy_setting_menu_font',
						)
					)
				);			
									
				$wp_customize->add_section( 'photo_studio_content_font_title_options', array(
					'title'			=> __('Content Font', 'photo_studio'),
					'panel'			=> 'photo_studio_google_fonts_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/photo-wordpress-theme/">Preview Pro Version</a>', 'photo_studio' ),
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
							'section'	=> 'photo_studio_content_font_title_options',
							'settings'	=> 'buy_setting_content_font',
						)
					)
				);			
												
				$wp_customize->add_section( 'photo_studio_h_font_title_options', array(
					'title'			=> __('H1,H2,H3,H4,H5,H6', 'photo_studio'),
					'panel'			=> 'photo_studio_google_fonts_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/photo-wordpress-theme/">Preview Pro Version</a>', 'photo_studio' ),
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
							'section'	=> 'photo_studio_h_font_title_options',
							'settings'	=> 'buy_setting_h_font',
						)
					)
				);			


/********************************* Animations **************************************/

				$wp_customize->add_panel( 'photo_studio_animations_panel', array(
					'title'			=> __('Animations PRO', 'photo_studio'),
					'priority'		=> 11,

				));
				$wp_customize->add_section( 'photo_studio_title_animations_options', array(
					'title'			=> __('Site Title Animation', 'photo_studio'),
					'panel'			=> 'photo_studio_animations_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/photo-wordpress-theme/">Preview Pro Version</a>', 'photo_studio' ),
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
							'section'	=> 'photo_studio_title_animations_options',
							'settings'	=> 'buy_setting_title_animations',
						)
					)
				);	


				$wp_customize->add_section( 'photo_studio_tagline_animations_options', array(
					'title'			=> __('Site Tagline Animation', 'photo_studio'),
					'panel'			=> 'photo_studio_animations_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/photo-wordpress-theme/">Preview Pro Version</a>', 'photo_studio' ),
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
							'section'	=> 'photo_studio_tagline_animations_options',
							'settings'	=> 'buy_setting_tagline_animations',
						)
					)
				);	



				$wp_customize->add_section( 'photo_studio_sub_menu_animations_options', array(
					'title'			=> __('Sub Menu Animation', 'photo_studio'),
					'panel'			=> 'photo_studio_animations_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/photo-wordpress-theme/">Preview Pro Version</a>', 'photo_studio' ),
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
							'section'	=> 'photo_studio_sub_menu_animations_options',
							'settings'	=> 'buy_setting_sub_menu_animations',
						)
					)
				);	



				$wp_customize->add_section( 'photo_studio_gallery_animations_options', array(
					'title'			=> __('Gallery Animations', 'photo_studio'),
					'panel'			=> 'photo_studio_animations_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/photo-wordpress-theme/">Preview Pro Version</a>', 'photo_studio' ),
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
							'section'	=> 'photo_studio_gallery_animations_options',
							'settings'	=> 'buy_setting_gallery_animations',
						)
					)
				);

				$wp_customize->add_section( 'photo_studio_about_animations_options', array(
					'title'			=> __('About US Animation', 'photo_studio'),
					'panel'			=> 'photo_studio_animations_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/photo-wordpress-theme/">Preview Pro Version</a>', 'photo_studio' ),
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
							'section'	=> 'photo_studio_about_animations_options',
							'settings'	=> 'buy_setting_about_animations',
						)
					)
				);	



				$wp_customize->add_section( 'photo_studio_sidebar_animations_options', array(
					'title'			=> __('Sidebar Animation', 'photo_studio'),
					'panel'			=> 'photo_studio_animations_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/photo-wordpress-theme/">Preview Pro Version</a>', 'photo_studio' ),
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
							'section'	=> 'photo_studio_sidebar_animations_options',
							'settings'	=> 'buy_setting_sidebar_animations',
						)
					)
				);	


				$wp_customize->add_section( 'photo_studio_article_animations_options', array(
					'title'			=> __('Article Animation', 'photo_studio'),
					'panel'			=> 'photo_studio_animations_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/photo-wordpress-theme/">Preview Pro Version</a>', 'photo_studio' ),
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
							'section'	=> 'photo_studio_article_animations_options',
							'settings'	=> 'buy_setting_article_animations',
						)
					)
				);	



				$wp_customize->add_section( 'photo_studio_footer_animations_options', array(
					'title'			=> __('Footer Animation', 'photo_studio'),
					'panel'			=> 'photo_studio_animations_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/photo-wordpress-theme/">Preview Pro Version</a>', 'photo_studio' ),
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
							'section'	=> 'photo_studio_footer_animations_options',
							'settings'	=> 'buy_setting_footer_animations',
						)
					)
				);	

/********************************* Letter Effect **************************************/

				$wp_customize->add_section( 'photo_studio_Letter_Effect', array(
					'title'			=> __('Letter Effect PRO', 'photo_studio'),
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/photo-wordpress-theme/">Preview Pro Version</a>', 'photo_studio' ),
					'priority'		=> 12,
				));
				$wp_customize->add_setting( 'buy_setting_Letter_Effect', array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback'	=> 'sanitize_text_field',
					'type'	=> 'button',				
				));
				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,'buy_setting_Letter_Effect', array(
							'section'	=> 'photo_studio_Letter_Effect',
							'settings'	=> 'buy_setting_Letter_Effect',
						)
					)
				);	
/********************************* Disable Options **************************************/

				$wp_customize->add_section( 'photo_studio_meta_options', array(
					'title'			=> __('Disable Options PRO', 'photo_studio'),
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/photo-wordpress-theme/">Preview Pro Version</a>', 'photo_studio' ),
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
							'section'	=> 'photo_studio_meta_options',
							'settings'	=> 'buy_setting_meta',
						)
					)
				);	
				
/**************************************** About US Custom Post Type ********************************/


				$wp_customize->add_section( 'photo_studio_footer_abouut_us_options', array(
					'title'			=> __('About US Custom Post Type PRO', 'photo_studio'),
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/photo-wordpress-theme/">Preview Pro Version</a>', 'photo_studio' ),
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
							'section'	=> 'photo_studio_footer_abouut_us_options',
							'settings'	=> 'buy_setting_abouut_us',
						)
					)
				);	

/**************************************** Accordion Custom Post Type ********************************/


				$wp_customize->add_section( 'photo_studio_footer_Accordion_options', array(
					'title'			=> __('Accordion Custom Post Type PRO', 'photo_studio'),
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/photo-wordpress-theme/">Preview Pro Version</a>', 'photo_studio' ),
					'priority'		=> 12,
				));
				$wp_customize->add_setting( 'buy_setting_Accordion', array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback'	=> 'sanitize_text_field',
					'type'	=> 'button',				
				));
				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,'buy_setting_Accordion', array(
							'section'	=> 'photo_studio_footer_Accordion_options',
							'settings'	=> 'buy_setting_Accordion',
						)
					)
				);	


/**************************************** Accordion Custom Post Type ********************************/


				$wp_customize->add_section( 'photo_studio_footer_Recent_Posts_options', array(
					'title'			=> __('Recent Posts PRO', 'photo_studio'),
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/photo-wordpress-theme/">Preview Pro Version</a>', 'photo_studio' ),
					'priority'		=> 12,
				));
				$wp_customize->add_setting( 'buy_setting_Recent_Posts', array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback'	=> 'sanitize_text_field',
					'type'	=> 'button',				
				));
				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,'buy_setting_Recent_Posts', array(
							'section'	=> 'photo_studio_footer_Recent_Posts_options',
							'settings'	=> 'buy_setting_Recent_Posts',
						)
					)
				);	




/**************************************** Post Pagination ********************************/


				$wp_customize->add_section( 'photo_studio_footer_Post_Pagination_options', array(
					'title'			=> __('Post Pagination PRO', 'photo_studio'),
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/photo-wordpress-theme/">Preview Pro Version</a>', 'photo_studio' ),
					'priority'		=> 12,
				));
				$wp_customize->add_setting( 'buy_setting_Post_Pagination', array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback'	=> 'sanitize_text_field',
					'type'	=> 'button',				
				));
				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,'buy_setting_Post_Pagination', array(
							'section'	=> 'photo_studio_footer_Post_Pagination_options',
							'settings'	=> 'buy_setting_Post_Pagination',
						)
					)
				);	




			
/********************************* 'Font Size **************************************/			
			
				$wp_customize->add_section( 'photo_studio_font_size_options1', array(
					'title'			=> __('Font Size', 'photo_studio'),
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/photo-wordpress-theme/">Preview Pro Version</a>', 'photo_studio' ),
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
							'section'	=> 'photo_studio_font_size_options1',
							'settings'	=> 'buy_font_size_general',
						)
					)
				);			


			
/********************************* Sidebar Colors **************************************/			
			
				$wp_customize->add_section( 'photo_studio_Sidebar_Colors', array(
					'title'			=> __('Sidebar Colors', 'photo_studio'),
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/photo-wordpress-theme/">Preview Pro Version</a>', 'photo_studio' ),
					'priority'		=> 63,
				));
				$wp_customize->add_setting( 'buy__Sidebar_Colors', array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback'	=> 'sanitize_text_field',
					'type'	=> 'button',				
				));
				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,'buy__Sidebar_Colors', array(
							'section'	=> 'photo_studio_Sidebar_Colors',
							'settings'	=> 'buy__Sidebar_Colors',
						)
					)
				);			
			
/********************************* Article Colors **************************************/			
			
				$wp_customize->add_section( 'photo_studio_Article_Colors', array(
					'title'			=> __('Article Colors', 'photo_studio'),
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/photo-wordpress-theme/">Preview Pro Version</a>', 'photo_studio' ),
					'priority'		=> 63,
				));
				$wp_customize->add_setting( 'buy__Article_Colors', array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback'	=> 'sanitize_text_field',
					'type'	=> 'button',				
				));
				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,'buy__Article_Colors', array(
							'section'	=> 'photo_studio_Article_Colors',
							'settings'	=> 'buy__Article_Colors',
						)
					)
				);			


/********************************* 'Breadcrumb **************************************/			
			
				$wp_customize->add_section( 'photo_studio_Breadcrumb', array(
					'title'			=> __('Breadcrumb PRO', 'photo_studio'),
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/photo-wordpress-theme/">Preview Pro Version</a>', 'photo_studio' ),
					'priority'		=> 81,
				));
				$wp_customize->add_setting( 'buy_Breadcrumb', array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback'	=> 'sanitize_text_field',
					'type'	=> 'button',				
				));
				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,'buy_Breadcrumb', array(
							'section'	=> 'photo_studio_Breadcrumb',
							'settings'	=> 'buy_Breadcrumb',
						)
					)
				);	

/********************************* 'Back To Top Button Options **************************************/			
			
				$wp_customize->add_section( 'photo_studio_top', array(
					'title'			=> __('Back To Top Button Options PRO', 'photo_studio'),
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/photo-wordpress-theme/">Preview Pro Version</a>', 'photo_studio' ),
					'priority'		=> 81,
				));
				$wp_customize->add_setting( 'buy_top', array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback'	=> 'sanitize_text_field',
					'type'	=> 'button',				
				));
				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,'buy_top', array(
							'section'	=> 'photo_studio_top',
							'settings'	=> 'buy_top',
						)
					)
				);									

/********************************* Footer Colors  **************************************/			
			
				$wp_customize->add_section( 'photo_studio_Footer_Colors', array(
					'title'			=> __('Footer Colors PRO', 'photo_studio'),
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/photo-wordpress-theme/">Preview Pro Version</a>', 'photo_studio' ),
					'priority'		=> 81,
				));
				$wp_customize->add_setting( 'buy__Footer_Colors', array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback'	=> 'sanitize_text_field',
					'type'	=> 'button',				
				));
				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,'buy__Footer_Colors', array(
							'section'	=> 'photo_studio_Footer_Colors',
							'settings'	=> 'buy__Footer_Colors',
						)
					)
				);	
/********************************* Footer Slider  **************************************/			
			
				$wp_customize->add_section( 'photo_studio_Footer_Slider', array(
					'title'			=> __('Footer Slider PRO', 'photo_studio'),
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/photo-wordpress-theme/">Preview Pro Version</a>', 'photo_studio' ),
					'priority'		=> 81,
				));
				$wp_customize->add_setting( 'buy__Footer_Slider', array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback'	=> 'sanitize_text_field',
					'type'	=> 'button',				
				));
				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,'buy__Footer_Slider', array(
							'section'	=> 'photo_studio_Footer_Slider',
							'settings'	=> 'buy__Footer_Slider',
						)
					)
				);	
				
/********************************* WooCommerce Cart Options  **************************************/			
			
				$wp_customize->add_section( 'photo_studio_woocart', array(
					'title'			=> __('WooCommerce Cart Options PRO', 'photo_studio'),
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/photo-wordpress-theme/">Preview Pro Version</a>', 'photo_studio' ),
					'priority'		=> 81,
				));
				$wp_customize->add_setting( 'buy__woocart', array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback'	=> 'sanitize_text_field',
					'type'	=> 'button',				
				));
				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,'buy__woocart', array(
							'section'	=> 'photo_studio_woocart',
							'settings'	=> 'buy__woocart',
						)
					)
				);					

/********************************* WooCommerce Colors  **************************************/			
			
				$wp_customize->add_section( 'photo_studio_WooCommerce_Colors', array(
					'title'			=> __('WooCommerce Colors PRO', 'photo_studio'),
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/photo-wordpress-theme/">Preview Pro Version</a>', 'photo_studio' ),
					'priority'		=> 81,
				));
				$wp_customize->add_setting( 'buy__WooCommerce_Colors', array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback'	=> 'sanitize_text_field',
					'type'	=> 'button',				
				));
				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,'buy__WooCommerce_Colors', array(
							'section'	=> 'photo_studio_WooCommerce_Colors',
							'settings'	=> 'buy__WooCommerce_Colors',
						)
					)
				);				
		}
		endif;
		 
		add_action('customize_register', 'photo_studio_seos_buy');
		
		function photo_studio_styles_customize_styles( $input ) { ?>
			<style type="text/css">
				<?php for($i=1;$i<=20;$i++) { echo "#_customize-input-buy_setting_image_slider".$i.","; } ?> #_customize-input-buy_setting_image_slider<?php echo $i ;?>{ display: none; }
				<?php for($i=1;$i<=30;$i++) { echo "#_customize-input-buy_setting_testimonials".$i.","; } ?> #_customize-input-buy_setting_testimonials<?php echo $i ;?>{ display: none; }
				<?php for($i=1;$i<=30;$i++) { echo "#_customize-input-buy_setting_gallery".$i.","; } ?> #_customize-input-buy_setting_gallery<?php echo $i ;?>{ display: none; }
				<?php for($i=1;$i<=36;$i++) { echo "#_customize-input-buy_custom_images_".$i.","; } ?> #_customize-input-buy_custom_images_<?php echo $i ;?>{ display: none; }
				<?php for($i=1;$i<=10;$i++) { echo "#_customize-input-buy_counter_".$i.","; } ?> #_customize-input-buy_counter_<?php echo $i ;?>{ display: none; }
				<?php for($i=1;$i<=10;$i++) { echo "#_customize-input-photo_studio_parallax_images__".$i.","; } ?> #_customize-input-photo_studio_parallax_images__<?php echo $i ;?>{ display: none; }
				<?php for($i=3;$i<=50;$i++) { echo "#_customize-input-photo_studio_home_images_image".$i.","; } ?> #_customize-input-photo_studio_home_images_image<?php echo $i ;?>{ display: none; }
				

				#_customize-input-buy__WooCommerce_Colors,
				#_customize-input-buy__woocart,
				#_customize-input-buy__Footer_Slider,
				#_customize-input-buy__Footer_Colors,
				#_customize-input-buy_top,
				#_customize-input-buy_Breadcrumb,
				#_customize-input-buy__Article_Colors,
				#_customize-input-buy__Sidebar_Colors,
				#_customize-input-buy_setting_Post_Pagination,
				#_customize-input-buy_setting_Accordion,
				#_customize-input-buy_setting_Recent_Posts,
				#_customize-input-photo_studio_Home_Page_Columns_,
				#_customize-input-buy_setting_Letter_Effect,
				#_customize-input-buy_setting_testimonials,
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
				<?php for($i=1;$i<=30;$i++) { echo "#accordion-section-custom_images_testimonials_options".$i." h3,"; } ?>
				<?php for($i=1;$i<=30;$i++) { echo "#accordion-section-photo_studio_gallery_options".$i." h3,"; } ?>
				<?php for($i=1;$i<=36;$i++) { echo "#accordion-section-photo_studio_custom_images_options".$i." h3,"; } ?>
				<?php for($i=1;$i<=10;$i++) { echo "#accordion-section-photo_studio_counter_options".$i." h3,"; } ?>
				<?php for($i=1;$i<=10;$i++) { echo "#accordion-section-photo_studio_parallax_images_".$i." h3,"; } ?>
				<?php for($i=3;$i<=50;$i++) { echo "#accordion-section-photo_studio_home_images".$i." h3,"; } ?>
				#accordion-section-photo_studio_WooCommerce_Colors h3,
				#accordion-section-photo_studio_woocart h3,
				#accordion-section-photo_studio_Footer_Slider h3,
				#accordion-section-photo_studio_Footer_Colors h3,
				#accordion-section-photo_studio_top h3,
				#accordion-section-photo_studio_Breadcrumb h3,
				#accordion-section-photo_studio_Article_Colors h3,
				#accordion-section-photo_studio_Sidebar_Colors h3,
				#accordion-section-photo_studio_footer_Post_Pagination_options h3,
				#accordion-section-photo_studio_footer_Recent_Posts_options h3,
				#accordion-section-photo_studio_footer_Accordion_options h3,
				#accordion-section-photo_studio_Letter_Effect h3,
				#accordion-section-photo_studio_Home_Page_Columns h3,
				#accordion-section-custom_testimonials_options h3,
				#accordion-section-photo_studio_Loader_options1 h3,
				#accordion-panel-custom_testimonials_panel h3,
				#accordion-panel-photo_studio_parallax_images_panel h3,
				#accordion-section-photo_studio_font_size_options1 h3,
				#accordion-section-photo_studio_counter_general_options h3,
				#accordion-panel-photo_studio_counter_panel h3,
				#accordion-section-photo_studio_custom_images_general_options h3,
				#accordion-panel-photo_studio_custom_images_panel h3,
				#accordion-section-photo_studio_menu_header__options h3,
				#accordion-section-photo_studio_meta_options h3,
				#accordion-section-photo_studio_footer_animations_options h3,
				#accordion-section-photo_studio_article_animations_options h3,
				#accordion-section-photo_studio_about_animations_options h3,
				#accordion-section-photo_studio_sidebar_animations_options h3,
				#accordion-section-photo_studio_gallery_animations_options h3,
				#accordion-section-photo_studio_sub_menu_animations_options h3,
				#accordion-section-photo_studio_tagline_animations_options h3,
				#accordion-section-photo_studio_title_animations_options h3,
				#accordion-section-photo_studio_footer_abouut_us_options h3,
				#accordion-panel-photo_studio_animations_panel h3,
				#accordion-section-photo_studio_h_font_title_options h3,
				#accordion-section-photo_studio_content_font_title_options h3,
				#accordion-section-photo_studio_menu_font_title_options h3,
				#accordion-section-photo_studio_description_title_options h3,
				#accordion-section-photo_studio_google_fonts_title_options h3,
				#accordion-panel-custom_images_panel h3,
				#accordion-section-photo_studio_three_slider_options h3,
				#accordion-panel-gallery_panel h3,
				#accordion-panel-photo_studio_google_fonts_panel h3,
				#accordion-section-custom_images_options h3 {
					color: red !important;
				}

			</style>
		<?php }
		
		add_action( 'customize_controls_print_styles', 'photo_studio_styles_customize_styles');	
		
}