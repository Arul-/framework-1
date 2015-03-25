<?php
/**
 * Created by PhpStorm.
 * User: sadia
 * Date: 4/11/14
 * Time: 5:29 PM
 */

return array(
    'connections' => array(
        'mysql' => array(
//        'driver'    => 'mysql',
            'host'      => $_ENV['DB.HOST'],
//        'database'  => 'test',
            'username'  => $_ENV['DB.USERNAME'],
            'password'  => $_ENV['DB.PASSWORD'],
//        'charset'   => 'utf8',
//        'collation' => 'utf8_unicode_ci',
//        'prefix'    => '',
        ),

    ));