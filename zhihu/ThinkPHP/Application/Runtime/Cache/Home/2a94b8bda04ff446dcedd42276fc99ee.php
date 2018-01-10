<?php if (!defined('THINK_PATH')) exit();?><div role="navigation" class="zu-top" data-za-module="TopNavBar" >
<div class="zg-wrap modal-shifting clearfix" id="zh-top-inner">
<a href="/" class="zu-top-link-logo" id="zh-top-link-logo" data-za-c="view_home" data-za-a="visit_home" data-za-l="top_navigation_zhihu_logo">知乎</a>

<div class="top-nav-profile">
<a href="<?php echo U('/index.php/People/index');?>" class="zu-top-nav-userinfo " id=":0" role="button" aria-haspopup="true" aria-activedescendant="">
<span class="name"><?php echo ($nickname); ?></span>
<img class="Avatar" src="<?php echo ($photo); ?>"  alt="头像">
<span id="zh-top-nav-new-pm" class="zg-noti-number zu-top-nav-pm-count" style="visibility:hidden" data-count="0">

</span>
</a>
<ul class="top-nav-dropdown" id="top-nav-profile-dropdown" >
<li>
<a href="<?php echo U('/index.php/People/index');?>" tabindex="-1" id=":1">
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

<!-- 搜索结果 -->


<div id="zg-top-nav" class="zu-top-nav">
<ul class="zu-top-nav-ul zg-clear">

<li class="zu-top-nav-li current" id="zh-top-nav-home">
<a class="zu-top-nav-link" href="/" id="zh-top-link-home" data-za-c="view_home" data-za-a="visit_home" data-za-l="top_navigation_home">首页</a>
</li>



<li class="top-nav-topic-selector zu-top-nav-li " id="zh-top-nav-topic">
<a class="zu-top-nav-link" href="<?php echo U('/index.php/Topic/index');?>" id="top-nav-dd-topic">话题</a>
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
	<title>首页 - 知乎</title>
	<link rel="stylesheet" href="/Public/css/main.css">
	<link rel="stylesheet" href="/Public/css/comment.css">
	<link rel="stylesheet" href="/Public/css/alert.css">
	<script src="/Public/js/jquery.js"></script>
	<script src="/Public/js/vue.js"></script>
    <script src="/Public/js/qrcode.js"></script>
    <script src="/Public/js/share.js"></script>
	<script src="/Public/js/alert.js"></script>
	<script src="/Public/js/index.js"></script>
	<script src="/Public/js/main.js"></script>
</head>

<body>
	<div id="main">
		<div class="zg-wrap zu-main clearfix " style="top: 50px;">
			<!-- 左 S-->
			<div class="zu-main-content">
				<div class="zu-main-content-inner">
					
					<div class="zg-section" id="zh-home-list-title">
						<i class="zg-icon zg-icon-feedlist"></i> 最新动态
						<input type="hidden" id="is-topstory">
						
					</div>
					<div class="zu-main-feed-con navigable">
						<!-- list -->
						<div id="js-home-feed-list" class="zh-general-list topstory clearfix">
							<my-list @showalll="showall" v-for="(item, index) in list" v-bind:item="item" v-bind:key="item['id']">
							</my-list>
							<a @click="morelist('',$event)" class="zg-btn-white zu-button-more">更多</a>
                        	
						</div>
					</div>
				</div>
			</div>
			<!-- 右 E -->
			<!-- 右 S-->
			<div class="zu-main-sidebar">
				<!-- <button @click="add()" >testadd</button> -->
				<div class="zm-side-section">
					<div class="zm-side-section-inner">
						<div class="zm-side-nav-group">
							<div class="zm-side-nav">
								<li class="zm-side-nav-li">
										<a class="zm-side-nav-link" href="javascript:;" @click="subnewques" >
										<i class="sprite-home-question-off" style="display: inline-block;
										    vertical-align: middle;
										    margin-right: 2px;" ></i>提问
										</a>
										</li>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- 右 E -->
		</div>
