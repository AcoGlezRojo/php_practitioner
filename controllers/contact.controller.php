<?php

$users = $app['database']->selectAll('users', null);

require 'views/contact.view.php';
