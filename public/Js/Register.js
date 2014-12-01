var formInput=new Array()
formInput["username"]=false;
formInput["email"]=false;
formInput["password"]=false;
formInput["rePassword"]=false;
formInput["blogTheme"]=true;
formInput["yzm"]=false;
var time;
$(document).ready(function()
{
	// 验证用户输出合法性
	$(".input_text").ready(function()
	{
		$(".input_text").blur(function()
		{
			if(CheckInput($(this).attr("name"),$(this).val()))
			{
				$.ajax(
				{
					type:"post",
					url:"CheckForm",
					data:{
						name:$(this).attr("name"),
							value:$(this).val()
					},
					success:function(data)
					{
						data=JSON.parse(data);
						var id="#"+data.append;
						$(id).css("display","block");
						if(data.status)
						{
									
							$(id).find("img").attr("src","../../../public/Images/ok.png");
							formInput[data.append]=true;
						}
						else
						{
							$(id).find("img").attr("src","../../../public/Images/cancel.png");
							formInput[data.append]=false;
						}
						GetInputStatus();
					}
				});
			}
			else
			{
				var id="#"+$(this).attr("name");
				$(id).css("display","block");
				$(id).find("img").attr("src","../../../public/Images/cancel.png");
				formInput[$(this).attr("name")]=false;
				GetInputStatus();
			}
		});
	});

	// 更改验证码图片
	$("#yzm_img").ready(function()
	{
		$("#yzm_img").click(function()
		{
			var num=Math.random()*100;
			$(this).attr("src","../User/VerCode/"+num)
		});
	});

	// 提交注册
	$(".input_button").ready(function()
	{
		$(".input_button").click(function()
		{
			$(".input_button").text("注册中...");
			$(".input_button").attr("disabled","disabled");
			$.ajax({
				type:"post",
				url:"RegisterIn",
				data:{
					username:$("input[name='username']").val(),
					password:$("input[name='password']").val(),
					email:$("input[name='email']").val(),
					rePassword:$("input[name='rePassword']").val(),
					blogTheme:$("input[name='blogTheme']").val(),
					yzm:$("input[name='yzm']").val()
				},
				success:function(data)
				{
					data=JSON.parse(data);
					if(data.status)
					{
						$(".input_button").text("注册");
						location.href="CheckMail";
					}
					else
					{
						$(".input_button").text("注册信息有误！请核对");
						$(".input_button").removeAttr("disabled");
					}
				}
			})
		});
	});

	$("#user_image").click(function(){
		$("#subTX").trigger("click");
	});
	$("#subTX").change(function(){
		$("#submitTXForm").trigger("click");
		time=setInterval(getSetGravatarCall,10);
	});
});

function getSetGravatarCall()
{
	var data = $(window.frames["fileTX"].document).find("body").text();
	if(data!="")
	{
		clearInterval(time);
		data=JSON.parse(data);
		if(data.status)
		{
			$("#user_image").find("img").attr("src","/html/"+data.append);
			$(window.frames["fileTX"].document).find("body").text("");
			setCookie("userImage",data.append);
		}
	}
}

// 验证输入
function CheckInput(i_name,i_value)
{
	if(i_name=="password")
	{
		setCookie(i_name,i_value);
	}
	if(i_name=="rePassword")
	{
		return i_value==getCookie("password");
	}
	return CheckUsername(GetRegex(i_name),i_value);
}

// 获取验证正则
function GetRegex(i_name)
{
	switch(i_name)
	{
		case "username":return new RegExp(".{1,15}");
		case "email":return new RegExp("[0-9a-zA-Z]*@[0-9a-zA-Z]{1,10}\.com");
		case "password":return new RegExp("[0-9a-zA-Z]{6,15}");
		case "rePassword":return new RegExp("[0-9a-zA-Z]{6,15}");
		case "blogTheme":return new RegExp("[0-9]*");
		case "yzm":return new RegExp("[0-9]{4}");
	}
}

//调用正则验证输入
function CheckUsername(regex,i_value)
{
	return regex.test(i_value);
}

// 获取输入状况
function GetInputStatus()
{
	if(formInput["username"]&&formInput["email"]&&formInput["password"]&&formInput["rePassword"]&&formInput["blogTheme"]&&formInput["yzm"])
	{
		$(".input_button").css("background","#62AF00");
		$(".input_button").removeAttr("disabled");
	}
	else
	{
		$(".input_button").css("background","gray");
		$(".input_button").attr("disabled","disabled");
	}
}