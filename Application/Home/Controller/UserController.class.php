<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller 
{
	
	/***************************
	功能：显示登陆页
	参数：无
	返回：/View/User/Logoin.html视图
	****************************/
	public function Login()
	{

		$this->display();
	}
	
	/***************************
	功能：判断登陆信息
	参数：$user : string类型数据，登陆邮箱
		$pwd : string类型数据，登陆密码
	返回：Json数据，StatusAttribute对象
	****************************/
	public function LoginIn()
	{
		$username=$_POST["user"];
		$password=$_POST["pwd"];
		if(isset($_POST["isRemember"])&&$_POST["isRemember"])
		{
			cookie("user_id",$username,100000);
			cookie("user_pwd",crypt($password),100000);
		}
		$userBLL=new \UserBLL();
		$this->show($userBLL->Login($username,$password));
	}
	
	/***************************
	功能：显示注册页
	参数：无
	返回：/View/User/Register.html视图
	****************************/
	public function Register()
	{

		$blogThemeBLL=new \BlogThemeBLL();
		$blogThemes=$blogThemeBLL->GetBlogThemes();
		$this->assign("themes",$blogThemes);
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
		$v->GetImage();
	}

	/***************************
	功能：注册信息收集
	参数：$username : string类型数据，用户注册的昵称
		$email ： string类型数据，用户注册邮箱
		$password : string类型数据，用户注册密码
		$rePassword : string类型数据，用户确认密码
		$blogTheme : string类型数据，用户注册博客主题
	返回：用户信息收集结果，Json数据
	****************************/
	public function RegisterIn()
	{
		$username=$_POST["username"];
		$email=$_POST["email"];
		$password=$_POST["password"];
		$rePassword=$_POST["rePassword"];
		$blogTheme=$_POST["blogTheme"];
		$yzm=$_POST["yzm"];
		$user=new \UserBLL();
		$this->show($user->RegisterOne($username,$email,$password,$blogTheme,$rePassword,$yzm));
	}
	
	/***************************
	功能：显示邮箱验证页，并发送邮件
	参数：无
	返回：/View/User/CheckMail.html视图
	****************************/
	public function CheckMail()
	{
		$e_mail=new \E_Mail();
		$email_yzm=date("Ymd-His") . '-' . rand(1000,9999);
		$e_mail->SendEmail($_SESSION['email'],"<h1>".$email_yzm."</h1>");
		$_SESSION["email_yzm"]=$email_yzm;
		$this->display();
	}
	
	/***************************
	功能：数据验证
	参数：$name ： string类型数据，要验证的类型
		$value : string类型数据，要验证的数据
	返回：
	****************************/
	public function CheckForm()
	{
		if(isset($_POST["name"]))
		{
			$name=$_POST["name"];
			$value=$_POST["value"];
			$this->show(\CheckData::CheckOne($name,$value));
		}
	}

	public function SetGravatar()
	{
		$file=new \UpdataFile();
		$this->show($file->UpdataImage($_FILES["gravatar"],"Application/updatafile/userImages/"));
	}

	public function CheckMail_Yzm()
	{
		$yzm=$_POST["email_yzm"];
		$user=new \UserBLL();
		$this->show($user->CheckMail_Yzm($yzm));
	}

	public function RegisterTwo()
	{
		$yzm=$_POST["email_yzm"];
		$user=new \UserBLL();
		$status=$user->CheckMail_Yzm($yzm);
		if($status->status)
		{
			$status=$user->Add();
		}
		$this->show($status);
	}

	public function RegisterSuccess()
	{
		$this->display();
	}
}
?>