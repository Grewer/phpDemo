/**
 * @Author   grewer
 * @DateTime 2017-04-26
 * @version  1.0
 * @param    {String}   ){	Vue.component('my-quescom',{		template:' <div          class [description]
 * @return   {[type]}                                                 [description]
 */
$(function(){
	Vue.component('my-quescom',{
		template:' <div class="CommentItem"><div><div class="CommentItem-meta"><span class="UserLink CommentItem-avatar"><div class="Popover"><div><a :href="peopleurl" class="UserLink-link"><img style="vertical-align: middle;" width="24" height="24" :src="this.item.photo"  class="Avatar UserLink-avatar"></a></div></div></span><span class="UserLink"><a :href="peopleurl" class="UserLink-link">{{ item.nickName }}</a></span><span class="CommentItem-time">{{ this.item.qccreateTime|transtime }}</span></div><div class="RichText CommentItem-content">{{ item.commentContent }}</div></div></div>',
		data:function(){
			return{
				pinglun:1,
				peopleurl:'/index.php/people/person/personid/'+this.item.userId,
			}
		},
		filters: {
			transtime:function(gettime){
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
			}
		    
		},
		props:['item']
	})

	Vue.component('my-anslist', {
		template: '<div class="List-item":answer-id="item.id" :user_id="item.userId" ><div class="ContentItem AnswerItem"><div class="ContentItem-meta"><div class="AnswerItem-meta AnswerItem-meta--related"><div v-if="editisanony" class="AuthorInfo"><span class="UserLink AuthorInfo-avatarWrapper"><img class="Avatar AuthorInfo-avatar" width="38" height="38" src="/Public/img/head/anonymous.jpg" alt="匿名用户"></span><div class="AuthorInfo-content"><div class="AuthorInfo-title"><div class="AuthorInfo-name"><span class="UserLink">匿名用户</span></div></div></div></div><div v-else class="AuthorInfo"><span class="UserLink AuthorInfo-avatarWrapper"><div class="Popover"><div><a class="UserLink-link" :href="peopleurl"><img class="Avatar AuthorInfo-avatar" width="38" height="38" :src="item.userphoto" alt="dboy"></a></div></div></span><div class="AuthorInfo-content"><div class="AuthorInfo-title"><div class="AuthorInfo-name"><span class="UserLink"><div class="Popover"><div id="Popover-72202-15503-toggle" ><a class="UserLink-link" :href="peopleurl">{{ item.nickname }}</a></div></div></span></div></div><div class="RichText AuthorInfo-badge"> <span class="invisible"></span><span class="visible">{{item.autograph}}</span><span class="invisible"></span><i class="icon-external"></i></div></div></div></div></div><div class="RichContent RichContent--unescapable"><div class="RichContent-inner">{{item.answerContent}}  <img :src="item.photo" v-if="isshowimg" class="origin_image zh-lightbox-thumb lazy" width="600" > </div><div class="ContentItem-time">发布于 {{item.anscreateTime}}</div><div class="ContentItem-actions" is-con="0"><span><button @click="praise(\'\',$event)" class="Button VoteButton VoteButton--up" v-bind:class="{\' is-active \':this.editpraise(this.item.agropp)}" aria-label="赞同" type="button"><slot name="praisebutton"></slot>{{item.praiseNumb}}</button><button  @click="against(\'\',$event)" class="Button VoteButton VoteButton--down"   v-bind:class="{\'is-active\':this.editagainst(this.item.agropp)}"  aria-label="反对" type="button"><slot name="againstbutton"></slot></button></span><button :data-comnum="item.commentNumb"  @click="showcomment(\'\',$event)" class="Button ContentItem-action Button--plain" type="button"><slot name="addcom"></slot>{{ this.editcomment|showcomnum }}</button><button  @click="thank(\'\',$event)" class="Button ContentItem-action Button--plain" type="button"><slot name="thank"></slot>{{this.editthank(this.item.thank)}}</button></div></div>  </div></div>',
		data:function(){
			return{
			    peopleurl:'/index.php/people/person/personid/'+this.item.userId,
			    editcomment:this.item.commentNumb,
			    isshowimg:this.editanspic(this.item.photo),
			    isshowanscom:false,

			}
		},
		filters: {
			showcomnum:function(val){
				if(val == 0) return '添加评论';
				return val+'条评论';
			}
		    
		},
		computed:{
			editisanony:function(){
	  			if(this.item.anonymity == 1) return true;
	  			if(this.item.anonymity == 0) return false;
	  		},
	  		

		},
	  methods:{
		  	editanspic:function(val){
		  		if(typeof val == undefined) return false;
		  		return true;
		  	},
	  		editthank:function(val){
	  			if(val == 0) return '感谢';
	  			if(val == 1) return '已感谢';
	  		},
	  		editpraise:function(val){
	  			if(val == 1) return true;
	  			return false;
	  		},
	  		editagainst:function(val){
	  			if(val == 0) return true;
	  			return false;
	  		},
	  		praise:function(m,e){
				//点赞
				var obj;
				var is_praise;
				var answerid = $(e.target).closest('[answer-id]').attr('answer-id');
				e.target.localName == 'button'? ( obj = $(e.target)) : ( obj = $(e.target).parent());
				
				if(this.item.agropp == 0){
					//取消反对,点赞
					this.item.agropp =1;
					this.item.praiseNumb = Number(this.item.praiseNumb)+1;
					$.get('/index.php/Rcv/editpraise',{'is_edit':1,'answer_id':answerid});

				}else if(this.item.agropp == 1){
					//取消点赞
					this.item.agropp =2;
					this.item.praiseNumb = Number(this.item.praiseNumb)-1;
					$.get('/index.php/Rcv/ispraise',{'is_praise':0,'answer_id':answerid});
				}else if(this.item.agropp == 2){
					//点赞
					this.item.agropp =1;
					this.item.praiseNumb = Number(this.item.praiseNumb)+1;
					$.get('/index.php/Rcv/ispraise',{'is_praise':1,'answer_id':answerid});
				}



					
				},
				against:function(m,e){
					var obj;
					$(e.target)[0].localName == 'button' ? ( obj = $(e.target)) : ( obj = $(e.target).parent());
					var answerid = $(e.target).closest('[answer-id]').attr('answer-id');
					
					if(this.item.agropp == 0){
						//取消反对
						this.item.agropp = 2;
						$.get('/index.php/Rcv/isagainst',{'is_against':0,'answer_id':answerid});
					}else if(this.item.agropp == 1){
						//取消点赞,反对
						this.item.agropp = 0;
						this.item.praiseNumb = Number(this.item.praiseNumb)-1;
						$.get('/index.php/Rcv/editpraise',{'is_edit':0,'answer_id':answerid});
					}else if(this.item.agropp == 2){
						//反对
						this.item.agropp = 0;
						$.get('/index.php/Rcv/isagainst',{'is_against':1,'answer_id':answerid});
					}

				},
				thank:function(m,e){
					var $this = $(e.target);
					var answer_id = $(e.target).closest('[answer-id]').attr('answer-id');
					if(this.item.thank == 1){
						//取消感谢
						this.item.thank = 0
						var isthank = 0;
					}else if(this.item.thank == 0){
						//感谢
						this.item.thank = 1
						var isthank = 1;
					}

					$.get('/index.php/Rcv/thank',{'answerid':answer_id,'isthank':isthank})

			},
				showcomment:function(m,e){
					//显示评论
					var p = '<svg viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg" width="12" height="16" aria-hidden="true" class="Icon Icon--comment Icon--left" style="height: 16px; width: 12px;"><title></title> <g><path d="M7.24 16.313c-.272-.047-.553.026-.77.2-1.106.813-2.406 1.324-3.77 1.482-.16.017-.313-.06-.394-.197-.082-.136-.077-.308.012-.44.528-.656.906-1.42 1.11-2.237.04-.222-.046-.45-.226-.588C1.212 13.052.027 10.73 0 8.25 0 3.7 4.03 0 9 0s9 3.7 9 8.25-4.373 9.108-10.76 8.063z"></path></g></svg>'
					var thisdiv = $(e.target).parents('[answer-id]');
					var iscon = thisdiv.find('.ContentItem-actions').attr('is-con');
					var answer_id = thisdiv.attr('answer-id');
					var comment = '';
					var thisnum = $(e.target).attr('data-comnum');
					
					if(iscon == 0){
						$(e.target).html(p+'收起评论');
						$.get('/index.php/Rcv/getcomment',{'answerid':answer_id},function(msg,s){
							if(s == 'success'){
								if(msg != undefined){
									
									for(var i in msg){
										comment += '<div class="CommentItem"><div><div class="CommentItem-meta"><span class="UserLink CommentItem-avatar"><div class="Popover"><div id="Popover"><a class="UserLink-link" href="/index.php/People/person/personid/'+msg[i].id+'""><img style="display:block" class="Avatar UserLink-avatar" width="24" height="24" src="'+msg[i].photo+'" ></a></div></div></span><span class="UserLink"><a class="UserLink-link" href="/index.php/People/person/personid/'+msg[i].id+'"">'+msg[i].nickName+'</a></span><span class="CommentItem-time">'+vm.changetime(msg[i].comcreateTime)+'</span></div><div class="RichText CommentItem-content">'+msg[i].commentContent+'</div></div></div>'
									}

								}
								thisdiv.find('.ContentItem-actions').after(vm.beforecomment+comment+vm.aftercomment);
								
							}
						})

						thisdiv.find('.ContentItem-actions').attr('is-con','1');
						thisdiv.find('.ContentItem-actions').addClass('focusin');
					}else if(iscon == 1){
						if(thisdiv.find('.ContentItem-actions').hasClass('focusin')){
							$(e.target).html(p+thisnum+'条评论');
							//hide comment
							thisdiv.find('.Comments-container').hide();
							thisdiv.find('.ContentItem-actions').removeClass('focusin')
						}else{
							$(e.target).html(p+'收起评论');
							//show comment
							
							thisdiv.find('.Comments-container').show();
							thisdiv.find('.ContentItem-actions').addClass('focusin');
						}
					}
					
				},
				
			
	      },

	      
	  props:['item']

	})
	var vm = new Vue({
		el:"#root",
		data:{
			isattenques:'',
			hasans:'',
			list:'',
			isshowquescom:false,
			beforecomment:'<div style="height:auto !important" class="Comments-container"><div style="height:auto !important" class="Comments Comments--withEditor Comments-withPagination"><div>',
			aftercomment:' <div class="_Pager_root_2GoR _CommentBox_pagerBorder_yuO1" hidden=""></div><div class="_CommentForm_root_1-ko _CommentForm_bordered_2isg"><input id="comment" gre-focus required="写下你的评论" value="" placeholder="写下你的评论…" class="_InputBox_root_1Xwi _InputBox_empty_3_ur _InputBox_blur_3JWV" "></input><div class="_CommentForm_actions_ooEq clearfix"><button class="_CommentForm_submitButton_1N49 zg-btn-blue" addcomment>评论</button><button class="_CommentForm_cancelButton_cy3u _CommentBox_textButton_3t9_" data-key="cancel">取消</button></div></div></div></div>',
			to:0,
			quescom:'',
			queslist:'',
			quescomnumb:'',
			addanswer:'',
			isanony:0,//添加回答时是否匿名
		
		},
		filters:{
			changequescomnumb:function(val){
				if(val == 0) return '添加评论';
				return val+'条评论';
			}
		},
		methods:{
			movetoans:function(){
				var user_id = $('.App-main').attr('data-id');
				$('html, body').animate({  
                    scrollTop: $('div[user_id='+user_id+']').offset().top  
                }, 500);
			},
			isshowquesimg:function(val){
				if(val.length > 0) return true;
				return false;
				
			},
			check_hasans:function(val){
				if(val == 0) return true;
				return false;
			},
			scrolltoans:function(){
                $('html, body').animate({  
                    scrollTop: $('.AnswerAdd').offset().top  
                }, 500);
            
			},
			editanony_is:function(val){
				if(val == 1) return true;
				return false;
			},
			editanony:function(val){
				if(val == 0) return true;
				return false;
			},
			toggleanony:function(){
				this.isanony == 0 ? (this.isanony = 1,$('.AnswerAdd-toggleAnonymous').text('使用实名身份回答') ):(this.isanony = 0,$('.AnswerAdd-toggleAnonymous').text('使用匿名身份回答'));
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
			attenques:function(){
				//关注问题
				this.isattenques = true;
				var quesid = $('#root').attr('data-quesid');
				var num = $('.NumberBoard-value').text();
				$('.NumberBoard-value').text(this.changenum(num,1));
				$.get('/index.php/Rcv/attenques',{'quesid':quesid,'isatten':1});
			},
			cancelquesatten:function(){
				var quesid = $('#root').attr('data-quesid')
				var num = $('.NumberBoard-value').text();
				$('.NumberBoard-value').text(this.changenum(num,0));
				//取消关注问题
				this.isattenques = false;
				$.get('/index.php/Rcv/attenques',{'quesid':quesid,'isatten':0});
			},
			changenum:function(str,type){
				if(type == 1) return Number(str)+1;
				if(type == 0) return Number(str)-1;
			},
			showquescom:function(m,e){
				if(this.to == 0){
					var quesid = $('#root').attr('data-quesid');
					$.get('/index.php/Rcv/getquescom',{'quesid':quesid},function(msg,s){
						if(s == 'success'){
							vm.queslist = msg;
						}
					})
					$("#quescom").show();
					this.to = 1;
				}else if(this.to ==1){
					$("#quescom").show();
				}
			},
			hidequescom:function(){
				$("#quescom").hide();
				this.to = 0;
			},
			fo:function(m,e){
				//问题评论中添加评论的 focus 事件
				$(e.target).next().css('transform','scale(1)');
				$(e.target).css('width','88%');

			},
			quescomsub:function(){
				//添加问题评论
				var quesid = $('#root').attr('data-quesid');
				$.get('/index.php/Rcv/addquescom',{'quesid':quesid,'content':this.quescom});
				var obj = $('.App-main');
				var data = {
					userId:obj.attr('data-id'),
					photo:obj.attr('data-img'),
					nickName:obj.attr('data-name'),
					commentContent:vm.quescom,
					qccreateTime:vm.getnowtime(),
				}
				if(this.queslist == null){
					this.queslist = new Array();
					this.queslist.push(data);
				}else{
					this.queslist.push(data);
				}
				
				this.quescomnumb = Number(this.quescomnumb)+1;
				
			},
			getnowtime:function(){
				var time = new Date();
			   var m = time.getMonth() + 1;
			   var t = time.getFullYear() + "-" + m + "-"
			     + time.getDate() + " " + time.getHours() + ":"
			     + time.getMinutes() + ":" + time.getSeconds();
			     return t;
			},
			foanswer:function(){
				$('#placeholder-8vrrn').text('');
			},
			blanswer:function(){
				if($('#myanswer').text().length == 0){
					$('#placeholder-8vrrn').text('写回答...');
				}
			},
			subimg:function(m,e){
				$('#ans-img-sub').click()
			    $('#ans-img-sub').change(function(){
				    var val = document.getElementById('ans-img-sub').value;
					if(val != ''){
						$('#changeimg').html(val);
					}
					
			    });
				
			},
			submyanswer:function(){
				//上传图片和答案
				var fileObj = document.getElementById("ans-img-sub").files[0]; 
		        var FileController = "/index.php/Rcv/rcvanswer";  
		        var form = new FormData();
		        var anscontent = $('#myanswer').text();
		        var quesid = $('#root').attr('data-quesid');

		        form.append("anscontent",anscontent); 
		        form.append("file", fileObj); 
		        form.append("quesid",quesid);
		        form.append("isanony",vm.isanony);

		        var xhr = new XMLHttpRequest();
		        xhr.open("post",FileController, true);
		        xhr.onload = function() {};
		        xhr.send(form);
		        xhr.onreadystatechange = function() {
		            if (xhr.readyState == 4 && xhr.status == 200) {
		                if($.parseJSON(xhr.responseText).status == 'ok'){
							var obj = $('.App-main');
							var data = {
								id:obj.attr('data-id'),
								agropp:'2',
								answerContent:anscontent,
								autograph:obj.attr('data-auto'),
								anonymity:vm.isanony,
								commentNumb:'0',
								againstNumb:'0',
								nickName:obj.attr('data-name'),
								photo:$.parseJSON(xhr.responseText).imgpath,
								praiseNumb:'0',
								thank:0,
								userId:obj.attr('data-id'),
								userphoto:obj.attr('data-img'),
								anscreateTime:vm.getnowtime(),
							}
							if(vm.list == null){
								vm.list = new Array();
								vm.list.push(data);
							}else{
								vm.list.push(data);
							}
							vm.hasans = 1;
				
		                }
		            }
		        };
			}
		},
		watch:{
			quescom:function(val,oldval){
				if(val.length > 0){
					$('#quescomsub').removeAttr("disabled");
				}
				if(val.length == 0){
					$('#quescomsub').attr("disabled","disabled");
				}
			}
		},
		mounted:function(){
			this.$set(this.$data,'isattenques',isattenques);
			this.$set(this.$data,'list',DATA);
			this.$set(this.$data,'quescomnumb',quescomnumb);
			this.$set(this.$data,'hasans',hasans);
	      	
		},
		updated:function(){
			if(this.check_hasans(this.hasans) == false){
	      		//有回答
	      		var user_id = $('.App-main').attr('data-id')
	      		$('[user_id='+user_id+']').find('.RichContent-inner').after('<edit></edit>')
	      		
	      		var tmp = Vue.extend({ 
				  template: '<a @click="editanswer(\'\',$event)" href="javascript:;" class="AnswerItem-editButton"><svg viewBox="0 0 12 12" class="Icon Icon--modify Icon--left" width="14" height="16" aria-hidden="true" style="height: 16px; width: 14px;"><title></title><g><path d="M.423 10.32L0 12l1.667-.474 1.55-.44-2.4-2.33-.394 1.564zM10.153.233c-.327-.318-.85-.31-1.17.018l-.793.817 2.49 2.414.792-.814c.318-.328.312-.852-.017-1.17l-1.3-1.263zM3.84 10.536L1.35 8.122l6.265-6.46 2.49 2.414-6.265 6.46z" ></path></g></svg><span class="AnswerItem-editButtonText">修改</span></a>',
				  methods:{
				      editanswer: function(m,e){
				        	var obj = $(e.target).closest('div.RichContent')
				        	obj.hide();
				        	var old = obj.find('.RichContent-inner').text();
				        	//判断下一个是否已存在
				        	if(obj.next().attr('class') == 'AnswerForm'){
				        		obj.next().show();
				        		return false;
				        	}else{
				        		obj.after('<ansedit></ansedit>');

				        	}
				        	
				        		var bar = Vue.extend({ 
								  template: '<form style="border:1px solid #e7eaf1;" class="AnswerForm"><div class="AnswerForm-editor Input-wrapper Input-wrapper--spread Input-wrapper--large Input-wrapper--noPadding"><div class="Input Editable"><div><div class="Sticky"><div style="border-top:0" class="Editable-toolbar"><div class="Editable-controls"><button aria-label="上传图片" title="上传图片" @click="subimg" type="button" class="Button Editable-control Button--plain"><svg viewBox="0 0 20 16" width="16" height="14" aria-hidden="true" class="Icon Icon--camera" style="height: 14px; width: 16px;"><title></title><g><path d="M18.094 2H15s-1-2-2-2H7C6 0 5 2 5 2H2C0 2 0 3.967 0 3.967V14c0 2 2.036 2 2.036 2H17c3 0 3-1.983 3-1.983V4c0-2-1.906-2-1.906-2zM10 12c-1.933 0-3.5-1.567-3.5-3.5S8.067 5 10 5s3.5 1.567 3.5 3.5S11.933 12 10 12zm0 1.5c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm7.5-8c-.552 0-1-.448-1-1s.448-1 1-1 1 .448 1 1-.448 1-1 1z" ></path></g></svg></button> <span id="changeimgedit"></span></div><div style="position: relative;float: right;">是否修改图片<input type="checkbox" value="0" id="iseditimg" class="zg-addq-isanon"></div></div></div></div><div class="Dropzone RichText" style="min-height: 118px;"><div class="DraftEditor-root"><div class="public-DraftEditorPlaceholder-root"><div id="placeholder-edit"  class="public-DraftEditorPlaceholder-inner"></div></div><div class="DraftEditor-editorContainer"><div aria-describedby="placeholder-8vrrn" contenteditable="true" role="textbox" spellcheck="true" tabindex="0" id="myansweredit"  @blur="blanswer"  @focus="foanswer" class="public-DraftEditor-content" style="outline: none; white-space: pre-wrap; word-wrap: break-word;"><div><div class="Editable-unstyled"><div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr"><span>{{oldans}}<br></span></div></div></div></div></div></div></div><input id="ans-img-sub-edit" type="file" multiple="multiple" accept="image/jpg,image/jpeg,image/png" style="display: none;"></div></div><div><div class="Sticky AnswerForm-footer is-bottom"><div class="AnswerForm-status"></div><div class="AnswerForm-footerRight"><a class="AnswerForm-cancel" @click="cancel">取消</a><button @click="subnewans" type="button" class="Button AnswerForm-submit Button--primary Button--blue">修改回答</button></div></div></div></form>',
								  data:function(){
								  		return{
											oldans:''
								  		}
								  },
								  methods:{
								  		foanswer:function(){
											$('#placeholder-edit').text('');
										},
								  		cancel:function(){
								  			obj.show().next().hide()
								  		},
										blanswer:function(){
											if($('#myansweredit').text().length == 0){
												$('#placeholder-edit').text('写回答...');
											}
										},
										subimg:function(m,e){
											$('#ans-img-sub-edit').click()
										    $('#ans-img-sub-edit').change(function(){
											    var val = document.getElementById('ans-img-sub-edit').value;
												if(val != ''){
													$('#changeimgedit').html(val);
												}
												
										    });
											
										},
										subnewans:function(){
											var text = $('#myansweredit').text();
											var ansid = $(obj.closest('[answer-id]')).attr('answer-id');
											if($('#iseditimg').is(':checked') == true){
												//修改图片
												var imgobj = document.getElementById('ans-img-sub-edit');
												if(imgobj.files.length == 0){
													//去除图片
													$.get('/index.php/Rcv/editanswer_noimg',{'content':text,'ansid':ansid},function(m,s){
														if(s == 'success'){
															if(m == 'ok'){
																obj.find('img').removeAttr('src').hide();
																obj.show().next().hide();
																obj.find('.RichContent-inner').text(text);
															}
														}
													})

												}else{
													var form = new FormData();
													var fileObj = document.getElementById("ans-img-sub-edit").files[0]; 
													form.append("content",text); 
											        form.append("file", fileObj); 
											        form.append("ansid",ansid);
											        var xhr = new XMLHttpRequest();
											        xhr.open("post",'/index.php/Rcv/editanswer_editimg', true);
											        xhr.onload = function() {};
											        xhr.send(form);
											        xhr.onreadystatechange = function() {
										            	if (xhr.readyState == 4 && xhr.status == 200) {
										                	if($.parseJSON(xhr.responseText).status == 'ok'){
										                		var path = $.parseJSON(xhr.responseText).imgpath;
																var c = obj.find('img').attr('src',path).prop("outerHTML");
																obj.show().next().hide();
																obj.find('.RichContent-inner').html(text+c);
										                	}
										            	}
										        	};
												}
											}else if($('#iseditimg').is(':checked') == false){
												//不修改图片
												$.get('/index.php/Rcv/editanswer_noeditimg',{'content':text,'ansid':ansid},function(m,s){
													if(s == 'success'){
														if(m == 'ok'){
															obj.show();
															alertMsg('修改成功');
															if(typeof obj.find('img').attr('src') == 'undefined'){
																//原回答无图
																obj.find('.RichContent-inner').text(text);
															}else{
																var c = obj.find('img').prop("outerHTML");
																obj.find('.RichContent-inner').html(text+c);
															}
															

															obj.next().hide()
														}else{
															alert('error')
															window.location.reload();
														}
													}
												})
											}

										}
								  },//bar method end
								  mounted:function(){
								  	this.oldans = old
								  }

								})
								new bar().$mount('ansedit');
				      }
				  }//tmp method end

				})
				new tmp().$mount('edit');

	      	}
		}

	})

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
					var comment = '<div class="CommentItem"><div><div class="CommentItem-meta"><span class="UserLink CommentItem-avatar"><div class="Popover"><div id="Popover"><a class="UserLink-link" href="/index.php/People/person/personid/'+m.id+'""><img style="display:block" class="Avatar UserLink-avatar" width="24" height="24" src="'+m.photo+'" ></a></div></div></span><span class="UserLink"><a class="UserLink-link" href="/index.php/People/person/personid/'+m.id+'"">'+m.nickName+'</a></span><span class="CommentItem-time">'+'刚刚'+'</span></div><div class="RichText CommentItem-content">'+content+'</div></div></div>'

					var len = thisdiv.find('.Comments-withPagination').find('.CommentItem').length;
					console.log(len);
					if(len == 0){
						thisdiv.find('.Comments-withPagination').find('._Pager_root_2GoR').before(comment);
					}else{
						thisdiv.find('.Comments-withPagination').find('.CommentItem').eq(Number(len)-1).after(comment);
					}

					$(this).parent().prev().val('');
				}
			});
		}
		

	});



});