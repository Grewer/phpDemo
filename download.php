<?php 

function downCurl($url) {
date_default_timezone_set('PRC');
$header = array("Connection: Keep-Alive", "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8", "Pragma: no-cache", "Accept-Language: zh-Hans-CN,zh-Hans;q=0.8,en-US;q=0.5,en;q=0.3", "User-Agent: Mozilla/5.0 (Windows NT 5.1; rv:29.0) Gecko/20100101 Firefox/29.0");
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip,deflate');

$content = curl_exec($ch);
$curlinfo = curl_getinfo($ch);

//关闭连接

curl_close($ch);

$arr = array($content,$curlinfo);
return $arr;

}

$re = downCurl("http://news.4399.com/yyssy/shishenlu/68609-3.html");

$str = $re[0];
if (preg_match_all('@src="(.*?)"@',$str,$link)){
	foreach ($link[1] as $key => $value) {
		$foo = downCurl($value);
		$curlinfo = $foo[1];
		if ($curlinfo['http_code'] == 200) {
		if ($curlinfo['content_type'] == 'image/jpeg') {
		$exf = '.jpg';
		} else if ($curlinfo['content_type'] == 'image/png') {
		$exf = '.png';
		} else if ($curlinfo['content_type'] == 'image/gif') {
		$exf = '.gif';
		}else{
			continue;
		}
		//你的文件夹是否有创建文件的权限 chomd -R 777 mywenjian
		$filename = './pic/'.$filename = date("YmdHis") . uniqid() . $exf;
		echo '下载'.$filename.'中...'.PHP_EOL;
		file_put_contents($filename, $foo[0]);
		}
	}
}else{
	echo "匹配失败";
}






?>