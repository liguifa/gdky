<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>我的个人博客</title>
	<link  href="/html/Public/BlogThemeThemelates/2015010511111111/style/index.css"  rel="stylesheet" type="text/css">
	<script type="text/javascript" src="/html/Public/BlogThemeThemelates/2015010511111111/javascript/jquery-2.1.1.js"></script>
	<script type="text/javascript" src="/html/Public/BlogThemeThemelates/2015010511111111/javascript/index.js"></script>
	<link rel="stylesheet" href="/html/Public/BlogThemeThemelates/2015010511111111/style/font-awesome.min.css">
	<link rel="stylesheet" href="/html/Public/BlogThemeThemelates/2015010511111111/style/buttons.css">
	   <script src="/html/Public/BlogThemeThemelates/2015010511111111/javascript/stickUp.min.js"></script>
</head>
<body>

	<div id="global">

		<nav class="siteNav  go1" id="nav"><!--侧边导航-->
			<div class="siteNav-scrollableCon">
				<ul class="siteNav-list">
					<li ><i class="icon-home icon-lager "></i>&nbsp;&nbsp;&nbsp;Home</li>
					<li><i class=" icon-folder-open-alt icon-lager"></i>&nbsp;&nbsp;Collection</li>
					<li><i class=" icon-search icon-lager"></i>&nbsp;&nbsp;Search</li>
				</ul>
				<a href="#" id="login" class="button button-block button-rounded button-primary button-large">Login</a>
				<div class="siteNav-footer">
					
					<a href="">facebook</a>
					<a href="">google+</a>
					<a href="">github</a>

				</div>
			</div>
		</nav>
		<div class="site-main go2" id="container">
			<div class="progress" id="progress"></div>
			<div class="metabar" >
			
					<img id="me" class="logo" src="/html/Public/BlogThemeThemelates/2015010511111111/images/me.JPG">
					<h1 class="logo-h1">Welcome！</h1>
			
					<a id="forkme_banner" href="https://github.com/liuhao2050">View on GitHub</a>
					<audio id="music" src="http://m1.music.126.net/OjXnJE4DRyh2i0M4XxXiZA==/2058285767208740.mp3" controls="controls" <!----autoplay="autoplay"---->></audio>
			</div>
			<nav class="navTables">
				<ul class="navTables-ul" >
					<li id="li0" class="active">全部</li>
					<li id="li1">博客</li>
					<li id="li2">信息</li>
					<li id="li3">照片</li>
					<li id="li4">视频</li>
					<li id="li5">收藏</li>
					<li id="li6">关注</li>
				</ul>
				
			</nav>
			<div class="frame">
				<iframe id="iframe" src="all.html"></iframe>
			</div>

		</div>
		
	</div>
</body>
</html>
 <script type="text/javascript">
              //initiating jQuery
              jQuery(function($) {
                $(document).ready( function() {
                	
                  //enabling stickUp on the '.navbar-wrapper' class
                  $('.navTables').stickUp();
                  $("#me").stickUp();
					
                });
              });

            </script>