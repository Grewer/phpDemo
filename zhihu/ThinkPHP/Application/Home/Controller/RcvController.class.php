<?php
namespace Home\Controller;
use Think\Controller;
class RcvController extends Controller {
    public function index(){
        $uploaddir = './Public/img/head/';
        if (($_FILES["file"]["type"] == "image/png") && ($_FILES["file"]["size"] < 200000)){


        if ($_FILES["file"]["error"] > 0)
          {
          echo "Error: " . $_FILES["file"]["error"] . "<br />";
          }
        else
          {
              echo "Upload: " . $_FILES["file"]["name"] . "<br />";
              echo "Type: " . $_FILES["file"]["type"] . "<br />";
              echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
                /*文件移动*/
            if (file_exists($uploaddir . $_FILES["file"]["name"]))
              {
              echo $_FILES["file"]["name"] . " already exists. ";
              }
            else
              {
                echo $uploaddir.$_FILES["file"]["name"];
              move_uploaded_file($_FILES["file"]["tmp_name"],
              $uploaddir . $_FILES["file"]["name"]);
              echo "Stored in: " . $uploaddir . $_FILES["file"]["name"];
              }
          }
        }else{
          echo "Invalid file";
        }
    }
    public function _empty(){
        $this->display('Error:index');
    }

    public function getpic(){
      $file = $_REQUEST['file'];
      if(!empty($file)&&isset($_SESSION['userid'])){


      $streamFileType = 'png';
      $upPath = './Public/img/head/';
       if (preg_match('/(?<=\/)[^\/]+(?=\;)/',$file,$pregR)) $streamFileType ='.' .$pregR[0];  

        $User = M('User');

        $streamFileRand = date('YmdHis').rand(1000,9999); //文件名

        $foo1 = $User->where('id='.$_SESSION['userid'].'')->setField('photo','/Public/img/head/'.$streamFileRand.$streamFileType);
        

        $streamFilename = $upPath."/".$streamFileRand .$streamFileType;
 
        preg_match('/(?<=base64,)[\S|\s]+/',$file,$streamForW);

        if (file_put_contents($streamFilename,base64_decode($streamForW[0]))){
          $data = '{"status":"1","path":"/Public/img/head/'.$streamFileRand.$streamFileType.'"}';
          echo $data;
        }else{
          $data = '{"status":"0"}';
          echo $data;
        }
      }else{
          $this->redirect('index.php/Sign/index');
      }

    }
    //点赞和取消赞
    public function ispraise(){
      if(IS_GET && isset($_SESSION['userid'])){
            $is_praise = $_GET['is_praise'];
            $answer_id = $_GET['answer_id'];
            $praise = D('Personoperat');
            if($is_praise == '1'){
              //点赞
              $praise->praise($_SESSION['userid'],$answer_id);
              
            }elseif($is_praise == '0'){
              //取消点赞
              $praise->cancelpraise($_SESSION['userid'],$answer_id);
            }

        }else{
            $this->redirect('index.php/Sign/index');
        }
    }
    // load 是查看是否点赞
    public function  loadispraise(){
      if(IS_GET && isset($_SESSION['userid'])){
            $agr = M('Agreeoppose');
            $answer_id = $_GET['answer_id'];
            $loadispraise = $agr->where('userId = '.$_SESSION['userid'].' and answerId = '.$answer_id.'')->find();
            if($loadispraise){
              $this->ajaxReturn($loadispraise['agrOpp']);
            }else{
              $data = 'No';
              $this->ajaxReturn($data);
            }
        }else{
            $this->redirect('index.php/Sign/index');
        }
    }
    //修改赞
    public function  editpraise(){
        if(IS_GET && isset($_SESSION['userid'])){
              $agr = M('Agreeoppose');
              $answer_id = $_GET['answer_id'];
              $isedit = $_GET['is_edit'];
              $ans = M('Answer');
              if($isedit == 1){
                //反对改为赞
                $agr->where('userId = '.$_SESSION['userid'].' and answerId = '.$answer_id.'')->setField('agrOpp',1);
                $ans->where('id = '.$answer_id.'')->setInc('praiseNumb');
                $ans->where('id = '.$answer_id.'')->setDec('againstNumb');

              }else if($isedit == 0){
                $agr->where('userId = '.$_SESSION['userid'].' and answerId = '.$answer_id.'')->setField('agrOpp',0);
                $ans->where('id = '.$answer_id.'')->setDec('praiseNumb');
                $ans->where('id = '.$answer_id.'')->setInc('againstNumb');
              }
              
              
          }else{
              $this->redirect('index.php/Sign/index');
          }
      }
      //是否反对
      public function  isagainst(){
          if(IS_GET && isset($_SESSION['userid'])){
                $is_against = $_GET['is_against'];
                $answer_id = $_GET['answer_id'];
                $operat = D('Personoperat');
                if($is_against == 1){
                  //反对
                  $operat->against($_SESSION['userid'],$answer_id);
                }elseif ($is_against == 0) {
                  //取消反对
                  $operat->cancelagainst($_SESSION['userid'],$answer_id);
                }
                
            }else{
                $this->redirect('index.php/Sign/index');
            }
        }


