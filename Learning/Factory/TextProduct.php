<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2017/10/17
 * Time: 10:19
 */

namespace Learning\Factory;


class TextProduct implements Product
{
    private  $mfgProduct;

    public function getProperties()
    {
        $this->mfgProduct='this is text';
        return $this->mfgProduct;
        // TODO: Implement getProperties() method.
    }
}