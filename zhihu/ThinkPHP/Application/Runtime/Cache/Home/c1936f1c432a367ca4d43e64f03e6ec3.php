<?php if (!defined('THINK_PATH')) exit();?><script type="text/javascript">
        window.onscroll=function(){
    var sl=-Math.max(document.body.scrollLeft,document.documentElement.scrollLeft);
    document.getElementById('fixed').style.left=sl+'px';

};
</script>
<div>
<header id="fixed" class="Sticky AppHeader is-fixed" data-za-module="TopNavBar" style=" top: 0px;width: 100%">
    
    <div class="AppHeader-inner">
        <a href="/" aria-label="知乎">
            <!-- <svg viewBox="0 0 200 91" class="Icon Icon--logo" width="64" height="30" aria-hidden="true" style="fill: rgb(15, 136, 235); height: 30px; width: 64px;">
                <title></title>
                <g>
                    <path d="M53.29 80.035l7.32.002 2.41 8.24 13.128-8.24h15.477v-67.98H53.29v67.978zm7.79-60.598h22.756v53.22h-8.73l-8.718 5.473-1.587-5.46-3.72-.012v-53.22zM46.818 43.162h-16.35c.545-8.467.687-16.12.687-22.955h15.987s.615-7.05-2.68-6.97H16.807c1.09-4.1 2.46-8.332 4.1-12.708 0 0-7.523 0-10.085 6.74-1.06 2.78-4.128 13.48-9.592 24.41 1.84-.2 7.927-.37 11.512-6.94.66-1.84.785-2.08 1.605-4.54h9.02c0 3.28-.374 20.9-.526 22.95H6.51c-3.67 0-4.863 7.38-4.863 7.38H22.14C20.765 66.11 13.385 79.24 0 89.62c6.403 1.828 12.784-.29 15.937-3.094 0 0 7.182-6.53 11.12-21.64L43.92 85.18s2.473-8.402-.388-12.496c-2.37-2.788-8.768-10.33-11.496-13.064l-4.57 3.627c1.363-4.368 2.183-8.61 2.46-12.71H49.19s-.027-7.38-2.372-7.38zm128.752-.502c6.51-8.013 14.054-18.302 14.054-18.302s-5.827-4.625-8.556-1.27c-1.874 2.548-11.51 15.063-11.51 15.063l6.012 4.51zm-46.903-18.462c-2.814-2.577-8.096.667-8.096.667s12.35 17.2 12.85 17.953l6.08-4.29s-8.02-11.752-10.83-14.33zM199.99 46.5c-6.18 0-40.908.292-40.953.292v-31.56c1.503 0 3.882-.124 7.14-.376 12.773-.753 21.914-1.25 27.427-1.504 0 0 3.817-8.496-.185-10.45-.96-.37-7.24 1.43-7.24 1.43s-51.63 5.153-72.61 5.64c.5 2.756 2.38 5.336 4.93 6.11 4.16 1.087 7.09.53 15.36.277 7.76-.5 13.65-.76 17.66-.76v31.19h-41.71s.88 6.97 7.97 7.14h33.73v22.16c0 4.364-3.498 6.87-7.65 6.6-4.4.034-8.15-.36-13.027-.566.623 1.24 1.977 4.496 6.035 6.824 3.087 1.502 5.054 2.053 8.13 2.053 9.237 0 14.27-5.4 14.027-14.16V53.93h38.235c3.026 0 2.72-7.432 2.72-7.432z" fill-rule="evenodd"></path>
                </g>
            </svg> -->
            <img src="/Public/img/logo@2x.png">
        </a>
        <nav role="navigation" class="AppHeader-nav" style="width: auto">
        <a class="AppHeader-navItem" href="/">首页</a>
        <a class="AppHeader-navItem" href="/index.php/Topic">话题</a>
        </nav>
        <div class="SearchBar" role="search">
            <div class="SearchBar-toolWrapper" style="vertical-align: middle;
    
    margin-top: 11px;">
                <form class="SearchBar-tool" method="GET" action="<?php echo U('/index.php/Index/search');?>" id="zh-top-search-form">
                    <div>
                        <div class="Popover">
                            <div class="SearchBar-input Input-wrapper Input-wrapper--grey">
                                <input type="hidden" name="type" value="question">
                                <input type="text" maxlength="100" value="" autocomplete="off" role="combobox" aria-expanded="false"  name="keywords" aria-autocomplete="list" aria-activedescendant="AutoComplete-87951-11234--1" id="Popover-87953-30927-toggle" aria-haspopup="true" aria-owns="Popover-87953-30927-content" class="Input" placeholder="搜索你感兴趣的内容…">
                            </div>
                            <!-- react-empty: 24 -->
                        </div>
                    </div>
                    <button class="Button SearchBar-searchIcon Button--plain" aria-label="搜索" type="button" >
                        <svg viewBox="0 0 16 16" class="Icon Icon--search" width="16" height="16" aria-hidden="true" style="height: 16px; width: 16px;">
                            <title></title>
                            <g>
                                <path d="M12.054 10.864c.887-1.14 1.42-2.57 1.42-4.127C13.474 3.017 10.457 0 6.737 0S0 3.016 0 6.737c0 3.72 3.016 6.737 6.737 6.737 1.556 0 2.985-.533 4.127-1.42l3.103 3.104c.765.46 1.705-.37 1.19-1.19l-3.103-3.104zm-5.317.925c-2.786 0-5.053-2.267-5.053-5.053S3.95 1.684 6.737 1.684 11.79 3.95 11.79 6.737 9.522 11.79 6.736 11.79z"></path>
                            </g>
                        </svg>
                    </button>
                    <div class="SearchBar-iconDecorator"></div>
                </form>
            </div>
           
            <!-- react-empty: 33 -->
        </div>
        <div class="AppHeader-userInfo">
             <div class="AppHeader-profile">
                <div class="Popover">
                    <button class="Button AppHeader-profileEntry Button--plain" type="button" id="Popover-88071-50055-toggle" aria-haspopup="true" aria-expanded="false" aria-owns="Popover-88071-50055-content"><a href="/index.php/People/index"><img class="Avatar" src="<?php echo ($data["photo"]); ?>"  style="width: 30px; height: 30px;"></a></button>
                    <!-- react-empty: 368 -->
                </div>
            </div>
        </div>
    </div>
    <div class="PageHeader">
        <div data-reactroot="" class="ProfileMain-header">
            <div class="ProfileMain-avatar"><img class="Avatar Avatar--medium" src="https://pic2.zhimg.com/ea62a551fee14a24c867368307ed8195_xs.jpg" srcset="https://pic2.zhimg.com/ea62a551fee14a24c867368307ed8195_l.jpg 2x" style="width: 44px; height: 44px;"></div>
            <ul role="tablist" class="Tabs ProfileMain-tabs">
                <li role="tab" class="Tabs-item Tabs-item--noMeta" aria-controls="Profile-activities"><a class="Tabs-link" href="/people/zhang-666/activities">动态</a></li>
                <li role="tab" class="Tabs-item" aria-controls="Profile-answers">
                    <a class="Tabs-link is-active" href="/people/zhang-666/answers">
                        <!-- react-text: 9 -->回答
                        <!-- /react-text --><span class="Tabs-meta">11</span></a>
                </li>
                <li role="tab" class="Tabs-item" aria-controls="Profile-posts">
                    <a class="Tabs-link" href="/people/zhang-666/pins">
                        <!-- react-text: 13 -->分享
                        <!-- /react-text --><span class="Tabs-meta">0</span></a>
                </li>
                <li role="tab" class="Tabs-item" aria-controls="Profile-asks">
                    <a class="Tabs-link" href="/people/zhang-666/asks">
                        <!-- react-text: 17 -->提问
                        <!-- /react-text --><span class="Tabs-meta">0</span></a>
                </li>
                <li role="tab" class="Tabs-item" aria-controls="Profile-collections">
                    <a class="Tabs-link" href="/people/zhang-666/collections">
                        <!-- react-text: 21 -->收藏
                        <!-- /react-text --><span class="Tabs-meta">7</span></a>
                </li>
                <li role="tab" class="Tabs-item Tabs-item--noMeta" aria-controls="Profile-following"><a class="Tabs-link" href="/people/zhang-666/following">关注</a></li>
            </ul>
            <div class="ProfileButtonGroup ProfileMain-buttons">
                <button class="Button Button--blue" type="button">
                    <!-- react-text: 27 -->编辑
                    <!-- /react-text -->
                    <!-- react-text: 28 -->个人
                    <!-- /react-text -->
                    <!-- react-text: 29 -->资料
                    <!-- /react-text -->
                </button>
            </div>
        </div>
    </div>
