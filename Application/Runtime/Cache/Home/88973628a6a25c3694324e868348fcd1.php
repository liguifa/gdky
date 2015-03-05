<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<<<<<<< HEAD
	<meta name="keywords"content="大连工业大学开源社区,大连工业大学,工业大学,工大,开源,开源社区,社区,高校开源社区,工大开源社区" />
	<meta name="description" content="工大开源社区 www.gdky.top 全国高校最知名的开源社区之一，是校内开源爱好者建立，我们传播开源的理念，推广开源项目，为 计算机技术爱好者 开发者提供了一个发现、使用、并交流开源技术的平台，旨在学习和研究开源软件技术，宣传和推广开源软件的应用和开发，营造良好的计算机技术学习氛围。" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>登陆</title>
	<script type="text/javascript" src="/Public/Js/jquery.min.js"></script>
	<script type="text/javascript" src="/Public/Js/global.js"></script>
	<link href="/Public/Css/global.css" rel='stylesheet' type="text/css" />
	<link href="/Public/Css/login.css" rel='stylesheet' type="text/css" />
=======
	<title>登陆</title>
	<script type="text/javascript" src="/html/Public/Js/jquery.min.js"></script>
	<script type="text/javascript" src="/html/Public/Js/global.js"></script>
	<link href="/html/Public/Css/global.css" rel='stylesheet' type="text/css" />
	<link href="/html/Public/Css/login.css" rel='stylesheet' type="text/css" />
>>>>>>> d7752944db3380b28c1bd0b0f5bd9d9a25a956de
	<script type="text/javascript">
		$("#login_btn").ready(function(){
			$("#login_btn").click(function(){
				$.ajax({
					type:'post',
<<<<<<< HEAD
					url:"<?php echo U('/Home/User/LoginIn');?>",
					contentType: "application/x-www-form-urlencoded; charset=utf-8", 
=======
					url:'/html/index.php/Home/User/LoginIn',
>>>>>>> d7752944db3380b28c1bd0b0f5bd9d9a25a956de
					data:{
						user:$("#username").val(),
						pwd:$("#password").val(),
						isRemember:$("#remember").attr("checked")
					},
					success:function(data)
					{
						$("#login_btn").text("登陆");
						data=JSON.parse(data);
						if(data.status)
						{
							setLogin(data.message);
<<<<<<< HEAD
							// $.ajax({
							// 	type:"get",
							// 	url:"http://api.duoshuo.com/sites/join.jsonp",
							// 	dataType: 'jsonp',
							// 	data:{
							// 		short_name:"liguifa.duoshuo.com",
							// 		secret:"5840bb57a711a1857d594fe659bbe994",
							// 		access_token:"1",
							// 		user:{"user_key":"1","name":"liguifa"}
							// 	},
							// 	success:function()
							// 	{
							// 		alert(1);
							// 	}
							// });
=======
>>>>>>> d7752944db3380b28c1bd0b0f5bd9d9a25a956de
							history.back();
						}
						else
						{
							alert(data.message);
						}
					}
				});
				$("#login_btn").text("登陆中...");
			});
			
		});
	</script>
</head>
<body>
<div id="page">
		<script type="text/javascript">
			getData("header");
		</script>
		<div id="content">
			<div id="login">
<<<<<<< HEAD
				<div id="login_left_top">
					<h2>登陆开源工大</h2>
				</div>
=======
			<div id="login_left_top">
						<h2>登陆开源工大</h2>
					</div>
>>>>>>> d7752944db3380b28c1bd0b0f5bd9d9a25a956de
				<div id="login_left">
					<div id="login_left_button">
						<label>登陆邮箱：</label>
						<input type="text" class="input_text" id="username" placeholder="请填写注册时所用的邮箱，必填" /><br /><br />
						<label>登陆密码：</label>
						<input type="password" class="input_text" id="password" placeholder="请填写你的登陆密码，必填" /><label><a href="#">忘记密码？<a></label><br />
						<input type="checkbox" name="remember" id="remember" value="记住我" /><label for="remember">记住我</label>
						<button type="button" class="input_button" id="login_btn">登陆</button>
					</div>
					<div id="login_left_other">
						<h4>还可以使用其他帐号登录 （请点击相应图标进入登录页面）：</h4>
						<ul>
<<<<<<< HEAD
							<li><a href="http://www.baidu.com"><img src="/Public/Images/qq_login.gif" /></a></li>
=======
							<li><a href="http://www.baidu.com"><img src="/html/Public/Images/qq_login.gif" /></a></li>
>>>>>>> d7752944db3380b28c1bd0b0f5bd9d9a25a956de
						</ul>
					</div>
				</div>
				<div id="login_right">
					没有帐号？ <a href="#">注册新会员</a>
					<ul>
						<li>登录后可以？</li>
						<li>1.分享的开源软件和IT技术心得</li>
						<li>2.参与开源软件/新闻的讨论和评论</li>
						<li>3.与技术人士进行讨论和交流</li>
						<li>4.发布招聘信息、找工作</li>
					</ul>
				</div>
			</div>
		</div>
		<script type="text/javascript">
			getData("footer");
		</script>
	</div>
</body>
</html>