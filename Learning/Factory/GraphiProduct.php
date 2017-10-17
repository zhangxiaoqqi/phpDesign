<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2017/10/17
 * Time: 10:23
 */

namespace Learning\Factory;


class GraphiProduct implements Product
{
    private  $mfgProduct;

    public function getProperties()
    {
        $this->mfgProduct='this is GraphiProduct';
        return $this->mfgProduct;
        // TODO: Implement getProperties() method.
    }
}