        //是否是关注了该问题和是否感谢了
      public function isthx_isatten(){
        if(IS_GET && isset($_SESSION['userid'])){
            $ansarr = $_GET['ansarr'];//联系是否感谢
            $quesarr = $_GET['quesarr'];//联系是否关注
            
            $arr = D('Arr');
            $retthx = $arr->retarr($ansarr);
            $retatten = $arr->retarr($quesarr);
            //是否感谢
            $think = M('Thinkoppose');
            $foo1 = $think->where('userId = '.$_SESSION['userid'].'')->getField('answerId',true);
            foreach ($ansarr as $key => $value) {
                foreach ($foo1 as $key2 => $value2) {
                    if($value2 == $value){
                        $retthx[$key] = 1;
                    }
                }
            }
            //是否关注该问题;
            $ques = M('Attentionquestion');
            $foo2 = $ques->where('userId = '.$_SESSION['userid'].'')->getField('quesId',true);
            foreach ($quesarr as $key => $value) {
                foreach ($foo2 as $key2 => $value2) {
                    if($value2 == $value){
                        $retatten[$key] = 1;
                    }
                }
            }
            
            $data['retthx'] = $retthx;
            $data['retatten'] = $retatten;
            $this->ajaxReturn($data);

        }else{
            $this->redirect('index.php/Sign/index');
        }
      }

      //获取评论
      public function getcomment(){
        if(IS_GET && isset($_SESSION['userid'])){
              $answer_id = $_GET['answerid'];
              $op = D('Personoperat');
              $data = $op->getcom($answer_id);
              $this->ajaxReturn($data);
          }else{
              $this->redirect('index.php/Sign/index');
          }
      }

      public function addcomment(){
        if(IS_GET && isset($_SESSION['userid'])){
              $answer_id = $_GET['answerid'];
              $content = $_GET['content'];
              $op = D('Personoperat');
              $data = $op->addcom($answer_id,$_SESSION['userid'],$content);
              
              $user = M('User')->find($_SESSION['userid']);
              $this->ajaxReturn($user);

              


          }else{
              $this->redirect('index.php/Sign/index');
          }
      }

      public function thank(){
        if(IS_GET && isset($_SESSION['userid'])){
              $isthank = $_GET['isthank'];
              $answerid = $_GET['answerid'];
              $op = D('Personoperat');
              if($isthank == 1){
                //感谢
                $op->thank($answerid,$_SESSION['userid']);
              }elseif($isthank == 0){
                //取消感谢
                $op->cancelthank($answerid,$_SESSION['userid']);
              }
          }else{
              $this->redirect('index.php/Sign/index');
          }
      }

      

      public function attenques(){
        if(IS_GET && isset($_SESSION['userid'])){
              $quesid = I('get.quesid');
              $isatten = I('get.isatten');
              $atten = D('Atten');
              if($isatten == '1'){
                //关注
                $atten->attenques($_SESSION['userid'],$quesid);
              }
              if($isatten == '0'){
                //取关
                $atten->cancalattenques($_SESSION['userid'],$quesid);
              }
          }else{
              $this->error('非法请求');
          }
      }

      public function addquescom(){
        if(IS_GET && isset($_SESSION['userid'])){
              $quesid = I('get.quesid');
              $content = I('get.content');

              $quescom = M('Quescomment');

              $data['quesId'] = $quesid;
              $data['commentatorId'] = $_SESSION['userid'];
              $data['commentContent'] = $content;
              $data['qccreateTime'] = date('Y-m-d H:i:s');
              
              $quescom->data($data)->add();

              
          }else{
              $this->error('非法请求');
          }
      }

