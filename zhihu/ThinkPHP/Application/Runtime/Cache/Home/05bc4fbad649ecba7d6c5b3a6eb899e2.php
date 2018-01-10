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
    <title>编辑个人资料 - 知乎</title>
    <link rel="stylesheet" href="/Public/css/people.css">
    <link rel="stylesheet" href="/Public/css/alert.css">
    <link rel="stylesheet" href="/Public/css/editpic.css">
    <script src="/Public/js/jquery.js"></script>
    <script src="/Public/js/editpic.js"></script>
    <script src="/Public/js/vue.js"></script>
    <script src="/Public/js/upload.js"></script>
    <script src="/Public/js/people_edit.js"></script>
    <script src="/Public/js/alert.js"></script>
    <script type="text/javascript">
    /*function UpladFile() {
        var fileObj = document.getElementById("file").files[0]; // js 获取文件对象
        var FileController = "/index.php/Rcv/index"; // 接收上传文件的后台地址 
        var form = new FormData();
        form.append("author", "hooyes"); // 可以增加表单数据
        form.append("file", fileObj); // 文件对象

        var xhr = new XMLHttpRequest();
        xhr.open("post", FileController, true);
        xhr.onload = function() {};
        xhr.send(form);
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                console.log(xhr.responseText);
            }
        };
    }*/
    </script>
</head>

