/**
 * @Author   grewer
 * @DateTime 2017-04-06
 * @version  1.0
 * @param    {Vue}      ){                                 var u [description]
 * @param    {[type]}   methods:{                                              photo:function(){                                          this.$refs.fileinput.click();        } [description]
 * @param    {[type]}   over:function(m){                                                          for(var i in this.rela [description]
 * @return   {[type]}                      [description]
 */
$(function(){
     var u = new Vue({
      el:'#edit',
      data:{
        male:"male",
        female:'',
        co_del:false,
        ed_del:false,
        sexShow:true,
        autoShow:true,
        introShow:true,
        coShow:true,
        edShow:true,
        rela:{
          1:sex_is_set = true,
          2:auto_is_set =true,
          3:intro_is_set = true
        }
      },
      methods:{
        photo:function(){
          this.$refs.fileinput.click();
        },
        over:function(m){
          for(var i in this.rela){
            if(i == m){
              this.rela[i] = false;
              break;
            }
          }
          
          
        },
        out:function(m){
          for(var i in this.rela){
            if(i == m){
              this.rela[i] = true;
              break;
            }
          }
          
        },
        show:function(m){
          switch(m){
            case '1':
              this.sexShow = false;
              break;
            case '2':
              this.autoShow = false;
              break;
            case '3':
              this.introShow = false;
              break;
            case '4':
              this.coShow = false;
              break;
            case '5':
              this.edShow = false;
              break;
          }
          

        },
        hide:function(m){
          switch(m){
            case '1':
              this.sexShow = true;
              break;
            case '2':
              this.autoShow = true;
              break;
            case '3':
              this.introShow = true;
              break;
            case '4':
              this.coShow = true;
              break;
            case '5':
              this.edShow = true;
              break;
          }
        },
        focus:function(m,e){
          if(e.target.localName === 'input'){
            m == '1' ? e.target.parentNode.setAttribute('class','HeadlineField-input Input-wrapper is-focus'):e.target.parentNode.setAttribute('class','Field-input Input-wrapper is-focus');
            }
        },
        blur:function(m,e){
          if(e.target.localName === 'input'){
            m == '1' ? e.target.parentNode.setAttribute('class','HeadlineField-input Input-wrapper'):e.target.parentNode.setAttribute('class','Field-input Input-wrapper');
          }
        },
        sub_string:function(obj){
          if(obj == '·'){
            obj = '';
          }else if(obj.substr(0,1) == '·'){
            obj = obj.substring(1);
          }else if(obj.substr(-1,1) == '·'){
            obj = obj.substring(0,obj.length-1);
          }
            return obj;
        },
        showbac:function(m){
          m == '1'?(this.$refs.co.setAttribute('class','Field-card Field-hoveredCard'),this.co_del = true):(m == '2'?(this.$refs.ed.setAttribute('class','Field-card Field-hoveredCard'),this.ed_del = true):0);
        },
        hidebac:function(m){
          m == '1'?(this.$refs.co.setAttribute('class','Field-card'),this.co_del = false):(m=='2'?(this.$refs.ed.setAttribute('class','Field-card'),this.ed_del = false):0);
        },
        del:function(m,e){
          if(m == 1){
            var obj = e.target.parentNode;
            $(obj).remove();
            $.get('del',{'genre':m});

          }else if(m == 2){
            var obj = e.target.parentNode;
            $(obj).remove();
            $.get('del',{'genre':m});
          }

        },
        getRadioBoxValue:function(radioName) { 
          var obj = document.getElementsByName(radioName);
            for(i=0; i<obj.length;i++)    {
             if(obj[i].checked){ 
                     return   obj[i].value; 
             } 
          }         
          return "undefined";       
        },
        //修改值
        edit:function(msg){
          var $this =this;
          if(msg == 1){
            //性别
            var gender = this.getRadioBoxValue('gender');
            if(gender != "undefined"){
              $.get('value',{'sex':gender},function(m,s){
                if(s == 'success'){
                  if(m == 'ok'){
                    alertMsg('修改成功');
                    async(msg).then(function(){
                      $this.$refs.sex.innerText = gender;
                    });
                  }else{
                    alertMsg('修改失败');
                  }
                }else{
                  alertMsg('传输失败');
                }
              });
            }else{
              alertMsg('请选择您的性别');
            }
          }else if(msg == 2){
            //签名
            var auto = $this.$refs.auto.value;
            $.get('value',{'auto':auto},function(m,s){
              if(s == 'success'){
                if(m == 'ok'){
                    alertMsg('修改成功');
                    async(msg).then(function(){
                      $this.$refs.autotext.innerText = auto;
                    });
                  }else{
                    alertMsg('修改失败');
                  }
              }else{
                  alertMsg('传输失败');
              }
            })

          }else if(msg == 3){
            //简介
            var intro = $this.$refs.intro.value;
            $.get('value',{'intro':intro},function(m,s){
              if(s == 'success'){
                if(m == 'ok'){
                    alertMsg('修改成功');
                    async(msg).then(function(){
                      $this.$refs.introtext.innerText = intro;
                    });
                  }else{
                    alertMsg('修改失败');
                  }
              }else{
                  alertMsg('传输失败');
              }
            })
          }else if(msg ==4){
            var com = $(this.$refs.coform).find('input').eq(0).val();
            if(com != ''){
               var posi = $(this.$refs.coform).find('input').eq(1).val() || '';
               $.get('value',{'com':com,'posi':posi},function(m,s){
              if(s == 'success'){
                if(m == 'ok'){
                    alertMsg('修改成功');
                    async(msg).then(function(){
                      $this.$refs.coedit.innerHTML = ''+com+'<span class="Field-dot">·</span>'+posi+'';
                    });
                  }else{
                    alertMsg('修改失败');
                  }
              }else{
                  alertMsg('传输失败');
              }
            })
            }else{
              alertMsg('请填写公司');
            }

          }else if(msg == 5){
            var sc = $(this.$refs.edform).find('input').eq(0).val();
            if(sc != ''){
               var ma = $(this.$refs.edform).find('input').eq(1).val() || '';
               $.get('value',{'sc':sc,'ma':ma},function(m,s){
              if(s == 'success'){
                if(m == 'ok'){
                    alertMsg('修改成功');
                    async(msg).then(function(){
                      $this.$refs.ededit.innerHTML = ''+sc+'<span class="Field-dot">·</span>'+ma+'';
                    });
                  }else{
                    alertMsg('修改失败');
                  }
              }else{
                  alertMsg('传输失败');
              }
            })
            }else{
              alertMsg('请填写学校');
            }
          
          }

          
          function async(msg){
            var p = new Promise(function(resolve,reject){
                $this.hide(msg);
                resolve();
            });
            return p;
          }
        },
        


      },//methods-endu
      mounted:function(){
        var co = this.$refs.co.innerText;
        var ed = this.$refs.ed.innerText;
        
        if(co.length == 2){
            $(this.$refs.co).remove();
         }
         if(ed.length == 2){
            $(this.$refs.ed).remove();
         }
         /*co = this.sub_string(co);
         ed = this.sub_string(ed);*/
         
      },
      


  });

 
	
 });