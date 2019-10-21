<?php
namespace core\lib;
use core\lib\conf;
class route
{
    public $ctrl;
    public $action;
    public function __construct()
    {
        /**
         * 1.隐藏index.php
         * 2.获取URL参数部分
         * 3.返回对应控制器和方法
         */
        if(isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] != '/') {
            // /index/index
            $path = $_SERVER['REQUEST_URI'];
            $patharr = explode('/',trim($path,'/'));
            if(isset($patharr[0])) {
                $this->ctrl = $patharr[0];
            }
            unset($patharr[0]);
            if (isset($patharr[1])) {
                $this->action = $patharr[1];
                unset($patharr[1]);
            } else {
                $this->action = conf::get('ACTION','route');
            }
            //url的多余部分转换成get
            //
            $count = count($patharr);
            $i = 2;
            while ($i < $count + 2) {
                if(isset($patharr[$i + 1])) {
                  $_GET[$patharr[$i]] = $patharr[$i + 1];
                }
                $i = $i + 2;
            }

        } else {
            $this->ctrl = conf::get('CTRL','route');
            $this->action = conf::get('ACTION','route');;
        }
    }
}