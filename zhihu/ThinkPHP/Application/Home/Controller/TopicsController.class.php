<?php
namespace Home\Controller;
use Think\Controller;
class TopicsController extends Controller {
    public function index(){
        if(isset($_SESSION['userid']))
        {
            //所有话题类别
            $foo = D('Topic');
            $result = $foo->getfulltopicclass();
            $this->assign('alltopic',$result);
            
            //个人信息
            $User = M('User');
            $data = $User->find($_SESSION['userid']);
            $this->assign('data',$data);
            
            //当前话题下的子话题
            $firstid = $result[0]['topicClassId'];
            $currtopic = $foo->getonetypetopic($firstid);
            $this->assign('first',$currtopic);

            $concernTopicNumb = M('Attentiontopic')->where('userId = '.$_SESSION['userid'].'')->count();
            $this->assign('concernTopicNumb',$concernTopicNumb);
            layout('Layout/top_topics');
            $this->display();
        }else{
            $this->redirect('index.php/Sign/index');
        }
	   
    }
    public function _empty(){
        $this->display('Error:index');
    }

    public function attentopic($topicid = ''){
        if(isset($_SESSION['userid'])){
            $topicid = $_GET['id'];
            if($this->checktopic_isatten($_SESSION['userid'],$topicid)){
                $data = '0';
            }else{
                $atttopic = M('Attentiontopic');
                $foo['userId'] = $_SESSION['userid'];
                $foo['topicId'] = $topicid;
                $foo['createTime'] = date('Y-m-d H:i:s');
                $obj1 = $atttopic->data($foo)->add();
                
                if($obj1){
                    $data = '1';
                }
                   
            }
            $this->ajaxReturn($data);
        }else{
            $data = 'nologin';
            $this->ajaxReturn($data);

        }
    }

    private function checktopic_isatten($userid,$topicid){
            $atten = M('Attentiontopic');
            $data = $atten->where('userId = '.$userid.'')->select();
            foreach ($data as $key => $value) {
                if($value['topicId'] == $topicid){
                    return true;
                }
            }
            return false;
    }

    public function gettopic($topicclassid = ''){
        if(IS_GET){
            $topicclassid = $_GET['id'];
            $foo = D('Topic');
            $currtopic = $foo->getonetypetopic($topicclassid);
            $this->ajaxReturn($currtopic);
        }else{
            $this->redirect('index.php/Sign/index');
        }

    }

    
}
