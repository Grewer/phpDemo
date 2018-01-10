<?php if (!defined('THINK_PATH')) exit();?><div  class="zu-top"  >
<div class="zg-wrap modal-shifting clearfix" id="zh-top-inner">
<a href="/" class="zu-top-link-logo" id="zh-top-link-logo">知乎</a>

<div class="top-nav-profile">
<a href="<?php echo U('/index.php/People/index');?>" class="zu-top-nav-userinfo " >
<span class="name"><?php echo ($data["nickName"]); ?></span>
<img class="Avatar" src="<?php echo ($data["photo"]); ?>"  alt="头像">
<span id="zh-top-nav-new-pm" class="zg-noti-number zu-top-nav-pm-count" style="visibility:hidden" data-count="0">

</span>
</a>
<ul class="top-nav-dropdown" id="top-nav-profile-dropdown" >
<li>
<a href="<?php echo U('/index.php/People/index');?>">
<i class="zg-icon zg-icon-dd-home"></i>我的主页
</a>
</li>



<li>
<a href="<?php echo U('/index.php/Sign/logout');?>" tabindex="-1" id=":4">
<i class="zg-icon zg-icon-dd-logout"></i>退出
</a>
</li>
</ul>

</div>




<div role="search" id="zh-top-search" class="zu-top-search">
<form method="GET" action="<?php echo U('/index.php/Index/search');?>" id="zh-top-search-form" class="zu-top-search-form">
<input type="hidden" name="type" value="question">
<label for="keywords" class="hide-text">知乎搜索</label><input type="text" class="zu-top-search-input" id="keywords" name="keywords" autocomplete="off" value="" maxlength="100" placeholder="搜索你感兴趣的内容..." role="combobox" aria-autocomplete="list">
<button type="submit" class="zu-top-search-button"><span class="hide-text">搜索</span><span class="sprite-global-icon-magnifier-dark"></span></button>
</form>
</div>



<div id="zg-top-nav" class="zu-top-nav">
<ul class="zu-top-nav-ul zg-clear">

<li class="zu-top-nav-li " id="zh-top-nav-home">
<a class="zu-top-nav-link" href="/" >首页</a>
</li>



<li class="top-nav-topic-selector zu-top-nav-li current" >
<a class="zu-top-nav-link" href="<?php echo U('/index.php/Topic/index');?>">话题</a>
</li>



