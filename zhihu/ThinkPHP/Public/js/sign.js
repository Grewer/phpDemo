/**
 * @Author   Grewer
 * @DateTime 2017-03-10
 * @version  1.0
 * @return   {[type]}   [description]
 */
+(function() {

    $(document).on('click', '[data-active-index]', function(e) {
        if (e.target.nodeName.toLowerCase() === 'a') {
            if (e.target.text === '注册') {
                switch_type('1',$(this));
            } else if (e.target.text === '登录') {
                switch_type('2',$(this));
            } else {
                return;
            }
	    }

    });

    function switch_type (type,obj) {
        if (type === '1') {
            $("[data-za-module = 'SignUpForm']").show();
            $("[data-za-module = 'SignInForm']").hide();
            obj.children('a').eq(0).attr('class','active');
            obj.children('a').eq(1).attr('class','');
            obj.attr('data-active-index','0');
        } else if (type === '2') {
            $("[data-za-module = 'SignUpForm']").hide();
            $("[data-za-module = 'SignInForm']").show();
            $("[data-za-module = 'Captcha']").show();
            obj.children('a').eq(0).attr('class','');
            obj.children('a').eq(1).attr('class','active');
            obj.attr('data-active-index','1');
        } else {
            return;
        }
    };

    


}());

$(function(){
    $('input').on('focus',function(){
        $(this).siblings('label').fadeOut('normal',function(){
            $(this).remove();
        })
    });

	function check_isnull(obj,type){
        var msg = '';
        switch (type)
        {
            case 1:
            msg = '请填写手机号或邮箱';
            break;
            case 2:
            msg = '请填写密码';
            break;
            case 3:
            msg = '请填写验证码';
            break;
            case 4:
            msg = 'email 对应的账户不存在';
            break;
            case 5:
            msg = '帐号或密码错误';
            break;
            case 6:
            msg = '验证码错误';
            break;
            case 7:
            msg = '请填写昵称';
            break;
            case 8:
            msg = '密码少于6位';
            break;
            case 9:
            msg = '账户已存在';
            break;
            case 10:
            msg = '邮箱错误';
            break;
            default:
            msg = '请填写此字段';
        }
        if(obj.next().is('label')){
                return false;
            }else{
                obj.after("<label class='error is-visible'>"+msg+"</label>");
                return false;
            }

	};
    document.onkeydown = function (e) { 
        var theEvent = window.event || e; 
        var code = theEvent.keyCode || theEvent.which; 
        if (code == 13) { 
            if($('.view-signup').css('display') == 'block'){
                $('#submit_signup').click();
            }else{
                $("#submit_signin").click(); 
            }
            
        } 
    }  


	$('#submit_signin').click(function(){
		var account = $("[name = 'account']");
		if(account.val() == ''){
			if(!check_isnull(account,1)){
                return false;
            }
		};
        var password = $("[name = 'password']");
        if(password.val() == ''){
            if(!check_isnull(password,2)){
                return false;
            }
        }
        var verify = $("[name = 'verify']");
        if(verify.val() == ''){
            if(!check_isnull(verify,3)){
                return false;
            }
        }
    	var form = $('#signin').serialize();
    	$.ajax({

				cache: true,

				type: "POST",

				url:'/index.php/sign/signin_check',

				data:form,

				async: true,

			    error: function(request) {

			        alert("Connection error");

			    },

			    success: function(data) {
                    // console.log(data);
                    if(data.status == '0' && data.info =='accountnull'){
                        check_isnull($("[name = 'account']"),4);
                    }
                    if(data.status == '0' && data.info == 'passworderror'){
                        check_isnull($("[name = 'password']").eq(0),5);
                    }
                    if(data.status == '0' &&data.info == 'verifyerror'){
                        check_isnull($("[name = 'verify']"),6);

                    }
                    if(data.status == '1' &&data.info == 'success'){
                        window.location.href = "/";
                    }
                    
			    }

			});

    });//signin

    $('#submit_signup').click(function(){
        var fullname = $("[name = 'fullname']");
        if(fullname.val() == ''){
            if(!check_isnull(fullname,7)){
                return false;
            }
        };
        var email = $("[name = 'email']");
        if(email.val() == ''){
            if(!check_isnull(email,1)){
                return false;
            }
        }

        var reg = /^[A-Za-zd]+([-_.][A-Za-zd]+)*@([A-Za-zd]+[-.])+[A-Za-zd]{2,5}$/; 
        isok= reg.test(email.val());
        if (!isok) {
            if(!check_isnull(email,10)){
                return false;
            }
            return false;
        }

        var password = $("[name = 'up-password']");
        if(password.val() == ''){
            if(!check_isnull(password,2)){
                return false;
            }

        }

        if(password.val().length < 6){
            check_isnull(password,8);
            return false;
        }
        

       var form = $('#signup').serialize();
       
       $.ajax({

                cache: true,

                type: "POST",

                url:'/index.php/sign/signup_check',

                data:form,

                async: true,

                error: function(request) {

                    alert("Connection error");

                },

                success: function(data) {
                    // console.log(data);
                    if(data.status == '0' && data.info =='hasexist'){
                        check_isnull($("[name = 'email']"),9);
                    }
                    

                    
                    if(data.status == '1' &&data.info == 'success'){
                        window.location.href = "/index.php/People/edit";
                        
                    }
                    
                }

            });


    })//signup
})

function changing(){
    document.getElementById('checkpic').src="/index.php/Home/Sign/verify_c?"+Math.random();
} 


