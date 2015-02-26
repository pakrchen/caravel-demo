<?php

return array(

    'fetch'   => PDO::FETCH_CLASS,

    'default' => 'demo',

    'connections' => array(
        'demo' => array(
            'host'      => '127.0.0.1',
            'port'      => '3306',
            'database'  => 'demo',
            'username'  => 'demo',
            'password'  => 'demo',
            'options'   => array(
                PDO::ATTR_EMULATE_PREPARES => true,
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'",
            ),
        ),
    ),

    'redis' => array(
        'demo' => array(
            'host'     => '127.0.0.1',
            'port'     => '6379',
            'password' => 'demo',
        ),
    ),

);
