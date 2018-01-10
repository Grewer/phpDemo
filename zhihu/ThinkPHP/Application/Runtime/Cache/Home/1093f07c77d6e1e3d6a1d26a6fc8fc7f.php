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
    <title>话题动态 - 知乎</title>
    <link rel="stylesheet" href="/Public/css/main.css">
    <link rel="stylesheet" href="/Public/css/alert.css">
    <link rel="stylesheet" href="/Public/css/comment.css">
    <script src="/Public/js/jquery.js"></script>
    <script src="/Public/js/main.js"></script>
    <script src="/Public/js/vue.js"></script>
    <script src="/Public/js/alert.js"></script>
    <script src="/Public/js/topic_loading.js"></script>
</head>

<body class="zhi js-topic-feed-page topic-feed-page">
    <div id="main" class="zg-wrap zu-main clearfix" data-tid="<?php echo ($first["topicId"]); ?>">
        <div class="zu-main-content">
            <div class="zu-main-content-inner">
                <div class="topic-feed-title">
                    <i class="zg-icon zg-icon-feedlist"></i>
                    <span>已关注的话题动态</span>
                    
                </div>
                <ul class="zm-topic-cat-main js-topic-cat-main clearfix" ref="attentopiclist">
                    <?php if(is_array($attentopic)): foreach($attentopic as $key=>$vo): ?><li class="zm-topic-cat-item" data-topicid="<?php echo ($vo["topicId"]); ?>"><a @click="load(<?php echo ($vo["topicId"]); ?>,$event)" href="/index.php/Topic/sometopic/topicid/<?php echo ($vo["topicId"]); ?>"><?php echo ($vo["topicName"]); ?></a></li><?php endforeach; endif; ?>
                </ul>
                <div class="topic-title clearfix js-topic-title" style="display: block;" ref="topictext">
                    <a href="/index.php/Topic/topic/id/<?php echo ($first["topicId"]); ?>" target="_blank" class="zg-left js-topic-title-avatar">
                        <img class="Avatar Avatar--m js-topic-avatar" src="<?php echo ($first["photo"]); ?>">
                    </a>
                    <a href="/index.php/Topic/topic/id/<?php echo ($first["topicId"]); ?>" target="_blank" class="zg-left topic-title-name"><?php echo ($first["topicName"]); ?></a>
                    <div class="feed-switcher js-feed-switcher">
                        <a href="javascript:;" class="current" data-feed-type="smart_feed">热门排序</a> | <a href="javascript:;" data-feed-type="timeline_feed">时间排序</a>
                    </div>
                </div>
                <!-- queslist -->
                <div class="zm-topic-list-container">
                    <div class="zu-top-feed-list" id="zh-topic-feed-list">
                        <div class="zh-general-list clearfix" style="display: block;" ref="ques_user">
                            <?php if(is_array($queslist)): $i = 0; $__LIST__ = $queslist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="feed-item feed-item-hook folding" user-id="<?php echo ($vo["userId"]); ?>" answer-id="<?php echo ($vo["id"]); ?>" is-tog="1" @mouseenter="show('',$event)" @mouseleave="hide('',$event)" ques-id="<?php echo ($vo["quesId"]); ?>" >
                                    <div class="feed-main"  >
                                        <div class="feed-content">
                                            <h2><a class="question_link" href="/index.php/Ques/<?php echo ($vo["quesId"]); ?>" target="_blank" >
                                            <?php echo ($vo["quesName"]); ?>
                                        </a></h2>
                                            <div class="expandable entry-body">
                                                <link itemprop="url" href="">
                                                <div class="zm-item-vote">
                                                    <a class="zm-item-vote-count js-expand js-vote-count" href="javascript:;" data-bind-votecount=""><?php echo ($vo["praiseNumb"]); ?></a>
                                                </div>
                                                <div class="zm-votebar">
                                                    <button class="up" aria-pressed="false" title="赞同"@click="praise('',$event)" >
                                                        <i class="icon vote-arrow"></i>
                                                        <span class="count"><?php echo ($vo["praiseNumb"]); ?></span>
                                                        <span class="label sr-only">赞同</span>
                                                    </button>
                                                    <button class="down" aria-pressed="false" title="反对，不会显示你的姓名" @click="against('',$event)" >
                                                        <i class="icon vote-arrow"></i>
                                                        <span class="label sr-only">反对，不会显示你的姓名</span>
                                                    </button>
                                                </div>
                                                <div class="zm-item-answer-author-info">
                                                    <span class="summary-wrapper">
                                                    <span class="author-link-line">
                                                        <a class="author-link" target="_blank" href="">nichen</a>
                                                    </span>
                                                    <span title="yijuhua" class="bio">
                                                        yijuhua
                                                    </span>
                                                    </span>
                                                </div>
                                                <div class="zm-item-vote-info">
                                                    <span class="voters text"><a href="#" class="more text"><span class="js-voteCount"><?php echo ($vo["praiseNumb"]); ?> </span>&nbsp;人赞同</a>
                                                    </span>
                                                </div>
                                                <div class="zm-item-rich-text expandable js-collapse-body">
                                                    <textarea hidden="" class="content">
                                                        <?php echo ($vo["answerContent"]); ?>
                                                    </textarea>
                                                    <div class="zh-summary summary clearfix">
                                                        <!-- <img src="" class="origin_image inline-img zh-lightbox-thumb" > -->
                                                        <?php echo (subtext($vo["answerContent"],120)); ?>
                                                        <a href="#"  @click="showall('',$event)" class="toggle-expand">显示全部</a>
                                                    </div>
                                                    <p class="visible-expanded"><a class="answer-date-link meta-item"  href="#">编辑于 <?php echo ($vo["createTime"]); ?></a></p>
                                                </div>
                                            </div>
                                            <div class="zm-item-meta feed-meta">
                                                <div class="zm-item-meta answer-actions clearfix js-contentActions">
                                                    <div class="zm-meta-panel" is-con='0'>
                                                        <a @click="attenques('',$event)" class="follow-link zg-follow meta-item" href="javascript:;"><i class="z-icon-follow"></i>关注问题</a>
                                                        <a href="#" name="addcomment" class="meta-item toggle-comment js-toggleCommentBox" @click="showcomment('',$event)" data-comnum="<?php echo ($vo["commentNumb"]); ?>">
                                                            <i class="z-icon-comment"></i><?php echo (checkcomment($vo["commentNumb"])); ?></a>
                                                        <a href="#" class="meta-item zu-autohide js-thank" tog data-thanked="false" @click="thank('',$event)" ><i class="z-icon-thank"></i>感谢</a>
                                                        <a href="#" tog class="meta-item zu-autohide js-share goog-inline-block goog-menu-button" style="user-select: none;">
                                                            <div class="goog-inline-block goog-menu-button-outer-box">
                                                                <div class="goog-inline-block goog-menu-button-inner-box">
                                                                    <div class="goog-inline-block goog-menu-button-caption"><i class="z-icon-share"></i>分享</div>
                                                                    <div class="goog-inline-block goog-menu-button-dropdown">&nbsp;</div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a href="#" tog class="meta-item zu-autohide js-collect"><i class="z-icon-collect"></i>收藏</a>
                                                        <span tog class="zg-bull zu-autohide">•</span>
                                                        <a  tog href="#" class="meta-item zu-autohide js-noHelp">没有帮助</a>
                                                        <span tog class="zg-bull zu-autohide">•</span>
                                                        <a tog href="#" class="meta-item zu-autohide js-report">举报</a>
                                                        <span tog class="zg-bull">•</span>
                                                        <a tog href="/terms#sec-licence-1" target="_blank" class="meta-item copyright">
                                                        作者保留权利
                                                    </a>
                                                        <button class="meta-item item-collapse js-collapse" @click = "hideans('',$event)">
                                                            <i class="z-icon-fold"></i>收起
                                                        </button>
                                                    </div>
                                                    

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                        <a aria-role="button" class="zg-btn-white zu-button-more">更多</a>
                        <a href="javascript:;" id="zh-load-more" data-method="next" class="zg-btn-white zg-r3px zu-button-more" style="display:none">更多</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- 右侧边框 -->
        <div class="zu-main-sidebar">
            <div class="topics-plaza">
                <a target="_blank" href="<?php echo U('/index.php/Topics/index');?>" class="zg-btn-blue">
                        进入话题广场
                    </a>
                <a target="_blank" href="<?php echo U('/index.php/Topics/index');?>" class="text">
                        来这里发现更多有趣话题
                    </a>
            </div>
        </div>
    </div>
</body>

<script type="text/javascript">
    var queslist=<?php echo ($queslist_g); ?>;
</script>
</html>