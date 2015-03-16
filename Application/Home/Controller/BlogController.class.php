<?php
namespace Home\Controller;
use Think\Controller;
class BlogController extends Controller 
{
	public function Jurisdiction()
	{
		if(I("user_id")==null && $_SESSION["user"]==null)
		{
			header("Location: /index.php/Home/User/login");
		}
	}

	public function index()
	{
		$this->Jurisdiction();
		$page=I("page")==null?"all":I("page");
		$this->assign("page",$page);
		$this->display();
	}

	public function all()
	{
		$this->Jurisdiction();
		$id=I("user_id")==null?$_SESSION["user"]:I("user_id");
		$blog=new \BlogBLL();
		$blogs=$blog->Select(1,20,$id);
		$this->assign("blogs",$blogs);
		$this->display();
	}

	public function info()
	{
		$this->Jurisdiction();
		$id=I("user_id")==null?$_SESSION["user"]:I("user_id");
		$user=new \UserBLL();
		$userMsg=$user->GetUserMsg($id);
		$this->assign("user",$userMsg[0]);
		$this->display();
	}

	public function addBlog()
	{
		if($_SESSION["user"]==null)
		{
			header("Location: /index.php/Home/User/login");
		}
		$this->display();
	}

	public function publish()
	{
		$blog=new \BlogBLL();
		$blog->Add($_POST);
		$this->Success();
	}

	public function col()
	{
		$this->Jurisdiction();
		$id=I("user_id")==null?$_SESSION["user"]:I("user_id");
		$blog=new \BlogBLL();
		$blogs=$blog->Select_Save(1,20,$id);
		$this->assign("blogs",$blogs);
		$this->display();
	}
}