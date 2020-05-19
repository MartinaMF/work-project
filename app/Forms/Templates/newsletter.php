<!DOCTYPE html>
<html>
<head>
    <?php if (isset($data_subject) && $data_subject) : ?>
        <title><?= $data_subject ?></title>
    <?php endif; ?>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta name="x-apple-disable-message-reformatting">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <link rel="shortcut icon" href="#">
    <link rel="icon" href="#" type="image/x-icon">
</head>
<body style=" background: #F8F8F8; padding:0; margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:100%;">
<?php if (isset($data_send) && $data_send) : ?>
    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="margin-left: auto; margin-right: auto;">
        <?php foreach ($data_send as $key => $value) : ?>
            <tr>
                <td style="width: 350px; padding-right: 50px;"><strong><?= $key ?></strong></td>
                <td><?= $value ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>
</body>
</html>
