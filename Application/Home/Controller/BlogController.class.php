<?php
namespace Home\Controller;
use Think\Controller;
class BlogController extends Controller 
{
	public function index()
	{
		$page=I("page")==null?"all":I("page");
		$this->assign("page",$page);
		$this->display();
	}

	public function all()
	{
		$blog=new \BlogBLL();
		$blogs=$blog->Select(1,20);
		$this->assign("blogs",$blogs);
		$this->display();
	}

	public function info()
	{
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
			U("/Home/User/login","","",true);
			header("Location: /index.php/Home/User/login");
		}
		$this->display();
	}

	public function publish()
	{
		var_dump($_POST);
		$blog=new \BlogBLL();
		$blog->Add($_POST);
		$this->Success();
	}
}