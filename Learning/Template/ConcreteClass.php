<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2017/10/20
 * Time: 10:06
 */

namespace Learning\Template;


class ConcreteClass extends AbstractClasss
{
    protected function addCaption($cap)
    {
        $this->cap=$cap;
    }


    protected function addPix($pix)
    {
        $this->pix=$pix;
        $this->pix='pix/'.$this->pix;

    }
}