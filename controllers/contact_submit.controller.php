<?php

if (isset($_POST['name']) && !is_null($_POST['name'])) {
    App::get('database')->insert('users', [
        'name'  => $_POST['name']
    ]);

    // die('data saved');
    header('Location: /contact');
}
