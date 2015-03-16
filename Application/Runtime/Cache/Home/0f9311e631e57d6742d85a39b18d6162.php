<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta name="keywords"content="大连工业大学开源社区,大连工业大学,工业大学,工大,开源,开源社区,社区,高校开源社区,工大开源社区" />
	<meta name="description" content="工大开源社区 www.gdky.top 全国高校最知名的开源社区之一，是校内开源爱好者建立，我们传播开源的理念，推广开源项目，为 计算机技术爱好者 开发者提供了一个发现、使用、并交流开源技术的平台，旨在学习和研究开源软件技术，宣传和推广开源软件的应用和开发，营造良好的计算机技术学习氛围。" />
	<title>开源茶社</title>
	<link href="/Public/Css/global.css" rel='stylesheet' type="text/css" />
	<link href="/Public/Css/postContent.css" rel='stylesheet' type="text/css" />
	<script type="text/javascript" src="/Public/Js/jquery.min.js"></script>
	<script src="/Public/Js/global.js" type="text/javascript"></script>
	<script type="text/javascript" src="/Public/Js/news.js"></script>
	<script type="text/javascript">
		$(document).ready(function()
		{
			checkBrower("<?php echo U('/Home/Index/browserError');?>");
			//setNavigation(navigationMenu.teahouse);
		});
	</script>
</head>
<body>
	<div id="page">
		<script type="text/javascript">
			getData("header");
		</script>
		<div id="content">
			<div id="content_head">
			<button><a href="<?php echo U('/Home/Index/Publish');?>" target="_blank">发帖</a></button>
			</div>
			<table class="post_table">
				<thead>
					<tr id="table_header"><th>作者</th><th><?php echo ($study["study_Title"]); ?></th></tr>
				</thead>
				<tbody>
						<tr>
						<td class="user_info">
							<a href="/index.php/Home/Blog/index/page/info.html"><?php echo ($study["user_Username"]); ?></a>
							<div class="user_img">
								<img src="/Public/updatafile/userImages/<?php echo ($study["user_HeadImage"]); ?>">
							</div>
							<span>小白</span>
							<div class="user_jy">
								<div class="user_jd">
								<?php echo ($study["user_Experience"]); ?>
								</div>

							</div>
						</td>
						<td class="post">
							<p><?php echo ($study["study_Body"]); ?></p><br />
							<span>资源地址:</span><a href="<?php echo ($study["study_AppendFile"]); ?>" target="_blank"><?php echo ($study["study_AppendFile"]); ?></a>
   							<div class="post_hr">
   								<div><a href="#"><?php echo ($study["user_Username"]); ?></a> 发表于 <?php echo ($study["study_PublicTime"]); ?> 
   							</div>
						</td>
					</tr>
				</tbody>
				<tfoot>
				</tfoot>
			</table>
			<div id="post_page">
				<ul>
				</ul>
			</div>
			<div class="kx"></div>
		</div>
		<script type="text/javascript">
			getData("footer");
		</script>
	</div>
</body>
</html>