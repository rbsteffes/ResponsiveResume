<?php
if( ! defined( 'ABSPATH' ) ) {
    exit;
}

$seostheme_pro_seos_social = wp_get_theme();
if ( $seostheme_pro_seos_social == "SEOS Social" ) {

		if ( ! function_exists( 'seos_social_seos_buy' ) ) :
			function seos_social_seos_buy( $wp_customize ) {
				
/********************************* Image Slider **************************************/				
				
			$wp_customize->add_panel( 'custom_images_panel', array(
				'title'			=> __('Image Slider PRO', 'seos-social'),
				'priority'		=> 2,

			));

			$wp_customize->add_section( 'custom_images_options', array(
				'title'			=> __('General Options', 'seos_social'),
				'panel'			=> 'custom_images_panel',	
				'description'    => __( '<a target="_blank" href="https://seosthemes.info/seos-social-wordpress-theme/">Preview Pro Version</a>', 'seos-social' ),
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
						'title'			=> __('Image Slider '.$im, 'seos-social'),
						'panel'			=> 'custom_images_panel',	
						'description'    => __( '<a target="_blank" href="https://seosthemes.info/seos-social-wordpress-theme/">Preview Pro Version</a>', 'seos-social' ),
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
			


				$wp_customize->add_section( 'seos_social_before', array(
					'title'			=> __('Before Header PRO', 'seos-social'),
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/seos-social-wordpress-theme/">Preview Pro Version</a>', 'seos-social' ),
					'priority'		=> 2,
				));
				$wp_customize->add_setting( 'seos_social_before_header', array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback'	=> 'sanitize_text_field',
					'type'	=> 'button',				
				));
				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,'seos_social_before_header', array(
							'section'	=> 'seos_social_before',
							'settings'	=> 'seos_social_before_header',
						)
					)
				);			
/********************************* Hide Entry Meta **************************************/	
			


				$wp_customize->add_section( 'seos_social_Hide', array(
					'title'			=> __('Hide Entry Meta PRO', 'seos-social'),
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/seos-social-wordpress-theme/">Preview Pro Version</a>', 'seos-social' ),
					'priority'		=> 2,
				));
				$wp_customize->add_setting( 'seos_social_hide_meta', array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback'	=> 'sanitize_text_field',
					'type'	=> 'button',				
				));
				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,'seos_social_befoseos_social_hide_metare_header', array(
							'section'	=> 'seos_social_Hide',
							'settings'	=> 'seos_social_hide_meta',
						)
					)
				);			
/********************************* Gallery **************************************/				
			$wp_customize->add_panel( 'gallery_panel', array(
				'title'			=> __('Gallery PRO', 'seos-social'),
				'priority'		=> 2,

			));

			for ($im=1;$im<=30; $im++) {
				$wp_customize->add_section( 'seos_social_gallery_options'.$im, array(
					'title'			=> __('Album'.$im, 'seos-social'),
					'panel'			=> 'gallery_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/seos-social-wordpress-theme/">Preview Pro Version</a>', 'seos-social' ),
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
							'section'	=> 'seos_social_gallery_options'.$im,
							'settings'	=> 'buy_setting_gallery'.$im,
						)
					)
				);
			}


			
/********************************* Timeline **************************************/	
			


				$wp_customize->add_section( 'seos_social_testimonials', array(
					'title'			=> __('Timeline PRO', 'seos-social'),
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/seos-social-wordpress-theme/">Preview Pro Version</a>', 'seos-social' ),
					'priority'		=> 2,
				));
				$wp_customize->add_setting( 'seos_social_setting_testimonials', array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback'	=> 'sanitize_text_field',
					'type'	=> 'button',				
				));
				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,'seos_social_setting_testimonials', array(
							'section'	=> 'seos_social_testimonials',
							'settings'	=> 'seos_social_setting_testimonials',
						)
					)
				);
			
						
