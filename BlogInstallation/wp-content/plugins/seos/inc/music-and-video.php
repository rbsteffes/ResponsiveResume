<?php
if( ! defined( 'ABSPATH' ) ) {
    exit;
}

$seostheme_pro_music_and_video = wp_get_theme();
if ( $seostheme_pro_music_and_video == "Music and Video" ) {

		if ( ! function_exists( 'music_and_video_seos_buy' ) ) :
			function music_and_video_seos_buy( $wp_customize ) {
				
/********************************* Image Slider **************************************/				
				
			$wp_customize->add_panel( 'custom_images_panel', array(
				'title'			=> __('Image Slider PRO', 'music-and-video'),
				'priority'		=> 2,

			));

			$wp_customize->add_section( 'custom_images_options', array(
				'title'			=> __('General Options', 'music_and_video'),
				'panel'			=> 'custom_images_panel',	
				'description'    => __( '<a target="_blank" href="https://seosthemes.info/music-and-video-wordpress-theme/">Preview Pro Version</a>', 'music-and-video' ),
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
						'title'			=> __('Image Slider '.$im, 'music-and-video'),
						'panel'			=> 'custom_images_panel',	
						'description'    => __( '<a target="_blank" href="https://seosthemes.info/music-and-video-wordpress-theme/">Preview Pro Version</a>', 'music-and-video' ),
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
				'title'			=> __('Gallery PRO', 'music-and-video'),
				'priority'		=> 2,

			));

			for ($im=1;$im<=30; $im++) {
				$wp_customize->add_section( 'music_and_video_gallery_options'.$im, array(
					'title'			=> __('Album'.$im, 'music-and-video'),
					'panel'			=> 'gallery_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/music-and-video-wordpress-theme/">Preview Pro Version</a>', 'music-and-video' ),
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
							'section'	=> 'music_and_video_gallery_options'.$im,
							'settings'	=> 'buy_setting_gallery'.$im,
						)
					)
				);
			}
/********************************* Categories Home Page **************************************/	
			


				$wp_customize->add_section( 'music_and_video_cat_options', array(
					'title'			=> __('Categories Home Page PRO', 'music-and-video'),
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/music-and-video-wordpress-theme/">Preview Pro Version</a>', 'music-and-video' ),
					'priority'		=> 3,
				));
				$wp_customize->add_setting( 'buy_setting_cat', array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback'	=> 'sanitize_text_field',
					'type'	=> 'button',				
				));
				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,'buy_setting_cat', array(
							'section'	=> 'music_and_video_cat_options',
							'settings'	=> 'buy_setting_cat',
						)
					)
				);
			
/********************************* Before Header **************************************/	
			


				$wp_customize->add_section( 'music_and_video_before', array(
					'title'			=> __('Before Header PRO', 'music-and-video'),
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/music-and-video-wordpress-theme/">Preview Pro Version</a>', 'music-and-video' ),
					'priority'		=> 3,
				));
				$wp_customize->add_setting( 'music_and_video_before_header', array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback'	=> 'sanitize_text_field',
					'type'	=> 'button',				
				));
				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,'music_and_video_before_header', array(
							'section'	=> 'music_and_video_before',
							'settings'	=> 'music_and_video_before_header',
						)
					)
				);
			
/********************************* Social Icons **************************************/	
			


				$wp_customize->add_section( 'music_and_video_social', array(
					'title'			=> __('Social Icons PRO', 'music-and-video'),
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/music-and-video-wordpress-theme/">Preview Pro Version</a>', 'music-and-video' ),
					'priority'		=> 3,
				));
				$wp_customize->add_setting( 'music_and_video_social_icons', array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback'	=> 'sanitize_text_field',
					'type'	=> 'button',				
				));
				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,'music_and_video_social_icons', array(
							'section'	=> 'music_and_video_social',
							'settings'	=> 'music_and_video_social_icons',
						)
					)
				);
			



