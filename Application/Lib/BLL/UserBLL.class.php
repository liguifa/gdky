<?php
class UserBLL
{
	private static $userDAL;

	public function UserBLL()
	{
		self::$userDAL=new UserDAL();
	}

	public function Login($username,$password)
	{
		$status=new StatusAttribute();
		if(isset($_Cookie["user_id"])&&isset($_Cookie["user_pwd"]))
		{
			$username=$_Cookie["user_id"];
			$password=$_Cookie["user_pwd"];
		}
		$result=self::$userDAL->Select(0,1,"user_Username='$username'");
		echo 123;
		var_dump($result);
		if(sizeof($result))
		{
			if($result[0]["user_Password"]==$password)
			{
				$status->status=true;
				$status->message="<a href=\"#\">用户名</a>";
				$status->append=$result[0]["user_Id"];
				$_SESSION['user']=$result[0]["user_Id"];
			}
			else
			{
				$status->status=false;
				$status->message="用户名或密码错误！";
				$status->append=null;
			}
		}
		else
		{
			$status->status=false;
			$status->message="用户名或密码错误！";
			$status->append=null;
		}
		return $status->ToJson();
	}

	public function GetLoginStatus()
	{
		if($_SESSION['user'])
		{
			return "<a href=\"#\">用户名</a>";
		}
		else
		{
			return "<span><a href=\"/html/index.php/Home/User/Login\">登陆</a></span><span>|</span><span><a href=\"/html/index.php/Home/User/Register\">注册</a></span>";
		}
		
	}

	public function RegisterOne($username,$email,$password,$blogTheme,$rePassword,$yzm)
	{
		$status=new \StatusAttribute();
		if(\CheckData::CheckInputData($username,$email,$password,$rePassword,$yzm))
		{
			$_SESSION['user']=$username;
			$_SESSION['email']=$email;
			$_SESSION['pwd']=$password;
			$_SESSION['blog']=$blogTheme;
			$status->status=true;
			$status->message="注册成功！";
			$status->append=null;
		}
		else
		{
			$status->status=false;
			$status->message="注册信息错误！";
			$status->append=null;
		}
		return $status->ToJson();
	}

	public function Add()
	{
		$username=$_SESSION["user"];
		$email=$_SESSION["email"];
		$password=$_SESSION["pwd"];
		$blogTheme=$_SESSION["$blog"];
		$status=new \StatusAttribute();
		if(!self::$userDAL->Add("null,'$useranme','$password','$email',1,10,null,'assda',null,0,1,0"))
		{
			$status->status=true;
			$status->message="添加成功！";
			$status->append=null;
		}
		else
		{
			$status->status=false;
			$status->message="添加失败！";
			$status->append=null;
		}
		return $status;
	}

	public function CheckMail_Yzm($yzm)
	{
		$status=new \StatusAttribute();
		if($yzm==$_SESSION["email_yzm"])
		{
			$status->status=true;
			$status->message="验证码正确";
			$status->append=null;
		}
		else
		{
			$status->status=false;
			$status->message="验证码错误";
			$status->append=null;
		}
		return $status->ToJson();
	}
    
    public function GetUserList($pageIndex,$pageSize)
    {
        $res=self::$userDAL->Select("BlogThemes","user_BlogThemeId","blogTheme_Id",$pageIndex-1,$pageSize,"user_IsDel=false","user_Id","desc");
        return json_encode($res);
    }
}
?>