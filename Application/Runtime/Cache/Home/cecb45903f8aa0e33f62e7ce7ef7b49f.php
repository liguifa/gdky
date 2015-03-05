<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<meta charset="UTF-8" />
<<<<<<< HEAD
	<meta name="keywords"content="大连工业大学开源社区,大连工业大学,工业大学,工大,开源,开源社区,社区,高校开源社区,工大开源社区" />
	<meta name="description" content="工大开源社区 www.gdky.top 全国高校最知名的开源社区之一，是校内开源爱好者建立，我们传播开源的理念，推广开源项目，为 计算机技术爱好者 开发者提供了一个发现、使用、并交流开源技术的平台，旨在学习和研究开源软件技术，宣传和推广开源软件的应用和开发，营造良好的计算机技术学习氛围。" />
	<title>大连工大开源社区-开源资讯</title>
	<link href="/Public/Css/global.css" rel='stylesheet' type="text/css" />
	<script type="text/javascript" src="/Public/Js/jquery.min.js"></script>
	<script type="text/javascript" src="/Public/Js/news.js"></script>
	<script src="/Public/Js/global.js" type="text/javascript"></script>
    <script src="http://qzonestyle.gtimg.cn/qzone/app/qzlike/qzopensl.js#jsdate=20111201" charset="utf-8"></script>
    <link href="/Public/Css/news.css" rel='stylesheet' type="text/css" />
	<script type="text/javascript">
		$(document).ready(function()
		{
			checkBrower("<?php echo U('/Home/Index/browserError');?>");
=======
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
>>>>>>> d7752944db3380b28c1bd0b0f5bd9d9a25a956de
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
<<<<<<< HEAD
								<button><a href="<?php echo U('/Home/Index/Publish');?>" target="_blank">我要分享</a></button>
							</div>
						</li>
						<!-- <li>
=======
								<button>我要分享</button>
							</div>
						</li>
						<li>
>>>>>>> d7752944db3380b28c1bd0b0f5bd9d9a25a956de
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
<<<<<<< HEAD
						</li> -->
=======
						</li>
>>>>>>> d7752944db3380b28c1bd0b0f5bd9d9a25a956de
						<li>
							<div>
							<h4>今日热门</h4>
							<?php if(is_array($hotNews)): $i = 0; $__LIST__ = $hotNews;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hotNew): $mod = ($i % 2 );++$i;?><p><a href=""><?php echo ($hotNew["new_Title"]); ?></a></p><?php endforeach; endif; else: echo "" ;endif; ?>
							</div>
						</li>
						<li>
							<div>
<<<<<<< HEAD
							<h4>板块牛人</h4>
							<?php if(is_array($users)): $i = 0; $__LIST__ = $users;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$user): $mod = ($i % 2 );++$i;?><p><a href=""><?php echo ($user["user_Username"]); ?></a></p><?php endforeach; endif; else: echo "" ;endif; ?>
=======
							<h4>文章</h4>
							<p>11111111</p>
>>>>>>> d7752944db3380b28c1bd0b0f5bd9d9a25a956de
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