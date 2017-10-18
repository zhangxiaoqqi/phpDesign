<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2017/10/18
 * Time: 13:35
 */

namespace Learning\Decorator;


abstract class IComponent
{
    protected $site;
    abstract public function getSite();
    abstract public function getPrice();
}