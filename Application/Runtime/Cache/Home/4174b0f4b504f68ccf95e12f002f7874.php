<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<meta name="keywords"content="大连工业大学开源社区,大连工业大学,工业大学,工大,开源,开源社区,社区,高校开源社区,工大开源社区" />
	<meta name="description" content="工大开源社区 www.gdky.top 全国高校最知名的开源社区之一，是校内开源爱好者建立，我们传播开源的理念，推广开源项目，为 计算机技术爱好者 开发者提供了一个发现、使用、并交流开源技术的平台，旨在学习和研究开源软件技术，宣传和推广开源软件的应用和开发，营造良好的计算机技术学习氛围。" />
	<title>开源茶社</title>
	<link href="/Public/Css/global.css" rel='stylesheet' type="text/css" />
	<link href="/Public/Css/teahouse.css" rel='stylesheet' type="text/css" />
	<script type="text/javascript" src="/Public/Js/jquery.min.js"></script>
	<script src="/Public/Js/global.js" type="text/javascript"></script>
	<script type="text/javascript" src="/Public/Js/news.js"></script>
	<script type="text/javascript">
		$(document).ready(function()
		{
			checkBrower("<?php echo U('/Home/Index/browserError');?>");
			Pagination(1,10);
			setNavigation(navigationMenu.teahouse);
		});
	</script>
</head>
<body>
	<div id="page">
		<script type="text/javascript">
			getData("header");
		</script>
		<div id="content">
			<!-- <div id="content_left">
				<ul>
					<li>国产开源软件</li>
					<li class="content_left_active">开源文化</li>
					<li>国产开源软件</li>
					<li>国产开源软件</li>
					<li>国产开源软件</li>
					<li>国产开源软件</li>
				</ul>
			</div> -->
			<div id="content_right">
				<div id="content_right_title">
					<ul>
						<li><a href="#">最新</a></li>
						<li><a href="#">热门</a></li>
						<li><a href="#">精华</a></li>
					</ul>
					<button id="public">发帖</button>
					<div class="clear"></div>
				</div>
				<table>
					<thead>
						<tr><th></th><th>作者</th><th>回复/查看</th><th>最后发表</th></tr>
					</thead>
					<tbody>
						<?php if(is_array($teahouses)): $i = 0; $__LIST__ = $teahouses;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$teahouse): $mod = ($i % 2 );++$i;?><tr>
							<td><a href="<?php echo U('/Home/Index/postContent/pId/'.$teahouse['post_Id'].'/page/1');?>" target="_blank"><?php echo ($teahouse["post_Title"]); ?></a></td><td><?php echo ($teahouse["user_Username"]); ?></td><td>1/23</td><td>2014-9-22 00:00</td>
						</tr><?php endforeach; endif; else: echo "" ;endif; ?>
					</tbody>
					<tfoot>
						<tr>
							<td colspan="4"><p>
								<div class="quotes">
								</div>
							</p></td>
						</tr>
					</tfoot>
				</table>
			</div>
			<div class="clear"></div>
		</div>
		<script type="text/javascript">
			getData("footer");
		</script>
	</div>
</body>
</html>