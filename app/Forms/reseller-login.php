<?php

function resellerLogin()
{
    $data = checkHoneyPot($_POST);

    $data = mergeFields($data);

    if (!isset($data['email']) || !$data['email'])
        wp_send_json_error(['message' => __('You not provide e-mail address', 'sage')]);

    if (!isset($data['password']) || !$data['password'])
        wp_send_json_error(['message' => __('You not provide password', 'sage')]);

    $posts = get_posts([
        'numberposts' => -1,
        'post_type'   => 'reseller',
        'meta_query'  => [
            'relation' => 'AND',
            [
                'key'     => 'reseller_login',
                'value'   => $data['email'],
            ],
            [
                'key'     => 'reseller_password',
                'value'   => $data['password'],
            ],
        ],
    ]);

    if (!count($posts))
        wp_send_json_error(['message' => __('Provided credentials are incorrect', 'sage')]);

    setcookie("res_ha_bms", $posts[0]->post_name, time() + 3600, '/');

    wp_send_json_success([
        'go_to' => get_permalink($posts[0]),
    ]);
}

add_action('wp_ajax_reseller_login', 'resellerLogin');
add_action('wp_ajax_nopriv_reseller_login', 'resellerLogin');
