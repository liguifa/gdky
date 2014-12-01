<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<meta charset="UTF-8" />
	<title>大连工大开源社区-开源资讯</title>
	<link href="/html/Public/Css/global.css" rel='stylesheet' type="text/css" />
	<script type="text/javascript" src="/html/Public/Js/jquery.min.js"></script>
	<script type="text/javascript" src="/html/Public/Js/news.js"></script>
	<script src="/html/Public/Js/global.js" type="text/javascript"></script>
    <script src="http://qzonestyle.gtimg.cn/qzone/app/qzlike/qzopensl.js#jsdate=20111201" charset="utf-8"></script>
    <link href="/html/Public/Css/news.css" rel='stylesheet' type="text/css" />
	<script type="text/javascript">
		$(document).ready(function()
		{
			Pagination("<?php echo ($pageIndex); ?>","<?php echo ($newsSize); ?>");
			setNavigation(navigationMenu.news);
		});
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
					<ul >
					<?php if(is_array($news)): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$new): $mod = ($i % 2 );++$i;?><li>
							<div>
								<h4><a href="<?php echo U('Home/Index/newContent/html/'.$new['new_Body']);?>"><?php echo ($new["new_Title"]); ?></a></h4>
								<div>
									<a href="<?php echo U('Home/Index/newContent/html/'.$new['new_Body']);?>"><img src="<?php echo ($new["new_Image"]); ?>" /></a>
									<p><?php echo ($new["new_Brief"]); ?></p>
									<div>
										<ul>
											<li class="content_content_left_li_time"><?php echo ($new["new_PublicTime"]); ?></li>
											<li class="content_content_left_li_share">
                                            <script type="text/javascript">
												Share("<?php echo U('Home/Index/newContent/html/'.$new['new_Body']);?>","{new.new_Brief}","<?php echo ($new["new_Title"]); ?>","<?php echo ($new["new_Image"]); ?>");
											</script>
                                            </li>
											<li class="content_content_left_li_scanNum"><?php echo ($new["new_ScanNumber"]); ?></li>
										</ul>
									</div>
								</div>
							</div>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
					<p>
						<div class="quotes">
						</div>
					</p>
				</div>
				<div id="content_content_right">
					<ul>
					    <li id="content_content_right_public">
							<div>
								<h3>有什么技术资讯吗？</h3>
								<button>我要分享</button>
							</div>
						</li>
						<li>
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
						</li>
						<li>
							<div>
							<h4>今日热门</h4>
							<?php if(is_array($hotNews)): $i = 0; $__LIST__ = $hotNews;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hotNew): $mod = ($i % 2 );++$i;?><p><a href=""><?php echo ($hotNew["new_Title"]); ?></a></p><?php endforeach; endif; else: echo "" ;endif; ?>
							</div>
						</li>
						<li>
							<div>
							<h4>文章</h4>
							<p>11111111</p>
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