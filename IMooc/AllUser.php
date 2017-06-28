<?php
/**
 * Created by PhpStorm.
 * User: zhangna
 * Date: 17/6/27
 * Time: 16:37
 */

namespace IMooc;

//迭代器模式
class AllUser implements \Iterator
{
    protected $ids;
    protected $data=array();
    protected $index;
    function __construct()
    {
        $db=Factory::getDatabase();
        $result=$db->query("select id from USER ");
        $this->ids=$result->fetch_all(MYSQLI_ASSOC);

    }

    //获取当前元素
    public function current()
    {
        // TODO: Implement current() method.
        $id=$this->ids[$this->index];
        return Factory::getUser($id);
    }

    //获取下一个元素
    public function next()
    {
        // TODO: Implement next() method.
        $this->index ++;

    }
    //验证当前是否还有下个元素
    public function valid()
    {
        // TODO: Implement valid() method.
        return $this->index < count($this->ids);
    }

    //重置迭代器 到开头
    public function rewind()
    {
        // TODO: Implement rewind() method.
        return $this->index=0;
    }

    //在迭代器当中的位置  索引值
    public function key()
    {
        // TODO: Implement key() method.

        return $this->index;
    }


}