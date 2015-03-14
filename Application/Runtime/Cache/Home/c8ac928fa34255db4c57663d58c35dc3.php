<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="/Public/Css/all.css" >
	<meta charset="utf-8">
	<script type="text/javascript">
	document.body.parentNode.style.overflowY = "hidden";
	</script>
</head>
<body>
	<div class="global">
		<div class="main-con">
			<?php if(is_array($blogs)): $i = 0; $__LIST__ = $blogs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$blog): $mod = ($i % 2 );++$i;?><div class="block-contebt">
					<h3 class="block-title">
						<a href="<?php echo U('Home/Index/newContent/html/'.$blog['blog_url']);?>"><?php echo ($blog["blog_Title"]); ?></a>
					</h3>
					<p><?php echo ($blog["blog_brief"]); ?></p>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
	</div>
</body>
</html>