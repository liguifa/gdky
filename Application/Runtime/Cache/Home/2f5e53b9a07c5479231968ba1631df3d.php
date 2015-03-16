<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="/Public/Css/all.css" >
	<script type="text/javascript" src="/Public/Js/jquery.min.js"></script>
	<meta charset="utf-8">
	<script type="text/javascript">
		$(document).ready(function(){
			var divList=document.getElementsByClassName("co");
			for(var i in divList)
			{
				$(divList[i]).css("background-color","#"+Math.floor(Math.random()*1000000));
			}
		});
	</script>
</head>
<body style="background-color: #fff;">
	<div class="global">
		<div class="main-con" style="background-color: #fff;">
			<?php if(is_array($blogs)): $i = 0; $__LIST__ = $blogs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$blog): $mod = ($i % 2 );++$i;?><div class="bo">
					<div class="co" style="background-color: #222222;">
						<h4>收藏</h4>
					</div>
					<div class="co-text">
					<p><?php echo ($blog["blog_brief"]); ?></p>
					</div>
					<div class="date-footer"></div>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
	</div>

</body>
</html>