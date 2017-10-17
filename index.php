<?php
/**
 * Created by PhpStorm.
 * User: zhangna
 * Date: 17/6/27
 * Time: 13:53
 */
define('BASEDIR', __DIR__);
include BASEDIR.'/IMooc/Loader.php';
spl_autoload_register('\\IMooc\\Loader::autoload');

//观察者模式  分离代码  降低耦合性  观察者模式不影响输出的结果
/*class Event extends \IMooc\EventGenerator
{
    public function trigger()
    {
        echo "Event事件<br/>\n";
        $this->notify();
    }
}
class Observer1 implements \IMooc\Observer
{
    function update($observer = null)
    {
        // TODO: Implement update() method.
        echo '逻辑1';
    }
}
class Observer2 implements \IMooc\Observer
{
    function update($observer = null)
    {
        // TODO: Implement update() method.
        echo '逻辑2';
    }
}
$event=new Event();
$event->addObserver(new Observer1());
$event->addObserver(new Observer2());
$event->trigger();*/

//==========================
echo "<br/>\n";

/*//原型模式 原型模式可以用于大对象的创建。 跟工厂模式很相似  减少代码量和不必要的计算  原型检测 和参数初始化
$prototype=new \IMooc\Canvas();
$prototype->init();


$cavas1=clone $prototype;

$cavas1->rect(1,3,2,6);
$cavas1->draw();
echo "<br/>\n";
$cavas2= clone $prototype;
$cavas1->rect(3,6,2,4);
$cavas1->draw();*/

echo "<br/>\n";

//=========================
//装饰器模式
//关于装饰和观察的区别，顾名思义，观察不影响输出的结果，装饰的目的就是为了影响结果。
//相同点，都是事件驱动，事件驱动又用到了适配器（面向对象的主要特征之一：多态）
/*$canvas=new \IMooc\Canvas();
$canvas->init();
$canvas->addDecorator(new \IMooc\ColorDrawDecorator("black"));
$canvas->addDecorator(new \IMooc\SizeDrawDecorator("20px"));
$canvas->rect(3,6,4,12);
$canvas->draw();*/

//迭代器模式
/*$users=new \IMooc\AllUser();
foreach ($users as $user){
    var_dump($user->name);
    $user->rand=1234;
}*/


//代理模式
//$proxy=new \IMooc\Proxy();
//$proxy->getUserName(1);
//$proxy->setUserName(1,'zhang');


//自动加载配置
/*
$config=new \IMooc\Config(__DIR__.'/IMooc/config');
var_dump($config['controller']);*/

