<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<meta charset="UTF-8" />
	<meta name="keywords"content="大连工业大学开源社区,大连工业大学,工业大学,工大,开源,开源社区,社区,高校开源社区,工大开源社区" />
	<meta name="description" content="工大开源社区 www.gdky.top 全国高校最知名的开源社区之一，是校内开源爱好者建立，我们传播开源的理念，推广开源项目，为 计算机技术爱好者 开发者提供了一个发现、使用、并交流开源技术的平台，旨在学习和研究开源软件技术，宣传和推广开源软件的应用和开发，营造良好的计算机技术学习氛围。" />
	<title>发表文章</title>
	<link href="/Public/Css/global.css" rel='stylesheet' type="text/css" />
	<link href="/Public/Css/Publish.css" rel='stylesheet' type="text/css" />
	<script type="text/javascript" src="/Public/Js/jquery.min.js"></script>
	<script src="/Public/Js/global.js" type="text/javascript"></script>
	<script src="/Public/lib/kindeditor/kindeditor-4.1.7/kindeditor.js"></script>
	<script type="text/javascript">
		$(document).ready(function()
		{
			checkBrower("<?php echo U('/Home/Index/browserError');?>");

			$(".forums>li").click(function(){
				$(".forums>li").removeAttr("id");
				$(this).attr("id","forums_li_active");
				$("#forums_input").val($(this).attr("data-id"));
			});
			$(".type>li").click(function(){
				$(".type>li").removeAttr("id");
				$(this).attr("id","type_li_active");
				$("#type_input").val($(this).attr("data-id"));
			});
			$("button[type=submit]").click(function(){
				$("#body").val(editor.html());
				var res=true;
				if($("#title").val()=="")
				{
					alert("文章标题不能为空!");
					res=false;
				}
				else if($("#forums_input").val()=="")
				{
					alert("模块为必选项!");
					res=false;
				}
				else if($("#type_input").val()=="" && ($("#forums_input").val()=="1" || $("#forums_input").val()=="2"))
				{
					alert("类别为必选项!");
					res=false;
				}
				else if($("#briefly").val()=="" && $("#forums_input").val()!="4" && $("#forums_input").val()!="5" && $("#forums_input").val()!="6")
				{
					alert("摘要不能为空!");
					res=false;
				}
				else if(($("#briefly").val().length<200 || $("#briefly").val().length>400) && $("#forums_input").val()!="4" && $("#forums_input").val()!="5" && $("#forums_input").val()!="6")
				{
					alert("摘要需要在200-400字之间!");
					res=false;
				}
				else if($("#body").val()=="")
				{
					alert("文章内容不能为空!");
					res=false;
				}
				else if($("#yzm").val()=="")
				{
					alert("验证码不能为空!");
					res=false;
				}
				return res;
			});
			$("#yzm_img").click(function(){
				var num=Math.random()*100;
				$(this).attr("src","../User/VerCode/"+num)
			});

			$(".forums>li[data-id=0]").click(function(){
				$(".type").hide();
				$(".append").hide();
				$(".img").show();
				$(".briefly").show();
			});

			$(".forums>li[data-id=1]").click(function(){
				$(".type").show();
				$(".append").hide();
				$(".img").hide();
				$(".briefly").show();
			});

			$(".forums>li[data-id=2]").click(function(){
				$(".type").show();
				$(".append").hide();
				$(".img").hide();
				$(".briefly").show();
			});

			$(".forums>li[data-id=3]").click(function(){
				$(".type").hide();
				$(".append").hide();
				$(".img").show();
				$(".briefly").show();
			});

			$(".forums>li[data-id=4]").click(function(){
				$(".type").hide();
				$(".append").hide();
				$(".img").hide();
				$(".briefly").hide();
			});

			$(".forums>li[data-id=5]").click(function(){
				$(".type").hide();
				$(".append").hide();
				$(".img").hide();
				$(".briefly").hide();
			});

			$(".forums>li[data-id=6]").click(function(){
				$(".type").hide();
				$(".append").show();
				$(".img").hide();
				$(".briefly").hide();
			});
		});
	</script>
</head>
<body>
	<div id="page">
		<script type="text/javascript">
			getData("header");
		</script>
		<div id="content">
		<form action="<?php echo U('/Home/Index/PublishIn');?>" method="post" enctype="multipart/form-data">
			<label>标题:</label><input name="title" id="title" type="text" placeholder="请输入文章标题！" /><br />
			<label>模块:</label>
			<ul class="forums">
				<li data-id="0">开源资讯</li>
				<li data-id="1">开源技术</li>
				<li data-id="2">开源项目</li>
				<li data-id="3">开源分享</li>
				<li data-id="4">开源问答</li>
				<li data-id="5">开源茶舍</li>
				<li data-id="6">学习资源</li>
			</ul>
			<input type="hidden" name="forum" id="forums_input" /><br />
			<label class="type">类别:</label>
			<ul class="type">
			<?php if(is_array($forums)): $i = 0; $__LIST__ = $forums;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$forum): $mod = ($i % 2 );++$i;?><li data-id="<?php echo ($forum["forum_Id"]); ?>"><?php echo ($forum["forum_Name"]); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul><br />
			<label class="img">图片:</label>
			<input class="img" type="file" name="image" />
			<input type="hidden" name="type" id="type_input" /><br />
			<label class="briefly">摘要:</label><input class="briefly" name="briefly" id="briefly" type="text" placeholder="请输入文章摘要！" /><br />
			<label class="append">附件地址：</label><input class="append" name="append" id="append" type="text" placeholder="请输入文章摘要！" /><br />
			<h2>内容:</h2><textarea name="body" id="editor_id"></textarea><input type="hidden" name="body" id="body" />
			<label>验证码:</label><input name="yzm" id="yzm" type="text" placeholder="请输入四位验证码！" /><img id="yzm_img" src="<?php echo U('/Home/User/VerCode');?>"/><br />
			<button type="submit">发表文章</button><label>必须登录后才能发表，如要登录请点击 这里 <a href="<?php echo U('/Home/User/Login');?>" target="_blank">登录</a>。</label>
		</form>
		</div>
		<script type="text/javascript">
			getData("footer");
		</script>
	</div>
	<script>
        KindEditor.ready(function(K) {
                window.editor = K.create('#editor_id');
        });
</script>
</body>
</html>