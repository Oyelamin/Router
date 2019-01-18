<?php
App::bind('config', require 'config.php');

// $config= App::get('config');

App::bind('Database', new QueryBuilder(

    Connection::make(App::get('config')['database'])

));