/********************************* Price List **************************************/	
			


				$wp_customize->add_section( 'seos_social_Custom_Images', array(
					'title'			=> __('Price List  PRO', 'seos-social')."",
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/seos-social-wordpress-theme/">Preview Pro Version</a>', 'seos-social' ),
					'priority'		=> 2,
				));
				$wp_customize->add_setting( 'seos_social_setting_Custom_Images', array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback'	=> 'sanitize_text_field',
					'type'	=> 'button',				
				));
				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,'seos_social_setting_Custom_Images', array(
							'section'	=> 'seos_social_Custom_Images',
							'settings'	=> 'seos_social_setting_Custom_Images',
						)
					)
				);
			
									
/********************************* About US **************************************/	
	
				$wp_customize->add_section( 'seos_social_about', array(
					'title'			=> __('About US PRO', 'seos-social'),
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/seos-social-wordpress-theme/">Preview Pro Version</a>', 'seos-social' ),
					'priority'		=> 2,
				));
				$wp_customize->add_setting( 'seos_social_about_us_s', array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback'	=> 'sanitize_text_field',
					'type'	=> 'button',				
				));
				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,'seos_social_about_us_s', array(
							'section'	=> 'seos_social_about',
							'settings'	=> 'seos_social_about_us_s',
						)
					)
				);		

			
			
/********************************* Social Icons **************************************/	
			


				$wp_customize->add_section( 'seos_social_social', array(
					'title'			=> __('Social Media PRO', 'seos-social'),
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/seos-social-wordpress-theme/">Preview Pro Version</a>', 'seos-social' ),
					'priority'		=> 2,
				));
				$wp_customize->add_setting( 'seos_social_social_icons', array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback'	=> 'sanitize_text_field',
					'type'	=> 'button',				
				));
				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,'seos_social_social_icons', array(
							'section'	=> 'seos_social_social',
							'settings'	=> 'seos_social_social_icons',
						)
					)
				);
			
			
			
/********************************* Home Page Parallax Image **************************************/	
			


				$wp_customize->add_section( 'seos_social_Parallax', array(
					'title'			=> __('Home Page Parallax Image PRO', 'seos-social'),
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/seos-social-wordpress-theme/">Preview Pro Version</a>', 'seos-social' ),
					'priority'		=> 2,
				));
				$wp_customize->add_setting( 'seos_social_setting_Parallax', array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback'	=> 'sanitize_text_field',
					'type'	=> 'button',				
				));
				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,'seos_social_setting_Parallax', array(
							'section'	=> 'seos_social_Parallax',
							'settings'	=> 'seos_social_setting_Parallax',
						)
					)
				);
			
			
			
/********************************* Recent Posts Slider **************************************/	
			


				$wp_customize->add_section( 'seos_social_Recent_Posts', array(
					'title'			=> __('Recent Posts Slider PRO', 'seos-social'),
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/seos-social-wordpress-theme/">Preview Pro Version</a>', 'seos-social' ),
					'priority'		=> 2,
				));
				$wp_customize->add_setting( 'seos_social_setting_Recent_Posts', array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback'	=> 'sanitize_text_field',
					'type'	=> 'button',				
				));
				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,'seos_social_setting_Recent_Posts', array(
							'section'	=> 'seos_social_Recent_Posts',
							'settings'	=> 'seos_social_setting_Recent_Posts',
						)
					)
				);
			
			
			
/********************************* Flipping Gallery **************************************/	
			


				$wp_customize->add_section( 'seos_social_Flipping_Gallery', array(
					'title'			=> __('Flipping Gallery PRO', 'seos-social'),
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/seos-social-wordpress-theme/">Preview Pro Version</a>', 'seos-social' ),
					'priority'		=> 2,
				));
				$wp_customize->add_setting( 'seos_social_setting_Flipping_Gallery', array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback'	=> 'sanitize_text_field',
					'type'	=> 'button',				
				));
				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,'seos_social_setting_Flipping_Gallery', array(
							'section'	=> 'seos_social_Flipping_Gallery',
							'settings'	=> 'seos_social_setting_Flipping_Gallery',
						)
					)
				);
			



