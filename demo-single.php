<?php 
/**
* 用户单例模式
* @author chengcong
* @date  2017-2-27
*/
class User
{
    static $_instance; // 存储对象

    // 私有化，防止外部实例化
    private function __construct(){}

    // 防止克隆
    private function __clone(){}

    // 静态单例统一入口
    static function getInstance(){
        if ( isset(self::$_instance) ) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    // 获取用户信息
    public function getUser(){
        echo "userInfo";
    }


}




 ?>