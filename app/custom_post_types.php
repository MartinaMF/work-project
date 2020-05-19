<?php

namespace App;

/**
 * Add custom posts type
 */
add_action('init', function () {

    // Here we go, this is the only thing you need to modify to registers your CPTs:
    // write inside this array ($types) an array for each CPT you want
    // (and if you need only one CPT simply let one array)
    $types = [

        // Resellers
        ['type'                           => 'reseller',
         'labelSingle'                    => 'Reseller',
         'labelPlural'                    => 'Resellers',
         'icon'                           => 'dashicons-businessperson',
         'rewrite'                        => ['slug' => 'become-a-reseller', 'with_front' => false],
         'has_archive'                    => false,
         'taxonomies'                     => null,
         'taxonomies_hierarchical'        => null,
         'taxonomies_rewrite_slug'        => null,
         'taxonomies_second'              => null,
         'taxonomies_second_hierarchical' => null,
         'taxonomies_second_rewrite_slug' => null,
        ],
    ];

    // This foreach loops the $types array and creates labels and arguments for each CPTs
    foreach ($types as $num => $type) {
        $typeSingle = $type['type'];
        $labelSingle = $type['labelSingle'];
        $labelPlural = $type['labelPlural'];
        $icon = $type['icon'];

        // Labels: here you can translate the strings in your language.
        // These strings will be displayed in the admin panel
        $labels = [
            'name'               => _x($labelPlural, ' default name', 'sage'),
            'singular_name'      => _x($labelSingle, ' single name', 'sage'),
            'add_new'            => _x('Add ', $labelSingle, 'sage'),
            'add_new_item'       => __('Add new ' . $labelSingle, 'sage'),
            'edit_item'          => __('Modify ' . $labelSingle, 'sage'),
            'new_item'           => __('New ' . $labelSingle, 'sage'),
            'all_items'          => __('All', 'sage'),
            'view_item'          => __('See ' . $labelSingle, 'sage'),
            'search_items'       => __('Search for ' . $labelPlural, 'sage'),
            'not_found'          => __($labelPlural . ' don\'t found', 'sage'),
            'not_found_in_trash' => __($labelPlural . ' don\'t found in trash', 'sage'),
            'parent_item_colon'  => '',
            'menu_name'          => __($labelPlural, 'sage'),
        ];

        // Arguments (some settings, to learn more see WordPress docs)
        $args = [
            'labels'           => $labels,
            'description'      => '',
            'public'           => true,
            'supports'         => ['title', 'author', 'editor', 'thumbnail'],
            'has_archive'      => $type['has_archive'],
            'menu_position'    => 35 + $num,
            'rewrite'          => $type['rewrite'], // default
            'menu_icon'        => $icon,
        ];

        if ($type['taxonomies']) {
            $args['hierarchical'] = $type['taxonomies_hierarchical'];

            $argsTax = [
                'hierarchical'      => $type['taxonomies_hierarchical'],
                'show_admin_column' => true,
            ];

            if ($type['taxonomies_rewrite_slug']) {
                $argsTax['rewrite'] = [
                    'slug'       => $type['taxonomies_rewrite_slug'],
                    'with_front' => false,
                ];
            }

            register_taxonomy($type['taxonomies'], $type['type'], $argsTax);
        }

        if ($type['taxonomies_second']) {
            $args['hierarchical'] = $type['taxonomies_second_hierarchical'];

            $argsTax = [
                'hierarchical'      => $type['taxonomies_second_hierarchical'],
                'show_admin_column' => true,
            ];

            if ($type['taxonomies_second_rewrite_slug']) {
                $argsTax['rewrite'] = [
                    'slug'       => $type['taxonomies_second_rewrite_slug'],
                    'with_front' => false,
                ];
            }

            register_taxonomy($type['taxonomies_second'], $type['type'], $argsTax);
        }

        // Finally, we can registers the post types
        register_post_type($typeSingle, $args);
    } // end foreach
});
