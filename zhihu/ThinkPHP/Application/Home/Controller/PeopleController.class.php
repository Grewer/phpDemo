<?php
namespace Home\Controller;
use Think\Controller;
class PeopleController extends Controller {
    public function index($type = 'ans'){
        if(isset($_SESSION['userid']))
        {   
            $User = M('User');
            $data = $User->find($_SESSION['userid']);
            
            layout('Layout/top_people');
            $this->assign('data',$data);
            $P = D('People');
            if($type == 'ans'){
                $list = $P->ans_type($_SESSION['userid']);
            }else if($type == 'ques'){
                $list = $P->ques_type($_SESSION['userid']);
            }else if($type == 'atten'){
                $list = $P->atten_type($_SESSION['userid']);
            }
            $ansnum = $P->getansnum($_SESSION['userid']);
            $quesnum = $P->getquesnum($_SESSION['userid']);
            //数量
            $this->assign('ansnum',$ansnum);
            $this->assign('quesnum',$quesnum);
            $this->assign('list',json_encode($list));
            $this->assign('type',$type);

            $praisenum = $P->getpraise($_SESSION['userid']);
            $this->assign('praisenum',$praisenum);
            $thanknum = $P->getThank($_SESSION['userid']);
            $this->assign('thanknum',$thanknum);
            $attennum = $P->getatten($_SESSION['userid']);
            $this->assign('attennum',$attennum);
            $this->display();
        }else{
            $this->redirect('index.php/Sign/index');
        }
	   
    }
    
    public function _empty(){
        $this->display('Error:index');
    }

    public function edit(){
        if(isset($_SESSION['userid']))
        {   
            $User = M('User');
            $data = $User->find($_SESSION['userid']);
            
            layout('Layout/top_people');
            $this->assign('data',$data);
            $this->display();
        }else{
            $this->redirect('index.php/Sign/index');
        }
    }

