<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<meta charset="UTF-8" />
	<title><?php echo ($title); ?></title>
	<script type="text/javascript" src="/Public/Js/jquery.min.js" rel="stylesheet" /></script>
	<script src="/Public/Js/global.js" type="text/javascript"></script>
	<link href="/Public/Css/global.css" rel='stylesheet' type="text/css" />
	<link href="/Public/Css/news.css" rel='stylesheet' type="text/css" />
	<link href="/Public/Css/newContent.css" rel='stylesheet' type="text/css" />
	<!-- markItUp! skin -->
	<link rel="stylesheet" type="text/css" href="/Public/lib/markitup/skins/markitup/style.css" />
	<!--  markItUp! toolbar skin -->
	<link rel="stylesheet" type="text/css" href="/Public/lib/markitup/sets/default/style.css" />
	<!-- markItUp! -->
	<script type="text/javascript" src="/Public/lib/markitup/jquery.markitup.js"></script>
	<!-- markItUp! toolbar settings -->
	<script type="text/javascript" src="/Public/lib/markitup/sets/default/set.js"></script>
</head>
<body>
	<div id="page">
		<script type="text/javascript">
			getData("header");
		</script>
		<div id="content">
			<div id="content_content">
				<div id="content_content_left">
					<h2>这是测试的</h2>
					<p>dsdsfds
					<div>
							<!-- 多说评论框 start -->
							<div class="ds-thread" data-thread-key="<?php echo ($id); ?>" data-title="<?php echo ($title); ?>" data-url="<?php echo ($url); ?>"></div>
							<!-- 多说评论框 end -->
							<!-- 多说公共JS代码 start (一个网页只需插入一次) -->
							<script type="text/javascript">
							var duoshuoQuery = {short_name:"liguifa"};
								(function() {
									var ds = document.createElement('script');
									ds.type = 'text/javascript';ds.async = true;
									ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
									ds.charset = 'UTF-8';
									(document.getElementsByTagName('head')[0] 
		 							|| document.getElementsByTagName('body')[0]).appendChild(ds);
							})();
							</script>
							<!-- 多说公共JS代码 end -->
					</div>
				</div>
				<div id="content_content_right">
					<ul>
					    <li id="content_content_right_public">
							<div>
								<h3>有文章要分享？</h3>
								<button><a href="<?php echo U('/Home/Index/Publish');?>" target="_blank">我要分享</a></button>
							</div>
						</li>
						<!-- <li>
							<div>
							<h4>资讯类别</h4>
							<table>
								<tr>
									<td>
										<p>
											<a href="">科技资讯</a>
										</p>
									</td>
									<td>
										<p>
											<a href=""><?php echo ($hotNew["new_Title"]); ?></a>
										</p>
									</td>
								</tr>
							</table>
							</div>
						</li> -->
						<li>
							<div>
							<h4>今日热门</h4>
							<?php if(is_array($hotNews)): $i = 0; $__LIST__ = $hotNews;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hotNew): $mod = ($i % 2 );++$i;?><p><a href=""><?php echo ($hotNew["new_Title"]); ?></a></p><?php endforeach; endif; else: echo "" ;endif; ?>
							</div>
						</li>
						<li>
							<div>
							<h4>板块牛人</h4>
							<?php if(is_array($users)): $i = 0; $__LIST__ = $users;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$user): $mod = ($i % 2 );++$i;?><p><a href=""><?php echo ($user["user_Username"]); ?></a></p><?php endforeach; endif; else: echo "" ;endif; ?>
							</div>
						</li>
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