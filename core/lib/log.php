<?php
namespace core\lib;

class log
{
    /**
     * 1.确定日志存储方式
     *
     * 2.写日志
     */
    static $class;
    static public function init() {
        //确定存储方式
        $drive = conf::get('DRIVE','log');
        $class = '\core\lib\drive\log\\'.$drive;
        self::$class = new $class;
    }

    static public function log($name)
    {
        self::$class->log($name);
    }
}