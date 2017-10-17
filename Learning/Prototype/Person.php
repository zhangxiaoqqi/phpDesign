<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2017/10/17
 * Time: 14:33
 */

namespace Learning\Prototype;


class Person extends CloneMe
{
    public function __construct()
    {
        $this->picture='clone.png';
        $this->name='original';
    }

    public function display()
    {
        echo $this->name;
        echo $this->picture;
    }

    function __clone()
    {
        // TODO: Implement __clone() method.
    }
}