<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018\4\14 0014
 * Time: 18:21
 * @param 调用接口
 */
require_once ('response.php');
$items = array(
     array('id' => 1, 'pid' => 0, 'name' => '江西省'),
     array('id' => 2, 'pid' => 0, 'name' => '黑龙江省'),
     array('id' => 3, 'pid' => 1, 'name' => '南昌市'),
     array('id' => 4, 'pid' => 2, 'name' => '哈尔滨市'),
     array('id' => 5, 'pid' => 2, 'name' => '鸡西市'),
     array('id' => 6, 'pid' => 4, 'name' => '香坊区'),
     array('id' => 7, 'pid' => 4, 'name' => '南岗区'),
     array('id' => 8, 'pid' => 6, 'name' => '和兴路'),
     array('id' => 9, 'pid' => 7, 'name' => '西大直街'),
     array('id' => 10, 'pid' => 8, 'name' => '东北林业大学'),
     array('id' => 11, 'pid' => 9, 'name' => '哈尔滨工业大学'),
     array('id' => 12, 'pid' => 8, 'name' => '哈尔滨师范大学'),
     array('id' => 13, 'pid' => 1, 'name' => '赣州市'),
     array('id' => 14, 'pid' => 13, 'name' => '赣县'),
     array('id' => 15, 'pid' => 13, 'name' => '于都县'),
     array('id' => 16, 'pid' => 14, 'name' => '茅店镇'),
     array('id' => 17, 'pid' => 14, 'name' => '大田乡'),
     array('id' => 18, 'pid' => 16, 'name' => '义源村'),
     array('id' => 19, 'pid' => 16, 'name' => '上坝村'),
);
//$arr =  array('id' => 1, 'pid' => 0, 'name' => '江西省');
//$model = Response::json(200,'请求成功',$items);
 $model = Response::xmlEncode(200,'请求成功',$items);
echo $model;
