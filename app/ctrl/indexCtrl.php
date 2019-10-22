<?php
namespace app\ctrl;

class indexCtrl extends \core\imooc
{
    public function index()
    {
        $temp = new \core\lib\model();
print_r($temp);
$data = "Hello World";
$this->assign('data',$data);
$this->display('index.html');
}
}