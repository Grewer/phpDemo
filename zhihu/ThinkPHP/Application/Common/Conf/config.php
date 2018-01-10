<?php
return array(
	//'配置项'=>'配置值'
	'DB_TYPE'               =>  'pdo',     // 数据库类型
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '1305890',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_DSN'    => 'mysql:host=127.0.0.1;dbname=test;charset=utf8',
    'URL_MODEL'				=>  '2',
    'MODULE_ALLOW_LIST' => array (
                    'home'   //模块名字
            ),
    'SESSION_OPTIONS'         =>  array(                
        'name'                =>  'userid',  
        'expire'              =>  3600,                      //SESSION过期时间，单位秒
        'use_trans_sid'       =>  1,                               //跨页传递
        'use_only_cookies'    =>  0,                               //是否只开启基于cookies的session的会话方式
    ),

    'URL_ROUTER_ON'   => true, 
    'URL_ROUTE_RULES'=>array(
    'Ques/:quesid' => 'Home/Ques/index',
    )
);