/********************************* All Google Fonts **************************************/	

			$wp_customize->add_panel( 'music_and_video_google_fonts_panel', array(
				'title'			=> __('All Google Fonts PRO', 'music-and-video'),
				'priority'		=> 11,

			));	

				$wp_customize->add_section( 'music_and_video_google_fonts_title_options', array(
					'title'			=> __('Site Title Font', 'music-and-video'),
					'panel'			=> 'music_and_video_google_fonts_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/music-and-video-wordpress-theme/">Preview Pro Version</a>', 'music-and-video' ),
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
							'section'	=> 'music_and_video_google_fonts_title_options',
							'settings'	=> 'buy_setting_google_fonts_title',
						)
					)
				);			
			
				$wp_customize->add_section( 'music_and_video_description_title_options', array(
					'title'			=> __('Site Describtion Font', 'music-and-video'),
					'panel'			=> 'music_and_video_google_fonts_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/music-and-video-wordpress-theme/">Preview Pro Version</a>', 'music-and-video' ),
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
							'section'	=> 'music_and_video_description_title_options',
							'settings'	=> 'buy_setting_gdescription',
						)
					)
				);			
						
				$wp_customize->add_section( 'music_and_video_menu_font_title_options', array(
					'title'			=> __('Menu Font', 'music-and-video'),
					'panel'			=> 'music_and_video_google_fonts_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/music-and-video-wordpress-theme/">Preview Pro Version</a>', 'music-and-video' ),
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
							'section'	=> 'music_and_video_menu_font_title_options',
							'settings'	=> 'buy_setting_menu_font',
						)
					)
				);			
									
				$wp_customize->add_section( 'music_and_video_content_font_title_options', array(
					'title'			=> __('Content Font', 'music-and-video'),
					'panel'			=> 'music_and_video_google_fonts_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/music-and-video-wordpress-theme/">Preview Pro Version</a>', 'music-and-video' ),
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
							'section'	=> 'music_and_video_content_font_title_options',
							'settings'	=> 'buy_setting_content_font',
						)
					)
				);			
												
				$wp_customize->add_section( 'music_and_video_h_font_title_options', array(
					'title'			=> __('H1,H2,H3,H4,H5,H6', 'music-and-video'),
					'panel'			=> 'music_and_video_google_fonts_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/music-and-video-wordpress-theme/">Preview Pro Version</a>', 'music-and-video' ),
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
							'section'	=> 'music_and_video_h_font_title_options',
							'settings'	=> 'buy_setting_h_font',
						)
					)
				);			


/********************************* Animations **************************************/

				$wp_customize->add_panel( 'music_and_video_animations_panel', array(
					'title'			=> __('Animations PRO', 'music-and-video'),
					'priority'		=> 11,

				));
				$wp_customize->add_section( 'music_and_video_title_animations_options', array(
					'title'			=> __('Site Title Animation', 'music-and-video'),
					'panel'			=> 'music_and_video_animations_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/music-and-video-wordpress-theme/">Preview Pro Version</a>', 'music-and-video' ),
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
							'section'	=> 'music_and_video_title_animations_options',
							'settings'	=> 'buy_setting_title_animations',
						)
					)
				);	


				$wp_customize->add_section( 'music_and_video_tagline_animations_options', array(
					'title'			=> __('Site Tagline Animation', 'music-and-video'),
					'panel'			=> 'music_and_video_animations_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/music-and-video-wordpress-theme/">Preview Pro Version</a>', 'music-and-video' ),
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
							'section'	=> 'music_and_video_tagline_animations_options',
							'settings'	=> 'buy_setting_tagline_animations',
						)
					)
				);	



				$wp_customize->add_section( 'music_and_video_sub_menu_animations_options', array(
					'title'			=> __('Sub Menu Animation', 'music-and-video'),
					'panel'			=> 'music_and_video_animations_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/music-and-video-wordpress-theme/">Preview Pro Version</a>', 'music-and-video' ),
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
							'section'	=> 'music_and_video_sub_menu_animations_options',
							'settings'	=> 'buy_setting_sub_menu_animations',
						)
					)
				);	



				$wp_customize->add_section( 'music_and_video_gallery_animations_options', array(
					'title'			=> __('Gallery Animations', 'music-and-video'),
					'panel'			=> 'music_and_video_animations_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/music-and-video-wordpress-theme/">Preview Pro Version</a>', 'music-and-video' ),
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
							'section'	=> 'music_and_video_gallery_animations_options',
							'settings'	=> 'buy_setting_gallery_animations',
						)
					)
				);

				$wp_customize->add_section( 'music_and_video_about_animations_options', array(
					'title'			=> __('Custom Images Animation', 'music-and-video'),
					'panel'			=> 'music_and_video_animations_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/music-and-video-wordpress-theme/">Preview Pro Version</a>', 'music-and-video' ),
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
							'section'	=> 'music_and_video_about_animations_options',
							'settings'	=> 'buy_setting_about_animations',
						)
					)
				);	



				$wp_customize->add_section( 'music_and_video_sidebar_animations_options', array(
					'title'			=> __('Sidebar Animation', 'music-and-video'),
					'panel'			=> 'music_and_video_animations_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/music-and-video-wordpress-theme/">Preview Pro Version</a>', 'music-and-video' ),
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
							'section'	=> 'music_and_video_sidebar_animations_options',
							'settings'	=> 'buy_setting_sidebar_animations',
						)
					)
				);	


				$wp_customize->add_section( 'music_and_video_article_animations_options', array(
					'title'			=> __('Article Animation', 'music-and-video'),
					'panel'			=> 'music_and_video_animations_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/music-and-video-wordpress-theme/">Preview Pro Version</a>', 'music-and-video' ),
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
							'section'	=> 'music_and_video_article_animations_options',
							'settings'	=> 'buy_setting_article_animations',
						)
					)
				);	



				$wp_customize->add_section( 'music_and_video_footer_animations_options', array(
					'title'			=> __('Footer Animation', 'music-and-video'),
					'panel'			=> 'music_and_video_animations_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/music-and-video-wordpress-theme/">Preview Pro Version</a>', 'music-and-video' ),
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
							'section'	=> 'music_and_video_footer_animations_options',
							'settings'	=> 'buy_setting_footer_animations',
						)
					)
				);	





