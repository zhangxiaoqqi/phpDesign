<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2017/10/17
 * Time: 13:24
 */

namespace Learning;


class Loader
{
    static public function autoLoad($class)
    {
        require  BASEDIR.'/'.str_replace('\\', '/', $class).'.php';
    }


}