<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2017/10/17
 * Time: 14:19
 */

namespace Learning\Prototype;


abstract class CloneMe
{
        public  $name;
        public  $picture;
        abstract function __clone();
}

