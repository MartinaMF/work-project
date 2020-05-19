<?php

namespace App\Forms;

use App\Forms\CPT\Contact;

//Create Admin TAB for all forms
add_action('admin_menu', function () {
    add_menu_page(
        'Forms',
        'Forms',
        'read',
        'forms',
        '',
        'dashicons-format-aside',
        40
    );
});

// Create forms menus
$forms = [
    'contact'    => 'Contact',
    'newsletter' => 'Newsletter',
    'pdf'        => 'PDF catalog',
];

add_action('init', function () use ($forms) {
    foreach($forms as $key => $value) {
        register_post_type('forms_' . $key, [
            'labels'       => [
                'name' => __($value, 'sage'),
            ],
            'supports'     => [
                'title',
            ],
            'public'       => false,
            'show_ui'      => true,
            'show_in_menu' => 'forms',
            'rewrite'      => false,
            'capabilities' => [
                'create_posts' => false,
            ],
            'map_meta_cap' => true,
        ]);
    }
});
