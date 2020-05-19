<?php

namespace App;

use App\Services\DisplayVectorsInAdmin;

/**
 * Enable SVG at media uploader
 */
displayVectorsInAdmin::enable();

/**
 * SVG upload support
 */
add_filter('upload_mimes', function ($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    $mimes['svgz'] = 'image/svg+xml';
    $mimes['json'] = 'image/json';
    return $mimes;
});

add_action('admin_head', function () {
    $css = 'td.media-icon img[src$=".svg"] { width: 100% !important; height: auto !important; }';
    echo "<style type='text/css'>$css</style>";
});

/**
 * Customizer Options
 */
add_action('customize_register', function (\WP_Customize_Manager $wp_customize) {
    // Remove unused sections
    $wp_customize->remove_section('custom_css');
    $wp_customize->remove_section('static_front_page');
    $wp_customize->remove_panel('widgets');
}, 15);

/**
 * Customizer JS
 */
add_action('customize_preview_init', function () {
    wp_enqueue_script('sage/customizer.js', asset_path('scripts/customizer.js'), ['customize-preview'], null, true);
});

/**
 * Unregister nav elements
 */
add_action('admin_init', function () {
    $navElementsToRemove = [
//    'index.php',                  //Dashboard
        'jetpack',                    //Jetpack*
//        'edit.php',                   //Posts
//        'upload.php',                 //Media
//        'edit.php?post_type=page',    //Pages
        'edit-comments.php',          //Comments
//        'themes.php',                 //Appearance
//        'plugins.php',                //Plugins
//        'users.php',                  //Users
//        'tools.php',                  //Tools
//        'options-general.php',        //Settings
    ];

    if (WP_DEBUG === false) {
        $navElementsToRemove[] = 'edit.php?post_type=acf-field-group';
    }

    foreach ($navElementsToRemove as $elem) {
        remove_menu_page($elem);
    }

    $navElementsToRemove = [
        'widgets.php'       => 'themes.php', // Design -> Widgets
        'theme-editor.php'  => 'themes.php', // Design -> Editor
        'plugin-editor.php' => 'plugins.php', // Plugins -> Editor
    ];

    foreach ($navElementsToRemove as $elem => $parent) {
        remove_submenu_page($parent, $elem);
    }
});
