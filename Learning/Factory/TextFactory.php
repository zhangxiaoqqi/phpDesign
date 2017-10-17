<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2017/10/17
 * Time: 10:08
 */

namespace Learning\Factory;

class TextFactory extends Creator
{

    protected  function factoryMethod()
    {
        $product = new TextProduct();
        return ($product->getProperties());
        // TODO: Implement factoryMethod() method.
    }
}