<?php
namespace Home\Model;
use Think\Model;
class TopicModel extends Model {
    function getattentopic($id = ''){
        $data = M('Topic as a')->join('AttentionTopic as b on a.topicId = b.topicId')->where('userId = '.$id.'')->select();
        return $data;
    }

    function getfulltopic(){
    	$data = M('Topic')->select();
        return $data;
    }

    function getfulltopicclass(){
    	$data = M('Topicclass')->select();
    	return $data;
    }

    function getonetypetopic($topicclassid = ''){
        $data = M('Topic')->where('topicClassId = '.$topicclassid.'')->select();
        return $data;
    }

    //话题关注人数
    function gettopicattennumb($topicid = ''){
        $data = M('Attentiontopic')->where('topicId = '.$topicid.'')->select();
        return count($data);
    }

    function getonetopicbytopicid($topicid){
        $data = M('Topic')->where('topicId = '.$topicid.'')->select();
        return $data;
    }

    function checktopic_isatten($userid,$topicid){
        $atten = M('Attentiontopic');
        $data = $atten->where('userId = '.$userid.'')->select();
        foreach ($data as $key => $value) {
            if($value['topicId'] == $topicid){
                return true;
            }
        }
        return false;
    }
    //某个人关注的话题数量
    function attentopicnumb($userid){
        $data = M('Attentiontopic')->where('userId = '.$userid.'')->select();
        return count($data);
    }
    
 }