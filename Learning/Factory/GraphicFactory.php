<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2017/10/17
 * Time: 10:17
 */

namespace Learning\Factory;


class GraphicFactory extends Creator
{
    protected  function factoryMethod()
    {
        $product = new GraphiProduct();
        return ($product->getProperties());
        // TODO: Implement factoryMethod() method.
    }
}