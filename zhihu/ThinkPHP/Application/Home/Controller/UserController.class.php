<?php 
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
    public function index(){
	$Data = M('data');// 实例化Data数据模型
	//M中的事表名
        $result = $Data->find(1);
        var_dump($result);

        $this->assign('result',$result);
        $this->display();
    }
    public function say(){
    	echo "test1";
    }
}