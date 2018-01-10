<?php
namespace Home\Controller;
use Think\Controller;
class QuesController extends Controller {
    public function index($quesid=''){
        if(isset($_SESSION['userid'])&&$quesid != '')
        {   
            
            $User = M('User');
            $data = $User->find($_SESSION['userid']);
            $this->assign('data',$data);
            //个人信息
            
            $ques = M('Question');
            $quesdata = $ques->find($quesid);
            $this->assign('quesdata',$quesdata);
            //问题信息
            
            $topicdata = M('topic')->find($quesdata['topicId']);
            $this->assign('topicdata',$topicdata);
            //类别

            $quescomnum = M('Quescomment')->where('quesId = '.$quesid.'')->select();
            $this->assign('quescomnum',count($quescomnum));
            //问题评论数量

            $isattenques = M('Attentionquestion')->where('quesId = '.$quesid.' AND userId = '.$_SESSION['userid'].'')->select();
            !empty($isattenques)? $is = '1':$is = '0';
            $this->assign('isattenques',$is);
            //是否关注该问题
            

            //是否有回答
            $isans = M('Answer')->where('userId = '.$_SESSION['userid'].' and quesId = '.$quesid.'')->find();
            empty($isans) ? $hasans = 0 :$hasans = 1;
            $this->assign('hasans',$hasans);
            
            $ans = M('Answer');
            $data=$ans->where('quesId = '.$quesid.'')->select();
            $user = M('User');
            $ao = M('Agreeoppose');
            $to = M('Thinkoppose');
            foreach ($data as $key => $value) {
                $userlist = $user->find($value['userId']);
                $data[$key]['nickname'] = $userlist['nickName'];
                $data[$key]['autograph'] = $userlist['autograph'];
                $data[$key]['userphoto'] = $userlist['photo'];
                //回答者的信息
                
                 $foo1 = $ao->where('userId = '.$_SESSION['userid'].' and answerId = '.$value['id'].'')->find();
                 empty($foo1) ? $data[$key]['agropp'] = 2:$data[$key]['agropp'] = $foo1['agrOpp'];
                 //是否点赞

                 $foo2 = $to->where('userId = '.$_SESSION['userid'].' and answerId = '.$value['id'].'')->find();
                 empty($foo2) ? $data[$key]['thank'] = 0 : $data[$key]['thank'] = 1;
                 
            }
            $this->assign('ansdata',json_encode($data));


            layout('Layout/top_people');
            
            $this->display();
        }else{
            $this->redirect('index.php/Sign/index');
        }
    }


    public function _empty(){
        $this->display('Error:index');
    }
    
}
