<?php

App::bind('config', $config = require 'config/app.php');

// die(var_dump(App::get('config')));

App::bind('database', new QueryBuilder(
    Connection::make($config['database'])
));
