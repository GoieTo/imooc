<?php
namespace app\ctrl;

class indexCtrl
{
    public function index()
    {
        $model = new \core\lib\model();
        $sql = "select * from user";
        $ret = $model->query($sql);
        p($ret->fetchAll());
        p($_SERVER);
    }
}