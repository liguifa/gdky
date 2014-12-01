<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller 
{
	/***************************
	功能：显示首页（logo页）
	参数：无
	返回：/View/Index/index.html视图
	****************************/
    public function index()
    {
        $this->assign('year',date('Y'));
        $user=GetLoadStatus();
        $this->assign('loginStatus', $user);
        $header = $this->fetch('../../PublicViews/header.inc');
        $footer = $this->fetch('../../PublicViews/footer.inc');
        $this->assign('header',str_replace("\r\n","",$header));
        $this->assign('footer',str_replace("\n","",$footer));
        $this->display();
    }

	/***************************
	功能：显示首页（社区首页页）
	参数：无
	返回：/View/Index/home.html视图
	****************************/
    public function home()
    {   
        /*获取最新资讯*/
        $n=new \NewsBLL();
        $news=$n->Select(1,15);
        $this->assign('news', $news);
        /*获取最新技术*/
        $tech=new \TechnologyBLL();
        $technologys=$tech->Select(1,10,1); 
        $this->assign('technologys', $technologys);
        /*获取最新开源项目*/
        $projects=$tech->Select(1,10,2); 
        $this->assign('projects', $projects);
        /*获取最新开源分享*/
        $shares=$tech->Select(1,10,3); 
        $this->assign('shares', $shares);
        /*获取最新帖子*/
        $post=new \PostBLL();
        $posts=$post->Select(1,10); 
        $this->assign('posts', $posts);
        /*获取最新学习资源*/
        $study=new \StudyBLL();
        $studys=$study->Select(1,10); 
        $this->assign('studys', $studys);
   	    $this->display();
    }
	
	/***************************
	功能：显示开源资讯页
	参数：$pageIndex : int类型参数，新闻当前页码
	返回：/View/Index/news.html视图
	****************************/
    public function news()
    {
        $pageIndex=$_GET["pageIndex"];
        $n=new \NewsBLL();
        $news=$n->Select($pageIndex,20);
        $hotNews=$n->Select_Order("new_ScanNumber");	
        $this->assign('news', $news);
        $this->assign('newsSize',$n->Count("*")[0]["count(*)"]);
        $this->assign('pageIndex',$pageIndex>0?$pageIndex:1);
        $this->assign('hotNews',$hotNews);
    	$this->display();
    }

	/***************************
	功能：显示开源资讯内容页
	参数：$htmlID : string类型参数，新闻内容页名称
	返回：/public/updatafile/newsHtml/$htmlID视图
	****************************/
    public function newContent()
    {
        $htmlID=I("html");
        $this->display("../../../public/updatafile/newsHtml/$htmlID");
    }
	
	/***************************
	功能：显示开源技术页
	参数：无
	返回：/View/Index/technology.html视图
	****************************/
    public function technology()
    {
        $tech=new \TechnologyBLL();
        $technologys=$tech->Select(1,20,1); 
        $this->assign('technologys', $technologys);
        $this->display();
    }
	
	/***************************
	功能：显示开源问答页
	参数：无
	返回：/View/Index/questions.html视图
	****************************/
    public function questions()
    {
        $this->display();
    }
    
    public function blogTheme()
    {
        $this->assign("user","李贵发");
        $this->display("../../../public/BlogThemeThemelates/2014112718142233/index");
    }
}