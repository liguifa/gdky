<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<meta name="keywords"content="大连工业大学开源社区,大连工业大学,工业大学,工大,开源,开源社区,社区,高校开源社区,工大开源社区" />
	<meta name="description" content="工大开源社区 www.gdky.top 全国高校最知名的开源社区之一，是校内开源爱好者建立，我们传播开源的理念，推广开源项目，为 计算机技术爱好者 开发者提供了一个发现、使用、并交流开源技术的平台，旨在学习和研究开源软件技术，宣传和推广开源软件的应用和开发，营造良好的计算机技术学习氛围。" />
	<title>开源分享</title>
	<link href="/Public/Css/global.css" rel='stylesheet' type="text/css" />
	<link href="/Public/Css/shares.css" rel='stylesheet' type="text/css" />
	<script type="text/javascript" src="/Public/Js/jquery.min.js"></script>
	<script src="/Public/Js/global.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function()
		{
			checkBrower("<?php echo U('/Home/Index/browserError');?>");
			//Pagination(1,10);
			setNavigation(navigationMenu.shares);
		});
	</script>
</head>
<body>
	<div id="page">
		<script type="text/javascript">
			getData("header");
		</script>
		<div id="content">
			<ul>
				<?php if(is_array($shares)): $i = 0; $__LIST__ = $shares;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$share): $mod = ($i % 2 );++$i;?><li>
					<div class="content_body">
						<div class="content_body_img">
							<img src="/Public/updatafile/images/13072957_Jxui.png" />
						</div>
						<div class="content_body_con">
							<p><a href="<?php echo U('Home/Index/newContent/html/'.$share['technology_Url']);?>" target="_blank"><?php echo ($share["technology_Title"]); ?></a><br /><?php echo ($share["technology_Brief"]); ?>.</p>
						</div>
					</div>
				</li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
			<div id="content_add">
				<button type="button">加载更多</button>
			</div>
		</div>
		<script type="text/javascript">
			getData("footer");
		</script>
</body>
</html>