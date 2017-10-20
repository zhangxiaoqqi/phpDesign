<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2017/10/20
 * Time: 9:56
 */

namespace Learning\Template;


abstract class AbstractClasss
{
    protected  $pix;
    protected  $cap;

    public function templateMethod($pixNow,$capNow)
    {
        $this->pix=$pixNow;
        $this->cap=$capNow;
        $this->addCaption($this->cap);
        $this->addPix($this->pix);
    }

    abstract protected function addPix($pix);
    abstract protected function addCaption($cap);
}