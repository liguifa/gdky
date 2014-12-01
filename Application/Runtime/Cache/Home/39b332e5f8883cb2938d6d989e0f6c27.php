<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<meta charset="UTF-8" />
	<title>首页</title>
	<link href="/html/Public/Css/global.css" rel='stylesheet' type="text/css" />
	<link href="/html/Public/Css/index.css" rel='stylesheet' type="text/css" />
	<link href="/html/Public/Css/nivo-slider.css" rel='stylesheet' type="text/css" />
	<script type="text/javascript" src="/html/Public/Js/jquery.min.js"></script>
	<script src="/html/Public/Js/global.js" type="text/javascript"></script>
	<script src="/html/Public/Js/jquery.nivo.slider.pack.js" type="text/javascript"></script>
	<script src="http://qzonestyle.gtimg.cn/qzone/app/qzlike/qzopensl.js#jsdate=20111201" charset="utf-8"></script>
	<script type="text/javascript">
	$(document).ready(function()
	{
		setNavigation(navigationMenu.home);
		$('#slider').nivoSlider();
	})
	</script>
</head>
<body>
	<div id="page">
		<script type="text/javascript">
			getData("header");
		</script>
		<div id="content">
			<div id="content_top">
				<div id="slider">
					<img src="/html/Public/Images/img1.png" />
					<img src="/html/Public/Images/img2.png" />
					<img src="/html/Public/Images/img3.png" />
				</div>
			</div>
			<div id="content_content">
				<div id="content_content_left">
					<ul >
					<?php if(is_array($news)): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$new): $mod = ($i % 2 );++$i;?><li>
							<div>
								<h4><a href="<?php echo U('Home/Index/newContent/html/'.$new['new_Body']);?>"><?php echo ($new["new_Title"]); ?></a></h4>
								<div>
									<a href="<?php echo ($new["new_Body"]); ?>"><img src="<?php echo ($new["new_Image"]); ?>" /></a>
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
				</div>
				<div id="content_content_right">
					<ul>
						<li>
							<div>
							<h4>开源技术</h4>
							<?php if(is_array($technologys)): $i = 0; $__LIST__ = $technologys;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tech): $mod = ($i % 2 );++$i;?><p><a href="<?php echo ($tech["technology_Url"]); ?>"><?php echo ($tech["technology_Title"]); ?></a></p><?php endforeach; endif; else: echo "" ;endif; ?>
							</div>
						</li>
						<li>
							<div>
							<h4>开源项目</h4>
							<?php if(is_array($projects)): $i = 0; $__LIST__ = $projects;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$project): $mod = ($i % 2 );++$i;?><p><a href="<?php echo ($project["technology_Url"]); ?>"><?php echo ($project["technology_Title"]); ?></a></p><?php endforeach; endif; else: echo "" ;endif; ?>
							</div>
						</li>
						<li>
							<div>
							<h4>代码分享</h4>
							<?php if(is_array($shares)): $i = 0; $__LIST__ = $shares;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$share): $mod = ($i % 2 );++$i;?><p><a href="<?php echo ($share["technology_Url"]); ?>"><?php echo ($share["technology_Title"]); ?></a></p><?php endforeach; endif; else: echo "" ;endif; ?>
							</div>
						</li>
						<li>
							<div>
							<h4>热门帖子</h4>
							<?php if(is_array($posts)): $i = 0; $__LIST__ = $posts;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$post): $mod = ($i % 2 );++$i;?><p><a href=""><?php echo ($post["post_Title"]); ?></a></p><?php endforeach; endif; else: echo "" ;endif; ?>
							</div>
						</li>
						<li>
							<div>
							<h4>最新问题</h4>
							<?php if(is_array($shares)): $i = 0; $__LIST__ = $shares;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tech): $mod = ($i % 2 );++$i;?><p><a href="<?php echo ($tech["technology_Url"]); ?>"><?php echo ($tech["technology_Title"]); ?></a></p><?php endforeach; endif; else: echo "" ;endif; ?>
							</div>
						</li>
						<li>
							<div>
							<h4>学习资源</h4>
							<?php if(is_array($studys)): $i = 0; $__LIST__ = $studys;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$study): $mod = ($i % 2 );++$i;?><p><a href="<?php echo ($study["study_Url"]); ?>"><?php echo ($study["study_Title"]); ?></a></p><?php endforeach; endif; else: echo "" ;endif; ?>
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