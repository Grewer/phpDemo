<?php
/**
 * @Author   公共函数
 * @DateTime 2017-04-07
 * @version  1.0
 * @return   [type]     [description]
 */
function test($text){
	return 'qwer';
}

function subtext($text, $length)
{
    if(mb_strlen($text, 'utf8') > $length) 
    return mb_substr($text, 0, $length, 'utf8').'...';
    return $text;
}
function checkcomment($comnum){
	if($comnum == 0){
		return '添加评论';
	}else{
		return $comnum.'条评论';
	}

}