/********************************* About US Section **************************************/

				$wp_customize->add_section( 'music_and_video_About_US_Section', array(
					'title'			=> __('Custom Images Section PRO', 'music-and-video'),
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/music-and-video-wordpress-theme/">Preview Pro Version</a>', 'music-and-video' ),
					'priority'		=> 11,
				));
				$wp_customize->add_setting( 'buy__About_US_Section', array(
					'capability'		=> 'edit_theme_options',
					'sanitize_callback'	=> 'sanitize_text_field',
					'type'	=> 'button',				
				));
				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,'buy__About_US_Section', array(
							'section'	=> 'music_and_video_About_US_Section',
							'settings'	=> 'buy__About_US_Section',
						)
					)
				);	


/********************************* Music Player **************************************/				
				


			$wp_customize->add_section( 'custom_Sticky_Slider', array(
				'title'			=> __('Music Player PRO', 'music_and_video'),
				'description'    => __( '<a target="_blank" href="https://seosthemes.info/music-and-video-wordpress-theme/">Preview Pro Version</a>', 'music-and-video' ),
				'priority'		=> 2,
			));
			$wp_customize->add_setting( 'buy_Sticky_Slider', array(
				'capability'		=> 'edit_theme_options',
				'sanitize_callback'	=> 'sanitize_text_field',
				'type'	=> 'button',				
			));
			$wp_customize->add_control(
				new WP_Customize_Control(
					$wp_customize,'buy_Sticky_Slider', array(
						'section'	=> 'custom_Sticky_Slider',
						'settings'	=> 'buy_Sticky_Slider',
					)
				)
			);
			


/********************************* Counter **************************************/

				$wp_customize->add_panel( 'music_and_video_counter_panel', array(
					'title'			=> __('Counter PRO', 'music-and-video'),
					'priority'		=> 62,

				));

				$wp_customize->add_section( 'music_and_video_counter_general_options', array(
					'title'			=> __('Counter Options', 'music-and-video'),
					'panel'			=> 'music_and_video_counter_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/music-and-video-wordpress-theme/">Preview Pro Version</a>', 'music-and-video' ),
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
							'section'	=> 'music_and_video_counter_general_options',
							'settings'	=> 'buy_counter_general',
						)
					)
				);
				
		for ($i=1;$i<=10; $i++) {
				$wp_customize->add_section( 'music_and_video_counter_options'.$i, array(
					'title'			=> __('Counter '.$i, 'music-and-video'),
					'panel'			=> 'music_and_video_counter_panel',	
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/music-and-video-wordpress-theme/">Preview Pro Version</a>', 'music-and-video' ),
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
							'section'	=> 'music_and_video_counter_options'.$i,
							'settings'	=> 'buy_counter_'.$i,
						)
					)
				);
			}
			
