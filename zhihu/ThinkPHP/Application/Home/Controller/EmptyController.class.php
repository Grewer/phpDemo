<?php

//空控制器
namespace Home\Controller;
use Think\Controller;
class EmptyController extends Controller{
    public function index(){
        $this->display('Error:index');
    
    }
    public function _empty(){
        $this->display('Error:index');
    }
}