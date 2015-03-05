<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<meta name="keywords"content="大连工业大学开源社区,大连工业大学,工业大学,工大,开源,开源社区,社区,高校开源社区,工大开源社区" />
	<meta name="description" content="工大开源社区 www.gdky.top 全国高校最知名的开源社区之一，是校内开源爱好者建立，我们传播开源的理念，推广开源项目，为 计算机技术爱好者 开发者提供了一个发现、使用、并交流开源技术的平台，旨在学习和研究开源软件技术，宣传和推广开源软件的应用和开发，营造良好的计算机技术学习氛围。" />
	<title>开源问答</title>
	<link href="/Public/Css/global.css" rel='stylesheet' type="text/css" />
	<link href="/Public/Css/questions.css" rel='stylesheet' type="text/css" />
	<script type="text/javascript" src="/Public/Js/jquery.min.js"></script>
	<script type="text/javascript" src="/Public/Js/news.js"></script>
	<script src="/Public/Js/global.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function()
		{
			checkBrower("<?php echo U('/Home/Index/browserError');?>");
			Pagination(1,10);
			setNavigation(navigationMenu.questions);
		});
	</script>
</head>
<body>	
	<div id="page">
		<script type="text/javascript">
			getData("header");
		</script>
		<div id="content">
			<div id="content_left">
				<div id="content_left_class">
					<ul>
						<li value="0">最新</li>
						<li value="0">热门</li>
						<li value="0">精华</li>
					</ul>
					<div class="clear"></div>
				</div>
				<div id="content_left_content">
					<ul>
						<?php if(is_array($questions)): $i = 0; $__LIST__ = $questions;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$question): $mod = ($i % 2 );++$i;?><li>
							<div class="content_left_content_tx">
								<img src="<?php echo ($question["user_HeadImage"]); ?>" />
							</div>
							<div class="content_left_content_body">
								<h3><a href="<?php echo U('/Home/Index/postContent/pId/'.$question['post_Id'].'/page/1');?>" target="_blank"><?php echo ($question["post_Title"]); ?></a></h3>
								<p><a href="#"><?php echo ($question["user_Username"]); ?></a> 于 <?php echo ($question["post_PublicTime"]); ?> 发表在 [工具应用] 最后回复 前天 20:17</p>
							</div>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div>
				<p>
					<div class="quotes">
					</div>
				</p>
			</div>
			<div id="content_right">
					<ul>
						<li id="content_content_right_public">
							<div>
								<h3>遇到什么技术难题吗？</h3>
								<button><a href="<?php echo U('/Home/Index/Publish');?>" target="_blank">我要提问</a></button>
							</div>
						</li>
						<li class="content_content_right_forum">
							技术问答求助区<br />
							版主：hooi, zhangchao5821, houlai, omcmc, lucky.zhang, 凌云<br />
							今日：2 | 主题： 64559<br />
							版规：<br />
							诸位会员发帖前请先仔细阅读本版版规(版规位于置顶帖中)，违反版规一律按版规删除<br />
							0.提问前请搜索，老生常谈的问题别人会厌烦回答你。直接要代码的贴子会被无视。<br />
							1.明确自己需要什么，用简明正确的文字表达，不要滥用专业术语，表达不清的请截图。<br />
							2.给出代码，以及详细的出错信息，还有需要的结果，以及你努力和尝试的过程。<br />
							3.虚心，动手，动脑。google并解决95%的问题耗时3-15分钟，等待别人回答耗时5-5000分钟。<br />
						</li>
					</ul>
				</div>
		</div>
		<script type="text/javascript">
			getData("footer");
		</script>
	</div>
</body>
</html>