<body>
    <main id="edit" class="App-main">
        <div class="ProfileEdit">
            <div class="Card">
                <div class="ProfileHeader-header">
                    <div class="UserCoverEditor">
                        <div class="UserCoverGuide">
                            <div class="UserCoverGuide-inner">
                            </div>
                        </div>
                        <div class="UserCover">
                        </div>
                    </div>
                </div>
                <div class="ProfileHeader-main">
                    <!-- 头像上传 -->
                    <div class="UserAvatarEditor ProfileHeader-avatar">
                        <div class="UserAvatar">
                        <img id="myphoto" class="Avatar Avatar--large UserAvatar-inner" src="<?php echo ($data["photo"]); ?>" style="width: 160px; height: 160px;"></div>
                        <div class="Mask UserAvatarEditor-mask" @click="photo()">
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
                        <input type="file" ref="fileinput" id="file" accept="image/png,image/jpeg" style="display: none;" onchange="editpic()" >
                    </div>
                    <div class="ProfileHeader-content">
                        
                        <!-- shangchuan -->
                        <div class="ProfileHeader-contentHead">
                            <h1 class="ProfileHeader-title"><span class="ProfileHeader-name"><?php echo ($data["nickName"]); ?></span></h1>
                            <div class="ProfileHeader-expandActions ProfileEdit-expandActions">
                                <a class="Button Button--plain" type="button" href="<?php echo U('/index.php/People/index');?>">
                                    返回我的主页
                                    <svg viewBox="0 0 10 6" class="Icon ProfileEdit-arrowIcon Icon--arrow" width="10" height="16" aria-hidden="true" style="height: 16px; width: 10px;">
                                        <title></title>
                                        <g>
                                            <path d="M8.716.217L5.002 4 1.285.218C.99-.072.514-.072.22.218c-.294.29-.294.76 0 1.052l4.25 4.512c.292.29.77.29 1.063 0L9.78 1.27c.293-.29.293-.76 0-1.052-.295-.29-.77-.29-1.063 0z"></path>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="ProfileEdit-fields">
                            <form class="Field" @mouseover="over('1')" @mouseout="out('1')">
                                <h3 class="Field-label">性别</h3>
                                <div class="Field-content">
                                    <div v-if="sexShow">
                                    <span class="Field-text" ref="sex">
                                    {{<?php echo ($data["gender"]); ?> == male ? '男':'女'}}</span>
                                        <button class="Button ModifyButton Field-modify Button--link" v-bind:class="{'Field-modify-hidden':rela[1]}" type="button" @click="show('1')">
                                            <svg viewBox="0 0 12 12" class="Icon ModifyButton-icon Icon--modify" width="12" height="16" aria-hidden="true" style="height: 16px; width: 12px;">
                                                <title></title>
                                                <g>
                                                    <path d="M.423 10.32L0 12l1.667-.474 1.55-.44-2.4-2.33-.394 1.564zM10.153.233c-.327-.318-.85-.31-1.17.018l-.793.817 2.49 2.414.792-.814c.318-.328.312-.852-.017-1.17l-1.3-1.263zM3.84 10.536L1.35 8.122l6.265-6.46 2.49 2.414-6.265 6.46z" fill-rule="evenodd"></path>
                                                </g>
                                            </svg>
                                            修改
                                        </button>
                                    </div>
                                    <div v-else>
                                        <input type="radio" value="男" name="gender"> 男
                                        <input type="radio" value="女" name="gender" style="margin-left: 30px;"> 女
                                        <div class="ButtonGroup">
                                            <button @click="edit('1')" class="Button Button--primary Button--blue" type="button">保存</button>
                                            <button class="Button" type="button" @click="hide('1')">取消</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <form class="Field" @mouseover="over('2')" @mouseout="out('2')">
                                <h3 class="Field-label">一句话介绍</h3>
                                <div class="Field-content">
                                    <div v-if="autoShow"><span class="Field-text" ref="autotext"><span class="RichText"><?php echo ($data["autograph"]); ?></span></span>
                                        <button class="Button ModifyButton Field-modify  Button--link" v-bind:class="{'Field-modify-hidden':rela[2]}" type="button" @click="show('2')">
                                            <svg viewBox="0 0 12 12" class="Icon ModifyButton-icon Icon--modify" width="12" height="16" aria-hidden="true" style="height: 16px; width: 12px;">
                                                <title></title>
                                                <g>
                                                    <path d="M.423 10.32L0 12l1.667-.474 1.55-.44-2.4-2.33-.394 1.564zM10.153.233c-.327-.318-.85-.31-1.17.018l-.793.817 2.49 2.414.792-.814c.318-.328.312-.852-.017-1.17l-1.3-1.263zM3.84 10.536L1.35 8.122l6.265-6.46 2.49 2.414-6.265 6.46z" fill-rule="evenodd"></path>
                                                </g>
                                            </svg>
                                            修改
                                        </button>
                                    </div>
                                    <div v-else>
                                        <div class="HeadlineField-input Input-wrapper ">
                                            <input value="<?php echo ($data["autograph"]); ?>" class="Input" @focus="focus('1',$event)" @blur="blur('1',$event)" ref="auto" >
                                        </div>
                                        <div class="HeadlineField-actions">
                                            <div class="ButtonGroup HeadlineField-buttonGroup">
                                                <button class="Button Button--primary Button--blue" type="button" @click="edit('2')" >保存</button>
                                                <button class="Button" type="button" @click="hide('2')">取消</button>
                                            </div><span class="MaxLength"></span></div>
                                    </div>
                                </div>
                            </form>
                            <form class="Field" ref="coform">
                                <h3 class="Field-label">职业经历</h3>
                                <div class="Field-content">
                                    <div class="AddButton" v-if="coShow">
                                        <button class="Button Button--link" type="button" @click="show('4')">
                                            <svg viewBox="0 0 18 18" class="Icon AddButton-icon Icon--add Icon--left" width="20" height="20" aria-hidden="true" style="height: 20px; width: 20px;">
                                                <title></title>
                                                <g>
                                                    <g fill-rule="evenodd">
                                                        <path d="M6.035 16.433c-.875-.35-1.678-.848-2.383-1.482-.205-.184-.52-.167-.707.04-.185.204-.167.52.038.705.794.714 1.696 1.274 2.682 1.668.06.023.123.035.185.035.198 0 .386-.12.464-.314.103-.258-.022-.55-.28-.65zM1.097 10.247C1.054 9.975.8 9.79.525 9.83c-.273.043-.46.3-.417.57.154.98.467 1.925.93 2.803.09.17.264.267.443.267.08 0 .16-.02.234-.058.244-.13.338-.432.208-.676-.41-.78-.69-1.618-.825-2.49zM9.106 1c.95.014 1.878.19 2.76.528.058.022.118.033.178.033.2 0 .39-.12.467-.32.1-.258-.03-.547-.287-.646C11.233.214 10.19.014 9.12 0h-.007c-.273 0-.496.22-.5.493-.003.278.218.504.493.508zM3.73 2.83c.108 0 .218-.034.31-.107.693-.55 1.465-.976 2.295-1.27.26-.09.397-.377.305-.637C6.548.556 6.263.42 6.002.51 5.068.84 4.2 1.323 3.42 1.94c-.217.17-.254.485-.083.702.1.124.245.19.393.19zM2.01 4.136c-.236-.144-.544-.07-.688.165-.557.91-.945 1.9-1.15 2.944-.055.27.12.534.392.587.033.008.065.01.098.01.234 0 .443-.164.49-.402.184-.927.528-1.807 1.023-2.614.144-.236.07-.543-.165-.688zM14.927 2.228c-.207-.183-.523-.162-.705.047-.182.208-.16.523.047.706.664.583 1.224 1.265 1.665 2.028.092.16.26.25.433.25.085 0 .17-.02.25-.067.24-.137.32-.443.183-.682-.495-.86-1.125-1.626-1.873-2.28zM17.294 7.07c-.27.047-.454.306-.408.578.076.44.114.896.114 1.35 0 .493-.046.984-.133 1.46-.05.27.13.532.402.582.03.005.06.008.09.008.236 0 .446-.17.49-.41.1-.534.148-1.085.15-1.638 0-.513-.044-1.025-.13-1.52-.045-.273-.303-.457-.576-.41zM16.566 12.91c-.235-.14-.544-.065-.686.174-.452.76-1.02 1.434-1.692 2.005-.21.18-.235.494-.057.704.1.116.24.176.382.176.115 0 .23-.04.324-.12.754-.643 1.395-1.4 1.903-2.254.142-.238.064-.544-.174-.686zM11.766 16.51c-.884.325-1.814.49-2.772.49l-.208-.002c-.283-.02-.505.21-.513.487-.007.275.21.506.487.513L9 18c1.07 0 2.116-.186 3.11-.553.26-.095.393-.383.297-.642-.095-.26-.385-.392-.64-.295zM9.8 8.2V6.3c0-.442-.358-.8-.8-.8-.442 0-.8.358-.8.8v1.9H6.3c-.442 0-.8.358-.8.8 0 .442.358.8.8.8h1.9v1.9c0 .442.358.8.8.8.442 0 .8-.358.8-.8V9.8h1.9c.442 0 .8-.358.8-.8 0-.442-.358-.8-.8-.8H9.8z"></path>
                                                    </g>
                                                </g>
                                            </svg>
                                            修改职业经历
                                        </button>
                                    </div>
                                    <div v-else>
                                        <div class="Field-autoComplete">
                                            <div class="Popover">
                                                <div class="Field-input Input-wrapper">
                                                    <input value="" @focus="focus('',$event)" @blur="blur('',$event)" class="Input" placeholder="公司或组织名称">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="Field-autoComplete">
                                            <div class="Popover">
                                                <div class="Field-input Input-wrapper">
                                                    <input value="" @focus="focus('',$event)" @blur="blur('',$event)" class="Input" placeholder="你的职位（选填）">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ButtonGroup ButtonGroup--right" style="display: inline-flex;">
                                            <button class="Button Button--primary Button--blue" type="button" @click="edit(4)" >保存</button>
                                            <button class="Button" @click="hide('4')" type="button">取消</button>
                                        </div>
                                    </div>
                                    <div class="Field-list">
                                        <div class="Field-card" ref="co" @mouseover="showbac(1)" @mouseout="hidebac(1)">
                                            <span ref="coedit"><?php echo ($data["company"]); ?><span class="Field-dot">·</span><?php echo ($data["position"]); ?></span><button v-show="co_del" type="button" @click="del(1,$event)" class="Field-delete">x</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <form class="Field" ref="edform">
                                <h3 class="Field-label">教育经历</h3>
                                <div class="Field-content">
                                    <div class="AddButton" v-if="edShow">
                                        <button class="Button Button--link" type="button" @click="show('5')">
                                            <svg viewBox="0 0 18 18" class="Icon AddButton-icon Icon--add Icon--left" width="20" height="20" aria-hidden="true" style="height: 20px; width: 20px;">
                                                <title></title>
                                                <g>
                                                    <g fill-rule="evenodd">
                                                        <path d="M6.035 16.433c-.875-.35-1.678-.848-2.383-1.482-.205-.184-.52-.167-.707.04-.185.204-.167.52.038.705.794.714 1.696 1.274 2.682 1.668.06.023.123.035.185.035.198 0 .386-.12.464-.314.103-.258-.022-.55-.28-.65zM1.097 10.247C1.054 9.975.8 9.79.525 9.83c-.273.043-.46.3-.417.57.154.98.467 1.925.93 2.803.09.17.264.267.443.267.08 0 .16-.02.234-.058.244-.13.338-.432.208-.676-.41-.78-.69-1.618-.825-2.49zM9.106 1c.95.014 1.878.19 2.76.528.058.022.118.033.178.033.2 0 .39-.12.467-.32.1-.258-.03-.547-.287-.646C11.233.214 10.19.014 9.12 0h-.007c-.273 0-.496.22-.5.493-.003.278.218.504.493.508zM3.73 2.83c.108 0 .218-.034.31-.107.693-.55 1.465-.976 2.295-1.27.26-.09.397-.377.305-.637C6.548.556 6.263.42 6.002.51 5.068.84 4.2 1.323 3.42 1.94c-.217.17-.254.485-.083.702.1.124.245.19.393.19zM2.01 4.136c-.236-.144-.544-.07-.688.165-.557.91-.945 1.9-1.15 2.944-.055.27.12.534.392.587.033.008.065.01.098.01.234 0 .443-.164.49-.402.184-.927.528-1.807 1.023-2.614.144-.236.07-.543-.165-.688zM14.927 2.228c-.207-.183-.523-.162-.705.047-.182.208-.16.523.047.706.664.583 1.224 1.265 1.665 2.028.092.16.26.25.433.25.085 0 .17-.02.25-.067.24-.137.32-.443.183-.682-.495-.86-1.125-1.626-1.873-2.28zM17.294 7.07c-.27.047-.454.306-.408.578.076.44.114.896.114 1.35 0 .493-.046.984-.133 1.46-.05.27.13.532.402.582.03.005.06.008.09.008.236 0 .446-.17.49-.41.1-.534.148-1.085.15-1.638 0-.513-.044-1.025-.13-1.52-.045-.273-.303-.457-.576-.41zM16.566 12.91c-.235-.14-.544-.065-.686.174-.452.76-1.02 1.434-1.692 2.005-.21.18-.235.494-.057.704.1.116.24.176.382.176.115 0 .23-.04.324-.12.754-.643 1.395-1.4 1.903-2.254.142-.238.064-.544-.174-.686zM11.766 16.51c-.884.325-1.814.49-2.772.49l-.208-.002c-.283-.02-.505.21-.513.487-.007.275.21.506.487.513L9 18c1.07 0 2.116-.186 3.11-.553.26-.095.393-.383.297-.642-.095-.26-.385-.392-.64-.295zM9.8 8.2V6.3c0-.442-.358-.8-.8-.8-.442 0-.8.358-.8.8v1.9H6.3c-.442 0-.8.358-.8.8 0 .442.358.8.8.8h1.9v1.9c0 .442.358.8.8.8.442 0 .8-.358.8-.8V9.8h1.9c.442 0 .8-.358.8-.8 0-.442-.358-.8-.8-.8H9.8z"></path>
                                                    </g>
                                                </g>
                                            </svg>
                                            修改教育经历
                                        </button>
                                    </div>
                                    <div v-else>
                                        <div class="Field-autoComplete">
                                            <div class="Popover">
                                                <div class="Field-input Input-wrapper">
                                                    <input value="" @focus="focus('',$event)" @blur="blur('',$event)" class="Input" placeholder="学校或教育机构名">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="Field-autoComplete">
                                            <div class="Popover">
                                                <div class="Field-input Input-wrapper">
                                                    <input value="" @focus="focus('',$event)" @blur="blur('',$event)" class="Input" placeholder="专业方向（选填）">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ButtonGroup ButtonGroup--right" style="display: inline-flex;">
                                            <button class="Button Button--primary Button--blue" type="button" @click="edit('5')">保存</button>
                                            <button class="Button" @click="hide('5')" type="button">取消</button>
                                        </div>
                                    </div>
                                    <div class="Field-list" @mouseover="showbac(2)" @mouseout="hidebac(2)">
                                        <div class="Field-card" ref="ed">
                                        <span ref="ededit"><?php echo ($data["school"]); ?><span class="Field-dot">·</span><?php echo ($data["major"]); ?></span>
                                            <button v-show="ed_del" type="button" @click="del(2,$event)" class="Field-delete">x</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <form class="Field" @mouseover="over('3')" @mouseout="out('3')">
                                <h3 class="Field-label">个人简介</h3>
                                <div class="Field-content">
                                    <div v-if="introShow" class="DescriptionField-content" ><span class="Field-text"><span class="RichText" ref="introtext"><?php echo ($data["introduce"]); ?></span></span>
                                        <button @click="show('3')" class="Button ModifyButton Field-modify  Button--link" v-bind:class="{'Field-modify-hidden':rela[3]}" type="button">
                                            <svg viewBox="0 0 12 12" class="Icon ModifyButton-icon Icon--modify" width="12" height="16" aria-hidden="true" style="height: 16px; width: 12px;">
                                                <title></title>
                                                <g>
                                                    <path d="M.423 10.32L0 12l1.667-.474 1.55-.44-2.4-2.33-.394 1.564zM10.153.233c-.327-.318-.85-.31-1.17.018l-.793.817 2.49 2.414.792-.814c.318-.328.312-.852-.017-1.17l-1.3-1.263zM3.84 10.536L1.35 8.122l6.265-6.46 2.49 2.414-6.265 6.46z" fill-rule="evenodd"></path>
                                                </g>
                                            </svg>
                                            修改
                                        </button>
                                    </div>
                                    <div v-else>
                                        <textarea rows="3" class="DescriptionField-input TextArea" ref="intro"><?php echo ($data["introduce"]); ?></textarea>
                                        <div class="DescriptionField-actions">
                                            <div class="ButtonGroup DescriptionField-buttonGroup">
                                                <button class="Button Button--primary Button--blue" type="button" @click="edit('3')" >保存</button>
                                                <button class="Button" @click="hide('3')" type="button">取消</button>
                                            </div><span class="MaxLength">200字</span></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div class="container" style="display: none">
        <div class="content">
            
            <div class="component" style="width: 500px;">
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
</body>

</html>