    public function value(){
        if(isset($_SESSION['userid']))
        {   
            if(!empty($_GET['sex'])){
                $User = M('User');
                $_GET['sex'] == '男'? $gender = 'male':$gender = 'female';
                $dbgender = $User->where('id='.$_SESSION['userid'].'')->getField('gender');
                if($dbgender == $gender){
                    $data = 'ok';
                    $this->ajaxReturn($data);
                    die();
                }else{
                    $bar = $User->where('id='.$_SESSION['userid'].'')->setField('gender',$gender);
                    if($bar){
                        $data = 'ok';
                        $this->ajaxReturn($data);
                    }else{
                        $data = 'fail';
                        $this->ajaxReturn($data);
                    }
                }
                
            }
            if(!empty($_GET['auto'])){
                $auto = $_GET['auto'];
                $User = M('User');
                $dbauto = $User->where('id='.$_SESSION['userid'].'')->getField('autograph');
                if($dbauto == $auto){
                    $data = 'ok';
                    $this->ajaxReturn($data);
                    die();
                }else{
                    $bar = $User->where('id='.$_SESSION['userid'].'')->setField('autograph',$auto);
                    if($bar){
                        $data = 'ok';
                        $this->ajaxReturn($data);
                    }else{
                        $data = 'fail';
                        $this->ajaxReturn($data);
                    }
                }
            }

            if(!empty($_GET['intro'])){
                $intro = $_GET['intro'];
                $User = M('User');
                $dbintro = $User->where('id='.$_SESSION['userid'].'')->getField('introduce');
                if($dbintro == $intro){
                    $data = 'ok';
                    $this->ajaxReturn($data);
                    die();
                }else{
                    $bar = $User->where('id='.$_SESSION['userid'].'')->setField('introduce',$intro);
                    if($bar){
                        $data = 'ok';
                        $this->ajaxReturn($data);
                    }else{
                        $data = 'fail';
                        $this->ajaxReturn($data);
                    }
                }
            }
            //gongsi
            if(!empty($_GET['com'])){
                $com = $_GET['com'];
                $posi = $_GET['posi'];
                empty($posi) ? $posi = '': $posi;
                $User = M('User');
                $dbcom = $User->where('id='.$_SESSION['userid'].'')->getField('company');
                $dbposi = $User->where('id='.$_SESSION['userid'].'')->getField('position');
                if($dbcom == $com && $dbposi == $posi){
                    $data = 'ok';
                    $this->ajaxReturn($data);
                    die();
                }elseif($dbcom == $com || $dbposi == $posi){
                    if($dbcom == $com){
                        $bar = $User->where('id='.$_SESSION['userid'].'')->setField('position',$posi);
                        if($bar){
                            $data = 'ok';
                            $this->ajaxReturn($data);
                        }else{
                            $data = 'fail';
                            $this->ajaxReturn($data);
                        }
                    }
                    if($dbposi == $posi){
                        $bar = $User->where('id='.$_SESSION['userid'].'')->setField('company',$com);
                        if($bar){
                            $data = 'ok';
                            $this->ajaxReturn($data);
                        }else{
                            $data = 'fail';
                            $this->ajaxReturn($data);
                        }
                    }
                    
                }else{
                    $foo1 = $User->where('id='.$_SESSION['userid'].'')->setField('company',$com);
                    $foo2 = $User->where('id='.$_SESSION['userid'].'')->setField('position',$posi);
                    if($foo1 & $foo2){
                        $data = 'ok';
                            $this->ajaxReturn($data);
                    }else{
                        $data = 'fail';
                        $this->ajaxReturn($data);
                    }
                }
            }


            //xuexiao
            if(!empty($_GET['sc'])){
                $sc = $_GET['sc'];
                $ma = $_GET['ma'];
                empty($ma) ? $ma = '': $ma;
                $User = M('User');
                $dbsc = $User->where('id='.$_SESSION['userid'].'')->getField('school');
                $dbma = $User->where('id='.$_SESSION['userid'].'')->getField('major');
                if($dbsc == $sc && $dbma == $ma){
                    $data = 'ok';
                    $this->ajaxReturn($data);
                    die();
                }elseif($dbsc == $sc || $dbma == $ma){
                    if($dbsc == $sc){
                        $bar = $User->where('id='.$_SESSION['userid'].'')->setField('major',$ma);
                        if($bar){
                            $data = 'ok';
                            $this->ajaxReturn($data);
                        }else{
                            $data = 'fail';
                            $this->ajaxReturn($data);
                        }
                    }
                    if($dbma == $ma){
                        $bar = $User->where('id='.$_SESSION['userid'].'')->setField('school',$sc);
                        if($bar){
                            $data = 'ok';
                            $this->ajaxReturn($data);
                        }else{
                            $data = 'fail';
                            $this->ajaxReturn($data);
                        }
                    }
                    
                }else{
                    $foo1 = $User->where('id='.$_SESSION['userid'].'')->setField('school',$sc);
                    $foo2 = $User->where('id='.$_SESSION['userid'].'')->setField('major',$ma);
                    if($foo1 & $foo2){
                        $data = 'ok';
                            $this->ajaxReturn($data);
                    }else{
                        $data = 'fail';
                        $this->ajaxReturn($data);
                    }
                }
            }
        }else{
            $this->redirect('index.php/Sign/index');
        }
    }

    public function del(){
        if(isset($_SESSION['userid']))
        {   
            if(!empty($_GET['genre'])){
                $genre = $_GET['genre'];
                $User = M('User');
                if($genre == 1){
                    $data = array('company'=>'','position'=>'');
                    $dbdel = $User->where('id='.$_SESSION['userid'].'')->setField($data);
                }elseif($genre == 2){
                    $data = array('school'=>'','major'=>'');
                    $dbdel = $User->where('id='.$_SESSION['userid'].'')->setField($data);
                }
                
            }
        }else{
            $this->redirect('index.php/Sign/index');
        }
    }


    public function person($personid = "",$type= "ans"){
        if(isset($_SESSION['userid']))
        {   
            $User = M('User');
            $data = $User->find($_SESSION['userid']);
            
            layout('Layout/top_people');
            $this->assign('data',$data);


            $P = D('People');
            if($type == 'ans'){
                $list = $P->ans_type($personid);
            }else if($type == 'ques'){
                $list = $P->ques_type($personid);
            }else if($type == 'atten'){
                $list = $P->atten_type($personid);
            }
            $ansnum = $P->getansnum($personid);
            $quesnum = $P->getquesnum($personid);
            //数量
            $this->assign('ansnum',$ansnum);
            $this->assign('quesnum',$quesnum);
            $this->assign('list',json_encode($list));
            $this->assign('type',$type);

            $thispeople = $User->find($personid);
            $this->assign('thispeople',$thispeople);

            $praisenum = $P->getpraise($personid);
            $this->assign('praisenum',$praisenum);
            $thanknum = $P->getThank($personid);
            $this->assign('thanknum',$thanknum);
            $attennum = $P->getatten($personid);
            $this->assign('attennum',$attennum);
            $this->display();
        }else{
            $this->redirect('index.php/Sign/index');
        }
       
    }
    
}
