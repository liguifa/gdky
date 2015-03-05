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
			setNavigation(navigationMenu.teahouse);

			if(<?php echo ($pageIndex); ?>>1 && <?php echo ($size); ?> != 1)
			{
				$("#post_page>ul").append("<li><a href='"+(<?php echo ($pageIndex); ?>-1+".html'")+">上一页</a></li>");
			}

			$("#post_page>ul").append("<li class='active'><a><?php echo ($pageIndex); ?></a></li>");

			for(var i=<?php echo ($pageIndex); ?>+1;i<=<?php echo ($size); ?> && i<=<?php echo ($pageIndex); ?>+5;i++)
			{
				$("#post_page>ul").append("<li><a href='"+i+".html''>"+i+"</a></li>");
			}

			if(<?php echo ($size); ?> != <?php echo ($pageIndex); ?>)
			{
				$("#post_page>ul").append("<li><a href='"+(<?php echo ($pageIndex); ?>+1+".html'")+">下一页</a></li>");
			}

			$("#public_reply").click(function(){

			});
		});

		function sendEva(mark,id)
		{
			$.ajax({
				type:"post",
				url:"/index.php/Home/Index/sendEva",
				data:{
					mark:mark,
					id:id
				},
				success:function(data)
				{
					data=JSON.parse(data);
					if(data.status)
					{
						var aId=mark==1?"#stamp_"+id:"#praise_"+id;
						$(aId).text(data.num);
					}
				}
			});
		}
	</script>
</head>
<body>
	<div id="page">
		<script type="text/javascript">
			getData("header");
		</script>
		<div id="content">
			<div id="content_head">
			<button><a href="#post_public">回复</a></button>
			<button><a href="<?php echo U('/Home/Index/Publish');?>" target="_blank">发帖</a></button>
			</div>
			<table class="post_table">
				<thead>
					<tr id="table_header"><th>回复<?php echo ($replyNum); ?></th><th><?php echo ($posts[0]["post_Title"]); ?></th></tr>
				</thead>
				<tbody>
					<?php if(is_array($posts)): $i = 0; $__LIST__ = $posts;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$post): $mod = ($i % 2 );++$i;?><tr>
						<td class="user_info">
							<a href="#"><?php echo ($post["user_Username"]); ?></a>
							<div class="user_img">
								<img src="/Public/updatafile/userImages/<?php echo ($post["user_HeadImage"]); ?>">
							</div>
							<span>小白</span>
							<div class="user_jy">
								<div class="user_jd">
								<?php echo ($post["user_Experience"]); ?>/112
								</div>

							</div>
						</td>
						<td class="post">
							<p><?php echo ($post["post_Body"]); ?></p>
   							<div class="post_hr">
   								<div><a href="#"><?php echo ($post["user_Username"]); ?></a> 发表于 <?php echo ($post["post_PublicTime"]); ?> 赞<a id="stamp_<?php echo ($post["post_Id"]); ?>" href="javascript:sendEva(1,<?php echo ($post["post_Id"]); ?>)"><?php echo ($post["post_StampNumber"]); ?></a> 踩<a id="praise_<?php echo ($post["post_Id"]); ?>" href="javascript:sendEva(0,<?php echo ($post["post_Id"]); ?>)"><?php echo ($post["post_PraiseNumber"]); ?></a> <a href="#post_public">引用</a></div>
   							</div>
						</td>
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
				</tbody>
				<tfoot>
				</tfoot>
			</table>
			<div id="post_page">
				<ul>
					<!-- <li>
						<a href="#">上一页</a>
					</li>
					<li>
						<a href="#">1</a>
					</li>
					<li>
						<a href="#">2</a>
					</li>
					<li>
						<a href="#">3</a>
					</li>
					<li>
						<a href="#">4</a>
					</li>
					<li>
						<a href="#">5</a>
					</li>
					<li>
						<a href="#">下一页</a>
					</li> -->
				</ul>
			</div>
			<div class="kx"></div>
			<table id="post_public">
				<thead>
					<tr><th colspan="2">快速回复</th></tr>
				</thead>
				<tbody>
					<tr>
						<td class="user_info">
							<a href="#"><?php echo ($user_Username); ?></a>
							<div class="user_img">
								<img src="/Public/updatafile/userImages/<?php echo ($user_HeadImage); ?>">
							</div>
							<span><?php echo ($level_Name); ?></span>
							<div class="user_jy">
								<div class="user_jd">
								<?php echo ($user_Experience); ?>/<?php echo ($level_Experience); ?>
								</div>

							</div>
						</td>
						<td class="post">
						<form action="<?php echo U('/Home/Index/Public_Reply');?>"  method="post">
							<input name="post_id" value="<?php echo ($posts[0]["post_Id"]); ?>" type="hidden" />
							<textarea name="reply_body"></textarea><br />
							<button type="submit" id="public_reply">回复</button>
						</form>
						</td>
					</tr>
					
				</tbody>
				<tfoot>
				</tfoot>
			</table>
			<div class="kx"></div>
		</div>
		<script type="text/javascript">
			getData("footer");
		</script>
	</div>
</body>
</html>