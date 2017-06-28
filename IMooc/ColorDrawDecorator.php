<?php
/**
 * Created by PhpStorm.
 * User: zhangna
 * Date: 17/6/27
 * Time: 16:11
 */

namespace IMooc;


class ColorDrawDecorator implements DrawDecorator
{
    protected $color;

    function __construct($color="red")
    {
        $this->color=$color;
    }

    function beforeDraw()
    {
        // TODO: Implement beforeDraw() method.
        echo "<div style='color:{$this->color}';>";

    }

    function afterDraw()
    {
        // TODO: Implement afterDraw() method.
        echo "</div>";
    }
}