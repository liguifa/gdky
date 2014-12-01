<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller
{
	public function login()
	{
		
		$this->display();
	}
	
	/***************************
	功能：显示验证码
	参数：无
	返回：生成的验证码
	****************************/
	public function VerCode()
	{
		$v=new \VerCode();
		$_SESSION["ver"]=$v->GetVerCode();
		return $v->GetImage();
	}
	
	public function loginIn()
	{
		$user=I("uname");
		$pwd=I("pwd");
		$verCode=I("verify");
		$adminBLL=new \AdminBLL();
		$ststus=$adminBLL->Login($user,$pwd,$verCode);
		if($ststus["res"])
		{
			$this->success('正在登录...', U("/Admin/Index/index"));
		}
		else
		{
			$this->error($ststus["append"]);
		}
	}
	
	public function index()
	{
		$this->display();
	}
	
	public function SystemInfo()
	{
		$this->show('{"total":4,"rows":[{"name":"Name","value":"Bill Smith","group":"个人信息"},{"name":"Address","value":"","group":"个人信息"},{"name":"SSN","value":"123-456-7890","group":"个人信息"},{"name":"操作系统","value":"'.\SystemInfo::GetSystemVersion().'","group":"系统信息"},{"name":"服务器环境","value":"'.\SystemInfo::GetServiceVersion().'","group":"系统信息"}]}');
	}
    
    public function AdminManage()
    {
        $id=I("id");
        $this->assign("id",$id);
        $this->display();
    }
    
    public function GetAdmin()
    {
        $pageIndex=I("page");
        $pageSize=I("rows");
        $adminBLL=new \AdminBLL();
        $this->show( $adminBLL->GetAdminList($pageIndex,$pageSize));
    }
    
    public function AddAdmin()
    {
        $uname=I("uname");
        $level=I("level");
        $adminBLL=new \AdminBLL();
        $this->show($adminBLL->AddAdmin($uname,$level));
    }
    
    public function RemoveAdmin()
    {
        $adminId=I("adminId");
        $adminBLL=new \AdminBLL();
        $this->show($adminBLL->RemoveAdmin($adminId));
    }
    
    public function UserManage()
    {
        $id=I("id");
        $this->assign("id",$id);
        $this->display();
    }
    
    public function GetUser()
    {
        $pageIndex=I("page");
        $pageSize=I("rows");
        $userBLL=new \UserBLL();
        $this->show( $userBLL->GetUserList($pageIndex,$pageSize));
    }
}
?>