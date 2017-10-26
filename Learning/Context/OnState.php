<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2017/10/26
 * Time: 16:12
 */

namespace Learning\Context;


class OnState  implements IState
{
    private $context;

    public function __construct(Context $context)
    {
        $this->context=$context
    }

    public function turmLightOff()
    {

        // TODO: Implement turmLightOff() method.
    }
    public function turnLightOn()
    {

        // TODO: Implement turnLightOn() method.
    }
}