<?php

function pdfCustomForm()
{
    $data = checkHoneyPot($_POST);

    $data = mergeFields($data);

    if (!get_field('pdf_for_email_show', 'options') || !get_field('pdf_for_email_file', 'options'))
        wp_send_json_error(['message' => __('Something goes wrong. Contact administrators', 'sage')]);

    if (!isset($data['email']) || !$data['email'])
        wp_send_json_error(['message' => __('You not provide e-mail address', 'sage')]);

    $whereToSend = get_field('form_delivery_pdf', 'options');

    if ($whereToSend)
        sendForm('pdf', $whereToSend, $data, 'Big Mouth Survey - PDF catalog Form');

    createPostType('pdf', $data);

    wp_send_json_success([
        'download' => get_field('pdf_for_email_file', 'options'),
    ]);
}

add_action('wp_ajax_pdf', 'pdfCustomForm');
add_action('wp_ajax_nopriv_pdf', 'pdfCustomForm');
