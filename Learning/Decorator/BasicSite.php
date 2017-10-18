<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2017/10/18
 * Time: 14:33
 */

namespace Learning\Decorator;


class BasicSite extends IComponent
{
    public function __construct()
    {
        $this->site='Basic  Site';
    }

    public function getSite()
    {
        return $this->site;
        // TODO: Implement getSite() method.
    }

    public function getPrice()
    {
        return  1200;
        // TODO: Implement getPrice() method.
    }
}