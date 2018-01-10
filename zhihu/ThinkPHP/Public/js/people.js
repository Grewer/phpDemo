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
      el:".App-main",
      data:{
        willShow:true,
        list:'',
        type:'',
        isshowdel:false,
        delid:'',
        delele:''
      },
      methods:{
        fn:function(){
          this.willShow?(this.willShow=false,this.$refs.change.style.height = '156px'):(this.willShow=true,this.$refs.change.style.height = '52px');
        },
        over:function(){
          this.$refs.photoshow.setAttribute("class", "Mask UserAvatarEditor-mask");
      },
        out:function(){
          this.$refs.photoshow.setAttribute("class", "Mask UserAvatarEditor-mask Mask-hidden");
        },
        photo:function(){
          this.$refs.fileinput.click();
        },
        showdel:function(m,e){
          this.isshowdel = true;
          this.delid= m;
          this.delele = e

        },
        hidedel:function(){
          this.isshowdel = false;
        },
        del:function(){
          var answerid = this.delid;
          var ansnum = $('#ProfileMain').find('.Tabs-item').eq(0).find('span').text()
          var delansnum = Number(ansnum) - 1;

          $.get('/index.php/Rcv/del',{'id':answerid},function(m,s){
              if(s == 'success'){
                  v.isshowdel = false;
                  $(v.delele.target).parent().remove();
                  $('#ProfileMain').find('.Tabs-item').eq(0).find('span').text(delansnum)
              }
          })

        },

      },
      mounted:function(){
        this.$set(this.$data,'list',list);
        this.$set(this.$data,'type',type);
        if(type == 'ques'){
            $('#ProfileMain').find('a.Tabs-link').removeClass('is-active').eq(1).addClass('is-active');
            $('.List-headerText').text('我的提问')
        }else if(type == 'atten'){
            $('#ProfileMain').find('a.Tabs-link').removeClass('is-active').eq(2).addClass('is-active');
            $('.List-headerText').text('我关注的话题')
        }
      },
      components:{
        ans:{
          template:'<div class="List-item"><a href="javascript:;" @click="showdel(\'\',$event)" style="position: relative;top: 2px;float: right;">x</a>'
          +'<div class="ContentItem AnswerItem" ><h2 class="ContentItem-title">'+
          '<a target="_blank" :href="quesurl">{{this.item.quesName}}</a></h2><slot></slot>'
          +'<div class="RichContent is-collapsed"><div class="RichContent-cover" v-if="isshowimg()">'+
          '<div class="RichContent-cover-inner">'+
          '<img :src="this.item.photo" alt="cover"></div></div>'+
          '<div class="RichContent-inner"><span class="RichText CopyrightRichText-richText">{{this.item.answerContent | edit}}</span>'+
          '<button class="Button ContentItem-more Button--plain" type="button"><a :href="quesurl">阅读全文</a><svg viewBox="0 0 10 6" class="Icon ContentItem-arrowIcon Icon--arrow" width="10" height="16" aria-hidden="true" style="height: 16px; width: 10px;"><title></title><g><path d="M8.716.217L5.002 4 1.285.218C.99-.072.514-.072.22.218c-.294.29-.294.76 0 1.052l4.25 4.512c.292.29.77.29 1.063 0L9.78 1.27c.293-.29.293-.76 0-1.052-.295-.29-.77-.29-1.063 0z"></path></g></svg></button></div></div></div></div>',
          data:function(){
            return{
              quesurl:'/index.php/Ques/'+this.item.quesId,
              
            }
          },
          filters: {
            edit:function (value) {
              if (!value) return ''
              value = value.toString()
              return value.substr(0,150);
            },
          },
          methods:{
            showdel:function(m,e){
              v.showdel(this.item.id,e);
            },
            isshowimg:function(){
              if(typeof this.item.photo == 'string'){
                if(this.item.photo.length > 0){
                  return true;
                }
              }
              return false;
            }
          },
          props:['item']
        },
        ques:{
          template:'<div class="List-item"><div class="ContentItem AnswerItem" ><h2 class="ContentItem-title"><a target="_blank" :href="quesurl">{{this.item.quesName}}</a></h2></div></div>',
          data:function(){
            return{
              quesurl:'/index.php/Ques/'+this.item.quesId,
            }
          },
          methods:{
            isshowimg:function(){
              if(typeof this.item.photo == 'string'){
                if(this.item.photo.length > 0){
                  return true;
                }
              }
              return false;
            }
          },
          
          props:['item']

        },
        atten:{
          template:'<div class="List-item" ><div class="ContentItem"><div class="ContentItem-main"><div class="ContentItem-image"><img class="Avatar Avatar--large" width="60" height="60" :src="this.item.photo"></div><div class="ContentItem-head"><h2 style="line-height: 2.6;" class="ContentItem-title"><a class="TopicLink" :href="topicurl" target="_blank"><div class="Popover"><div id="Popover-67344-20002-toggle">{{this.item.topicName}}</div></div></a></h2></div></div></div></div></div>',
          data:function(){
            return{
              topicurl:'/index.php/Topic/topic/id/'+this.item.id,
            }
          },
          
          props:['item']

        }
      }
    });



 
	
 });