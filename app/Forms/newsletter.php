<?php

function newsletterCustomForm()
{
    $data = checkHoneyPot($_POST);

    $data = mergeFields($data);

    if (!isset($data['email']) || !$data['email'])
        wp_send_json_error(['message' => __('You not provide e-mail address', 'sage')]);

    $whereToSend = get_field('form_delivery_newsletter', 'options');

    if ($whereToSend)
        sendForm('newsletter', $whereToSend, $data, 'Big Mouth Survey - Newsletter Form');

    createPostType('newsletter', $data);

    wp_send_json_success();
}

add_action('wp_ajax_newsletter', 'newsletterCustomForm');
add_action('wp_ajax_nopriv_newsletter', 'newsletterCustomForm');
