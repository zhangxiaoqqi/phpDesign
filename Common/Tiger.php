<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2018/3/1
 * Time: 15:47
 */

namespace phpDesign\Common;


abstract class Tiger
{
    public abstract function climb();
}

class XTiger extends Tiger
{
    public  function climb()
    {
        echo 'Drop' , '';
        // TODO: Implement climb() method.
    }
}

class MTiger extends Tiger {
    public function climb() {
        echo 'Up' , '';
    }
}


class Cat extends Tiger {
    public function climb() {
        echo 'Fly';
    }
}

//用来消除逻辑语句.

//多态（ploymorphism）是一个生物学上的概念，指同一特种的多种表现形态.

//在面向对象中，指某种对象实例的不同表现形态.
class Client
{
    public static function call(Tiger $tiger)
    {
        // 参数限定不严格，可以更加灵活, 可以传递一个父类类型，就可以有不同的子类形态
        $tiger->climb();
    }
}


Client::call(new XTiger());
Client::call(new MTiger());
Client::call(new Cat());

