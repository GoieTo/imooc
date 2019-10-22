<?php
namespace core\lib\drive\log;

use core\lib\conf;

class file
{
    public $path;
    public function __construct()
    {
        $conf = conf::get('OPTION','log');
        $this->path = $conf['PATH'];
    }

    public function log($message,$file = 'log')
    {
        if (!is_dir($this->path)) {
            mkdir($this->path,'0777',true);
        }
        $message = date('Y-m-d H:i:s').$message;
        p($message);exit();
        file_put_contents($this->path.$file.'.php',json_encode($message));
    }
}
//文件系