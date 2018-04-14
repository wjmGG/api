<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018\4\14 0014
 * Time: 18:15
 * @param 接口类
 */
class Response{
    /**
     * @param integer $status 状态码
     * @param string $message 消息请求消息
     * @param array $data 数据
     */
    public static function json($status,$message="",$data=array()){
        if (!is_numeric($status)) return '';
        $result = array(
          'status' => $status,
          'messaghe' => $message,
          'data' => $data
        );
       echo json_encode($result);
    }

    /**
     * @param integer $status 状态码
     * @param string $message 消息请求情况信息
     * @param array $data 数据
     */
    public static function xmlEncode($status,$message='',$data = array()){
        if (!is_numeric($status)) return '';
        $result = array(
            'status' => $status,
            'message' => $message,
            'data' => $data
        );

        header('Content-Type: text/xml');
        $xml = "<?xml version='1.0' encoding='UTF-8' ?>";
        $xml .= "<boby>";
        $xml .= self::xmlToEncode($result);
        $xml .= "</boby>";
        echo $xml;
    }

    /**
     * @param array $data
     * @param xml数据循环处理
     */
    private static function xmlToEncode($data){
        $xml = $attr =  "";
        foreach ($data as $k => $v){
            if (is_numeric($k)){
                $attr = " id='{$k}'";
                $k = "item";
            }
            $xml .= "<{$k}{$attr}>";
            $xml .= is_array($v) ? self::xmlToEncode($v) : $v;
            $xml .= "</{$k}>";
        }
        return $xml;
    }
}