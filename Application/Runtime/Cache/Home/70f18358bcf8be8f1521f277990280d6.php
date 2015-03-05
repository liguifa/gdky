<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<meta charset="UTF-8" />
	<meta name="keywords"content="大连工业大学开源社区,大连工业大学,工业大学,工大,开源,开源社区,社区,高校开源社区,工大开源社区" />
	<meta name="description" content="工大开源社区 www.gdky.top 全国高校最知名的开源社区之一，是校内开源爱好者建立，我们传播开源的理念，推广开源项目，为 计算机技术爱好者 开发者提供了一个发现、使用、并交流开源技术的平台，旨在学习和研究开源软件技术，宣传和推广开源软件的应用和开发，营造良好的计算机技术学习氛围。" />
	<title>大连工大开源社区-开源项目</title>
	<link href="/Public/Css/global.css" rel='stylesheet' type="text/css" />
	<link href="/Public/Css/technology.css" rel='stylesheet' type="text/css" />
	<link href="/Public/Css/projects.css" rel='stylesheet' type="text/css" />
	<script type="text/javascript" src="/Public/Js/jquery.min.js"></script>
	<script type="text/javascript" src="/Public/Js/news.js"></script>
	<script src="/Public/Js/global.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function()
		{
			checkBrower("<?php echo U('/Home/Index/browserError');?>");
			Pagination(1,10);
			setNavigation(navigationMenu.projects);
		});
		var time;
		var pop_y;
		$(document).ready(function(){
			$("#more").click(function(){
				var w=$("body").width();
				var h=$("body").height();
				var pop_x=(w-500)/2;
				pop_y=(h-600)/2-100;
				var html="<div id='mask' style='width:"+w+"px;height:"+h+"px;background:#000;position:fixed;top:0px;left:0px;filter:alpha(opacity=80);-moz-opacity:0.8;-webkit-opacity:0.8;' onclick='del()'></div><div id='pop' style='position:fixed;top:-600px;left:"+pop_x+"px;background:#fff;width:500px;height:600px;'></div>";
				$("body").append(html);
				time=setInterval("move()",1);
			});
			$(".px").removeClass("px_active");
			$(".px[data-id=<?php echo ($type_id); ?>]").addClass("px_active");
		});
		function move()
		{
			var t=parseInt($("#pop").css("top").split("px")[0]);
			t+=12;
			$("#pop").css("top",t+"px");
			if(t>=pop_y)
			{
				clearInterval(time);
			}
		}
		function del()
		{
			$("#pop").remove();
			$("#mask").remove();
		}
	</script>
</head>
<body>
	<div id="page">
		<script type="text/javascript">
			getData("header");
		</script>
		<div id="content">
			<div id="content_content">
				<div id="content_content_left">
					<div id="content_content_left_div">
					<ul class="content_content_left_div_ul">
						<li class="px" id="content_content_left_first"><h2>开源技术</h2></li>
						<li class="px type px_active" data-id="0"><a href="?type=0">全部</a></li>
						<?php if(is_array($forums)): $i = 0; $__LIST__ = $forums;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$forum): $mod = ($i % 2 );++$i;?><li class="px type" data-id="<?php echo ($forum["forum_Id"]); ?>"><a href="?type=<?php echo ($forum["forum_Id"]); ?>"><?php echo ($forum["forum_Name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
						<li class="px type">更多</li>
					</ul>
					<ul class="content_content_left_div_ul">
						<?php if(is_array($projects)): $i = 0; $__LIST__ = $projects;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$project): $mod = ($i % 2 );++$i;?><li class="content_content_left_div_ul_li">
								<div class="content_content_left_body_content">
									<h3><a href="<?php echo U('Home/Index/newContent/html/'.$project['technology_Url']);?>" target="_blank" ><?php echo ($project["technology_Title"]); ?></a></h3>
									<div class="content_content_left_body_tx">
									<img src="/Public/Images/tx.jpg" />
									</div>
									<p><?php echo ($project["technology_Brief"]); ?></p>
								</div>
								<ul>
									<li><a href="#"><?php echo ($project["user_Username"]); ?></a> 发布于 <?php echo ($project["technology_PublicTime"]); ?></li>
									<li><a href="#">赞<?php echo ($tech["technology_PraiseNumber"]); ?></a></li>
									<li><a href="#">踩<?php echo ($tech["technology_StampNumber"]); ?></a></li>
									<li><a href="#">分享</a></li>
									</ul>
								<div class="clear"></div>
							</li><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
					<p>
						<div class="quotes">
						</div>
					</p>
					</div>
					<p>
						<div class="quotes">
						</div>
					</p>
				</div>
				<div id="content_content_right">
					<ul>
						<li id="content_content_right_public">
							<div>
								<h3>有什么好的开源项目吗？</h3>
								<button><a href="<?php echo U('/Home/Index/Publish');?>" target="_blank">我要分享</a></button>
							</div>
						</li>
						<li class="content_content_right_forum">
							<ol>
								<li class="content_content_right_forum_title"><h2>项目分类</h2></li>
								<?php if(is_array($forums)): $i = 0; $__LIST__ = $forums;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$forum): $mod = ($i % 2 );++$i;?><li class="content_content_right_forum_forum"><a href="?type=<?php echo ($forum["forum_Id"]); ?>"><?php echo ($forum["forum_Name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
							</ol>
						</li>
						<li class="content_content_right_forum">
							<ol>
								<li class="content_content_right_forum_title"><h2>板块牛人</h2></li>
								<li class="content_content_right_forum_forum"><a href="#">大炸会</a></li>
								<li class="content_content_right_forum_forum"><a href="#">Linux</a></li>
								<li class="content_content_right_forum_forum"><a href="#">PHP</a></li>
								<li class="content_content_right_forum_forum"><a href="#">.Net</a></li>
								<li class="content_content_right_forum_forum"><a href="#">ThinkPHP</a></li>
								<li class="content_content_right_forum_forum"><a href="#">大炸会</a></li>
								<li class="content_content_right_forum_forum"><a href="#">大炸会</a></li>
							</ol>
						</li>
					</ul>
				</div>
			</div>
			<div id="clear">
			</div>
		</div>
		<script type="text/javascript">
			getData("footer");
		</script>
	</div>
</body>
</html>