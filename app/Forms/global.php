<?php

function checkHoneyPot($data)
{
    if ($data['date_sh'] || !$data['date_int'] || ($data['date_int'] && time() - $data['date_int'] <= 5)) {
        wp_send_json_error(['message' => __('Form submitted to fast! Try again', 'sage')]);
    }

    unset($data['date_sh']);
    unset($data['date_int']);

    return $data;
}

function mergeFields($data)
{
    $merge = [
        'f_na' => 'name',
        'f_em' => 'email',
        'f_ph' => 'phone',
        'f_mg' => 'message',
        'f_sp' => 'password',
    ];

    foreach ($data as $name => $value) {
        if (isset($merge[$name]) && $merge[$name]) {
            $data[$merge[$name]] = is_array($value) ? $value[0] : $value;
            unset($data[$name]);
        }
    }

    return $data;
}

function sendForm($formType, $email, $dataSend, $dataTitle)
{
    ob_start();

    $data_send = (object)$dataSend;
    $data_subject = $dataTitle;

    $include = 'Templates/' . $formType . '.php';

    include($include);

    $message = ob_get_contents();

    ob_end_clean();

    $headers = ['Content-Type: text/html; charset=UTF-8', 'Reply-To: ' . $dataSend['name'] . ' <' . $dataSend['email'] . '>'];

    wp_mail($email, $data_subject, $message, $headers);
}

function createPostType($formType, $data)
{
    $postId = wp_insert_post([
        'post_title'  => $data['name'] ?: $data['email'],
        'post_type'   => 'forms_' . $formType,
        'post_status' => 'publish',
    ]);

    foreach($data as $key => $value) {
        update_field($key, $value, $postId);
    }
}
