<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>个人中心</title>
	<link href="/Public/Css/global.css" rel='stylesheet' type="text/css" />
	<link href="/Public/Css/login.css" rel='stylesheet' type="text/css" />
	<style>
		#user{
			float:right;
			margin-top: 8px;
		}
		#body_left{
			float:left;
			width: 30%;
			margin: 0px;
		}
		#body_center{
			float:left;
			width: 40%;
			margin: 0px;
		}
		#body_right{
			float:right;
			width: 30%;
			margin: 0px;
		}
	</style>
</head>
<body>
	<div id="page">
		<div id="content">
			<div id="header_bottom">
				<div id="header_bottom_main">
					<ul>
						<li><a href="<?php echo U('/Home/Index/home');?>">首页</a></li>
						<li><a href="<?php echo U('/Home/Index/news/pageIndex/1');?>">开源资讯</a></li>
						<li><a href="<?php echo U('/Home/Index/technology');?>">开源技术</a></li>
						<li><a href="<?php echo U('/Home/Index/projects');?>">开源项目</a></li>
						<li><a href="<?php echo U('/Home/Index/shares');?>">开源分享</a></li>
						<li><a href="<?php echo U('/Home/Index/questions');?>">开源问答</a></li>
						<li><a href="<?php echo U('/Home/Index/teahouse');?>">开源茶馆</a></li>
						<li><a href="<?php echo U('/Home/Index/blog/page/Index');?>">开源博客</a></li>
						<li id="header_bottom_main_ul_li_last"><a href="<?php echo U('/Home/Index/study');?>">学习资源</a></li>
					</ul>
					<div id="user">李贵发 你好</div>
				</div>
			</div>
			<div id="body_left">
			1
			</div>
			<div id="body_center">
			2
			</div>
			<div id="body_right">
			3
			</div>
			<div class="clear"></div>
		</div>
	</div>
</body>
</html>