/********************************* 'Font Size **************************************/			
			
				$wp_customize->add_section( 'music_and_video_font_size_options1', array(
					'title'			=> __('Font Size PRO', 'music-and-video'),
					'description'    => __( '<a target="_blank" href="https://seosthemes.info/music-and-video-wordpress-theme/">Preview Pro Version</a>', 'music-and-video' ),
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
							'section'	=> 'music_and_video_font_size_options1',
							'settings'	=> 'buy_font_size_general',
						)
					)
				);			

		}
		endif;
		 
		add_action('customize_register', 'music_and_video_seos_buy');
		
		function music_and_video_styles_customize_styles( $input ) { ?>
			<style type="text/css">
				<?php for($i=1;$i<=20;$i++) { echo "#_customize-input-buy_setting_image_slider".$i.","; } ?> #_customize-input-buy_setting_image_slider<?php echo $i ;?>{ display: none; }
				<?php for($i=1;$i<=30;$i++) { echo "#_customize-input-buy_setting_testimonials".$i.","; } ?> #_customize-input-buy_setting_testimonials<?php echo $i ;?>{ display: none; }
				<?php for($i=1;$i<=30;$i++) { echo "#_customize-input-buy_setting_gallery".$i.","; } ?> #_customize-input-buy_setting_gallery<?php echo $i ;?>{ display: none; }
				<?php for($i=1;$i<=36;$i++) { echo "#_customize-input-buy_custom_images_".$i.","; } ?> #_customize-input-buy_custom_images_<?php echo $i ;?>{ display: none; }
				<?php for($i=1;$i<=10;$i++) { echo "#_customize-input-buy_counter_".$i.","; } ?> #_customize-input-buy_counter_<?php echo $i ;?>{ display: none; }
				<?php for($i=1;$i<=10;$i++) { echo "#_customize-input-music_and_video_parallax_images__".$i.","; } ?> #_customize-input-music_and_video_parallax_images__<?php echo $i ;?>{ display: none; }
				#_customize-input-buy_Sticky_Slider,
				#_customize-input-buy_Search_Options,
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
				#_customize-input-buy_setting_cat,
				#_customize-input-music_and_video_before_header,
				#_customize-input-music_and_video_social_icons,
				#_customize-input-buy_setting_google_fonts_title,
				#_customize-input-buy_setting_image_slider{ 
				    display: none; 
				}
				
				<?php for($i=1;$i<=20;$i++) { echo "#accordion-section-custom_images_slider_options".$i." h3,"; } ?>
				<?php for($i=1;$i<=30;$i++) { echo "#accordion-section-custom_images_testimonials_options".$i." h3,"; } ?>
				<?php for($i=1;$i<=30;$i++) { echo "#accordion-section-music_and_video_gallery_options".$i." h3,"; } ?>
				<?php for($i=1;$i<=36;$i++) { echo "#accordion-section-music_and_video_custom_images_options".$i." h3,"; } ?>
				<?php for($i=1;$i<=10;$i++) { echo "#accordion-section-music_and_video_counter_options".$i." h3,"; } ?>
				<?php for($i=1;$i<=10;$i++) { echo "#accordion-section-music_and_video_parallax_images_".$i." h3,"; } ?>
				#accordion-section-music_and_video_social h3,
				#accordion-section-custom_Sticky_Slider h3,
				#accordion-section-music_and_video_before h3,
				#accordion-section-music_and_video_cat_options h3,
				#accordion-section-custom_Search_Options h3,
				#accordion-section-music_and_video_About_US_Section h3,
				#accordion-section-custom_testimonials_options h3,
				#accordion-section-music_and_video_Loader_options1 h3,
				#accordion-panel-custom_testimonials_panel h3,
				#accordion-panel-music_and_video_parallax_images_panel h3,
				#accordion-section-music_and_video_font_size_options1 h3,
				#accordion-section-music_and_video_counter_general_options h3,
				#accordion-panel-music_and_video_counter_panel h3,
				#accordion-section-music_and_video_custom_images_general_options h3,
				#accordion-panel-music_and_video_custom_images_panel h3,
				#accordion-section-music_and_video_menu_header__options h3,
				#accordion-section-music_and_video_meta_options h3,
				#accordion-section-music_and_video_footer_animations_options h3,
				#accordion-section-music_and_video_article_animations_options h3,
				#accordion-section-music_and_video_about_animations_options h3,
				#accordion-section-music_and_video_sidebar_animations_options h3,
				#accordion-section-music_and_video_gallery_animations_options h3,
				#accordion-section-music_and_video_sub_menu_animations_options h3,
				#accordion-section-music_and_video_tagline_animations_options h3,
				#accordion-section-music_and_video_title_animations_options h3,
				#accordion-section-music_and_video_footer_abouut_us_options h3,
				#accordion-panel-music_and_video_animations_panel h3,
				#accordion-section-music_and_video_h_font_title_options h3,
				#accordion-section-music_and_video_content_font_title_options h3,
				#accordion-section-music_and_video_menu_font_title_options h3,
				#accordion-section-music_and_video_description_title_options h3,
				#accordion-section-music_and_video_google_fonts_title_options h3,
				#accordion-panel-custom_images_panel h3,
				#accordion-section-music_and_video_three_slider_options h3,
				#accordion-panel-gallery_panel h3,
				#accordion-panel-music_and_video_google_fonts_panel h3,
				#accordion-section-custom_images_options h3 {
					color: red !important;
				}

			</style>
		<?php }
		
		add_action( 'customize_controls_print_styles', 'music_and_video_styles_customize_styles');	
		
}