      public function getquescom(){
        if(IS_GET){
              $quesid = I('get.quesid');
              $list = M('Quescomment as a')->join('User as b on a.commentatorId = b.id')->where('a.quesId = '.$quesid.'')->select();
              $this->ajaxReturn($list); 
          }else{
              $this->error('非法请求');
          }
      }

      
      public function rcvanswer(){
          if(IS_POST && isset($_SESSION['userid'])){
              $content = I('post.anscontent');
              $quesid = I('post.quesid');
              $isanony = I('post.isanony');

              $uploaddir = './Public/img/answer/';
              empty($_FILES["file"]) ? $ishasimg = 0 : $ishasimg = 1;
              
              $personop = D('Personoperat');

              if($ishasimg == 1){
                  
                  if (($_FILES["file"]["type"] == "image/png") ||($_FILES["file"]["type"] == "image/jpeg")||($_FILES["file"]["type"] == "image/jpg")){
                      if ($_FILES["file"]["error"] > 0){
                          $this->error($_FILES["file"]["error"]);
                      }else{
                          $name = date('YmdHis').rand(1000,9999);
                          $imgpath = $uploaddir . $name .'.png';
                          $edit_imgpath = substr($imgpath,1);
                          move_uploaded_file($_FILES["file"]["tmp_name"],
                          $imgpath);

                      }
                  }
                  $personop->addanswer($_SESSION['userid'],$quesid,$content,$isanony,$edit_imgpath);
                  $data['status'] = 'ok';
                  $data['imgpath'] = $edit_imgpath;
                  $this->ajaxReturn($data);
              }elseif ($ishasimg == 0) {
                  $personop->addanswer_noimg($_SESSION['userid'],$quesid,$content,$isanony);
                  $data['status'] = 'ok';
                  
                  $this->ajaxReturn($data);

              }
              
              
          }else{
              $this->error('非法请求');
          }
      }

      public function addques(){
        if(IS_POST&& isset($_SESSION['userid'])){
              
              empty($_FILES["file"]) ? $ishasimg = 0 : $ishasimg = 1;
              $ques=D('Ques');
              $uploaddir = './Public/img/question/';
              if($ishasimg == 1){
                if (($_FILES["file"]["type"] == "image/png") ||($_FILES["file"]["type"] == "image/jpeg")||($_FILES["file"]["type"] == "image/jpg")){
                    if ($_FILES["file"]["error"] > 0){
                        $this->error($_FILES["file"]["error"]);
                    }else{
                        $name = date('YmdHis').rand(1000,9999);
                        $imgpath = $uploaddir . $name .'.png';
                        $edit_imgpath = substr($imgpath,1);
                        move_uploaded_file($_FILES["file"]["tmp_name"],
                        $imgpath);

                    }
                  }

                    $id = $ques->newques(I('post.quesname'),I('post.quesdesc'),I('post.questopic'),$this->edit(I('post.isanony')),$edit_imgpath,$_SESSION['userid']);
                    $data['status'] = 'ok';
                    $data['id'] = $id;
                    $this->ajaxReturn($data);
              }elseif ($ishasimg == 0) {
                    $id = $ques->newques_noimg(I('post.quesname'),I('post.quesdesc'),I('post.questopic'),$this->edit(I('post.isanony')),$_SESSION['userid']);                
                    $data['status'] = 'ok';
                    $data['id'] = $id;
                    $this->ajaxReturn($data);

              }
          }else{
              $this->error('非法请求');
          }
      }

      protected function edit($v){
          if($v == "true"){
            return 1;
          }else{
            return 0;
          }
      }

      public function del(){
        if(IS_GET && isset($_SESSION['userid'])){
              $op = D('Personoperat');
              $op->delans(I('get.id'));
              
          }else{
              $this->error('非法请求');
          }
      }


      public function editanswer_noeditimg(){
        if(IS_GET && isset($_SESSION['userid'])){
              $op = D('Personoperat');
              $op->editans(I('get.content'),I('get.ansid'));
              $this->ajaxReturn('ok');
          }else{
              $this->error('非法请求');
          }
      }//修改回答,不修改图片

      public function editanswer_noimg(){
        if(IS_GET && isset($_SESSION['userid'])){
              $op = D('Personoperat');
              $op->cancelimg(I('get.content'),I('get.ansid'));
              $this->ajaxReturn('ok');
          }else{
              $this->error('非法请求');
          }
      }//修改回答,修改图片
    
      
      public function editanswer_editimg(){
        if(IS_POST && isset($_SESSION['userid'])){
              $op = D('Personoperat');
              $uploaddir = './Public/img/answer/';
              if (($_FILES["file"]["type"] == "image/png") ||($_FILES["file"]["type"] == "image/jpeg")||($_FILES["file"]["type"] == "image/jpg")){
                  if ($_FILES["file"]["error"] > 0){
                      $this->error($_FILES["file"]["error"]);
                  }else{
                      $name = date('YmdHis').rand(1000,9999);
                      $imgpath = $uploaddir . $name .'.png';
                      $edit_imgpath = substr($imgpath,1);
                      move_uploaded_file($_FILES["file"]["tmp_name"],
                      $imgpath);
                  }
              }
              $op->editimg(I('post.content'),I('post.ansid'),$edit_imgpath);
              $data['status'] = 'ok';
              $data['imgpath'] = $edit_imgpath;
              $this->ajaxReturn($data);
          }else{
              $this->error('非法请求');
          }
      }//修改回答,修改图片


}
