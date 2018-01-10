/**
 * @Author   grewer //todo 收藏
 * @DateTime 2017-04-20
 * @version  1.0
 * @param    {[type]}   ){} [description]
 * @return   {[type]}         [description]
 */
$(function(){
	Vue.component('my-list', {
	  template: '<div class="feed-item feed-item-hook folding"  v-bind:user-id="item.userId" v-bind:answer-id="item.id" v-bind:is-tog="1" v-on:mouseenter="show(\' \',$event)" v-on:mouseleave="hide(\' \',$event)" v-bind:ques-id="item.quesId" ><div class="feed-main"  ><div class="feed-content"><h2><a class="question_link"  :href="quesurl" target="_blank" >{{item.quesName}}</a></h2><div class="expandable entry-body"><link itemprop="url" href=""><div class="zm-item-vote"><a class="zm-item-vote-count js-expand js-vote-count" href="javascript:;" >{{item.praiseNumb}}</a></div><div class="zm-votebar"><button class="up" v-bind:aria-pressed="isparise" title="赞同" @click="praise(\' \',$event)" ><i class="icon vote-arrow"></i><span class="count">{{item.praiseNumb}}</span><span class="label sr-only">赞同</span></button><button class="down" v-bind:aria-pressed="isagainst" title="反对，不会显示你的姓名" @click="against(\' \',$event)" ><i class="icon vote-arrow"></i><span class="label sr-only">反对，不会显示你的姓名</span></button></div><div class="zm-item-answer-author-info"><span class="summary-wrapper" v-if="isanony"><span class="author-link-line">匿名用户</span></span> <span v-else class="summary-wrapper"><span class="author-link-line"><a class="author-link" target="_blank" :href="peopleurl"> {{ item.nickname }} </a></span><span title="yijuhua" class="bio">{{item.autograph}}</span></span></div><div class="zm-item-vote-info"><span class="voters text"><a href="#" class="more text"><span class="js-voteCount">{{item.praiseNumb}}</span>&nbsp;人赞同</a></span></div><div class="zm-item-rich-text expandable js-collapse-body"><textarea hidden="" class="content">{{item.answerContent}}</textarea><div class="zh-summary summary clearfix"><img v-if="imgshow"  :src="item.photo" class="origin_image inline-img zh-lightbox-thumb" >{{item.answerContent | capitalize}}<a href="javascript:;"  @click="showall(\' \',$event)" class="toggle-expand">显示全部</a></div><p class="visible-expanded"><a class="answer-date-link meta-item"  href="javascript:;">编辑于  {{item.anscreateTime}} </a></p></div></div><div class="zm-item-meta feed-meta"><div class="zm-item-meta answer-actions clearfix js-contentActions"><div class="zm-meta-panel" v-bind:is-con="0"><a class="follow-link zg-follow meta-item" href="javascript:;" @click="attenques(\'\',$event)"  :isattenques="item.isattenques"><i class="z-icon-follow"></i>{{ item.isattenques | editatten}}</a><a href="javascript:;" name="addcomment" class="meta-item toggle-comment js-toggleCommentBox" @click="showcomment(\' \',$event)" v-bind:data-comnum="item.commentNumb"><i class="z-icon-comment"></i> {{item.commentNumb | commentedit}} </a><a href="javascript:;" class="meta-item zu-autohide js-thank" tog :data-thanked="item.isthank" @click="thank(\' \',$event)" ><i class="z-icon-thank"></i>{{ item.isthank | editthank }}</a><a href="javascript:;" tog class="meta-item zu-autohide js-share goog-inline-block goog-menu-button" style="user-select: none;"><div class="goog-inline-block goog-menu-button-outer-box"><div class="goog-inline-block goog-menu-button-inner-box"><div class="goog-inline-block goog-menu-button-caption" @click="share(\'\',$event)"><i class="z-icon-share"></i>分享</div><div class="goog-inline-block goog-menu-button-dropdown">&nbsp;</div></div></div></a><a href="javascript:;" tog class="meta-item zu-autohide js-collect"><i class="z-icon-collect"></i>收藏</a><span tog class="zg-bull zu-autohide">•</span><a  tog href="javascript:;" class="meta-item zu-autohide js-noHelp">没有帮助</a><span tog class="zg-bull zu-autohide">•</span><a tog href="javascript:;" class="meta-item zu-autohide js-report">举报</a><span tog class="zg-bull">•</span><a tog  href="/terms#sec-licence-1" target="_blank" class="meta-item copyright">作者保留权利</a><button class="meta-item item-collapse js-collapse" @click = "hideans(\' \',$event)"><i class="z-icon-fold"></i>收起</button></div></div></div></div></div></div>',
	  data:function(){
	    return{
	        quesurl:'/index.php/Ques/'+this.item.quesId,
	        isparise:0,
	        isagainst:0,
	        imgshow:this.imgedit(this.item.photo),
	        peopleurl:'/index.php/people/person/personid/'+this.item.userId,
	        isanony:this.editanony(this.item.anonymity),
	        shareElement:'<share></share>',
	    }
	  },
	  filters: {
		    capitalize: function (value) {
		      if (!value) return ''
		      value = value.toString()
		      return value.substr(0,150);
		    },
		    commentedit:function(val){
		    	if(val == 0) return '添加评论';
		    	return val+'条评论';
		    },
		    editatten:function(val){
		    	if(val == 1) return '已关注';
		    	
		    	if(val == 0) return '关注问题';
		    },
		    editthank:function(val){
		    	if(val == 1) return '取消感谢';
		    	if(val == 0) return '感谢';
		    }

		    
		  },
	  methods:{
	  		attenques:function(m,e){
	  			var thisdiv = $(e.target).parents('[is-tog]');
	  			var quesid = thisdiv.attr('ques-id');
	  			var isatten = $(e.target).attr('isattenques');
	  			if(isatten == 0 ){
	  				$.get('/index.php/Rcv/attenques',{'quesid':quesid,'isatten':1});
	  				$(e.target).html('<i class="z-icon-follow"></i>已关注');
	  				$(e.target).attr('isattenques',1);

	  			}else if(isatten == 1){
	  				$.get('/index.php/Rcv/attenques',{'quesid':quesid,'isatten':0});
	  				$(e.target).html('<i class="z-icon-follow"></i>关注问题');
	  				$(e.target).attr('isattenques',0);
	  			}
				
	  		},
	  		share:function(m,e){
	  			//分享
	  			if(typeof $(e.target).attr('isshow') == 'undefined' || $(e.target).attr('isshow') == 'false'){
	  				$('.goog-menu.goog-menu-vertical.share-menu').show();
	  				$(e.target).attr('isshow','true');
	  			}else{
	  				$(e.target).attr('isshow','false');
	  				$('.goog-menu.goog-menu-vertical.share-menu').hide();
	  			}
	  			

	  			if($(e.target).next().hasClass('share-menu')){
	  				return false;
	  			}

	  			$(e.target).after(this.shareElement);
	  			var tmp = Vue.extend({ 
		              template: '<div  class="goog-menu goog-menu-vertical share-menu" style="user-select: none; visibility: visible; left: 208.891px; top: -216px;"><div class="goog-menuitem" role="menuitem" id=":1l" style="user-select: none;"><div class="goog-menuitem-content" style="user-select: none;"><span class="ico z-ico-weibo-share" style="user-select: none;"></span>新浪微博</div></div><div class="goog-menuitem goog-menuitem-disabled" role="menuitem" aria-disabled="true" id=":1m" style="user-select: none;"><div class="goog-menuitem-content" style="user-select: none;"><span class="ico z-ico-wechat-share" style="user-select: none;"></span>微信扫一扫<img class="qrcode-image js-qrcode-image" src="/qrcode?url=https%3A%2F%2Fwww.zhihu.com%2Fquestion%2F59425381%2Fanswer%2F165959774%23showWechatShareTip" style="user-select: none;"></div></div><div class="goog-menuitem" role="menuitem" id=":1n" style="user-select: none;"><div class="goog-menuitem-content" style="user-select: none;"><span class="ico z-ico-daily-share" style="user-select: none;"></span>读读日报</div></div></div>',
		              methods:{
		                  test: function(){
		                     alert('Test');
		                  }
		              },


		          })
		          new tmp().$mount('share');
	  		},
		  	editanony:function(num){
		  		if(num == 1) return true;
		  		if(num == 0) return false;
		  	},
	        imgedit:function(imgurl){
	          if(typeof imgurl == undefined) return false;
	          if(typeof imgurl == 'string' ) return true;
	        }
	        ,show:function(m,e){
				if($(e.target).attr('is-tog') == 1){
					$(e.target).find('.zm-meta-panel').children('[tog]').toggle();
				}
			},
			hide:function(m,e){
				if($(e.target).attr('is-tog') == 1){
					$(e.target).find('.zm-meta-panel').children('[tog]').toggle();
				}
			},
			showall:function(m,e){
				this.$emit('showalll',e);
			},
			
			hideans:function(m,e){
				//收起答案
				var thisdiv = $(e.target).parents('[is-tog]');
				$(e.target).hide();
				thisdiv.find('.zm-votebar').hide().end().find('.visible-expanded').hide();
				var thistext = thisdiv.find('.content').text();
				thisdiv.find('.zh-summary.summary.clearfix').html(thistext.substring(0,176)+'...'+'<a href="#" class="toggle-expand js-showall">显示全部</a>')
				.end().attr('is-tog',1);

			},
			thank:function(m,e){
				var $this = $(e.target);
				var answer_id = $this.parents('[is-tog]').attr('answer-id');
				if($this.attr('data-thanked') == '1'){
					//取消感谢
					isthank = 0;
					$this.html('<i class="z-icon-thank"></i>感谢');
					$this.attr('data-thanked','0');
				} else if($this.attr('data-thanked') == '0'){
					//感谢
					isthank = 1;
					$this.html('<i class="z-icon-thank"></i>取消感谢');
					$this.attr('data-thanked','1');
				}
				$.get('/index.php/Rcv/thank',{'answerid':answer_id,'isthank':isthank})

			},
			praise:function(m,e){
				//点赞
				var obj;
				var is_praise;
				var answerid = $(e.target).closest('[answer-id]').attr('answer-id');
				e.target.localName == 'button'? ( obj = $(e.target)) : ( obj = $(e.target).parent());
				

				if(obj.next().attr('aria-pressed') == '1'){
					$.get('/index.php/Rcv/editpraise',{'answer_id':answerid,'is_edit':1});
					obj.next().removeClass('pressed');
					obj.next().attr('aria-pressed','0');

					obj.addClass('pressed');
					obj.attr('aria-pressed','1');
					this.editnum(obj,1);
					}else{

						if(obj.attr('aria-pressed') == '0'){
							obj.addClass('pressed');
							obj.attr('aria-pressed','1');
							is_praise = 1;
							this.editnum(obj,1);
						}else if(obj.attr('aria-pressed') == '1'){
							obj.removeClass('pressed');
							obj.attr('aria-pressed','0');
							is_praise = 0;
							this.editnum(obj,0);
							
						}
					$.get('/index.php/Rcv/ispraise',{'is_praise':is_praise,'answer_id':answerid});

					}
				},
				against:function(m,e){
					var obj;
					$(e.target)[0].localName == 'button' ? ( obj = $(e.target)) : ( obj = $(e.target).parent());
					var answerid = $(e.target).closest('[answer-id]').attr('answer-id');
					if(obj.prev().attr('aria-pressed') == '1'){
						//已赞改成反对
						$.get('/index.php/Rcv/editpraise',{'answer_id':answerid,'is_edit':0});
						obj.prev().removeClass('pressed');
						obj.prev().attr('aria-pressed','0');
						obj.addClass('pressed');

						obj.attr('aria-pressed','1');
						this.editnum(obj.prev(),0);
					} else{
						//未赞成,反对
						if(obj.attr('aria-pressed') == '0'){
							obj.addClass('pressed');
							obj.attr('aria-pressed','1');
							is_against = 1;
						}else if(obj.attr('aria-pressed') == '1'){
							obj.removeClass('pressed');
							obj.attr('aria-pressed','0');
							is_against = 0;
						}
						$.get('/index.php/Rcv/isagainst',{'is_against':is_against,'answer_id':answerid});

					}

				},
				showcomment:function(m,e){
					//显示评论
					var thisdiv = $(e.target).parents('[is-tog]');
					var iscon = thisdiv.find('.zm-meta-panel').attr('is-con');
					var answer_id = thisdiv.attr('answer-id');
					var comment = '';
					var thisele = this;
					var thisnum = $(e.target).attr('data-comnum');
					if(iscon == 0){
						$(e.target).html('<i class="z-icon-comment"></i>收起评论');
						$.get('/index.php/Rcv/getcomment',{'answerid':answer_id},function(msg,s){
							if(s == 'success'){
								if(msg != undefined){
									
									for(var i in msg){
										comment += '<div class="_CommentBox_list_10_K"><div class="_CommentItem_root_PQNS"><a href="/index.php/People/person/personid/'+msg[i].id+'" target="_blank" class="_CommentItem_avatarLink_3V51 hidden-phone"><img class="Avatar Avatar-s" src="'+msg[i].photo+'"></a><div class="_CommentItem_body_3qwB"><div class="_CommentItem_header_2JGh"><a href="/index.php/People/person/personid/'+msg[i].id+'" target="_blank">'+msg[i].nickName+'</a></div><div class="_CommentItem_content_CYqW">'+msg[i].commentContent+'</div><div class="_CommentItem_footer_46v8 clearfix"><time title="'+msg[i].comcreateTime+'">'+thisele.changetime(msg[i].comcreateTime)+'</time></div></div></div></div>'
									}

								}
								thisdiv.find('.zm-meta-panel').after(vm.beforecomment+comment+vm.aftercomment);
								
							}
						})

						thisdiv.find('.zm-meta-panel').attr('is-con','1');
						thisdiv.find('.zm-meta-panel').addClass('focusin');
					}else if(iscon == 1){
						if(thisdiv.find('.zm-meta-panel').hasClass('focusin')){
							$(e.target).html('<i class="z-icon-comment"></i>'+thisnum+'条评论');
							//hide comment
							thisdiv.find('.comment-app-holder').hide();
							thisdiv.find('.zm-meta-panel').removeClass('focusin')
						}else{
							$(e.target).html('<i class="z-icon-comment"></i>收起评论');
							//show comment
							
							thisdiv.find('.comment-app-holder').show();
							thisdiv.find('.zm-meta-panel').addClass('focusin');
						}
					}
				},
				changetime:function(gettime){
					// return gettime;
					if(((new Date()).valueOf()-(new Date(gettime)))/1000/60 < 1){
						return '刚刚';
					}else if(((new Date()).valueOf()-(new Date(gettime)))/1000/60/60 < 1){
						var m = ((new Date()).valueOf()-(new Date(gettime)))/1000/60;
						return parseInt(m)+'分前';
					}else if(((new Date()).valueOf()-(new Date(gettime)))/1000/60/60/24 < 1){
						var h = ((new Date()).valueOf()-(new Date(gettime)))/1000/60/60;
						return parseInt(h)+'小时前';
					}else if(((new Date()).valueOf()-(new Date(gettime)))/1000/60/60/24/30 < 1){
						var d = ((new Date()).valueOf()-(new Date(gettime)))/1000/60/60/24;
						return parseInt(d)+'天前';
					}else if((new Date().getFullYear()-(new Date(gettime)).getFullYear()) < 1){
						var mo = (new Date().getMonth()-(new Date(gettime)).getMonth());
						return mo+'月前';
					}else{
						return (new Date().getFullYear()-(new Date(gettime)).getFullYear())+'年前';
					}

				
			},
			editnum:function(obj,t){
				//obj 必须为点赞的 button
				//点赞数加一减一
				var thisnum = obj.children('span.count').text();
				var innum = obj.parent().siblings('div.zm-item-vote-info').find('span.js-voteCount').text();
				if(t == 1){
					obj.children('span.count').text(Number(thisnum)+1);
					obj.parent().siblings('div.zm-item-vote-info').find('span.js-voteCount').text(Number(innum)+1);
				}else if(t == 0){
					obj.children('span.count').text(Number(thisnum)-1);
					obj.parent().siblings('div.zm-item-vote-info').find('span.js-voteCount').text(Number(innum)-1);
				}
			}
	      },
	      mounted:function(){
	      },
	  props:['item']

	})

	var vm = new Vue({
		el:'#main',
		data:{
			list:1,
			showallbutton:'<a href="javascript:;" class="toggle-expand">显示全部</a>',
			beforecomment:'<div class="comment-app-holder"><div class="_CommentBox_root_G_1m _CommentBox_bordered_3Fo-"><i class="icon icon-spike" style="left: 100.109px;"></i>',
			aftercomment:' <div class="_Pager_root_2GoR _CommentBox_pagerBorder_yuO1" hidden=""></div><div class="_CommentForm_root_1-ko _CommentForm_bordered_2isg"><input id="comment" gre-focus required="写下你的评论" value="" placeholder="写下你的评论…" class="_InputBox_root_1Xwi _InputBox_empty_3_ur _InputBox_blur_3JWV" "></input><div class="_CommentForm_actions_ooEq clearfix"><button class="_CommentForm_submitButton_1N49 zg-btn-blue" addcomment>评论</button><button class="_CommentForm_cancelButton_cy3u _CommentBox_textButton_3t9_" data-key="cancel">取消</button></div></div></div></div>',
			showmodel:false,
			newquesname:'',
			checked:false,

		
		},
		methods:{
			add:function(){
				console.log('add')
				this.list.push(['qwe','qeee']);
			},
			showall:function(e){
				var obj = $(e.target);
				var thisdiv = $(e.target).parents('[is-tog]');
				var article  =  obj.parent().prev('.content').text();//文章
				var answerid = $(e.target).closest('[answer-id]').attr('answer-id');
				obj.parents('[is-tog]').attr('is-tog',0);
				//判断是否有图片
				if(typeof obj.siblings().first()[0] == 'undefined'){
					obj.parent().text(article).append(this.showallbutton).find('a').toggle().parent().next().show();
				}else{
					obj.parent().html(obj.siblings().first()[0].outerHTML+article).append(this.showallbutton).find('a').toggle().parent().next().show();
				}
				

				thisdiv.find('.zm-votebar').show().end().find('.zm-item-vote-info').show()
				//判断是否点赞了
				var but = thisdiv.find('.zm-votebar');
				$.get('/index.php/Rcv/loadispraise',{'answer_id':answerid},function(msg,s){
					if(s == 'success'){
						if(msg != 'No'){
							if(msg == 1){
								but.children('button').eq(0).addClass('pressed');
								but.children('button').eq(0).attr('aria-pressed','1');
							}else if(msg == 0){
								console.log(0)
								but.children('button').eq(1).addClass('pressed');
								but.children('button').eq(1).attr('aria-pressed','1');
							}
						}
					}
				})

				//显示收起
				
				thisdiv.find('.js-collapse').show();
				
			},
			morelist:function(m,e){
				//更多数据
				
				var len = $('#js-home-feed-list').children('div').length;
				
				$.get('/index.php/index/grewer',{'start':len},function(m,s){
					if(s == 'success'){
						if(m.length == 0){
							e.target.innerText = '没有更多数据了';
							return;
						}
						for(var i in m){
							vm.list.push(m[i]);
						}
						
					}
				})
			},
			selecttopic:function(m,e){
				$(e.target).parent().siblings().removeClass('current').end().addClass('current')
			},
			subnewques:function(){
				//显示摸态框
				this.showmodel = true;
			},
			hidemodel:function(){
				this.showmodel = false;
			},
			selectimg:function(){
				//选择图片
				$('[name=subquesimg]').click();
				$('[name=subquesimg]').change(function(){
					var fileurl = $('[name=subquesimg]').val();
					$('.zm-editable-content').text(fileurl).show()
				})
				
			},
			sub:function(){
				//提交问题
				var file = document.getElementById('theimg').files[0];
				var desc = $('#quesdesc').text() || '';
				var questopic = $('.zm-topic-cat-item.current').attr('data-topicid');
				console.log(this.newquesname+file+desc+this.checked);
				if(this.newquesname == ''){
					alertMsg('填写问题名称');
					return;
				}
				if(typeof questopic=='undefined'){
					alertMsg('选择话题');
					return;
				}
				var FileController = "/index.php/Rcv/addques";
				var form = new FormData();
		        form.append("quesname", vm.newquesname);
		        form.append("quesdesc", desc);
		        form.append("questopic", questopic);
		        form.append("isanony", vm.checked);

		        form.append("file", file); 

		        var xhr = new XMLHttpRequest();
		        xhr.open("post", FileController, true);
		        xhr.onload = function() {};
		        xhr.send(form);
		        xhr.onreadystatechange = function() {
		            if (xhr.readyState == 4 && xhr.status == 200) {
		                if($.parseJSON(xhr.responseText).status == 'ok'){
		                	alertMsg('添加问题成功<a href="/index.php/Ques/'+$.parseJSON(xhr.responseText).id+'">点击查看</a>');
		                	vm.newquesname = '';
		                	$('#quesdesc').text('');
		                	vm.checked = false;
							$('.zm-topic-cat-item').removeClass('current');
							vm.showmodel = false;
		                }
		            }
		        };

			
			}
		},
		
		mounted:function(){
			this.$set(this.$data,'list',DATA);
		}
	})

	$(document).on('click','.js-showall',function(e){
		vm.showall('',e);
		//显示全部
	});

	$(document).on('focus','[gre-focus]',function(){
		$(this).next().show();
		//评论是显示按钮
	})

	$(document).on('click','[data-key]',function(){
		//评论中取消
		if($(this).attr('data-key') == 'cancel'){
			$(this).parent().hide().prev().val('');
		}
	})

	$(document).on('click','[addcomment]',function(){
		var answer_id = $(this).closest('[answer-id]').attr('answer-id');
		var content = $(this).parent().prev().val();
		var thisdiv = $(this).closest('[answer-id]');
		if(content == ''){
			alertMsg('请填写评论');
		}else{
			$.get('/index.php/Rcv/addcomment',{'answerid':answer_id,'content':content},function(m,s){
				if(s == 'success'){
					var comment = '<div class="_CommentBox_list_10_K"><div class="_CommentItem_root_PQNS"><a href="/index.php/People/person/personid/'+m.id+'" target="_blank" class="_CommentItem_avatarLink_3V51 hidden-phone"><img class="Avatar Avatar-s" src="'+m.photo+'"></a><div class="_CommentItem_body_3qwB"><div class="_CommentItem_header_2JGh"><a href="/index.php/People/person/personid/'+m.id+'" target="_blank">'+m.nickName+'</a></div><div class="_CommentItem_content_CYqW">'+content+'</div><div class="_CommentItem_footer_46v8 clearfix"><time>'+'刚刚'+'</time></div></div></div></div>'
					var len = thisdiv.find('.comment-app-holder').find('._CommentBox_list_10_K').length;
					if(len == 0){
						thisdiv.find('.comment-app-holder').find('.icon-spike').after(comment);
					}else{
						thisdiv.find('.comment-app-holder').find('._CommentBox_list_10_K').eq(Number(len)-1).after(comment);
					}
					$(this).parent().prev().val('');

				}
			});
		}
		

	});



})