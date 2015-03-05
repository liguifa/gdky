<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
<<<<<<< HEAD
	<meta name="keywords"content="大连工业大学开源社区,大连工业大学,工业大学,工大,开源,开源社区,社区,高校开源社区,工大开源社区" />
	<meta name="description" content="工大开源社区 www.gdky.top 全国高校最知名的开源社区之一，是校内开源爱好者建立，我们传播开源的理念，推广开源项目，为 计算机技术爱好者 开发者提供了一个发现、使用、并交流开源技术的平台，旨在学习和研究开源软件技术，宣传和推广开源软件的应用和开发，营造良好的计算机技术学习氛围。" />
	<meta http-equiv="Refresh" content="5;URL=/index.php/Home/Index/home.html" />
	<script type="text/javascript" src="/Public/Js/jquery.min.js"></script>
	<script src="/Public/Js/global.js" type="text/javascript"></script>
=======
	<meta http-equiv="Refresh" content="5;URL=/html/index.php/Home/Index/home" />
	<script src="/html/Public/Js/global.js" type="text/javascript"></script>
>>>>>>> d7752944db3380b28c1bd0b0f5bd9d9a25a956de
	<style type="text/css">
		html{
			width:100%;
			height:100%;
		}
		body{
<<<<<<< HEAD
			background: url('/Public/Images/index.jpg') no-repeat;
			background-size: 100% 100%;
        	filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/Public/Images/index.jpg',sizingMethod='scale')\9;
=======
			background: url('/html/Public/Images/index.jpg') 100% 100% no-repeat;
>>>>>>> d7752944db3380b28c1bd0b0f5bd9d9a25a956de
			width: 100%;
			height: 100%;
			overflow: hidden;
			margin: 0px;
			padding: 0px;
		}
		#page{
			width: 100%;
			height: 100%;]
			margin: 0px;
			padding: 0px;
<<<<<<< HEAD
			position: fixed;
			top:0px;
=======
>>>>>>> d7752944db3380b28c1bd0b0f5bd9d9a25a956de
		}
		#content{
			width: 750px;
			height: 160px;
<<<<<<< HEAD
			background: url('/Public/Images/logo.png') no-repeat;
			background: url('#')\0;
			background-size: 110% 110%;
			filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/Public/Images/logo.png',sizingMethod='scale')\0;
=======
			background: url('/html/Public/Images/logo.png') no-repeat;
			background-size: 110% 110%;
>>>>>>> d7752944db3380b28c1bd0b0f5bd9d9a25a956de
			margin: auto;
			margin-top: 200px;
		}
		#footer{
			width: 0px;
			height:30px;
			background:red;
			animation:prc 5s;
			-moz-animation:prc 5s; /* Firefox */
			-webkit-animation:prc 5s; /* Safari and Chrome */
			-o-animation:prc 5s; /* Opera */
			margin: 0px;
<<<<<<< HEAD
			margin-top:150px; 
=======
			margin-top:50px; 
>>>>>>> d7752944db3380b28c1bd0b0f5bd9d9a25a956de
		}
		@keyframes prc{
			from {width:0%;}
			to {width: 100%;}
		}

		@-moz-keyframes prc /* Firefox */{
			from {width:0%;}
			to {width: 100%;}
		}

		@-webkit-keyframes prc /* Safari and Chrome */{
			from {width:0%;}
			to {width: 100%;}
		}

		@-o-keyframes prc /* Opera */{
			from {width:0%;}
			to {width: 100%;}
		}
	</style>
	<script type="text/javascript">
		setData('<?php echo ($header); ?>','<?php echo ($footer); ?>');
<<<<<<< HEAD
		$(document).ready(function(){
			checkBrower("<?php echo U('/Home/Index/browserError');?>");
			var browser=navigator.appName;
			var b_version=navigator.appVersion; 
			var version=b_version.split(";"); 
			var trim_Version=version[1].replace(/[ ]/g,""); 
			if(browser=="Microsoft Internet Explorer" && trim_Version=="MSIE8.0")
			{
				setInterval("prc()",1);
			}
		});
		function prc()
		{
			$("#footer").width($("#footer").width()+1);
		}
=======
>>>>>>> d7752944db3380b28c1bd0b0f5bd9d9a25a956de
	</script>
</head>
<body>
	<div id="page">
		<div id="header">
		</div>
		<div id="content">
		</div>
		<div id="footer">
		</div>
	</div>
</body>
</html>