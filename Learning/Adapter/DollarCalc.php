<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2017/10/18
 * Time: 9:58
 */

namespace Learning\Adapter;


class DollarCalc
{
    private $dollar;
    private $product;
    private $service;
    public  $rate=1;

    public function requestCalc($productNow,$serviceNow)
    {
        $this->product=$productNow;
        $this->service=$serviceNow;
        $this->dollar=$this->product+$this->service;
        return $this->requestTotal();
    }


    public function requestTotal()
    {
        $this->dollar*=$this->rate;
        return $this->dollar;
    }
}