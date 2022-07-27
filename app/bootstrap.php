<?php

$app = [];

$app['config'] = require('config/app.php');

require 'models/Router.php';
require 'models/Request.php';
require 'database/Connection.php';
require 'database/QueryBuilder.php';

$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database'])
);