</ul>
<div class="zu-top-nav-live zu-noti7-popup zg-r5px no-hovercard" id="zh-top-nav-live-new" role="popup" tabindex="0">
<div class="zu-top-nav-live-inner zg-r5px">
<div class="zu-top-live-icon">&nbsp;</div>
<div class="zu-home-noti-inner" id="zh-top-nav-live-new-inner">
<div class="zm-noti7-popup-tab-container clearfix" tabindex="0" role="tablist">
<button class="zm-noti7-popup-tab-item message" role="tab">
<span class="icon">消息</span>
</button>
<button class="zm-noti7-popup-tab-item user" role="tab">
<span class="icon">用户</span>
</button>
<button class="zm-noti7-popup-tab-item thanks" role="tab">
<span class="icon">赞同和感谢</span>
</button>
</div>
</div>
<div class="zm-noti7-frame-border top"></div>
<div class="zm-noti7-frame">
<div class="zm-noti7-content message zh-scroller" style="position: relative; overflow: hidden;"><div class="zh-scroller-inner" style="height: 100%; width: 150%; overflow: auto;"><div class="zh-scroller-content" style="position: static; display: block; visibility: visible; overflow: hidden; width: 315px; min-height: 100%;">
<div class="zm-noti7-content-inner">
<div class="zm-noti7-content-body">
<div class="zm-noti7-popup-loading">
<span class="noti-spinner-loading"></span>
</div>
</div>
</div>
</div></div><div class="zh-scroller-bar-container" style="position: absolute; right: 1px; top: 0px; height: 98px; width: 6px; background: rgb(102, 102, 102); border: 1px solid rgb(68, 68, 68); opacity: 0; cursor: default; border-radius: 2px; user-select: none;"><div style="user-select: none;"></div></div><div class="zh-scroller-bar" style="position: absolute; right: 2px; top: 2px; opacity: 0.5; background: rgb(0, 0, 0); width: 6px; border-radius: 3px; cursor: default; user-select: none; display: none;"></div></div>
<div class="zm-noti7-content user zh-scroller" style="display: none; position: relative; overflow: hidden;"><div class="zh-scroller-inner" style="height: 100%; width: 150%; overflow: auto;"><div class="zh-scroller-content" style="position: static; display: block; visibility: visible; overflow: hidden; width: 315px; min-height: 100%;">
<div class="zm-noti7-content-inner">
<div class="zm-noti7-content-body">
<div class="zm-noti7-popup-loading">
<span class="noti-spinner-loading"></span>
</div>
</div>
</div>
</div></div><div class="zh-scroller-bar-container" style="position: absolute; right: 1px; top: 0px; height: 98px; width: 6px; background: rgb(102, 102, 102); border: 1px solid rgb(68, 68, 68); opacity: 0; cursor: default; border-radius: 2px; user-select: none;"><div style="user-select: none;"></div></div><div class="zh-scroller-bar" style="position: absolute; right: 2px; top: 2px; opacity: 0.5; background: rgb(0, 0, 0); width: 6px; border-radius: 3px; cursor: default; user-select: none; display: none;"></div></div>
<div class="zm-noti7-content thanks zh-scroller" style="display: none; position: relative; overflow: hidden;"><div class="zh-scroller-inner" style="height: 100%; width: 150%; overflow: auto;"><div class="zh-scroller-content" style="position: static; display: block; visibility: visible; overflow: hidden; width: 315px; min-height: 100%;">
<div class="zm-noti7-content-inner">
<div class="zm-noti7-content-body">
<div class="zm-noti7-popup-loading">
<span class="noti-spinner-loading"></span>
</div>
</div>
</div>
</div></div><div class="zh-scroller-bar-container" style="position: absolute; right: 1px; top: 0px; height: 98px; width: 6px; background: rgb(102, 102, 102); border: 1px solid rgb(68, 68, 68); opacity: 0; cursor: default; border-radius: 2px; user-select: none;"><div style="user-select: none;"></div></div><div class="zh-scroller-bar" style="position: absolute; right: 2px; top: 2px; opacity: 0.5; background: rgb(0, 0, 0); width: 6px; border-radius: 3px; cursor: default; user-select: none; display: none;"></div></div>
</div>
<div class="zm-noti7-frame-border bottom"></div>
<div class="zm-noti7-popup-footer">
<a href="/notifications" class="zm-noti7-popup-footer-all zg-right">查看全部 »</a>
<a href="/settings/notification" class="zm-noti7-popup-footer-set" title="通知设置"><i class="zg-icon zg-icon-settings"></i></a>
</div>
</div>
</div>

</div>

</div>
</div>


<!DOCTYPE html>
<html>

<head>
    <title>话题广场 - 知乎</title>
    <link rel="stylesheet" href="/Public/css/main.css">
    <link rel="stylesheet" href="/Public/css/alert.css">
    <script src="/Public/js/jquery.js"></script>
    <script src="/Public/js/main.js"></script>
    <script src="/Public/js/vue.js"></script>
    <script src="/Public/js/alert.js"></script>
    <script src="/Public/js/topics.js"></script>
</head>