</header>
<div class="Sticky--holder" style="position: relative; top: 0px; right: 0px; bottom: 0px; left: 0px; display: block; float: none; margin: 0px; height: 61px;"></div>
</div>


<!DOCTYPE html>
<html>

<head>
    <title><?php echo ($thispeople["nickName"]); ?> - 知乎</title>
    <link rel="stylesheet" href="/Public/css/people.css">
    <link rel="stylesheet" href="/Public/css/alert.css">
    <link rel="stylesheet" href="/Public/css/editpic.css">
    <script src="/Public/js/jquery.js"></script>
    <script src="/Public/js/vue.js"></script>
    <script src="/Public/js/editpic.js"></script>
    <script src="/Public/js/upload.js"></script>
    <script src="/Public/js/people.js"></script>
    <script src="/Public/js/alert.js"></script>
</head>

<body>
<div class="container" style="display: none">
        <div class="content">
            
            <div class="component" style="width: 500px;z-index: 9999;">
                <div class="overlay">
                    <div class="overlay-inner">
                    </div>
                </div>
                
                <img id="readcrop" class="resize-image" src="/Public/img/logo.main.png" alt="image for resizing">
                <button class="btn-crop js-crop">剪切
                </button>
                <button class="btn-cancel" onclick="cancel()">取消
                </button>
            </div>
        </div>
        <!-- /content -->
    </div>
    <main class="App-main">
        <div>
            <div>
                <!-- info -->
                <div id="ProfileHeader" class="ProfileHeader" data-za-module="Unknown">
                    <div class="Card">
                        <div class="ProfileHeader-userCover">
                            <div class="UserCoverEditor">
                                <div class="UserCoverGuide">
                                    <div class="UserCoverGuide-inner">
                                        <div class="UserCoverGuide-buttonContainer">
                                        </div>
                                    </div>
                                </div>
                                <div class="UserCover UserCover--colorBlock">
                                </div>
                            </div>
                        </div>
                        <div class="ProfileHeader-wrapper">
                            <div class="ProfileHeader-main">
                                <div class="UserAvatarEditor ProfileHeader-avatar" style="top: -25px;" >
                                    <div class="UserAvatar">
                                    <img id="myphoto"  class="Avatar Avatar--large UserAvatar-inner" src="<?php echo ($thispeople["photo"]); ?>" style="width: 160px; height: 160px;"></div>
                                    <div ref="photoshow" class="Mask UserAvatarEditor-mask Mask-hidden">
                                        <div class="Mask-mask Mask-mask--black UserAvatarEditor-maskInner"></div>
                                        <div class="Mask-content">
                                            <svg viewBox="0 0 20 16" class="Icon UserAvatarEditor-cameraIcon Icon--camera" width="30" height="27" aria-hidden="true" style="height: 27px; width: 30px;">
                                                <title></title>
                                                <g>
                                                    <path d="M18.094 2H15s-1-2-2-2H7C6 0 5 2 5 2H2C0 2 0 3.967 0 3.967V14c0 2 2.036 2 2.036 2H17c3 0 3-1.983 3-1.983V4c0-2-1.906-2-1.906-2zM10 12c-1.933 0-3.5-1.567-3.5-3.5S8.067 5 10 5s3.5 1.567 3.5 3.5S11.933 12 10 12zm0 1.5c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm7.5-8c-.552 0-1-.448-1-1s.448-1 1-1 1 .448 1 1-.448 1-1 1z" fill-rule="evenodd"></path>
                                                </g>
                                            </svg>
                                            <div class="UserAvatarEditor-maskInnerText">修改我的头像</div>
                                        </div>
                                    </div>
                                    <input type="file" ref="fileinput" id="file" accept="image/png,image/jpeg" style="display: none;" onchange="editpic()">
                                </div>
                                <div class="ProfileHeader-content">
                                    <div class="ProfileHeader-contentHead">
                                        <h1 class="ProfileHeader-title"><span class="ProfileHeader-name"><?php echo ($thispeople["nickName"]); ?>
                                        </span><span class="RichText ProfileHeader-headline"><?php echo ($thispeople["autograph"]); ?></span><!-- 一句话简介 --></h1>
                                    </div>
                                    <div class="ProfileHeader-contentBody" ref="change" style="height: 52px;">
                                        <span>

                                    <!-- info -->
                                    <div class="ProfileHeader-info"  v-if="willShow">
                                    <div class="ProfileHeader-infoItem">
                                    <div class="ProfileHeader-iconWrapper">
                                    <svg viewBox="0 0 20 18" class="Icon Icon--company" width="13" height="16"  style="height: 16px; width: 13px;">
                                    <title></title>
                                    <g><path d="M15 3.998v-2C14.86.89 13.98 0 13 0H7C5.822 0 5.016.89 5 2v2l-3.02-.002c-1.098 0-1.97.89-1.97 2L0 16c0 1.11.882 2 1.98 2h16.033c1.1 0 1.98-.89 1.987-2V6c-.007-1.113-.884-2.002-1.982-2.002H15zM7 4V2.5s-.004-.5.5-.5h5c.5 0 .5.5.5.5V4H7z"></path></g></svg></div><!-- react-text: 103 --><?php echo ($thispeople["position"]); ?>
                                    <!-- 职位 --></div>
                                    <div class="ProfileHeader-infoItem"><div class="ProfileHeader-iconWrapper"><svg width="14" height="16" viewBox="0 0 14 14" class="Icon Icon--male" aria-hidden="true" style="height: 16px; width: 14px;"><title></title><g><path d="M3.025 10.64c-1.367-1.366-1.367-3.582 0-4.95 1.367-1.366 3.583-1.366 4.95 0 1.367 1.368 1.367 3.584 0 4.95-1.367 1.368-3.583 1.368-4.95 0zm10.122-9.368c-.002-.414-.34-.75-.753-.753L8.322 0c-.413-.002-.746.33-.744.744.002.413.338.75.75.752l2.128.313c-.95.953-1.832 1.828-1.832 1.828-2.14-1.482-5.104-1.27-7.013.64-2.147 2.147-2.147 5.63 0 7.777 2.15 2.148 5.63 2.148 7.78 0 1.908-1.91 2.12-4.873.636-7.016l1.842-1.82.303 2.116c.003.414.34.75.753.753.413.002.746-.332.744-.745l-.52-4.073z" fill-rule="evenodd"></path></g></svg></div></div>
                                    </div>

                                    
                                     <!-- detail -->
                                    <div class="ProfileHeader-detail" v-else>
                                    <div class="ProfileHeader-detailItem"><span class="ProfileHeader-detailLabel">学校</span>
                                        <div class="ProfileHeader-detailValue"><span><?php echo ($thispeople["school"]); ?>·<?php echo ($thispeople["major"]); ?>
                                        </span></div>
                                    </div>
                                    <div class="ProfileHeader-detailItem"><span class="ProfileHeader-detailLabel">所在公司</span>
                                        <div class="ProfileHeader-detailValue"><?php echo ($thispeople["company"]); ?>·<?php echo ($thispeople["position"]); ?>
                                        </div>
                                    </div>
                                    <div class="ProfileHeader-detailItem"><span class="ProfileHeader-detailLabel">个人简介</span>
                                        <div class="RichText ProfileHeader-detailValue"><?php echo ($thispeople["introduce"]); ?>
                                        </div>
                                    </div>
                                </div>
                                </span>
                            </div>
                            <div class="ProfileHeader-contentFooter">
                                <button class="Button ProfileHeader-expandButton Button--plain" type="button" @click="fn()">
                                    <svg viewBox="0 0 10 6" class="Icon ProfileHeader-arrowIcon Icon--arrow" width="10" height="16" aria-hidden="true" style="height: 16px; width: 10px;">
                                        <title></title>
                                        <g>
                                            <path d="M8.716.217L5.002 4 1.285.218C.99-.072.514-.072.22.218c-.294.29-.294.76 0 1.052l4.25 4.512c.292.29.77.29 1.063 0L9.78 1.27c.293-.29.293-.76 0-1.052-.295-.29-.77-.29-1.063 0z"></path>
                                        </g>
                                    </svg>
                                    查看详细资料
                                </button>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 问答 -->
        <div class="Profile-main">
            <div class="Profile-mainColumn">
                <div class="Card ProfileMain" id="ProfileMain">
                    <div class="ProfileMain-header">
                        <ul role="tablist" class="Tabs ProfileMain-tabs">
                            
                            <li role="tab" class="Tabs-item" aria-controls="Profile-answers">
                                <a class="Tabs-link is-active" href="/index.php/people/person/personid/<?php echo ($thispeople["id"]); ?>">
                                    回答
                                    <span class="Tabs-meta"><?php echo ($ansnum); ?></span></a>
                            </li>
                           
                            <li role="tab" class="Tabs-item" aria-controls="Profile-asks">
                                <a class="Tabs-link" href="/index.php/people/person/personid/<?php echo ($thispeople["id"]); ?>/type/ques">
                                    提问
                                    <span class="Tabs-meta"><?php echo ($quesnum); ?></span></a>
                            </li>
                            
                            <li role="tab" class="Tabs-item Tabs-item--noMeta" aria-controls="Profile-following"><a class="Tabs-link" href="/index.php/people/person/personid/<?php echo ($thispeople["id"]); ?>/type/atten">关注</a></li>
                        </ul>
                    </div>
                    <div>
                        <div>
                            <div class="Sticky"></div>
                        </div>
                    </div>
                    <div class="List" id="Profile-activities">
                        <div class="List-header">
                            <h4 class="List-headerText"><span>我的回答</span></h4>
                            <div class="List-headerOptions"></div>
                        </div>
                        <div class="">
                            <!-- s list -->

                            <component v-bind:is="type" v-for="(item, index) in list" v-bind:item="item">

                                <div class="ContentItem-meta">
                                    <div class="AnswerItem-meta">
                                        <div class="AuthorInfo"><span class="UserLink AuthorInfo-avatarWrapper"><div class="Popover"><div id="Popover-73986-83444-toggle" aria-haspopup="true" aria-expanded="false" aria-owns="Popover-73986-83444-content"><a href="/index.php/people/person/personid/<?php echo ($thispeople["id"]); ?>" class="UserLink-link"><img width="38" height="38" src="<?php echo ($thispeople["photo"]); ?>"  class="Avatar AuthorInfo-avatar"></a></div></div></span>
                                        <div class="AuthorInfo-content">
                                            <div class="AuthorInfo-title">
                                            <div class="AuthorInfo-name"><span class="UserLink"><div class="Popover"><div id="Popover-73988-42102-toggle" aria-haspopup="true" aria-expanded="false" aria-owns="Popover-73988-42102-content"><a href="/index.php/people/person/personid/<?php echo ($thispeople["id"]); ?>" class="UserLink-link"><?php echo ($thispeople["nickName"]); ?></a></div></div></span></div>
                                            </div>
                                            <div class="RichText AuthorInfo-badge"><?php echo ($thispeople["autograph"]); ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                                
                            </component>
                            

            <!-- e list -->
            <div></div>
        </div>
        </div>
        </div>
        </div>
        <div class="Profile-sideColumn" data-za-module="RightSideBar" style="margin-left: 10px;">
            <div class="Card">
                <div class="Card-header Profile-sideColumnTitle">
                    <div class="Card-headerText">个人成就</div>
                </div>
                <div class="Profile-sideColumnItems">
                    <div class="Profile-sideColumnItem">
                        <div class="IconGraf">
                            <div class="IconGraf-iconWrapper">
                                <svg viewBox="0 0 20 18" class="Icon IconGraf-icon Icon--like" width="16" height="16" aria-hidden="true" style="height: 16px; width: 16px;">
                                    <title></title>
                                    <g>
                                        <path d="M.718 7.024c-.718 0-.718.63-.718.63l.996 9.693c0 .703.718.65.718.65h1.45c.916 0 .847-.65.847-.65V7.793c-.09-.88-.853-.79-.846-.79l-2.446.02zm11.727-.05S13.2 5.396 13.6 2.89C13.765.03 11.55-.6 10.565.53c-1.014 1.232 0 2.056-4.45 5.83C5.336 6.965 5 8.01 5 8.997v6.998c-.016 1.104.49 2 1.99 2h7.586c2.097 0 2.86-1.416 2.86-1.416s2.178-5.402 2.346-5.91c1.047-3.516-1.95-3.704-1.95-3.704l-5.387.007z"></path>
                                    </g>
                                </svg>
                            </div>
                            获得
                            <?php echo ($praisenum); ?>
                            次赞同
                        </div>
                        <div class="Profile-sideColumnItemValue">
                            获得 <?php echo ($thanknum); ?> 次感谢
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="Profile-lightList">
            <a class="Profile-lightItem" href="/index.php/people/person/personid/<?php echo ($thispeople["id"]); ?>/type/atten"><span class="Profile-lightItemName">关注的话题</span><span class="Profile-lightItemValue"><?php echo ($attennum); ?></span></a>
            
        </div>
        </div>
        </div>
        </div>
    </main>
</body>
<script type="text/javascript">
    var list = <?php echo ($list); ?>;
    var type = '<?php echo ($type); ?>';
</script>

</html>