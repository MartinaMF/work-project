<?php

function contactCustomForm()
{
    $data = checkHoneyPot($_POST);

    $data = mergeFields($data);

    if (!isset($data['email']) || !$data['email'])
        wp_send_json_error(['message' => __('You not provide e-mail address', 'sage')]);

    $whereToSend = get_field('form_delivery_contact', 'options');

    if ($whereToSend)
        sendForm('contact', $whereToSend, $data, 'Big Mouth Survey - Contact Form');

    createPostType('contact', $data);

    wp_send_json_success();
}

add_action('wp_ajax_contact', 'contactCustomForm');
add_action('wp_ajax_nopriv_contact', 'contactCustomForm');
