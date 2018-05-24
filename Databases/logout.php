<?php
    if (!isset($_SERVER['PHP_AUTH_USER'])) {
        header('Basic realm="My Realm"');
        header('HTTP/1.0 401 Unauthorized');
        echo 'Text to send if user hits Cancel button';
        exit;
    }
    header('Location: ../../index.php');
?>