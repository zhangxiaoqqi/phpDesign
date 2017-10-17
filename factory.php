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
//工厂模式
$worker= new \Learning\Factory\Client();
echo "<br>";

//原型模式
$person=new \Learning\Prototype\Person();
$person->display();

echo "<br>";
//克隆不会启动构造函数
$slacker = clone $person;
$slacker->name='Cloned';
$slacker->display();