/********************************* All Google Fonts **************************************/	

			$wp_customize->add_panel( 'seos_social_google_fonts_panel', array(
				'title'			=> __('All Google Fonts PRO', 'seos-social'),
				'priority'		=> 11,

			));	

				$wp_customize->add_section( 'seos_social_google_fonts_title_options', array(
					'title'			=> __('Site Title Font', 'seos-social'),
					'panel'			=> 'seos_social_google_fonts_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/seos-social-wordpress-theme/">Preview Pro Version</a>', 'seos-social' ),
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
							'section'	=> 'seos_social_google_fonts_title_options',
							'settings'	=> 'buy_setting_google_fonts_title',
						)
					)
				);			
			
				$wp_customize->add_section( 'seos_social_description_title_options', array(
					'title'			=> __('Site Describtion Font', 'seos-social'),
					'panel'			=> 'seos_social_google_fonts_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/seos-social-wordpress-theme/">Preview Pro Version</a>', 'seos-social' ),
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
							'section'	=> 'seos_social_description_title_options',
							'settings'	=> 'buy_setting_gdescription',
						)
					)
				);			
						
				$wp_customize->add_section( 'seos_social_menu_font_title_options', array(
					'title'			=> __('Menu Font', 'seos-social'),
					'panel'			=> 'seos_social_google_fonts_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/seos-social-wordpress-theme/">Preview Pro Version</a>', 'seos-social' ),
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
							'section'	=> 'seos_social_menu_font_title_options',
							'settings'	=> 'buy_setting_menu_font',
						)
					)
				);			
									
				$wp_customize->add_section( 'seos_social_content_font_title_options', array(
					'title'			=> __('Content Font', 'seos-social'),
					'panel'			=> 'seos_social_google_fonts_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/seos-social-wordpress-theme/">Preview Pro Version</a>', 'seos-social' ),
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
							'section'	=> 'seos_social_content_font_title_options',
							'settings'	=> 'buy_setting_content_font',
						)
					)
				);			
												
				$wp_customize->add_section( 'seos_social_h_font_title_options', array(
					'title'			=> __('H1,H2,H3,H4,H5,H6', 'seos-social'),
					'panel'			=> 'seos_social_google_fonts_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/seos-social-wordpress-theme/">Preview Pro Version</a>', 'seos-social' ),
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
							'section'	=> 'seos_social_h_font_title_options',
							'settings'	=> 'buy_setting_h_font',
						)
					)
				);			



/********************************* Animations **************************************/

				$wp_customize->add_panel( 'seos_social_animations_panel', array(
					'title'			=> __('Animations PRO', 'seos-social'),
					'priority'		=> 11,

				));
				$wp_customize->add_section( 'seos_social_title_animations_options', array(
					'title'			=> __('Site Title Animation', 'seos-social'),
					'panel'			=> 'seos_social_animations_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/seos-social-wordpress-theme/">Preview Pro Version</a>', 'seos-social' ),
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
							'section'	=> 'seos_social_title_animations_options',
							'settings'	=> 'buy_setting_title_animations',
						)
					)
				);	


				$wp_customize->add_section( 'seos_social_tagline_animations_options', array(
					'title'			=> __('Site Tagline Animation', 'seos-social'),
					'panel'			=> 'seos_social_animations_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/seos-social-wordpress-theme/">Preview Pro Version</a>', 'seos-social' ),
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
							'section'	=> 'seos_social_tagline_animations_options',
							'settings'	=> 'buy_setting_tagline_animations',
						)
					)
				);	



				$wp_customize->add_section( 'seos_social_sub_menu_animations_options', array(
					'title'			=> __('Sub Menu Animation', 'seos-social'),
					'panel'			=> 'seos_social_animations_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/seos-social-wordpress-theme/">Preview Pro Version</a>', 'seos-social' ),
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
							'section'	=> 'seos_social_sub_menu_animations_options',
							'settings'	=> 'buy_setting_sub_menu_animations',
						)
					)
				);	



				$wp_customize->add_section( 'seos_social_gallery_animations_options', array(
					'title'			=> __('Gallery Animations', 'seos-social'),
					'panel'			=> 'seos_social_animations_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/seos-social-wordpress-theme/">Preview Pro Version</a>', 'seos-social' ),
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
							'section'	=> 'seos_social_gallery_animations_options',
							'settings'	=> 'buy_setting_gallery_animations',
						)
					)
				);

				$wp_customize->add_section( 'seos_social_about_animations_options', array(
					'title'			=> __('Price List Animation', 'seos-social'),
					'panel'			=> 'seos_social_animations_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/seos-social-wordpress-theme/">Preview Pro Version</a>', 'seos-social' ),
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
							'section'	=> 'seos_social_about_animations_options',
							'settings'	=> 'buy_setting_about_animations',
						)
					)
				);	



				$wp_customize->add_section( 'seos_social_sidebar_animations_options', array(
					'title'			=> __('Sidebar Animation', 'seos-social'),
					'panel'			=> 'seos_social_animations_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/seos-social-wordpress-theme/">Preview Pro Version</a>', 'seos-social' ),
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
							'section'	=> 'seos_social_sidebar_animations_options',
							'settings'	=> 'buy_setting_sidebar_animations',
						)
					)
				);	


				$wp_customize->add_section( 'seos_social_article_animations_options', array(
					'title'			=> __('Article Animation', 'seos-social'),
					'panel'			=> 'seos_social_animations_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/seos-social-wordpress-theme/">Preview Pro Version</a>', 'seos-social' ),
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
							'section'	=> 'seos_social_article_animations_options',
							'settings'	=> 'buy_setting_article_animations',
						)
					)
				);	



				$wp_customize->add_section( 'seos_social_footer_animations_options', array(
					'title'			=> __('Footer Animation', 'seos-social'),
					'panel'			=> 'seos_social_animations_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/seos-social-wordpress-theme/">Preview Pro Version</a>', 'seos-social' ),
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
							'section'	=> 'seos_social_footer_animations_options',
							'settings'	=> 'buy_setting_footer_animations',
						)
					)
				);


			
