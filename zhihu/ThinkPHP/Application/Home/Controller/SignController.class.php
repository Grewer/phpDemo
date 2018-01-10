<?php 
/**
 * auther:  Grewer
 * time:    2017.3.9
 * type:    sign
 */
namespace Home\Controller;
use Think\Controller;
class SignController extends Controller {
    public function index(){

	    layout('Layout/signbackground');
        $_xsrf = $this->get_hash();
        session('_xsrf',$_xsrf);
        $this->assign('_xsrf',$_xsrf);
        $this->display();
    }
    public function _empty(){
        $this->display('Error:index');
    }
    /** 
 *  
 * 验证码生成 
 */  
    public function verify_c(){  
        session_start();
        function random($len) {
            $srcstr = "1a2s3d4f5g6hj8k9qwertyupzxcvbnm";
            mt_srand();
            $strs = "";
            for ($i = 0; $i < $len; $i++) {
                $strs .= $srcstr[mt_rand(0, 30)];
            }
            return $strs;
        }
         
        //随机生成的字符串
        $str = random(4); 
         
        //验证码图片的宽度
        $width  = 50;      
         
        //验证码图片的高度
        $height = 25;     
         
        //声明需要创建的图层的图片格式
        @ header("Content-Type:image/png");
         
        //创建一个图层
        $im = imagecreate($width, $height);
         
        //背景色
        $back = imagecolorallocate($im, 0xFF, 0xFF, 0xFF);
         
        //模糊点颜色
        $pix  = imagecolorallocate($im, 187, 230, 247);
         
        //字体色
        $font = imagecolorallocate($im, 41, 163, 238);
         
        //绘模糊作用的点
        mt_srand();
        for ($i = 0; $i < 1000; $i++) {
            imagesetpixel($im, mt_rand(0, $width), mt_rand(0, $height), $pix);
        }
         
        //输出字符
        imagestring($im, 5, 7, 5, $str, $font);
         
        //输出矩形
        imagerectangle($im, 0, 0, $width -1, $height -1, $font);
         
        //输出图片
        imagepng($im);
         
        imagedestroy($im);
         
        $str = md5($str);
         
        //选择 cookie
        //SetCookie("verification", $str, time() + 7200, "/");
         
        //选择 Session
        $_SESSION["verification"] = $str;
            } 


    public function signin_check(){
          if (IS_POST){
             $User = M('User');
             $form = I('post.'); 
             
             if(md5($form['verify']) != $_SESSION["verification"]){
                $this->error('verifyerror');
                return false;
             }
             $condition['email'] = $form['account'];
             $data = $User->where($condition)->find();
             if($data){
                $condition['password'] = $form['password'];
                $data = $User->where($condition)->find();
                if($data){
                    $_SESSION['userid'] = $data['id'];
                    $this->success('success');
                }else{
                    $this->error('passworderror');
                }
             }else{
                $this->error('accountnull');
             }
             
         }else{
             $this->error('非法请求');
         }
    }

    public function logout(){
        if (isset($_SESSION['userid'])) {
            unset($_SESSION['userid']);
            $this->redirect('index.php/Sign/index');
        }else{
            $this->redirect('index.php/Sign/index');
        }
        
    }

    public function signup_check(){
        if(IS_POST && I('post._xsrf') == session('_xsrf')){
            if(I('post.fullname') !='' && I('post.email') !='' && I('post.up-password') !='' ){
                $user = M('User');
                $email = I('post.email');
                if($user->getByEmail($email)){
                    $this->error('hasexist');
                }else{
                    $data['nickName']= I('post.fullname');
                    $data['email'] = I('post.email');
                    $data['password'] = I('post.up-password');
                    $data['createTime'] = date('Y-m-d');
                    $id = $user->data($data)->add();
                    if(!$id){
                        $this->error('非法字符');
                    }
                    session('userid',$id);
                    $this->success('success');
                    
                }
            }else{
                $this->error('非法请求');
            }

        }else{
             $this->error('非法请求');
         }
}

    function get_hash(){
        $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()+-';
        $random = $chars[mt_rand(0,73)].$chars[mt_rand(0,73)].$chars[mt_rand(0,73)].$chars[mt_rand(0,73)].$chars[mt_rand(0,73)];//Random 5 times
        $content = uniqid().$random;  // 类似 5443e09c27bf4aB4uT
        return sha1($content); 
    }
}