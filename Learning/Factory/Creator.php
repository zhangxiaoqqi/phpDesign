<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2017/10/17
 * Time: 10:02
 */

namespace Learning\Factory;


abstract class Creator
{
    protected abstract  function factoryMethod();


    public function startFactory()
    {
        $mfg = $this->factoryMethod();
        return $mfg;
    }
}