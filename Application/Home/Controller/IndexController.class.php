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
        $header=str_replace("\n","",$header);
        $this->assign('header',str_replace("\r","",$header));
        $this->assign('footer',str_replace("\n","",$footer));
        $this->display();
    }

	/***************************
	功能：显示首页（社区首页）
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
        $users=new \UserBLL();
        $this->assign("users",$users->GetHotUser('news',"new_UserId",10));	
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
        $n=new \NewsBLL();
        $hotNews=$n->Select_Order("new_ScanNumber");
        $users=new \UserBLL();
        $this->assign("users",$users->GetHotUser('news',"new_UserId",10));  
        $this->assign('hotNews',$hotNews);
        $this->assign("id",$htmlID);
        $this->display("../../../Public/updatafile/newsHtml/$htmlID");
    }
	
	/***************************
	功能：显示开源技术页
	参数：无
	返回：/View/Index/technology.html视图
	****************************/
    public function technology()
    {
        $type=I("type")==null?0:I("type");
        $tech=new \TechnologyBLL();
        $technologys=$tech->Select(1,20,$type);
        $this->assign('technologys', $technologys); 
        $forum=new \ForumsBLL();
        $this->assign("forums",$forum->Select());
        $users=new \UserBLL();
        $this->assign("users",$users->GetHotUser('technologys',"technology_UserId",10));
        $this->assign('type_id',$type);
        $this->display();
    }

    /**************************
    功能：显示开源分享页
    参数：无
    返回：/View/Index/shares.html视图
    ***************************/
    public function shares()
    {
        $share=new \ShareBLL();
        $shares=$share->Select(1,20);
        $this->assign('shares', $shares);
        $this->display();
    }

    /***************************
    功能：显示开源项目页
    参数：无
    返回：/View/Index/projects.html视图
    ****************************/
    public function projects()
    {
        $type=I("type")==null?0:I("type");
        $proj=new \ProjectBLL();
        $projects=$proj->Select(1,20,$type);
        $this->assign('projects', $projects);
        $forum=new \ForumsBLL();
        $this->assign("forums",$forum->Select());
        $users=new \UserBLL();
        $this->assign("users",$users->GetHotUser('projects',"project_UserId",10));
        $this->assign('type_id',$type);
        $this->display();
    }
	
	/***************************
	功能：显示开源问答页
	参数：无
	返回：/View/Index/questions.html视图
	****************************/
    public function questions()
    {
        $question=new \QuestionBLL();
        $questions=$question->Select(1,30);
        $this->assign("questions",$questions);
        $this->display();
    }

    /**************************
    功能：显示开源茶社页
    参数：无
    返回：/View/Index/teahouse.html视图
    ***************************/
    public function teahouse()
    {
        $tea=new \TeahouseBLL();
        $teahouses=$tea->Select(1,30);
        $this->assign("teahouses",$teahouses);
        $this->display();
    }
    
    public function blog()
    {
        $html=I("page");
        $this->assign("user","李贵发");
        $this->display("../../../Public/BlogThemeThemelates/2015010511111111/$html");
    }

    /**************************
    功能：显示学习资源页
    参数：无
    返回：/View/Index/study.html视图
    ***************************/
    public function study()
    {
        $this->display();
    }

    public function browserError()
    {
        $this->display();
    }

    public function Publish()
    {
        $forum=new \ForumsBll();
        $this->assign("forums",$forum->select());
        $this->display();
    }

    public function PublishIn()
    {
        var_dump($_POST);
        $this->show("123");
    }

    public function postContent()
    {
        $postId=I("pId");
        $page=I("page");
        $post=new \PostBLL();
        $posts=$post->Select_Reply($page,20,$postId);
        $this->assign("posts",$posts);
        $user=new \UserBLL();
        $userMsg=$user->GetUserMsg($_SESSION['user']);
        $this->assign($userMsg[0]);
        $this->assign("pageIndex",$page);
        $size=$post->Count_Reply($postId);
        $this->assign("size",ceil(intval($size[0]["count(*)"])/20));
        $this->assign("replyNum",$size[0]["count(*)"]);
        $this->display();
    }

    public function sendEva()
    {
        $mark=I("mark");
        $id=I("id");
        $post=new \PostBLL();
        $this->show($post->Add_Eva($mark,$id));
    }

    public function Public_Reply()
    {
        $postId=I("post_id");
        $reply_body=I("reply_body");
        $post=new \PostBLL();
        $post->AddPost($_SESSION["user"],$postId,$reply_body);
        $this->Success();
    }
}