<body class="zhi">
    <div id="main" class="zg-wrap zu-main clearfix ">
        <div class="zu-main-content">
            <div class="zu-main-content-inner">
                <div class="zm-topic-cat-page">
                    <div class="zm-topic-cat-title">
                        <a href="/people/Grewer/topics" class="zg-link-gray zg-right">
                            <span>已关注 <?php echo ($concernTopicNumb); ?> 个话题</span>
                        </a>
                        <h2><i class="zg-icon zg-icon-topic-square"></i>话题广场</h2>
                    </div>
                    <ul class="zm-topic-cat-main clearfix" ref="topiclist">
                        <?php if(is_array($alltopic)): foreach($alltopic as $key=>$vo): ?><li class="zm-topic-cat-item"><a @click="load(<?php echo ($vo["topicClassId"]); ?>,$event)" href="#"><?php echo ($vo["topicClassName"]); ?></a></li><?php endforeach; endif; ?>
                    </ul>
                    <div class="zm-topic-cat-sub">
                        <div class="zh-general-list clearfix" ref="topictext">
                            <?php if(is_array($first)): $i = 0; $__LIST__ = $first;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$votwo): $mod = ($i % 2 );++$i; if(($mod) == "0"): ?><div class="item">
                                    <div class="blk">
                                        <a target="_blank" href="/index.php/Topic/topic/id/<?php echo ($votwo["topicId"]); ?>">
                                            <img src="<?php echo ($votwo["photo"]); ?>" alt="<?php echo ($votwo["topicName"]); ?>">
                                            <strong><?php echo ($votwo["topicName"]); ?></strong>
                                        </a>
                                        <p><?php echo ($votwo["topicDescribe"]); ?></p>
                                        <a  href="javascript:;" class="follow meta-item zg-follow" @click="atten(<?php echo ($votwo["topicId"]); ?>)"  ><i class="z-icon-follow" ></i>关注</a>
                                    </div>
                                </div><?php endif; endforeach; endif; else: echo "" ;endif; ?>

                            <?php if(is_array($first)): $i = 0; $__LIST__ = $first;if( count($__LIST__)==0 ) : echo "暂无数据" ;else: foreach($__LIST__ as $key=>$vothree): $mod = ($i % 2 );++$i; if(($mod) == "1"): ?><div class="item even">
                                    <div class="blk">
                                        <a target="_blank" href="/index.php/Topic/topic/id/<?php echo ($vothree["topicId"]); ?>">
                                            <img src="<?php echo ($vothree["photo"]); ?>" alt="<?php echo ($vothree["topicName"]); ?>">
                                            <strong><?php echo ($vothree["topicName"]); ?></strong>
                                        </a>
                                        <p><?php echo ($vothree["topicDescribe"]); ?></p>
                                        <a  href="javascript:;" class="follow meta-item zg-follow"  @click="atten(<?php echo ($vothree["topicId"]); ?>)" ><i class="z-icon-follow"  ></i>关注</a>
                                    </div>
                                </div><?php endif; endforeach; endif; else: echo "暂无数据" ;endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 热门话题 -->
        <div class="zu-main-sidebar" >
            <div class="zm-side-section explore-side-section">
                <div class="zm-side-section-inner">
                    <div class="section-title">
                        <h3>热门话题</h3>
                    </div>
                    <ul class="list hot-topics">
                        <li class="clearfix">
                            <a target="_blank" class="avatar-link" href="/index.php/Topic/topic/id/1" ><img src="/public/img/topic/Fitness.jpg"  class="avatar 40"></a>
                            <div class="content">
                                <a href="/index.php/Topic/topic/id/1" target="_blank" >健身</a>
                                <div class="meta">
                                    <span>101 人关注</span>
                                </div>
                            </div>
                            <div class="bottom">
                                <a class="question_link" href="/index.php/Ques/1" target="_blank">
                                坚持跑步到底有什么改变？
                                </a>
                            </div>
                        </li>
                        <li class="clearfix">
                            <a target="_blank" class="avatar-link" href="/index.php/Topic/topic/id/1" ><img src="/public/img/topic/Fitness.jpg"  class="avatar 40"></a>
                            <div class="content">
                                <a href="/index.php/Topic/topic/id/1" target="_blank" >健身</a>
                                <div class="meta">
                                    <span>200 人关注</span>
                                </div>
                            </div>
                            <div class="bottom">
                                <a class="question_link" href="/index.php/Ques/2" target="_blank">
                                是什么支撑你跑完五公里？
                                </a>
                            </div>                        
                        </li>
                        <li class="clearfix">
                            <a target="_blank" class="avatar-link" href="/index.php/Topic/topic/id/2" data-hovercard="t$b$19553101"><img src="/public/img/topic/basketball.jpg"  class="avatar 40"></a>
                            <div class="content">
                                <a href="/index.php/Topic/topic/id/2" target="_blank" data-hovercard="t$b$19553101">篮球</a>
                                <div class="meta">
                                    <span>120 人关注</span>
                                </div>
                            </div>
                            <div class="bottom">
                                <a class="question_link" href="/index.php/Ques/3" target="_blank">
2016-2017 赛季 NBA 常规赛 MVP 到底应该给谁？
</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>

</html>