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
    <title><?php echo ($quesdata["quesName"]); ?></title>
    <link rel="stylesheet" href="/Public/css/people.css">
    <link rel="stylesheet" href="/Public/css/editpic.css">
    <link rel="stylesheet" href="/Public/css/newmain.css">
    <link rel="stylesheet" href="/Public/css/comment.css">
    <link rel="stylesheet" href="/Public/css/alert.css">
    <style type="text/css">
        .zg-btn-blue{
            background: #0f88eb;
            color: #fff;
            right: 24px;
            bottom: 12px;
            margin-bottom: 2px;
            margin-left: 16px;
                    border: 1px solid #0f88eb;display: inline-block;
            padding: 0 16px;
            font-size: 14px;
            line-height: 32px;
            text-align: center;
            cursor: pointer;
            border-radius: 3px;
        }
    </style>
    <script src="/Public/js/jquery.js"></script>
    <script src="/Public/js/vue.js"></script>
    <script src="/Public/js/alert.js"></script>
    <script type="text/javascript" src="/Public/js/ques.js"></script>
</head>

<body class="Entry-body Body--isAppleDevice">
    <div id="root" style="top: -13px;position: relative;" data-quesid="<?php echo ($quesdata["id"]); ?>">
        <div>
            <main class="App-main" data-id="<?php echo ($data["id"]); ?>" data-name="<?php echo ($data["nickName"]); ?>" data-img="<?php echo ($data["photo"]); ?>" data-auto="<?php echo ($data["autograph"]); ?>" >
                <div>
                    <div class="QuestionHeader">
                        <div class="QuestionHeader-content" style="height:auto!important">
                            <div class="QuestionHeader-main">
                                <div class="QuestionHeader-topics">
                                    <div class="Tag QuestionTopic"><span class="Tag-content"><a class="TopicLink" href="/index.php/Topic/topic/id/<?php echo ($topicdata["id"]); ?>"><div class="Popover"><div id="Popover-83265-24453-toggle"><?php echo ($topicdata["topicName"]); ?></div></div></a></span></div>
                                </div>
                                <h1 class="QuestionHeader-title"><?php echo ($quesdata["quesName"]); ?></h1>
                                <div class="QuestionHeader-detail">
                                    <div class="QuestionRichText QuestionRichText--collapsed">
                                        <div>
                                            <span class="RichText">
                                            <img  style="display: none" v-show="isshowquesimg('<?php echo ($quesdata["photo"]); ?>')" src="<?php echo ($quesdata["photo"]); ?>" data-rawwidth="912"  class="origin_image zh-lightbox-thumb" width="912" ><?php echo ($quesdata["quesDescribe"]); ?>
                                            </span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="QuestionHeader-side">
                                <div class="QuestionHeader-follow-status">
                                    <div class="QuestionFollowStatus">
                                        <div class="NumberBoard QuestionFollowStatus-counts">
                                            <button class="Button NumberBoard-item Button--plain" type="button">
                                                <div class="NumberBoard-name">关注者</div>
                                                <div class="NumberBoard-value"><?php echo ($quesdata["attentionNumb"]); ?></div>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="QuestionHeader-footer" style="height: 34px;">
                            <div class="QuestionHeader-footer-inner">
                                <div class="QuestionHeader-main QuestionHeader-footer-main">
                                    <div class="QuestionHeader-actions">
                                        <button class="Button Button--plain" type="button" @click = "showquescom('',$event)">
                                            <svg viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg" class="Icon Icon--comment Icon--left" width="12" height="16" aria-hidden="true" style="height: 16px; width: 12px;">
                                                <title></title>
                                                <g>
                                                    <path d="M7.24 16.313c-.272-.047-.553.026-.77.2-1.106.813-2.406 1.324-3.77 1.482-.16.017-.313-.06-.394-.197-.082-.136-.077-.308.012-.44.528-.656.906-1.42 1.11-2.237.04-.222-.046-.45-.226-.588C1.212 13.052.027 10.73 0 8.25 0 3.7 4.03 0 9 0s9 3.7 9 8.25-4.373 9.108-10.76 8.063z"></path>
                                                </g>
                                            </svg>
                                           {{quescomnumb|changequescomnumb}}
                                        </button>
                                        <button class="Button Button--plain" type="button">
                                            <svg viewBox="0 0 18 20" class="Icon Icon--report Icon--left" width="11" height="16" aria-hidden="true" style="height: 16px; width: 11px;">
                                                <title></title>
                                                <g>
                                                    <path d="M16.947 1.13c-.633.135-3.927.638-5.697.384-3.133-.45-4.776-2.54-9.95-.888C.305 1.04.025 1.664.025 2.646L0 18.807c0 .3.1.54.304.718.195.202.438.304.73.304.275 0 .52-.102.73-.304.202-.18.304-.418.304-.718v-6.58c4.533-1.235 8.047.668 8.562.864 2.343.893 5.542.008 6.774-.657.397-.178.596-.474.596-.887V1.964c0-.6-.42-.972-1.053-.835z"></path>
                                                </g>
                                            </svg>
                                            举报
                                        </button>
                                        <div class="Popover">
                                            <button class="Button Button--plain" type="button" id="Popover-83276-83851-toggle" aria-haspopup="true" aria-expanded="false" aria-owns="Popover-83276-83851-content">
                                                <svg viewBox="0 0 18 4" class="Icon Icon--dots" width="14" height="16" aria-hidden="true" style="height: 16px; width: 14px;">
                                                    <title></title>
                                                    <g>
                                                        <g>
                                                            <circle cx="2" cy="2" r="2"></circle>
                                                            <circle cx="9" cy="2" r="2"></circle>
                                                            <circle cx="16" cy="2" r="2"></circle>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="QuestionHeader-actions"></div>
                                </div>
                                <div class="QuestionHeader-side">
                                    <div class="QuestionButtonGroup">
                                        <button v-if="isattenques" class="Button Button--primary Button--grey" type="button" @click="cancelquesatten()">正在关注</button>
                                        <button class="Button Button--primary Button--blue" v-else type="button" @click="attenques()">关注问题</button>
                                        <button class="Button" type="button" @click="scrolltoans">
                                            <svg viewBox="0 0 12 12" class="Icon Button-icon Icon--modify" width="14" height="16" aria-hidden="true" style="height: 16px; width: 14px;">
                                                <title></title>
                                                <g>
                                                    <path d="M.423 10.32L0 12l1.667-.474 1.55-.44-2.4-2.33-.394 1.564zM10.153.233c-.327-.318-.85-.31-1.17.018l-.793.817 2.49 2.414.792-.814c.318-.328.312-.852-.017-1.17l-1.3-1.263zM3.84 10.536L1.35 8.122l6.265-6.46 2.49 2.414-6.265 6.46z" fill-rule="evenodd"></path>
                                                </g>
                                            </svg>
                                            写回答
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 回答 -->
                    <div class="Question-main">
                        <div class="Question-mainColumn">
                            <div>
                                <div class="Card">
                                    <div class="List">
                                        <div class="List-header">
                                            <h4 class="List-headerText"><span><?php echo ($quesdata["answerNumb"]); ?>个回答
                                                    <div class="List-headerOptions">
                                                        <div class="Popover">

                                                            <title></title>
                                                            <g>
                                                                <path d="M4 11.183L1.284 8.218c-.293-.29-.77-.29-1.064 0-.293.29-.293.76 0 1.052l3.25 3.512c.292.29.768.29 1.062 0L7.78 9.27c.293-.29.293-.76 0-1.052-.295-.29-.77-.29-1.064 0L4 11.182zM4 1.818L1.284 4.782c-.293.29-.77.29-1.064 0-.293-.29-.293-.76 0-1.052L3.47.218c.292-.29.768-.29 1.062 0L7.78 3.73c.293.29.293.76 0 1.052-.295.29-.77.29-1.064 0L4 1.82z"></path>
                                                            </g>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <my-anslist    v-for="(item, index) in list" v-bind:item="item" v-bind:key="item['id']">
                                                <svg slot="praisebutton" viewBox="0 0 20 18" class="Icon VoteButton-upIcon Icon--triangle" width="9" height="16" aria-hidden="true" style="height: 16px; width: 9px;"><title></title><g><path d="M0 15.243c0-.326.088-.533.236-.896l7.98-13.204C8.57.57 9.086 0 10 0s1.43.57 1.784 1.143l7.98 13.204c.15.363.236.57.236.896 0 1.386-.875 1.9-1.955 1.9H1.955c-1.08 0-1.955-.517-1.955-1.9z"></path></g></svg>

                                                <svg slot="againstbutton"  viewBox="0 0 20 18" class="Icon VoteButton-downIcon Icon--triangle" width="9" height="16" aria-hidden="true" style="height: 16px; width: 9px;"><title></title>
                                                    <g><path d="M0 15.243c0-.326.088-.533.236-.896l7.98-13.204C8.57.57 9.086 0 10 0s1.43.57 1.784 1.143l7.98 13.204c.15.363.236.57.236.896 0 1.386-.875 1.9-1.955 1.9H1.955c-1.08 0-1.955-.517-1.955-1.9z"></path></g>
                                                    </svg>

                                                    <svg slot="addcom"  viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg" class="Icon Icon--comment Icon--left" width="12" height="16" aria-hidden="true" style="height: 16px; width: 12px;">
                                                        <title></title>
                                                        <g>
                                                            <path d="M7.24 16.313c-.272-.047-.553.026-.77.2-1.106.813-2.406 1.324-3.77 1.482-.16.017-.313-.06-.394-.197-.082-.136-.077-.308.012-.44.528-.656.906-1.42 1.11-2.237.04-.222-.046-.45-.226-.588C1.212 13.052.027 10.73 0 8.25 0 3.7 4.03 0 9 0s9 3.7 9 8.25-4.373 9.108-10.76 8.063z"></path>
                                                        </g>
                                                    </svg>

                                                   

                                                        <svg slot="thank"  width="14" height="16" viewBox="0 0 20 18" xmlns="http://www.w3.org/2000/svg" class="Icon Icon--thank Icon--left"  style="height: 16px; width: 14px;">
                                                                <title></title>
                                                                <g>
                                                                    <path d="M0 5.437C0 2.505 2.294.094 5.207 0 7.243 0 9.092 1.19 10 3c.823-1.758 2.65-3 4.65-3C17.546 0 20 2.507 20 5.432 20 13.24 11.842 18 10 18 8.158 18 0 13.24 0 5.437z"></path>
                                                                </g>
                                                            </svg>


                                            </my-anslist>
                                            

                                        <!-- list -->
                                    </div>

                                </div>

                            </div>
                            <!-- 添加回答 -->
                            <div class="Card QuestionAnswers-answerAdd" v-if="check_hasans(hasans)">
                            <div class="AnswerAdd"><div class="AnswerAdd-header">

                            <div class="AuthorInfo AnswerAdd-info"  v-show="editanony(isanony)"><span class="UserLink AuthorInfo-avatarWrapper"><img width="38" height="38" src="<?php echo ($data["photo"]); ?>"></span><div class="AuthorInfo-content"><div class="AuthorInfo-title"><div class="AuthorInfo-name"><span class="UserLink"><?php echo ($data["nickName"]); ?></span></div></div><div class="AuthorInfo-badge"><span class="RichText AnswerAdd-bio"><?php echo ($data["autograph"]); ?></span></div></div>
                            </div>

                            <div class="AuthorInfo AnswerAdd-info" v-show="editanony_is(isanony)"><span class="UserLink AuthorInfo-avatarWrapper"><img class="Avatar AuthorInfo-avatar" width="38" height="38" src="/Public/img/head/anonymous.jpg"  alt="匿名用户"></span><div class="AuthorInfo-content"><div class="AuthorInfo-title"><div class="AuthorInfo-name"><span class="UserLink">匿名用户</span></div></div></div></div>

                            <button type="button" class="Button AnswerAdd-toggleAnonymous Button--plain" @click="toggleanony">使用匿名身份回答</button></div><form  class="AnswerForm"><div class="AnswerForm-editor Input-wrapper Input-wrapper--spread Input-wrapper--large Input-wrapper--noPadding"><div class="Input Editable"><div><div class="Sticky"><div class="Editable-toolbar"><div class="Editable-controls"><button @click="subimg('',$event)" aria-label="上传图片" title="上传图片" type="button" class="Button Editable-control Button--plain"><svg viewBox="0 0 20 16" width="16" height="14" aria-hidden="true" class="Icon Icon--camera" style="height: 14px; width: 16px;"><title></title><g><path d="M18.094 2H15s-1-2-2-2H7C6 0 5 2 5 2H2C0 2 0 3.967 0 3.967V14c0 2 2.036 2 2.036 2H17c3 0 3-1.983 3-1.983V4c0-2-1.906-2-1.906-2zM10 12c-1.933 0-3.5-1.567-3.5-3.5S8.067 5 10 5s3.5 1.567 3.5 3.5S11.933 12 10 12zm0 1.5c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm7.5-8c-.552 0-1-.448-1-1s.448-1 1-1 1 .448 1 1-.448 1-1 1z" fill-rule="evenodd"></path></g></svg></button>
                            <span id="changeimg"></span>
                            </div></div></div></div><div class="Dropzone RichText" style="min-height: 118px;"><div class="DraftEditor-root"><div class="public-DraftEditorPlaceholder-root"><div id="placeholder-8vrrn" class="public-DraftEditorPlaceholder-inner">写回答...</div></div><div class="DraftEditor-editorContainer">
                            <div aria-describedby="placeholder-8vrrn" contenteditable="true" role="textbox" spellcheck="true" tabindex="0" id="myanswer" class="public-DraftEditor-content"  @focus="foanswer()" @blur="blanswer()" style="outline: none; white-space: pre-wrap; word-wrap: break-word;">
                            <div >
                            <div  class="Editable-unstyled">
                            <div  class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr">
                            <span>
                            <br>
                            </span>
                            </div></div></div></div></div></div></div><input id="ans-img-sub" type="file" multiple="multiple" accept="image/jpg,image/jpeg,image/png" style="display: none;"></div></div><div><div class="Sticky AnswerForm-footer is-bottom"><div class="AnswerForm-status"></div><div class="AnswerForm-footerRight"><div class="Popover"></div><button type="button" class="Button AnswerForm-submit Button--primary Button--blue" @click="submyanswer()">提交回答</button></div></div></div></form></div></div>
                            <div class="Card AnswerAdd" v-else ><div class="QuestionAnswers-hasAnswer">一个问题你只能回答一次,但是你可以进行<a @click="movetoans">修改</a></div></div>
                        </div>
                        <!-- addanswer -->

                    </div>
                     <div class="Question-sideColumn">
                            <div>
                                <div class="Card" ><div class="Card-header SimilarQuestions-title"><div class="Card-headerText">相关问题</div></div><div class="Card-section SimilarQuestions-list"><div class="SimilarQuestions-item" data-za-module="QuestionItem" ><a class="Button Button--plain" target="_blank" type="button" href="/index.php/Ques/1">坚持跑步到底有什么改变？</a>2个回答</div><div class="SimilarQuestions-item" ><a class="Button Button--plain" target="_blank" type="button" href="/index.php/Ques/2">是什么支撑你跑完五公里？</a>2个回答 </div><div class="SimilarQuestions-item" ><a class="Button Button--plain" target="_blank" type="button" href="/index.php/Ques/3">2016-2017 赛季 NBA 常规赛 MVP 到底应该给谁？</a>10个回答</div><div class="SimilarQuestions-item" ><a class="Button Button--plain" target="_blank" type="button" href="/index.php/Ques/4">篮球如何提高球性，练好运球？</a>4个回答</div><div class="SimilarQuestions-item" ><a class="Button Button--plain" target="_blank" type="button" href="/index.php/Ques/5">你听过最能引起共鸣的话是什么？</a>21个回答</div></div></div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

    </main>
    <div style="display: none;" id="quescom" >
    <div data-reactroot=""><span><div class="Modal-wrapper"><div class="Modal-backdrop"></div><div tabindex="0" class="Modal Modal--fullPage"><div class="Modal-inner"><div class="Modal-content Modal-content--spread"><div class="Comments-container"><div class="Comments Comments--withEditor"><div class="CommentTopbar"><div class="CommentTopbar-meta"><h2 class="CommentTopbar-title">{{quescomnumb| changequescomnumb}}</h2></div></div>
    <div class="CommentList"> 
    <!-- 问题评论 -->
    <my-quescom v-for="(item, index) in queslist" v-bind:item="item" ></my-quescom>

