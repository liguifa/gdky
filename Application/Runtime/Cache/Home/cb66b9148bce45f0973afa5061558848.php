<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<meta charset="UTF-8" />
	<title>机密文件显示小米去年营收270亿元 增长一倍多</title>
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
					<h2>机密文件显示小米去年营收270亿元 增长一倍多</h2>
					<p>腾讯科技讯 11月6日，《华尔街日报》日前得到的一份机密文件显示，去年小米公司的净利润为34.6亿元人民币，同比增长84%。在竞争激烈的低价智能手机市场，小米的净利超出很多人的预期。
					《华尔街日报》称，以上信息来自小米向银行提交的贷款申请文件。近几年在国内实现快速增长之后，小米已经将目标瞄向海外市场，他们计划向银行贷款10亿美元用于海外扩张。
					文件还显示，小米公司去年的营收为270亿元人民币，同比增长一倍多；公司净利润为34.6亿元人民币，比2012年18.8亿元人民币的净利润增长84%。文件中，小米预测，今年公司的净利润将增长75%。
					销售低价手机却获得极高的利润回报，很多人对此感到不解。因为一般情况下，低价手机通常用于扩大市场份额，但其利润空间非常有限。分析师推测，小米获得如此高利润的原因在于它采用了低价有效的营销策略——通过社交媒体和网络论坛来推广产品。文件显示，小米2012年的销售&营销支出为4.16亿元人民币，占总营收的3.9%；2013年的销售&营销支出为8.76亿元人民币，在总营收中的占比更少——只有3.2%。
					文件中另一项值得关注的细节是，尽管小米在销售手机的同时还在销售壁纸、主题等增值服务，但它们的营收非常有限。去年移动
					<div>
							<!-- 多说公共JS代码 start (一个网页只需插入一次) -->
							<script type="text/javascript">
							var duoshuoQuery = {short_name:"liguifa",
								sso: { 
           								login: "http://www.gdky.top/Home/User/LoginIn",//登陆回调地址
           								logout: "http://www.gdky.top/Home/User/LoginOut/"//登出回调地址
       								}
								};
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
							<!-- 多说评论框 start -->
							<div class="ds-thread" data-thread-key="2014110608303340" data-title="机密文件显示小米去年营收270亿元 增长一倍多" data-url="http://localhost:5555/index.php/Home/Index/newContent/html/2014110608303340.html"></div>
							<!-- 多说评论框 end -->
					</div>
				</div>
				<div id="content_content_right">
					<ul>
					    <li id="content_content_right_public">
							<div>
								<h3>有什么技术资讯吗？</h3>
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