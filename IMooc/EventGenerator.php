<?php
/**
 * Created by PhpStorm.
 * User: zhangna
 * Date: 17/6/27
 * Time: 14:05
 */

namespace IMooc;


 abstract class EventGenerator
{
    private $observers=array();

    function addObserver(Observer $observer){
        $this->observers[]=$observer;
    }


    function notify()
    {
        foreach ($this->observers as  $observer){
            $observer->update();
        }
    }
}