<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>添加博客</title>
	<script type="text/javascript" src="/Public/Js/jquery.min.js"></script>
	<script src="/Public/lib/kindeditor/kindeditor-4.1.7/kindeditor.js"></script>
	<link rel="stylesheet" href="/Public/Css/all.css" >
		<script>
       

        $(document).ready(function(){
        	
        	 KindEditor.ready(function(K) {
                window.editor = K.create('#editor_id');
        });
        	$("#submit").click(function(){
				$("#body").val(editor.html());
				return true;
        	});

        });
</script>
</head>
<body>
<div class="global">
<div class="main-con">
<form action="<?php echo U('/Home/Blog/publish');?>" method="post">
<span>标题</span><input type="text" name="title" /><br />
<span>摘要</span><input type="text" name="brief" /><br />
<span>内容</span><textarea id="editor_id"></textarea>
<input type="hidden" name="body" id="body" />
<button id="submit" type="submit">发布</button>
</form>
</div>
</div>
</body>
</html>