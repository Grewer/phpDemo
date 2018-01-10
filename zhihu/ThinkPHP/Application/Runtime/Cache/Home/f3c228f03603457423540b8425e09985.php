<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/Public/css/signbackground.css">
    <link rel="stylesheet" href="/Public/css/sign.css">
  	<script src="/Public/js/jquery.js"></script>
</head>

<body>
    <div id="particles-js"></div>

    <script src='/Public/js/particles.min.js'></script>
    <script src="/Public/js/signbackground.js"></script>
    <title>登录或注册</title>
<script type="text/javascript" src="/Public/js/sign.js"></script>
<div class="index-main">
    <div class="index-main-body">
        <div class="index-header">
            <h1 style="
    margin-left: 94px;
" class="logo hide-text">知乎</h1>
            <h2 class="subtitle">与世界分享你的知识、经验和见解</h2>
        </div>
        <div class="desk-front sign-flow clearfix sign-flow-simple" style="position: absolute;">
            <div class="index-tab-navs">
                <div class="navs-slider" data-active-index="0">
                    <a href="#signup" class="active">注册</a>
                    <a href="#signin" class="">登录</a>
                    <span class="navs-slider-bar"></span>
                </div>
            </div>
            <!-- 登录 start-->
            <div class="view view-signin" data-za-module="SignInForm" style="display: none;">
                <form id="signin">
                    <input type="hidden" name="_xsrf" value="38a2d2deda7e68348a01eb125dfe8ced">
                    <div class="group-inputs">
                        <div class="account input-wrapper">
                            <input type="text" name="account" aria-label="手机号或邮箱" placeholder="手机号或邮箱" >
                        </div>
                        <div class="verification input-wrapper">
                            <input type="password" name="password" aria-label="密码" placeholder="密码" >
                            
                        </div>
                        <div class="Captcha input-wrapper" data-type="cn" data-za-module="Captcha">
                            <p class="top15 captcha" style="margin-top: -10px;text-align:center;margin-left: -10px;margin-right: -10px;">
                                <input name="verify" width="50%" height="50" style="margin-bottom: 5px;border-bottom: 1px solid #e8e8e8;" class="captcha-text" placeholder="验证码" type="text"  >
                                <img id="checkpic" style="width: 33%;margin: auto;" onclick="changing();" src="<?php echo U('/index.php/Home/Sign/verify_c','','');?>" />
                            </p>
                        </div>
                    </div>
                    <div class="button-wrapper command">
                        <button class="sign-button submit" id="submit_signin" type="button">登录</button>
                    </div>
                    <div class="signin-misc-wrapper clearfix">
                        <!-- <button type="button" class="signin-switch-button">手机验证码登录</button> -->
                        <!-- <a class="unable-login" href="#">无法登录？</a> -->
                    </div>
                    <!-- <div class="social-signup-wrapper" data-za-module="SNSSignIn">
                        <span class="name js-toggle-sns-buttons">社交帐号登录</span>
                        <div class="sns-buttons">
                            <a title="微信登录" class="js-bindwechat" href="#"><i class="sprite-index-icon-wechat"></i></a>
                            <a title="微博登录" class="js-bindweibo" href="#"><i class="sprite-index-icon-weibo"></i></a>
                            <a title="QQ 登录" class="js-bindqq" href="#"><i class="sprite-index-icon-qq"></i></a>
                        </div>
                    </div> -->
                </form>
                <div class="QRCode">
                    <div class="QRCode-card">
                        <div class="QRCode-image"></div>
                        <div class="sprite-index-icon-arrow"></div>
                    </div>
                </div>
            </div>
            <!-- 登录 end -->
            <!-- 注册  start-->
            <div class="view view-signup selected" data-za-module="SignUpForm" style="display: block;">
                <form class="zu-side-login-box" id="signup" autocomplete="off"  novalidate="novalidate">
                    <input type="password" hidden="">
                    <input type="hidden" name="_xsrf" value="<?php echo ($_xsrf); ?>">
                    <div class="group-inputs">
                        <div class="name input-wrapper">
                            <input required="" type="text" name="fullname" aria-label="姓名" placeholder="姓名">
                        </div>
                        <div class="email input-wrapper">
                            <input required="" type="text" class="account" name="email" aria-label="邮箱" placeholder="邮箱">
                        </div>
                        <div class="input-wrapper">
                            <input required="" type="password" name="up-password" aria-label="密码" placeholder="密码（不少于 6 位）" autocomplete="off">
                        </div>
                        <div class="input-wrapper captcha-module" data-type="en">
                            <!-- <input id="captcha" name="captcha" placeholder="验证码" required="" data-rule-required="true" data-msg-required="请填写验证码">
                            <div class="captcha-container">
                                <img class="js-refreshCaptcha captcha" width="120" height="30" data-tooltip="s$t$看不清楚？换一张" alt="验证码">
                            </div> -->
                        </div>
                    </div>
                    <div class="button-wrapper command">
                        <button class="sign-button submit" type="button" id="submit_signup" >注册知乎</button>
                    </div>
                </form>
                <p class="agreement-tip">点击「注册」按钮，即代表你同意<a href="/terms" target="_blank">《知乎协议》</a></p>
                <div class="QRCode">
                    <div class="QRCode-card">
                        <div class="QRCode-image"></div>
                        <div class="sprite-index-icon-arrow"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>