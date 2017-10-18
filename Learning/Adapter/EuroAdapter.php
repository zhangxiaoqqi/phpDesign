<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2017/10/18
 * Time: 10:06
 */

namespace Learning\Adapter;


class EuroAdapter extends DollarCalc implements ITarget
{


    public function __construct()
    {
        $this->requester();
    }

    function requester()
    {
        $this->rate=0.8;
        return $this->rate;
        // TODO: Implement requester() method.
    }
}