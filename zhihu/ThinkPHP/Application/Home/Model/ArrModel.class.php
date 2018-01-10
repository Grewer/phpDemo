<?php
namespace Home\Model;
use Think\Model;
class ArrModel extends Model {
    function retarr($arr){
        $data = array();
        $len = count($arr);
        for ($i=0; $i < $len ; $i++) { 
            $data[] = 0;
        }
        return $data;
    }

    function calculation($u,$v){
        //$u 赞同 $v 反对
        if($u == 0 && $v == 0){
            $u = 1;
            $v = 1;
        }

        $n = $u + $v;
        $p = $u / $n;
        $z = 0.5;
        $numerator = ($p + pow($z,2)/(2*$n) - $z/(2*$n)*sqrt((4*$n*(1-$p)*$p+pow($z,2))));
        //分子
        $denominator = 1+pow($z,2)/$n;
        //分母
        return $numerator/$denominator;

}

    function getlist($userid){
    	$data = M('Question as a')->join('Answer as b on a.quesId = b.quesId')->select();
        $user = M('user');
        $attenques = M('Attentionquestion');
        $thank = M('Thinkoppose');
        foreach ($data as $key => $value) {
            //回答问题的人名,签名
            $userdata = $user->find($value['userId']);
            $data[$key]['nickname'] = $userdata['nickName'];
            $data[$key]['autograph'] = $userdata['autograph'];
            
            
            //是否关注,感谢
            $isattenques = $attenques->where('userId = '.$userid.' and quesId = '.$value['quesId'].'')->select();
            !empty($isattenques) ? $data[$key]['isattenques'] = '1' : $data[$key]['isattenques'] = '0';

            $isthank = $thank->where('userId = '.$userid.' and answerId = '.$value['id'].'')->select();
            !empty($isthank) ? $data[$key]['isthank'] = '1' : $data[$key]['isthank'] = '0';
        }
    	return $this->quickSort($data);
    }

    function quickSort($array){
		if(!isset($array[1]))  return $array;
		$mid = $array[0]; 
		$leftArray = array();
		$rightArray = array();
		foreach($array as $v){
		    if($this->calculation($v['praiseNumb'],$v['againstNumb']) < $this->calculation($mid['praiseNumb'],$mid['againstNumb']))
		        $rightArray[] = $v; 
		    if($this->calculation($v['praiseNumb'],$v['againstNumb']) > $this->calculation($mid['praiseNumb'],$mid['againstNumb']))
		        $leftArray[] = $v; 
		}
		
		$leftArray = $this->quickSort($leftArray); 
		$leftArray[] = $mid; 
		$rightArray = $this->quickSort($rightArray); 
		return array_merge($leftArray,$rightArray); 
	}



}