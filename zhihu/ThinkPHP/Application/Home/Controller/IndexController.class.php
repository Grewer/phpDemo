<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        if(isset($_SESSION['userid']))
        {   

            $User = M('User');            
            $data = $User->find($_SESSION['userid']);
            // dump($_SESSION['userid']);
            
            $list = D('Arr');

            $arr = $list->getlist($_SESSION['userid']);

            $newarr = array_slice($arr,$start,4,true);
            // dump($newarr);

            $this->assign('arr',json_encode($newarr));
            // //算法排序
            
            $nickname = $data['nickName'];
            $photo = $data['photo'];
            layout('Layout/top');
            $this->assign('nickname',$nickname);
            $this->assign('photo',$photo);
            $this->display();
        }else{
            $this->redirect('index.php/Sign/index');
        }
    }
    public function _empty(){
        $this->display('Error:index');
    }

    public function grewer($start = ''){
        if(IS_GET && isset($_SESSION['userid'])){
            $start = I('get.start');
            
            $list = D('Arr');
            $arr = $list->getlist($_SESSION['userid']);

            $newarr = array_slice($arr,$start,5,true);
            
            $this->ajaxReturn($newarr);
        }else{
            $this->error('非法请求');
        }
    }

    public function search(){
        if(isset($_SESSION['userid'])){


        $demo=isset($_GET['keywords'])?$_GET['keywords']:$_SESSION['demo2'];
        $_SESSION['demo2']=$demo;
        

        if(I('get.type') == 'question'){
            //tiwen
            $list = M('Question')->where("quesName like '%$demo%'")->select();
            foreach ($list as $key => $value) {
                $list[$key]['quesName'] = str_replace($demo,'<em>'.$demo.'</em>',$value['quesName']);
            }
            
        }else if(I('get.type') == 'answer'){
            //huida
            $list = M('Answer as a')->join('Question as b on a.quesId = b.id')->where("a.answerContent like '%$demo%'")->select();
            foreach ($list as $key => $value) {
                $list[$key]['answerContent'] = str_replace($demo,'<em>'.$demo.'</em>',$value['answerContent']);
                $people = M('User')->find($value['userId']);
                $list[$key]['username'] = $people['nickName'];
                $list[$key]['autograph'] = $people['autograph'];

            }
            
        }
        $this->assign('type',I('get.type'));
        $this->assign('list',json_encode($list));
        // dump($list);
        
        $this->assign('key',$demo);

        $User = M('User');            
        $data = $User->find($_SESSION['userid']);
        $nickname = $data['nickName'];
        $photo = $data['photo'];
        layout('Layout/top');
        $this->assign('nickname',$nickname);
        $this->assign('photo',$photo);
        $this->display(); // 输出模板
    }else{
        $this->redirect('index.php/Sign/index');
    }
}
    
}
