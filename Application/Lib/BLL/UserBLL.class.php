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
<<<<<<< HEAD
		$result=self::$userDAL->Select(0,1,"user_Email='$username'");
=======
		$result=self::$userDAL->Select(0,1,"user_Username='$username'");
		echo 123;
		var_dump($result);
>>>>>>> d7752944db3380b28c1bd0b0f5bd9d9a25a956de
		if(sizeof($result))
		{
			if($result[0]["user_Password"]==$password)
			{
				$status->status=true;
<<<<<<< HEAD
				$status->message="<span id='user'><a href='/index.php/Home/User/Login'>".$result[0]["user_Username"]."</a></span>|<span><a href='/index.php/Home/User/Login'>退出</a></span>";
=======
				$status->message="<a href=\"#\">用户名</a>";
>>>>>>> d7752944db3380b28c1bd0b0f5bd9d9a25a956de
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
<<<<<<< HEAD
			return "<span><a href='/index.php/Home/User/Login'>".$result[0]["user_Username"]."</a></span>|<span><a href='/index.php/Home/User/Login'>退出</a></span>";
		}
		else
		{
			return "<span><a href=\"/index.php/Home/User/Login\">登陆</a></span><span>|</span><span><a href=\"/index.php/Home/User/Register\">注册</a></span>";
=======
			return "<a href=\"#\">用户名</a>";
		}
		else
		{
			return "<span><a href=\"/html/index.php/Home/User/Login\">登陆</a></span><span>|</span><span><a href=\"/html/index.php/Home/User/Register\">注册</a></span>";
>>>>>>> d7752944db3380b28c1bd0b0f5bd9d9a25a956de
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
<<<<<<< HEAD

	public function GetHotUser($table,$col,$pageSize)
	{
		return self::$userDAL->Select("$table","user_Id",$col,0,$pageSize,"user_IsDel=false","count(user_Id)","desc");
	}
=======
>>>>>>> d7752944db3380b28c1bd0b0f5bd9d9a25a956de
    
    public function GetUserList($pageIndex,$pageSize)
    {
        $res=self::$userDAL->Select("BlogThemes","user_BlogThemeId","blogTheme_Id",$pageIndex-1,$pageSize,"user_IsDel=false","user_Id","desc");
        return json_encode($res);
    }
<<<<<<< HEAD

    public function GetUserMsg($userId)
    {
    	return self::$userDAL->Select("levels","level_Id","user_Level",0,1,"user_IsDel=false and user_Id=$userId","user_Id","asc");
    }
=======
>>>>>>> d7752944db3380b28c1bd0b0f5bd9d9a25a956de
}
?>