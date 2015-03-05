<?php
/*********************************
时间：2014-11-29
作者：李贵发
功能：数据表posts数据处理
**********************************/
class PostBLL
{
	private static $postDAL;      //数据层对象

	/***************************
	功能：构造函数，创建数据层对象
	参数：无
	返回：空返回
	****************************/
	public function PostBLL()
	{
		if(!self::$postDAL)      //如果数据层对象不存在则创建对象
		{
			self::$postDAL=new PostDAL();
		}
	}

	/***************************
	功能：数据库的排序查询（重载4）
	参数：$pageIndex ： int类型数据，数据库从哪一个开始
		  $pageSize ： int类型数据，指定从数据库中读取数据数
	返回：数据库查询结果集（二维数组）
	****************************/
	public function Select($pageIndex,$pageSize)
	{
<<<<<<< HEAD
		return self::$postDAL->Select("users","user_Id","post_UserId",$pageIndex-1,$pageSize,"post_IsDel=false and post_OwnPostId=0","post_PublicTime","desc");     //调用数据层操作对象对数据库进行查询
	}

	public function Select_Reply($pageIndex,$pageSize,$pId)
	{
		return self::$postDAL->Select("users","user_Id","post_UserId",$pageIndex-1,$pageSize,"post_IsDel=false and (post_OwnPostId=$pId or post_Id=$pId)","post_PublicTime","asc");     //调用数据层操作对象对数据库进行查询
	}

	public function  Count_Reply($pId)
	{
		self::$postDAL=new PostDAL();     //有问题  大问题
		return self::$postDAL->Count_Reply("post_IsDel=false and (post_OwnPostId=$pId or post_Id=$pId)");
	}

	public function Add_Eva($mark,$pId)
	{
		$eva=intval($mark)==1?"post_StampNumber":"post_PraiseNumber";
		$num=intval(self::$postDAL->Select(0,1,"post_IsDel=false and post_Id=$pId")[0]["$eva"])+1;
		self::$postDAL->Update("$eva","$num","post_IsDel=false and post_Id=$pId");
		$arr=array("status"=>true,"num"=>$num);
		return json_encode($arr);
	}

	public function AddPost($userId,$postId,$body)
	{
		self::$postDAL->Add("null,$userId,'','$body','".date("Y-m-d")."',5,0,0,$postId,null,0");
=======
		return self::$postDAL->Select("users","user_Id","post_UserId",$pageIndex-1,$pageSize,"post_IsDel=false","post_PublicTime","desc");     //调用数据层操作对象对数据库进行查询
>>>>>>> d7752944db3380b28c1bd0b0f5bd9d9a25a956de
	}

	/***************************
	功能：获取数据库数据量
	参数：无
	返回：数据库查询结果（二维数组）
	****************************/
	public function Count()
	{
		return self::$postDAL->Count();      //调用数据层操作对象对数据库数据个数计算
	}
}
?>