<?php

if (isset($_POST['name']) && !is_null($_POST['name'])) {
    $app['database']->insert('users', [
        'name'  => $_POST['name']
    ]);

    // die('data saved');
    header('Location: /contact');
}
