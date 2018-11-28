<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/24
 * Time: 16:42
 */

namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Request;

class City extends Controller
{
    public function province(){
        $province = Db::table('tp_tree')->where('pid','eq','1')->select();
        //dump($province);
        $this->assign('province',$province);
        return $this->fetch();
    }
    public function city(){
        $map = Request::instance()->param();
        $city = db('tp_tree')->where($map)->select();
        echo json_encode($city);
    }

}