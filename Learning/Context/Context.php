<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2017/10/26
 * Time: 15:52
 */

namespace Learning\Context;


class Context
{
    private $offState;
    private $onState;
    private $currentState;

    public function __construct()
    {
        $this->offState=new Off

    }

    //调整状态的触发器
    public function turnOnLight()
    {

    }

    public function turnOffLight()
    {

    }

    //设置当前状态
    public function setState()
    {

    }


    //获得状态
    public function  getOnState()
    {
        return $this->onState;
    }

    public function getOffState()
    {
        return $this->offState;
    }




}