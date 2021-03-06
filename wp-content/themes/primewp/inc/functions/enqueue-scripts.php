<?php
/**
* Enqueue scripts and styles
*
* @package PrimeWP WordPress Theme
* @copyright Copyright (C) 2020 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function primewp_scripts() {
    wp_enqueue_style('primewp-maincss', get_stylesheet_uri(), array(), NULL);
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/css/all.min.css', array(), NULL );
    wp_enqueue_style('primewp-webfont', '//fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i|Domine:400,700|Oswald:400,700|Patua+One|Roboto+Condensed:400,400i,700,700i', array(), NULL);
    wp_enqueue_script('fitvids', get_template_directory_uri() .'/assets/js/jquery.fitvids.min.js', array( 'jquery' ), NULL, true);

    $primewp_primary_menu_active = FALSE;
    if ( !primewp_get_option('disable_primary_menu') ) {
        $primewp_primary_menu_active = TRUE;
    }
    $primewp_secondary_menu_active = FALSE;
    if ( !primewp_get_option('disable_secondary_menu') ) {
        $primewp_secondary_menu_active = TRUE;
    }

    $primewp_sticky_header_active = TRUE;
    $primewp_sticky_header_mobile_active = TRUE;
    if ( !primewp_get_option('enable_sticky_mobile_header') ) {
        $primewp_sticky_header_mobile_active = FALSE;
    }

    $primewp_sticky_sidebar_active = TRUE;
    if ( is_page_template( array( 'template-full-width-page.php', 'template-full-width-post.php' ) ) ) {
       $primewp_sticky_sidebar_active = FALSE;
    }
    if ( is_404() ) {
        $primewp_sticky_sidebar_active = FALSE;
    }
    if ( $primewp_sticky_sidebar_active ) {
        wp_enqueue_script('ResizeSensor', get_template_directory_uri() .'/assets/js/ResizeSensor.min.js', array( 'jquery' ), NULL, true);
        wp_enqueue_script('theia-sticky-sidebar', get_template_directory_uri() .'/assets/js/theia-sticky-sidebar.min.js', array( 'jquery' ), NULL, true);
    }

    wp_enqueue_script('primewp-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), NULL, true );
    wp_enqueue_script('primewp-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), NULL, true );
    wp_enqueue_script('primewp-customjs', get_template_directory_uri() .'/assets/js/custom.js', array( 'jquery' ), NULL, true);
    wp_localize_script( 'primewp-customjs', 'primewp_ajax_object',
        array(
            'ajaxurl' => admin_url( 'admin-ajax.php' ),
            'primary_menu_active' => $primewp_primary_menu_active,
            'secondary_menu_active' => $primewp_secondary_menu_active,
            'sticky_header_active' => $primewp_sticky_header_active,
            'sticky_header_mobile_active' => $primewp_sticky_header_mobile_active,
            'sticky_sidebar_active' => $primewp_sticky_sidebar_active,
        )
    );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

    wp_enqueue_script('primewp-html5shiv-js', get_template_directory_uri() .'/assets/js/html5shiv.js', array('jquery'), NULL, true);

    wp_localize_script('primewp-html5shiv-js','primewp_custom_script_vars',array(
        'elements_name' => __('abbr article aside audio bdi canvas data datalist details dialog figcaption figure footer header hgroup main mark meter nav output picture progress section summary template time video', 'primewp'),
    ));
}
add_action( 'wp_enqueue_scripts', 'primewp_scripts' );

/**
 * Enqueue IE compatible scripts and styles.
 */
function primewp_ie_scripts() {
    wp_enqueue_script( 'respond', get_template_directory_uri(). '/assets/js/respond.js', array(), NULL, false );
    wp_script_add_data( 'respond', 'conditional', 'lt IE 9' );
}
add_action( 'wp_enqueue_scripts', 'primewp_ie_scripts' );

/**
 * Enqueue customizer styles.
 */
function primewp_enqueue_customizer_styles() {
    wp_enqueue_style( 'primewp-customizer-styles', get_template_directory_uri() . '/inc/admin/css/customizer-style.css', array(), NULL );
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/css/all.min.css', array(), NULL );
}
add_action( 'customize_controls_enqueue_scripts', 'primewp_enqueue_customizer_styles' );