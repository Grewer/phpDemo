<?php
namespace Home\Model;
use Think\Model;
class PeopleModel extends Model {
    //人的回答,提问,关注 list
    function ans_type($userid){
        $data = M('Question as a')->join('Answer as b on b.quesId = a.id')->where('userId = '.$userid.'')->select();
        return $data;
    }//回答

    function ques_type($userid){
        $data = M('Question')->where('Uid = '.$userid.'')->select();
        return $data;
    }//提问

    function atten_type($userid){
        $data = M('Attentiontopic as a')->join('Topic as b on a.topicId = b.topicid')->where('userId= '.$userid.'')->select();
        return $data;
    }//关注


    function getansnum($userid){
        $data = M('Answer')->where('userId = '.$userid.'')->select();
        return count($data);
    }//回答

    function getquesnum($userid){
        $data = M('Question')->where('Uid = '.$userid.'')->select();
        return count($data);
    }//提问

    function getpraise($userid){
        return  M('Answer as b')->join('Agreeoppose as a on a.answerId = b.id')->where('b.userId = '.$userid.' and a.agrOpp = 1')->count();
    }

    function getthank($userid){
        return  M('Thinkoppose as a')->join('Answer as b on a.answerId = b.id')->where('b.userId = '.$userid.'')->count();

    }

    function getatten($userid){
        return M('Attentiontopic as a')->join('Topic as b on a.topicId = b.topicid')->where('userId= '.$userid.'')->count();
    }
 }