/********************************* 'Font Size **************************************/			
			
				$wp_customize->add_section( 'seos_social_font_size_options1', array(
					'title'			=> __('Font Size PRO', 'seos-social'),
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/seos-social-wordpress-theme/">Preview Pro Version</a>', 'seos-social' ),
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
							'section'	=> 'seos_social_font_size_options1',
							'settings'	=> 'buy_font_size_general',
						)
					)
				);			

		}
		endif;
		 
		add_action('customize_register', 'seos_social_seos_buy');
		
		function seos_social_styles_customize_styles( $input ) { ?>
			<style type="text/css">
				<?php for($i=1;$i<=20;$i++) { echo "#_customize-input-buy_setting_image_slider".$i.","; } ?> #_customize-input-buy_setting_image_slider<?php echo $i ;?>{ display: none; }
				<?php for($i=1;$i<=30;$i++) { echo "#_customize-input-buy_setting_testimonials".$i.","; } ?> #_customize-input-buy_setting_testimonials<?php echo $i ;?>{ display: none; }
				<?php for($i=1;$i<=30;$i++) { echo "#_customize-input-buy_setting_gallery".$i.","; } ?> #_customize-input-buy_setting_gallery<?php echo $i ;?>{ display: none; }
				<?php for($i=1;$i<=36;$i++) { echo "#_customize-input-buy_custom_images_".$i.","; } ?> #_customize-input-buy_custom_images_<?php echo $i ;?>{ display: none; }
				<?php for($i=1;$i<=10;$i++) { echo "#_customize-input-buy_counter_".$i.","; } ?> #_customize-input-buy_counter_<?php echo $i ;?>{ display: none; }
				<?php for($i=1;$i<=10;$i++) { echo "#_customize-input-seos_social_parallax_images__".$i.","; } ?> #_customize-input-seos_social_parallax_images__<?php echo $i ;?>{ display: none; }
				<?php for($i=4;$i<=30;$i++) { echo "#_customize-input-buy_setting_images_sections".$i.","; } ?> #_customize-input-buy_setting_images_sections<?php echo $i ;?>{ display: none; }
				#_customize-input-seos_social_about_us_s,
				#_customize-input-seos_social_setting_Flipping_Gallery,
				#_customize-input-seos_social_setting_Recent_Posts,
				#_customize-input-seos_social_setting_Parallax,
				#_customize-input-buy_Search_Options,
				#_customize-input-seos_social_setting_Custom_Images,
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
				#_customize-input-seos_social_before_header,
				#_customize-input-seos_social_social_icons,
				#_customize-input-buy_setting_google_fonts_title,
				#_customize-input-seos_social_befoseos_social_hide_metare_header,
				#_customize-input-seos_social_setting_testimonials,
				#_customize-input-buy_setting_image_slider{ 
				    display: none; 
				}
				
				<?php for($i=1;$i<=20;$i++) { echo "#accordion-section-custom_images_slider_options".$i." h3,"; } ?>
				<?php for($i=1;$i<=30;$i++) { echo "#accordion-section-custom_images_testimonials_options".$i." h3,"; } ?>
				<?php for($i=1;$i<=30;$i++) { echo "#accordion-section-seos_social_gallery_options".$i." h3,"; } ?>
				<?php for($i=1;$i<=36;$i++) { echo "#accordion-section-seos_social_custom_images_options".$i." h3,"; } ?>
				<?php for($i=1;$i<=10;$i++) { echo "#accordion-section-seos_social_counter_options".$i." h3,"; } ?>
				<?php for($i=1;$i<=10;$i++) { echo "#accordion-section-seos_social_parallax_images_".$i." h3,"; } ?>
				<?php for($i=4;$i<=30;$i++) { echo "#accordion-section-seos_custom_images_sections".$i." h3,"; } ?>
				#accordion-section-seos_social_Flipping_Gallery h3,
				#accordion-section-seos_social_Recent_Posts h3,
				#accordion-section-seos_social_about h3,
				#accordion-section-seos_social_Parallax h3,
				#accordion-section-seos_social_Custom_Images h3,
				#accordion-section-seos_social_testimonials h3,
				#accordion-section-seos_social_Hide h3,
				#accordion-section-seos_social_social h3,
				#accordion-section-custom_Sticky_Slider h3,
				#accordion-section-seos_social_before h3,
				#accordion-section-seos_social_cat_options h3,
				#accordion-section-custom_Search_Options h3,
				#accordion-section-seos_social_About_US_Section h3,
				#accordion-section-custom_testimonials_options h3,
				#accordion-section-seos_social_Loader_options1 h3,
				#accordion-panel-custom_testimonials_panel h3,
				#accordion-panel-seos_social_parallax_images_panel h3,
				#accordion-section-seos_social_font_size_options1 h3,
				#accordion-section-seos_social_counter_general_options h3,
				#accordion-panel-seos_social_counter_panel h3,
				#accordion-section-seos_social_custom_images_general_options h3,
				#accordion-panel-seos_social_custom_images_panel h3,
				#accordion-section-seos_social_menu_header__options h3,
				#accordion-section-seos_social_meta_options h3,
				#accordion-section-seos_social_footer_animations_options h3,
				#accordion-section-seos_social_article_animations_options h3,
				#accordion-section-seos_social_about_animations_options h3,
				#accordion-section-seos_social_sidebar_animations_options h3,
				#accordion-section-seos_social_gallery_animations_options h3,
				#accordion-section-seos_social_sub_menu_animations_options h3,
				#accordion-section-seos_social_tagline_animations_options h3,
				#accordion-section-seos_social_title_animations_options h3,
				#accordion-section-seos_social_footer_abouut_us_options h3,
				#accordion-panel-seos_social_animations_panel h3,
				#accordion-section-seos_social_h_font_title_options h3,
				#accordion-section-seos_social_content_font_title_options h3,
				#accordion-section-seos_social_menu_font_title_options h3,
				#accordion-section-seos_social_description_title_options h3,
				#accordion-section-seos_social_google_fonts_title_options h3,
				#accordion-panel-custom_images_panel h3,
				#accordion-section-seos_social_three_slider_options h3,
				#accordion-panel-gallery_panel h3,
				#accordion-panel-seos_social_google_fonts_panel h3,
				#accordion-section-custom_images_options h3 {
					color: red !important;
				}

			</style>
		<?php }
		
		add_action( 'customize_controls_print_styles', 'seos_social_styles_customize_styles');	
		
}