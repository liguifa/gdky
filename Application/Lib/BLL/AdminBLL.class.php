<?php
class AdminBLL
{
	private static $adminDAL;
	
	public function AdminBLL()
	{
		self::$adminDAL=new AdminDAL();
	}
	
	public function Login($user,$pwd,$verCode)
	{
		if($verCode==$_SESSION["ver"])
		{
			$password=self::$adminDAL->Select(0,1,"admin_Username='$user'");
	
			if(sizeof($password)>=1&&$password[0]["admin_Password"]==md5($user.$pwd))
			{
				$status=Array("res" => true,"append" => null);
				$_SESSION["admin"]=$user;
				return $status;
			}
			else
			{
				$status=Array("res" => false,"append" => "用户名或密码错误！");
				return $status;
			}
		}
		else
		{
			$status=Array("res" => false,"append" => "验证码错误！");
			return $status;
		}
	}
    
    public function GetAdminList($pageIndex,$pageSize)
    {
        $adminList=self::$adminDAL->Select($pageIndex-1,$pageSize,"admin_IsDel=false");
        return json_encode($adminList);
    }
    
    public function AddAdmin($uname,$level)
    {
        preg_match("/^[0-9A-Za-z]{6,15}$/", $uname, $matches);
        $status=new StatusAttribute();
        if(sizeof($matches)==1)
        {
            $res=self::$adminDAL->select(0,1,"admin_Username='$uname' and admin_IsDel=false");
            if(sizeof($res)<1)
            {
                $level=$level=="1"||$level=="0"?$level:"0";
                $res=self::$adminDAL->Add("null,'$uname','".md5($uname."123456")."','$level',0");
                if(!$res)
                {
                    $status->status=true;
                    $status->message="添加成功！";
                    $status->append=null;
                }
                else
                {
                    $status->status=false;
                    $status->message="添加失败！未知错误";
                    $status->append=null;
                }
            }
            else
            {
                $status->status=false;
                $status->message="添加失败！用户名已存在";
                $status->append=null;
            }
        }
        else
        {
            $status->status=false;
            $status->message="添加失败！用户名格式非法";
            $status->append=null;
        }
        return $status->ToJson();
    }
    
    public function RemoveAdmin($adminId)
    {
        $status=new StatusAttribute();
        $res=self::$adminDAL->Update("admin_IsDel","1","admin_Id='$adminId'");
        if($res==1)
        {
            $status->status=true;
            $status->message="删除成功！";
            $status->append=null;
        }
        else
        {
            $status->status=false;
            $status->message="删除失败！未知错误";
            $status->append=null;
        }
        return  $status->ToJson();
    }
}
?>