<div></div>
</div>
<div class="Comments-footer CommentEditor--normal">
    <input id="quescomment" @focus="fo('',$event)" v-model="quescom"  gre-focus="" required="写下你的评论" value="" placeholder="写下你的评论…" class="_InputBox_root_1Xwi _InputBox_empty_3_ur _InputBox_blur_3JWV">
    <button disabled="disabled" @click="quescomsub" type="button" class="Button CommentEditor-singleButton Button--primary Button--blue" id="quescomsub">评论</button>
</div>
</div>
</div>
</div>
</div>
<div class="Modal-snackbar Modal-snackbar--collapsed"></div>
<button @click="hidequescom" aria-label="关闭" type="button" class="Button Modal-closeButton Button--plain">
    <svg viewBox="0 0 14 14" width="16" height="16" aria-hidden="true" class="Icon Modal-closeIcon Icon--remove" style="height: 16px; width: 16px;">
        <title></title>
        <g>
            <path d="M8.486 7l5.208-5.207c.408-.408.405-1.072-.006-1.483-.413-.413-1.074-.413-1.482-.005L7 5.515 1.793.304C1.385-.103.72-.1.31.31-.103.724-.103 1.385.305 1.793L5.515 7l-5.21 5.207c-.407.408-.404 1.072.007 1.483.413.413 1.074.413 1.482.005L7 8.485l5.207 5.21c.408.407 1.072.404 1.483-.007.413-.413.413-1.074.005-1.482L8.485 7z"></path>
        </g>
    </svg>
</button>
</div>
</div>
</span>
</div>
</div>


</div>
</div>
</body>
<script type="text/javascript">
    var isattenques = <?php echo ($isattenques); ?>;
    var DATA = <?php echo ($ansdata); ?>;
    var quescomnumb = <?php echo ($quescomnum); ?>;
    var hasans = <?php echo ($hasans); ?>;
</script>

</html>