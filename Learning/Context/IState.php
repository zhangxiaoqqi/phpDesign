<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2017/10/26
 * Time: 16:10
 */

namespace Learning\Context;


interface IState
{

    public function turnLightOn();
    public function turmLightOff();
}