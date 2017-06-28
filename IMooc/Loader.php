<?php
/**
 * Created by PhpStorm.
 * User: zhangna
 * Date: 17/6/27
 * Time: 13:56
 */

namespace IMooc;


class Loader
{
    static public function autoload($class)
    {
        require BASEDIR.'/'.str_replace('\\', '/', $class).'.php';
    }
}