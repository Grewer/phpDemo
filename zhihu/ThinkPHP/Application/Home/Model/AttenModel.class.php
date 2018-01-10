<?php
namespace Home\Model;
use Think\Model;
class AttenModel extends Model {
    function cancelattentopic($userid,$topicid){
        $attentopic = M('Attentiontopic');
        $foo = $attentopic->where('userId = '.$userid.' and topicId = '.$topicid.'')->delete();
        $User = M('User');
        $foo2 = $User->where('id = '.$userid.'')->setDec('concernTopicNumb');
        if($foo&&$foo2){
            $data = 'ok';
        }else{
            $data = 'fail';
       }
       return $data;
    }


    function attentopic($userid,$topicid){
        $attentopic = M('Attentiontopic');
        $foo['userId'] = $userid;
        $foo['topicId'] = $topicid;
        $foo['createTime'] = date('Y-m-d H:i:s');
        $obj1 = $attentopic->data($foo)->add();
        $user = M('User');
        $obj2 = $user->where('id = '.$userid.'')->setInc('concernTopicNumb');
        if($obj1 && $obj2){
            $data = 'ok';
        }else{
            $data = 'fail';
        }
        return $data;
    }

    function attenques($userid,$quesid){
        $attenques = M('Attentionquestion');
        $data['userId'] = $userid;
        $data['quesId'] = $quesid;
        $data['createTime'] = date('Y-m-d H:i:s');
        $attenques->data($data)->add();

        M('Question')->where('id = '.$quesid.'')->setInc('attentionNumb');
    }

    function cancalattenques($userid,$quesid){
        $attenques = M('Attentionquestion');
        $attenques->where('userId = '.$userid.' and quesId = '.$quesid.'')->delete();

        M('Question')->where('id = '.$quesid.'')->setDec('attentionNumb');
    }
    
 }