<?php
namespace Home\Controller;
use Think\Controller;
class TopicController extends Controller {
    public function index(){
        //话题缩略
        if(isset($_SESSION['userid']))
        {   
            $User = M('User');
            $data = $User->find($_SESSION['userid']);
            
            $a = D('Topic');
            $result = $a->getattentopic($_SESSION['userid']);
            // print_r($result[0]);

            //判断话题关注量是否为0
            $attopic = $a->attentopicnumb($_SESSION['userid']);
            // dump($attopic);
            if($attopic == 0){
                $this->redirect('index.php/Topics/index');
            }


            $resfirst = $result[0];
            $this->assign('first',$resfirst);
            $this->assign('attentopic',$result);
            //first的回答
            

            $foo = D('Ques');

            $quesdesclist = $foo->getqueslist($resfirst['topicId']);

            $queslist = $foo->alterques($quesdesclist);

            // dump($queslist);
            $this->assign('queslist',$queslist);

            $this->assign('queslist_g',json_encode($queslist));
            // dump($resfirst);


            layout('Layout/top_topic');

            $this->assign('data',$data);
            $this->display();
        }else{
            $this->redirect('index.php/Sign/index');
        }
	   
    }
    public function _empty(){
        $this->display('Error:index');
    }
    

    public function gettopic(){
        if(IS_GET){
            $topicid = $_GET['id'];
            $topic = D('Topic');
            $topic->where('topicId = '.$topicid.'')->find();
            $this->ajaxReturn($topic->data());
        }
    }

    public function topic($id = ''){
        //话题详情
        if(isset($_SESSION['userid']) && $id != '')
        {   
            $User = M('User');
            $data = $User->find($_SESSION['userid']);
            $this->assign('data',$data);
            // 个人信息

            $topic = M('Topic');
            $topicdata = $topic->find($id);
            $this->assign('topicdata',$topicdata);
            // 话题信息

            $foo = D('Topic');
            $attennumb = $foo->gettopicattennumb($id);
            $this->assign('attennumb',$attennumb);
            // 关注人数
            

            $foo2 = D('Ques');

            $quesdesclist = $foo2->getqueslist($id);

            $queslist = $foo2->alterques($quesdesclist);

            $this->assign('queslist',$queslist);

            $this->assign('queslist_g',json_encode($queslist));
            //回答,按赞数


            $isatten = $foo->checktopic_isatten($_SESSION['userid'],$id);
            $this->assign('isatten',$isatten);

            layout('Layout/top_topic');
            $this->display();
        }else{
            $this->redirect('index.php/Sign/index');
        }
    }

    //取消关注
    public function cancelatten(){
        if(IS_GET && isset($_SESSION['userid'])){
            $topicid = $_GET['id'];
            $atten = D('Atten');
            $data = $atten->cancelattentopic($_SESSION['userid'],$topicid);
            $this->ajaxReturn($data);
        }else{
            $this->redirect('index.php/Sign/index');
        }
    }

    //关注话题
    public function attentopic(){
        if(IS_GET && isset($_SESSION['userid'])){
            $topicid = $_GET['id'];
            $atten = D('Atten');
            $data = $atten->attentopic($_SESSION['userid'],$topicid);
            $this->ajaxReturn($data);
        }else{
            $this->redirect('index.php/Sign/index');
        }
    }


    public function getansweruser(){
        if(IS_GET){
            $useridarr = $_GET['useridarr'];
            $User = M('User');
            $data = array();
            foreach ($useridarr as $key => $value) {
                $foo = $User->where('id = '.$value.'')->getField('id,nickName,autograph');
                $data[] = $foo;
            }
            $this->ajaxReturn($data);

        }else{
            $this->redirect('index.php/Sign/index');
        }
    }

    public function sometopic($topicid = ''){
        //话题缩略下的某个话题
        if(isset($_SESSION['userid'])&& $topicid != '')
        {   
            $User = M('User');
            $data = $User->find($_SESSION['userid']);
            
            $a = D('Topic');

            //判断话题关注量是否为0
            $attopic = $a->attentopicnumb($_SESSION['userid']);
            // dump($attopic);
            if($attopic == 0){
                $this->redirect('index.php/Topics/index');
            }

            
            $result = $a->getattentopic($_SESSION['userid']);
            // dump($result);
            foreach ($result as $key => $value) {
                if($value['topicId'] == $topicid){
                    $resfirst = $result[$key];
                }
            }
            if(!isset($resfirst)){
                $this->redirect('index.php/Sign/index');
            }



            // $resfirst = $result[0];
            $this->assign('first',$resfirst);
            $this->assign('attentopic',$result);
            //当前的回答
            

            $foo = D('Ques');

            $quesdesclist = $foo->getqueslist($resfirst['topicId']);

            $queslist = $foo->alterques($quesdesclist);

            // dump($queslist);
            $this->assign('queslist',$queslist);

            $this->assign('queslist_g',json_encode($queslist));
            // dump($resfirst);


            layout('Layout/top_topic');

            $this->assign('data',$data);
            $this->display('topic/index');
        }else{
            $this->redirect('index.php/Sign/index');
        }
    }


}
