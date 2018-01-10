/**
 * //todo 修改个人的 href    收起的代码
 * @Author   grewer
 * @DateTime 2017-04-06
 * @version  1.0
 * @param    {[type]}   ){	new                                                                                                                                                                                                 Vue({		el:'#main',		data:{			test:1,		} [description]
 * @param    {[type]}   methods:{			load:function(topicid,e){				var                                                                                                                                                          $this                                      [description]
 * @param    {[type]}   function(m){					$($this.$refs.topictext).children('a').first().find('img').attr('src',m.photo).end().end().eq(1).text(m.topicName).end().eq(0).attr('href','topic/id/'+m.topicId+'');				})			}		} [description]
 * @param    {[type]}   mounted:function(){	                                                                                                                                                                                                                                                 $(this.$refs.attentopiclist).children('li').first().addClass('current');	      }	})} [description]
 * @return   {[type]}                                                                                                                                                                                                           [description]
 */
$(function(){
	
	var vm = new Vue({
		el:'#main',
		data:{
			test:1,
			showallbutton:'<a href="#" class="toggle-expand">显示全部</a>',
			beforecomment:'<div class="comment-app-holder"><div class="_CommentBox_root_G_1m _CommentBox_bordered_3Fo-"><i class="icon icon-spike" style="left: 100.109px;"></i>',
			aftercomment:' <div class="_Pager_root_2GoR _CommentBox_pagerBorder_yuO1" hidden=""></div><div class="_CommentForm_root_1-ko _CommentForm_bordered_2isg"><input id="comment" gre-focus required="写下你的评论" value="" placeholder="写下你的评论…" class="_InputBox_root_1Xwi _InputBox_empty_3_ur _InputBox_blur_3JWV" "></input><div class="_CommentForm_actions_ooEq clearfix"><button class="_CommentForm_submitButton_1N49 zg-btn-blue" addcomment>评论</button><button class="_CommentForm_cancelButton_cy3u _CommentBox_textButton_3t9_" data-key="cancel">取消</button></div></div></div></div>'
		},
		methods:{
			load:function(topicid,e){
				var $this = this;
				$(this.$refs.attentopiclist).children('li').removeClass('current');
				$(e.target).parent().addClass('current');
				// $.get('gettopic',{'id':topicid},function(m){
				// 	$($this.$refs.topictext).children('a').first().find('img').attr('src',m.photo).end().end().eq(1).text(m.topicName).end().eq(0).attr('href','topic/id/'+m.topicId+'');
				// })

			},
			show:function(m,e){
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
				var obj = $(e.target);
				var thisdiv = $(e.target).parents('[is-tog]');
				var article  =  obj.parent().prev('.content').text();//文章
				var answerid = $(e.target).closest('[answer-id]').attr('answer-id');
				obj.parents('[is-tog]').attr('is-tog',0);
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
								but.children('button').eq(0).attr('aria-pressed','true');
							}else if(msg == 0){
								console.log(0)
								but.children('button').eq(1).addClass('pressed');
								but.children('button').eq(1).attr('aria-pressed','true');
							}
						}
					}
				})

				//显示收起
				
				thisdiv.find('.js-collapse').show();
				
			},
			praise:function(m,e){
				var obj;
				var is_praise;
				var answerid = $(e.target).closest('[answer-id]').attr('answer-id');
				e.target.localName == 'button'? ( obj = $(e.target)) : ( obj = $(e.target).parent());
				

				if(obj.next().attr('aria-pressed') == 'true'){
					$.get('/index.php/Rcv/editpraise',{'answer_id':answerid,'is_edit':1});
					obj.next().removeClass('pressed');
					obj.next().attr('aria-pressed','false');

					obj.addClass('pressed');
					obj.attr('aria-pressed','true');
					this.editnum(obj,1);
					}else{

						if(obj.attr('aria-pressed') == 'false'){
							obj.addClass('pressed');
							obj.attr('aria-pressed','true');
							is_praise = 1;
							this.editnum(obj,1);
						}else if(obj.attr('aria-pressed') == 'true'){
							obj.removeClass('pressed');
							obj.attr('aria-pressed','false');
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
				if(obj.prev().attr('aria-pressed') == 'true'){
					//已赞改成反对
					$.get('/index.php/Rcv/editpraise',{'answer_id':answerid,'is_edit':0});
					obj.prev().removeClass('pressed');
					obj.prev().attr('aria-pressed','false');
					obj.addClass('pressed');

					obj.attr('aria-pressed','true');
					this.editnum(obj.prev(),0);
				} else{
					//未赞成,反对
					if(obj.attr('aria-pressed') == 'false'){
						obj.addClass('pressed');
						obj.attr('aria-pressed','true');
						is_against = 1;
					}else if(obj.attr('aria-pressed') == 'true'){
						obj.removeClass('pressed');
						obj.attr('aria-pressed','false');
						is_against = 0;
					}
					$.get('/index.php/Rcv/isagainst',{'is_against':is_against,'answer_id':answerid});

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
							thisdiv.find('.zm-meta-panel').after(thisele.beforecomment+comment+thisele.aftercomment);
							
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
			attenques:function(m,e){
	  			var thisdiv = $(e.target).parents('[is-tog]');
	  			var quesid = thisdiv.attr('ques-id');
	  			var isatten = $(e.target).hasClass('zg-follow')? true :false;
	  			if(isatten == true ){
	  				$.get('/index.php/Rcv/attenques',{'quesid':quesid,'isatten':1});
	  				$(e.target).html('<i class="z-icon-follow"></i>取消关注');
	  				$(e.target).removeClass('zg-follow');
	  				$(e.target).addClass('zg-unfollow');
	  			}else if(isatten == false){
	  				$.get('/index.php/Rcv/attenques',{'quesid':quesid,'isatten':0});
	  				$(e.target).html('<i class="z-icon-follow"></i>关注问题');
	  				$(e.target).removeClass('zg-unfollow');
	  				$(e.target).addClass('zg-follow');
	  			}
				
	  		
			},
			thank:function(m,e){
				var $this = $(e.target);
				var answer_id = $this.parents('[is-tog]').attr('answer-id');
				console.log(1)
				if($this.attr('data-thanked') == 'true'){
					//取消感谢
					isthank = 0;
					$this.html('<i class="z-icon-thank"></i>感谢');
					$this.attr('data-thanked','false');
				} else if($this.attr('data-thanked') == 'false'){
					//感谢
					isthank = 1;
					$this.html('<i class="z-icon-thank"></i>取消感谢');
					$this.attr('data-thanked','true');
				}
				$.get('/index.php/Rcv/thank',{'answerid':answer_id,'isthank':isthank})

			},
			hideans:function(m,e){
				//收起答案
				var thisdiv = $(e.target).parents('[is-tog]');
				$(e.target).hide();
				thisdiv.find('.zm-votebar').hide().end().find('.visible-expanded').hide();
				var thistext = thisdiv.find('.content').text();
				thisdiv.find('.zh-summary.summary.clearfix').html(thistext.substring(0,176)+'...'+'<a href="#" class="toggle-expand js-showall">显示全部</a>')
				.end().attr('is-tog',1);

			}
		},
		mounted:function(){
	        // $(this.$refs.attentopiclist).children('li').first().addClass('current');

	        var thistid = $('[data-tid]').attr('data-tid');
			var list = $('.zm-topic-cat-item');
			list.removeClass('current');
			for(var i=0;i<list.length;i++){
				if(list.eq(i).attr('data-topicid') == thistid){
					list.eq(i).addClass('current');
				}
			}
			
			if(queslist[0] == null){
				$('.zh-general-list').hide();
				return;
			}

	        obj = this.$refs.ques_user.children;
	        

	        var getarr = new Array();
	        var ansarr = new Array();
	        var quesarr = new Array();
	        	for(var i=0 ;i<obj.length;i++){
	        		getarr.push($(obj).eq(i).attr('user-id'));
	        		ansarr.push($(obj).eq(i).attr('answer-id'));
	        		quesarr.push($(obj).eq(i).attr('ques-id'));
	        	}
	        
		        //修改回答的用户
		        $.get('/index.php/Topic/getansweruser',{'useridarr':getarr},function(m,s){
		        	if(s == 'success'){
		        		for(var i in m){
		        			//todo 修改个人的 href 
		        			$('.summary-wrapper').eq(i).find('span').eq(0).text(m[i][getarr[i]].nickName)
		        			
		        			if(m[i][getarr[i]].autograph == undefined){
		        				$('.summary-wrapper').eq(i).find('span').eq(1).text('').removeClass('bio')
		        			}else{
		        				$('.summary-wrapper').eq(i).find('span').eq(1).text(m[i][getarr[i]].autograph);
		        			}
		        		}
		        	}
		        })
		        //修改本用户是否关注了该问题和是否感谢该回答
		        $.get('/index.php/Rcv/isthx_isatten',{'ansarr':ansarr,'quesarr':quesarr},function(m,s){
		        	if(s == 'success'){
		        		for(var i in m.retthx){
		        			if(m.retthx[i] == 1){
		        				$('.zh-general-list').children('div.feed-item').eq(i).find('[data-thanked]').attr('data-thanked','true').html('<i class="z-icon-thank"></i>取消感谢')
		        			}
		        		}
		        		for(var i in m.retatten){
		        			if(m.retatten[i] == 1){
		        				$('.zh-general-list').children('div.feed-item').eq(i).find('.follow-link').text('取消关注').removeClass('zg-follow').addClass('zg-unfollow');
		        			}
		        		}
		        	}
		        })
			

			



	    }

	      
	})

	$(document).on('focus','[gre-focus]',function(){
		$(this).next().show();
	})

	$(document).on('click','[data-key]',function(){
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
				}
			});
		}
		

	})

	$(document).on('click','.js-showall',function(e){
		vm.showall('',e);
	})

	


})