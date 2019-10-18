<?php
namespace core;

class imooc
{
    public static  $classMap = array();

    static public function run()
    {
        $route = new \core\lib\route();
        p($route);
    }

    static public function load($class)
    {
        //自动加载类库
        // new \core\route();
        // $class = '\croe\route';
        //IMOOC.'/core/route.php';
        if(isset($classMap[$class])) {
            return true;
        } else {
            $class = str_replace('\\', '/', $class);
            $file = IMOOC .'/'. $class . '.php';
            if (is_file($file)) {
                include $file;
                self::$classMap[$class] = $class;
            } else {
                return false;
            }
        }

    }
}