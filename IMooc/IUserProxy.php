<?php
/**
 * Created by PhpStorm.
 * User: zhangna
 * Date: 17/6/28
 * Time: 09:56
 */

namespace IMooc;


interface IUserProxy
{
    function getUserName($id);
    function setUserName($id,$name);
}