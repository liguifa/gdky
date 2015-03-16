<?php if (!defined('THINK_PATH')) exit();?><div id="header">
	<div id="header_top">
		<div id="header_top_main">
			<ul>
				<li id="indexPage">首页</li>
				<li id="savePage">收藏本站</li>
			</ul>
			<div id="header_top_main_user">
				<?php echo ($loginStatus); ?>
			</div>
			<span class="header_top_main_span" id="github"><a href="https://github.com/DalianUniversityofTechnologyOSC" target="_blank">github</a></span>
			<span class="header_top_main_span"><a href="https://guides.github.com/activities/hello-world/" target="_blank">关于我们</a></span>
		</div>
	</div>
	<div id="header_content">
		<img src="/Public/Images/logo.png" />
	</div>
	<div id="header_bottom">
		<div id="header_bottom_main">
			<ul>
				<li><a href="<?php echo U('/Home/Index/home');?>">首页</a></li>
				<li><a href="<?php echo U('/Home/Index/news/pageIndex/1');?>">开源资讯</a></li>
				<li><a href="<?php echo U('/Home/Index/technology/type/0/pageIndex/1');?>">开源技术</a></li>
				<li><a href="<?php echo U('/Home/Index/projects/type/0/pageIndex/1');?>">开源项目</a></li>
				<li><a href="<?php echo U('/Home/Index/shares/pageIndex/1');?>">开源分享</a></li>
				<li><a href="<?php echo U('/Home/Index/questions/pageIndex/1');?>">开源问答</a></li>
				<li><a href="<?php echo U('/Home/Index/teahouse/pageIndex/1');?>">开源茶馆</a></li>
				<li><a href="<?php echo U('/Home/Blog/index');?>">开源博客</a></li>
				<li id="header_bottom_main_ul_li_last"><a href="<?php echo U('/Home/Index/study/pageIndex/1');?>">学习资源</a></li>
			</ul>
			<div id="header_bottom_main_search"><input  id="header_bottom_main_search_input" type="search" /><button id="header_bottom_main_search_button">搜索</button></div>
		</div>
	</div>
</div>