<div class="modal-dialog-bg" style="display:none;" v-show="showmodel" aria-hidden="true" style="opacity: 0.5;width: 811px;height: 2845px;"></div>
<div class="modal-wrapper" style="display:none;" v-show="showmodel">
    <div tabindex="0" role="dialog" aria-labelledby=":2f" class="modal-dialog absolute-position" style="width: 550px;">
        <div class="modal-dialog-title"><span id=":2f" role="heading" class="modal-dialog-title-text">提问</span><span role="button" tabindex="0" aria-label="Close" @click="hidemodel" class="modal-dialog-title-close"></span></div>
        <div class="modal-dialog-content">
            <div class="zh-add-question-form">
                <form class="js-add-question-form" style="display: block;">
                    <div class="zg-section-big clearfix">
                        <div id="zm-modal-dialog-info-wrapper"></div>
                        <div class="zg-form-text-input add-question-title-form" style="position: relative;">
                            <textarea v-model="newquesname" title="在这里输入问题" id="zh-question-suggest-title-content"  placeholder="写下你的问题" role="combobox"  autocomplete="off" class="zg-editor-input zu-seamless-input-origin-element" style="height: 22px;"></textarea>
                        </div> <span id="js-title-length-err-msg" class="title-length-err-msg zg-right" style="display: none;">问题字数太少了吧</span></div>
                    <div class="zg-section-big">
                        <div class="zm-modal-dialog-warnmsg-wrapper" style="display: none; position: relative;">
                            <div class="zm-modal-dialog-warnmsg zm-modal-dialog-guide-warn-message zg-r5px"></div> <a name="close" title="关闭" href="javascript:;" class="zu-global-notify-close" style="display: none;">x</a> <span class="zm-modal-dialog-guide-title-msg"></span></div>
                        <div class="add-question-section-title"><span class="zg-right extra-editor-toolbar hidden-phone"><div role="button" @click="selectimg" title="添加图片" class="js-editor-add-pic goog-inline-block goog-link-button" style="user-select: none;">
                        <input type="file"  id="theimg" hidden="hidden" name="subquesimg">
                        <i class="tr-inline-icon tr-image"></i></div></span> 问题说明（可选）：
                            <span id="zh-question-form-detail-err"></span></div>
                        <div id="zh-question-suggest-detail-container" class="zm-editable-status-editing">
                            <div  class="zm-editable-content" style="display: none;"></div>
                            <div class="zm-editable-editor-wrap no-toolbar">
                                <div class="zm-editable-editor-outer">
                                    <div class="zm-editable-editor-field-wrap">
                                        <div id="quesdesc"  g_editable="true" role="textbox" contenteditable="true" class="zm-editable-editor-field-element editable">
                                            <br>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="zm-command"><a name="cancel" href="javascript:;" class="zm-command-cancel">取消</a><a name="save" href="javascript:;" class="zg-r3px zg-btn-blue">保存</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="zm-add-question-form-topic-wrap">
                        <div class="add-question-section-title"><span class="zg-gray zg-right hidden-phone">话题越精准，越容易让相关领域专业人士看到你的问题</span> 选择话题：
                            <span id="zh-question-form-tag-err"></span></div>
                        <div id="zh-question-suggest-topic-container" class="zm-tag-editor zg-section">
                            <div id="zh-question-suggest-autocomplete-container">
								<ul class="zm-topic-cat-main js-topic-cat-main clearfix" @click="selecttopic('',$event)">
								    <li data-topicid="5" class="zm-topic-cat-item"><a href="javascript:;">旅行</a></li>
								    <li data-topicid="1"  class="zm-topic-cat-item"><a href="javascript:;">健身</a></li>
								    <li data-topicid="3"  class="zm-topic-cat-item"><a href="javascript:;">电影</a></li>
								    <li data-topicid="9"  class="zm-topic-cat-item"><a href="javascript:;">互联网</a></li>
								    <li  data-topicid="4"  class="zm-topic-cat-item"><a href="javascript:;">文学</a></li>
								    <li  data-topicid="7"  class="zm-topic-cat-item"><a href="javascript:;">古典音乐</a></li>
								    <li  data-topicid="6"  class="zm-topic-cat-item"><a href="javascript:;">美食</a></li>
								    <li  data-topicid="8"  class="zm-topic-cat-item"><a href="javascript:;">流行音乐</a></li>
								    <li data-topicid="2"  class="zm-topic-cat-item"><a href="javascript:;">篮球</a></li>
								    <li  data-topicid="10"  class="zm-topic-cat-item"><a href="javascript:;">编程</a></li>
								</ul>

                            </div>
                        </div>
                    </div>
                    <div class="zm-command">
                        <label class="zm-question-form-hide-in-about-question-el zg-left">
                            <input type="checkbox" value="1" v-model="checked" class="zg-addq-isanon">匿名
                        </label> <a href="javascript:;" name="cancel" @click="hidemodel" class="zm-command-cancel">取消</a> 
                        <a href="javascript:;" @click="sub" name="addq" class="zg-r5px zu-question-form-add zg-btn-blue">发布</a> 
                        <a name="jumpq" class="zg-r5px zg-btn-blue zu-question-form-jump" style="display: none;">查看问题</a></div>
                </form>
            </div>
        </div>
        <div class="modal-dialog-buttons" style="display: none;"></div>
    </div>
</div>

	</div><!-- main -->
</body>
<script type="text/javascript">
var DATA = <?php echo ($arr); ?>;
</script>

<style type="text/css">
	.zm-side-nav-link:hover {
    color: #259;
    background: #eff6fa;
    border-radius: 3px;
    text-decoration: none;
}
.modal-wrapper {
    display: -webkit-flex;
    display: -ms-flexbox;
     display: -webkit-box; 
     display: flex; 
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    -webkit-box-pack: center;
    justify-content: center;
    -webkit-align-items: flex-start;
    -ms-flex-align: start;
    -webkit-box-align: start;
    align-items: flex-start;
}
.modal-dialog {
    position: static;
    margin-top: 14%;
    margin-top: 14vh;
}
</style>
</html>