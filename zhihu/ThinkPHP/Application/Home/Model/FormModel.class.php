<?php
namespace Home\Model;
use Think\Model;
class FormModel extends Model {
    // 定义自动验证
    // 
    protected $trueTableName = 'User'; 
    //要操作的表名
    protected $_validate    =   array(
        array('account','require','用户名必须'),
        array('password','require','密码必须'),
        );
    // 定义自动完成
    protected $_auto    =   array(
        array('create_time','time',1,'function'),
        );
 }