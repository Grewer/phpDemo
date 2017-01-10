<?php
/**
* time 2017.1.8
* author grewer
*/
$data = array(
        "filename"=>"num.txt",
        "filepath"=>"/test/download/",//根目录到当前目录的路径
        "maxnum"=>"5",
        "db_name"=>"test",
        "db_host"=>"localhost",
        "db_account"=>"root",
        "db_pwd"=>"root",
        "db_table_name"=>"downloadip"
    );
    $inter = json_encode($data);
    $obj = json_decode($inter);
    $file = $obj->{'filename'};
    $path = $obj->{'filepath'};
    $maxNum = $obj->{'maxnum'};
    $db_name = $obj->{'db_name'};
    $db_host = $obj->{'db_host'};
    $db_account = $obj->{'db_account'};
    $db_pwd = $obj->{'db_pwd'};
    $db_table_name = $obj->{'db_table_name'};

function getIp(){    
    $ip = '';    
    if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])){        
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];    
    }elseif(isset($_SERVER['HTTP_CLIENT_IP'])){        
        $ip = $_SERVER['HTTP_CLIENT_IP'];    
    }else{        
        $ip = $_SERVER['REMOTE_ADDR'];    
    }
    $ip_arr = explode(',', $ip);
    return $ip_arr[0];
 }
 function ipToInt($ip){
    $iparr = explode('.',$ip);
    $num = 0;
    for($i=0;$i<count($iparr);$i++){
        $num += intval($iparr[$i]) * pow(256,count($iparr)-($i+1));
    }
    return $num;
}
class mysql_operat{
	private $db_host;
	private $db_account;
	private $db_pwd;
	private $db_name;
    function __construct($db_host,$db_account,$db_pwd,$db_name){
    	$this->db_host = $db_host;
		$this->db_account = $db_account;
		$this->db_pwd = $db_pwd;
		$this->db_name = $db_name;
    	$this->con = mysqli_connect($this->db_host,$this->db_account,$this->db_pwd,$this->db_name)or die('连接失败!!!!!!');
		}
	function search($ip,$table){
		$sql = "SELECT*FROM {$table} WHERE IP = {$ip} limit 1";
		$q = $this->con->query($sql);
		if($q==false){retuen false};
		$this->res = $q->fetch_assoc();
		$num = $this->res['num'];
		if($this->res == ''){
			return false;
		}else{
			return $num;
		}
	}
	function insNum($ip,$table){
		$num = $this->res['num'];
		$num +=1;
		$sql = "UPDATE {$table} set num = {$num} WHERE IP = {$ip} limit 1";
		$q = $this->con->query($sql);
		return true;
	}
	function insIp($ip,$table){
		$sql = "INSERT INTO {$table} (IP,num) VALUES ({$ip},1)";
		$q = $this->con->query($sql);
		return true;
	}
	function __destruct(){
		$this->con->mysqli_close;
	}

}
function download($file,$path){
        $file=$_SERVER['DOCUMENT_ROOT'].$path.$file ;
        if(is_file($file)) {
            header("Content-Type: application/force-download");
            header("Content-type: application/octet-stream");
            header("Content-Disposition: attachment; filename=".basename($file));
            readfile($file);
            exit;
        }else{
            echo "文件不存在！";
            exit;
        }  
    }


$ip = ipToInt(getIp());
// $ip = '123456789'; //测试
if($ip == 0){
	die('ip错误');
}
$link = new mysql_operat($db_host,$db_account,$db_pwd,$db_name);
$ex = $link->search($ip,$db_table_name);
if($ex){
	if($ex <= $maxNum){
		$link->insNum($ip,$db_table_name);
		download($file,$path);  
	}else{
		die('只能下载'.$maxNum.'次');
	}
}else{
	$link->insIp($ip,$db_table_name);
		download($file,$path);  
}
