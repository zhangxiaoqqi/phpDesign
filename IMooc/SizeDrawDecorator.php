<?php
/**
 * Created by PhpStorm.
 * User: zhangna
 * Date: 17/6/27
 * Time: 16:26
 */

namespace IMooc;


class SizeDrawDecorator implements DrawDecorator
{
    protected $szie;
    function __construct($size='14px')
    {
        $this->szie=$size;
    }

    function beforeDraw()
    {
        // TODO: Implement beforeDraw() method.
        echo "<div style='font-size:{$this->szie}';>";

    }
    function afterDraw()
    {
        // TODO: Implement afterDraw() method.
        echo "</div>";
    }
}