<?php
/**
 * Created by PhpStorm.
 * User: zhangna
 * Date: 17/6/28
 * Time: 09:55
 */

namespace IMooc;

//代理模式
class Proxy implements IUserProxy
{
    function getUserName($id)
    {
        // TODO: Implement getUserName() method.
        $db=Factory::getDatabase('slave');
        $db->query("select name from test WHERE id=$id limit 1");
    }



    function setUserName($id, $name)
    {
        // TODO: Implement setUserName() method.
        $db=Factory::getDatabase('master');
        $db->query("update  test set NAME=$name WHERE id=$id limit 1");
    }
}