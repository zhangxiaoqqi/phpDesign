<?php
/**
 * Created by PhpStorm.
 * User: zhangna
 * Date: 17/6/27
 * Time: 16:00
 */

namespace IMooc;

//装饰器模式
interface DrawDecorator
{
    function beforeDraw();

    function afterDraw();
}