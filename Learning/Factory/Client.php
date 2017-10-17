<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2017/10/17
 * Time: 10:25
 */

namespace Learning\Factory;


class Client
{
    private  $someGraphicObject;
    private  $someTextObject;


    public function __construct()
    {
        $this->someGraphicObject=new GraphicFactory();
        echo $this->someGraphicObject->startFactory();
        $this->someTextObject=new TextProduct();
        echo  $this->someTextObject->getProperties();

    }

}