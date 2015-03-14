<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="/Public/Css/all.css" >
	<meta charset="utf-8">
</head>
<body>
	<div class="global">
		<div class="main-con">
			<div class="info">
				<div class="info-logo">
					<img  class="logo" src="/Public/updatafile/userImages/<?php echo ($user["user_HeadImage"]); ?>">
					<div class="info-re">
						<h3><?php echo ($user["user_Username"]); ?></h3>
						<h5><?php echo ($user["level_Name"]); ?></h5>
					</div>
				</div>
				<img class="info-pic" src="/Public/images/bg.jpg"> 
			</div>
			<div id="navinfo">
				<ul>
					<li>信息</li>
					<li>文章</li>
					<li>帖子</li>
					<li>资源</li>
				</ul>
			</div>
			<div id="info_body">
				<table>
					<tr>
						<td class="info_name">昵称:</td><td><?php echo ($user["user_Username"]); ?><a href="#">修改</a></td>
						<td class="info_name">账号:</td><td><?php echo ($user["user_Email"]); ?><a href="#">修改密码</a></td>
					</tr>
					<tr>
						<td class="info_name">等级:</td><td><?php echo ($user["level_Name"]); ?></td>
						<td class="info_name">经验:</td><td><?php echo ($user["user_Experience"]); ?></td>
					</tr>
					<tr>
						<td class="info_name">注册时间:</td><td><?php echo ($user["user_RegTime"]); ?></td>
						<td class="info_name">博客主题:</td><td>1048229044</td>
					</tr>
				</table>
			</div>
	</div>

</body>
</html>