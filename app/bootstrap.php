<?php

$app = [];

$app['config'] = require('config/app.php');

$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database'])
);
