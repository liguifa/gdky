<?php
import("Common.StatusAttribute","Application/Lib");
class CheckData
{
	public static function CheckOne($name,$value)
	{
		if($name=="rePassword")
		{
			return self::ConvertResJson((isset($_COOKIE['password'])&&$_COOKIE['password']==$value),$name);
		}
		if($name=="yzm")
		{
			return self::ConvertResJson((isset($_SESSION['ver'])&&$_SESSION['ver']==$value),$name);
		}
		return self::ConvertResJson(self::CheckInput(self::GetRegex($name),$value),$name);
	}

	public static function CheckInputData($username,$email,$password,$rePassword,$yzm)
	{
		return self::CheckInput(self::GetRegex("username"),$username)&&self::CheckInput(self::GetRegex("email"),$email)&&self::CheckInput(self::GetRegex("password"),$password)&&$password==$rePassword&&$yzm==$_SESSION["ver"];
	}

	private static function GetRegex($name)
	{
		switch($name)
		{
			case "username":return "/^.{1,15}$/";
			case "email":return "/^[0-9a-zA-Z]*@[0-9a-zA-Z]{1,10}\.com$/";
			case "password":return "/^[0-9a-zA-Z]{6,15}$/";
			case "rePassword":return "/^[0-9a-zA-Z]{6,15}$/";
			case "blogTheme":return "/^[0-96]*$/";
			case "yzm":return "/^[0-9]{4}$/";
		}
	}

	private static function CheckInput($regex,$value)
	{
		preg_match($regex, $value,$matchs);
		if(sizeof($matchs)==1&&$matchs[0]==$value)
		{
			return true;
		}
		return false;
	}

	private static function ConvertResJson($res,$name)
	{
		$status=new StatusAttribute();
		if($res)	
		{
			$status->status=true;
			$status->message="格式正确!";
			$status->append=$name;
		}
		else
		{
			$status->status=false;
			$status->message="格式错误!";
			$status->append=$name;
		}
		return $status->ToJson();
	}
}
?>