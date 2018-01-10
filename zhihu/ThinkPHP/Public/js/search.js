/**
 * @Author   grewer
 * @DateTime 2017-03-17
 * @version  1.0
 * @param    {Vue}      ){                var           v [description]
 * @param    {[type]}   methods:{                                           fn:function(){                                                                                                       if(this.willShow [description]
 * @param    {[type]}   over:function(){                                                     this.$refs.photoshow.setAttribute("class", "Mask         UserAvatarEditor-mask");                    }               [description]
 * @param    {[type]}   out:function(){                                                      this.$refs.photoshow.setAttribute("class", "Mask         UserAvatarEditor-mask    Mask-hidden");                                     } [description]
 * @param    {[type]}   photo:function(){                                                    this.$refs.fileinput.click(                [description]
 * @return   {[type]}                      [description]
 */
$(function(){
 var v = new Vue({
      el:".zu-main",
      data:{
        
        list:'',
        type:''
      },
      methods:{
        

      },
      mounted:function(){
        this.$set(this.$data,'list',list);
        this.$set(this.$data,'type',type);
        if(type == 'answer'){
          $('.search-tabs').find('li').removeClass('active').eq(1).addClass('active');
        }
        if(list == null){
          $('.zu-main-content').after('暂无结果');
        }
        
      },
      components:{
        question:{
          template:'<div class="List-item"><div class="ContentItem AnswerItem"><h2 class="ContentItem-title"><a target="_blank" :href="quesurl" v-html="this.item.quesName"></a></h2></div></div>',
          data:function(){
            return{
              quesurl:'/index.php/Ques/'+this.item.quesId,
            }
          },
          
          methods:{
            
          },

          props:['item']
        },
        answer:{
          template:'<li class="item clearfix" data-type="Answer" data-za-index="" data-za-module="AnswerItem"><div class="title"><a target="_blank" :href="quesurl" class="js-title-link">{{ this.item.quesName }} </a></div><div class="content"><div class="entry answer"><div class="entry-left hidden-phone"><a class="zm-item-vote-count hidden-expanded js-expand js-vote-count" data-bind-votecount="">{{this.item.praiseNumb}}</a></div><div class="entry-body"><div class="entry-meta"><div class="author-line summary-wrapper"><span class="author-link-line"><a class="author author-link" :href="peopleurl">{{this.item.username}}</a><span class="icon icon-badge-best_answerer icon-badge" ></span></span><span class="badge-summary"><a :href="peopleurl" target="_blank">{{this.item.autograph}}</a></span></div></div><div class="entry-content js-collapse-body"><div class="summary hidden-expanded" v-html="cutart"></div><a class="toggle-expand inline" :href="quesurl">显示全部</a></div></div></div></li>',
          data:function(){
            return{
              quesurl:'/index.php/Ques/'+this.item.quesId,
              peopleurl:'/index.php/people/person/personid/'+this.item.userId,
              cutart:this.editart(this.item.answerContent),
            }
          },
          methods:{
            editart:function (value) {
              if (!value) return ''
              value = value.toString()
              return value.substr(0,200)+'...';
            }
          },
          
          props:['item']

        },
        
      }
    });



 
	
 });