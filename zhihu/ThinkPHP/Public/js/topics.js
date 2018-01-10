$(function(){
	var v = new Vue({
		el:'#main',
		data:{
			test:1,
		},
		methods:{
			load:function(topicclassid,e){
				var $this = this;
				$(this.$refs.topiclist).children('li').removeClass('current');
				$(e.target).parent().addClass('current');
				$.get('gettopic',{'id':topicclassid},function(m,s){
					if(s == 'success'){
						$($this.$refs.topictext).html('');
						for(var i in m){
							var commonhtml = '<div class="blk"><a target="_blank" href="/index.php/Topic/topic/id/'+m[i]['topicId']+'"><img src="'+m[i]['photo']+'" alt="'+m[i]['topicName']+'"><strong>'+m[i]['topicName']+'</strong></a><p>'+m[i]['topicDescribe']+'</p><a  href="javascript:;" class="follow meta-item zg-follow" topic-id="'+m[i]['topicId']+'"><i class="z-icon-follow"></i>关注</a></div></div>';
							if(i%2 != 0){
								var tophtml = '<div class="item even">';
							}else{
								var tophtml = '<div class="item">';
							}
							
							var allhtml = tophtml+commonhtml;
	                        
	                        $($this.$refs.topictext).append(allhtml);         
	                                
						}
					}
					
				})

			},
			atten:function(topicid){
				console.log(topicid);
				$.get('attentopic',{'id':topicid},function(m,s){
					if(s == 'success'){
						if(m == 0){
							alertMsg('你已关注');
						}else if(m == 1){
							alertMsg('关注成功');
						}else if(m == 3){
							alertMsg('数据错误');
						} else{
							alertMsg('error');
						}
						
					}
				})
			}
		},
		mounted:function(){
	        $(this.$refs.topiclist).children('li').first().addClass('current');
	      }
	})
	
	$(document).on('click','[topic-id]',function(){
		var id = $(this).attr('topic-id');
		v.atten(id);
	})
})