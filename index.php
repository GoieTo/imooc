<?php
/**
 * 入口文件
 * 1.定义常量
 * 2.加载函数库
 * 3.启动框架
 */

define('IMOOC',realpath('D:\PHPStudy\phpstudy_pro\WWW\imooc'));
define('CORE',IMOOC.'/core');
define('APP',IMOOC.'/app');
define('MODULE','app');
define('DEBUG',true);

include 'vendor/autoload.php';
if(DEBUG)
{
    $whoops = new \Whoops\Run;
    $whoops->prependHandler(new \Whoops\Handler\PrettyPageHandler);
    $whoops->register();
    ini_set('display_error', 'on');
}
else
{
    ini_set('display_error','off');
}
include CORE.'/common/function.php';

include CORE.'/imooc.php';

spl_autoload_register('\core\imooc::load');

\core\imooc::run();