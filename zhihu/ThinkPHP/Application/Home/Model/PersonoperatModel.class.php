<?php
namespace Home\Model;
use Think\Model;
class PersonoperatModel extends Model {
    function praise($userid,$answerid){
        $Agreeoppose = M('Agreeoppose');
        $data['userId'] = $userid;
        $data['answerId'] = $answerid;
        $data['agrOpp'] = 1;
        $data['createTime'] = date('Y-m-d H:i:s');
        $Agreeoppose->data($data)->add();

        $Answer = M("Answer");
        $Answer->where('id = '.$answerid.'')->setInc('praiseNumb');
        return true;
    }//点赞

    function cancelpraise($userid,$answerid){
        $Agreeoppose = M('Agreeoppose');
        $Agreeoppose->where('userId = '.$userid.' and answerId = '.$answerid.'')->delete();

        $Answer = M('Answer');
        $Answer->where('id = '.$answerid.'')->setDec('praiseNumb');
        return true;
    }//取消赞

    function against($userid,$answerid){
        $Agreeoppose = M('Agreeoppose');
        $data['userId'] = $userid;
        $data['answerId'] = $answerid;
        $data['agrOpp'] = 0;
        $data['createTime'] = date('Y-m-d H:i:s');
        $Agreeoppose->data($data)->add();

        $Answer = M("Answer");
        $Answer->where('id = '.$answerid.'')->setInc('againstNumb');
    }//反对

    function cancelagainst($userid,$answerid){
        $Agreeoppose = M('Agreeoppose');
        $Agreeoppose->where('userId = '.$userid.' and answerId = '.$answerid.'')->delete();

        $Answer = M('Answer');
        $Answer->where('id = '.$answerid.'')->setDec('againstNumb');
    }//取消反对


    function getcom($answerid){
        $com = M('Comment as a')->join('User as b on a.commentatorId = b.id')->where('answerId = '.$answerid.'')->select();
        return $com;
    }//获取该回复的评论


    function addcom($answerid,$userid,$content){
        $com = M('Comment');
        $data['commentatorId'] = $userid;
        $data['answerId'] = $answerid;
        $data['commentContent'] = $content;
        $data['comcreateTime'] = date('Y-m-d H:i:s');
        $com->data($data)->add();

        $ans = M('Answer');
        $ans->where('id = '.$answerid.'')->setInc('commentNumb');
    }//添加评论

    function thank($answerid,$userid){
        $thank = M('Thinkoppose');
        $data['userId'] = $userid;
        $data['answerId'] = $answerid;
        $data['createTime'] = date('Y-m-d H:i:s');
        $thank->data($data)->add();
    }

    function cancelthank($answerid,$userid){
        M('Thinkoppose')->where('userId = '.$userid.' and answerId = '.$answerid.'')->delete();
    }

    //添加回答
    function addanswer($userid,$quesid,$content,$isanony,$imgpath){
        $data['userId'] = $userid;
        $data['quesId'] = $quesid;
        $data['answerContent'] = $content;
        $data['anonymity'] = $isanony;
        $data['photo'] = $imgpath;
        $data['anscreateTime'] = date('Y-m-d H:i:s');
        $answer = M('Answer');
        $answer->data($data)->add();

        M('Question')->where('id = '.$quesid.'')->setInc('answerNumb');
    }

    // 添加无图片回答
    function addanswer_noimg($userid,$quesid,$content,$isanony){
        $data['userId'] = $userid;
        $data['quesId'] = $quesid;
        $data['answerContent'] = $content;
        $data['anonymity'] = $isanony;
        $data['anscreateTime'] = date('Y-m-d H:i:s');
        $answer = M('Answer');
        $answer->data($data)->add();
        M('Question')->where('id = '.$quesid.'')->setInc('answerNumb');
    }

    function delans($id){
        $d = M('Answer')->delete($id);
        return $d;
    }//删除回答


    function editans($text,$ansid){
        $ans = M('Answer');// necessary
        $ans->where('id = '.$ansid.'')->setField('answerContent',$text);
    }

    function cancelimg($text,$ansid){
        $ans = M('Answer');
        $data = array('answerContent'=>$text,'photo'=>NULL);
        $ans->where('id = '.$ansid.'')->setField($data);
    }

    function editimg($text,$ansid,$imgurl){
        $ans = M('Answer');
        $data = array('answerContent'=>$text,'photo'=>$imgurl);
        $ans->where('id = '.$ansid.'')->setField($data);
    }
 }