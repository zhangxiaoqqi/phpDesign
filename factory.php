<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2017/10/17
 * Time: 13:21
 */
define('BASEDIR', __DIR__);
include __DIR__ . '/Learning/Loader.php';
spl_autoload_register('\\Learning\\Loader::autoLoad');

$worker= new \Learning\Factory\Client();