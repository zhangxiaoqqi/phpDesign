<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2018/3/20
 * Time: 17:40
 */

//排序算法

/*
 *  冒泡排序 （效率比较低）
 *
 *  外层循环决定循环层数
 *  内层,两两比较，交换位置
 *  每层循环过后，后面的值总是有序的最大（最小）的值，下次就无需去比较他们。
 *  加入变量flag，如果没有交换位置，则说明顺序是对的，可以跳出循环结束了
 */
$arr = array();
$arr = array(1,98,5,34,23,87,54,23,12,0,456,123,45);
$len = count($arr);

for($i=1;$i<$len;$i++){
    $flag = true;
    for($j=0;$j<$len-$i;$j++){
        if($arr[$j]>$arr[$j+1]){
            $flag = false;
            $temp = $arr[$j];
            $arr[$j] = $arr[$j+1];
            $arr[$j+1] =$temp;
        }
    }
    if($flag){
        break;
    }

}

print_r($arr);


/*
 * 选择排序 （比冒泡效率高）
 *
 *   外层决定循环层数
 *   选择排序就是默认当前值为最小值，记录下标，然后进行循环比较，记录最小（最大）值的下标，最后交换两者的值。这样第一个值就是最小（最大）值。
 *   然后，依次，循环下去。最后得到的就是有序的数组
 */



$arr = array();
$arr = array(1,98,5,34,23,87,54,23,12,0,456,123,45);
$len = count($arr);
for($i=0;$i<$len-1;$i++){
    $p = $i;  //默认当前位置的值即为最小，记录下下标。
    for($j=$p+1;$j<$len;$j++){
        if($arr[$p]>$arr[$j]){
            $p = $j;         //如果当前值比默认值小。则记录其下标
        }
    }
    if($p !=$i){
        $temp = $arr[$p];
        $arr[$p] = $arr[$i];
        $arr[$i] = $temp;
    }
}

print_r($arr);

/*
 * 插入排序
 *
 *   外层决定循环层数，把当前值作为插入值去和前面的值进行比较
 *   前面的值总是有序的，插入的值只需要和前面的值进行比较，确定最终位置就可以了
 *   循环排序就好了
 */

$arr = array();
$arr = array(1,98,5,34,23,87,54,23,12,0,456,123,45);
$len = count($arr);
for($i=1;$i<$len;$i++){
    $temp = $arr[$i];
    for($j=$i-1;$i>=0;$j--){
        if($arr[$j]>$temp){
            $arr[$j+1] = $arr[$j];
            $arr[$j] = $temp;
        }else{
            break;
        }
    }

}

print_r($arr);


/*
 * 快速排序
 *
 * 首先选取一个值，作为标尺，把大于他的放到right_array中，小于他的放到left_array中，递归调用
 * 直到数组数为1，则返回，最后合并起来就是结果
 */
function quick_sort($arr) {
    //先判断是否需要继续进行
    $length = count($arr);
    if($length <= 1) {
        return $arr;
    }
    //如果没有返回，说明数组内的元素个数 多余1个，需要排序
    //选择一个标尺
    //选择第一个元素
    $base_num = $arr[0];
    //遍历 除了标尺外的所有元素，按照大小关系放入两个数组内
    //初始化两个数组
    $left_array = array();//小于标尺的
    $right_array = array();//大于标尺的
    for($i=1; $i<$length; $i++) {
        if($base_num > $arr[$i]) {
            //放入左边数组
            $left_array[] = $arr[$i];
        } else {
            //放入右边
            $right_array[] = $arr[$i];
        }
    }
    //再分别对 左边 和 右边的数组进行相同的排序处理方式
    //递归调用这个函数,并记录结果
    $left_array = quick_sort($left_array);
    $right_array = quick_sort($right_array);
    //合并左边 标尺 右边
    return array_merge($left_array, array($base_num), $right_array);
}
$arr = array(1,98,5,34,23,87,54,23,12,0,456,123,45);
$res = quick_sort($arr);
print_r($res);die;