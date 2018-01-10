<?php
namespace Home\Model;
use Think\Model;
class QuesModel extends Model {
    function getqueslist($topicid){
        $data = M('Question as a')->join('Answer as b on a.id = b.quesId')->where('a.topicId = '.$topicid.'')->order('praiseNumb desc') ->select();
        return $data;
    }  
    //每个问题的最高赞数回答
    function alterques($arr){
        $new_arr = array();
        $last = $arr[0]['quesId'];
        $new_arr[] = $arr[0];
        foreach ($arr as $key => $value) {
            if($this->isinarr($new_arr,$value['quesId'])){
                continue;
            }else{
                $new_arr[] = $value;
                $last = $value['quesId'];
            }
        }
        return $new_arr;
    }


    function isinarr($arr,$num){
        foreach ($arr as $key => $value) {
            if($value['quesId'] == $num){
                return true;
            }
        }
         return false;
    }

    function newques($quesname,$quesdesc,$questopic,$isanony,$imgpath,$id){
        $ques = M('Question');
        $data['topicId'] = $questopic;
        $data['quesName'] = $quesname;
        $data['quesDescribe'] = $quesdesc;
        $data['photo'] = $imgpath;
        $data['Uid'] = $id;
        $data['Anonymity'] = $isanony;
        $data['quescreateTime'] = date('Y-m-d H:i:s');
        $id = $ques->data($data)->add();
        $ques->where('id = '.$id.'')->setField('quesId',$id);
        return $id;
    }//添加新问题有图

    function newques_noimg($quesname,$quesdesc,$questopic,$isanony,$id){
        $ques = M('Question');
        $data['topicId'] = $questopic;
        $data['quesName'] = $quesname;
        $data['quesDescribe'] = $quesdesc;
        $data['Uid'] = $id;
         $data['Anonymity'] = $isanony;

        $data['quescreateTime'] = date('Y-m-d H:i:s');
        $id = $ques->data($data)->add();
        $ques->where('id = '.$id.'')->setField('quesId',$id);
        return $id;
    }//添加新问题无图


 }