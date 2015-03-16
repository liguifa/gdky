<?php
/*********************************
时间：2014-11-29
作者：李贵发
功能：数据表Questions数据处理
**********************************/
class QuestionBLL
{
	private static $QuestionDAL;      //数据层对象

	/***************************
	功能：构造函数，创建数据层对象
	参数：无
	返回：空返回
	****************************/
	public function QuestionBLL()
	{
		if(!self::$QuestionDAL)      //如果数据层对象不存在则创建对象
		{
			self::$QuestionDAL=new QuestionDAL();
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
		return self::$QuestionDAL->Select("users","user_Id","post_UserId",$pageIndex-1,$pageSize,"post_IsDel=false and post_OwnForumId=4 and post_OwnPostId=0","post_PublicTime","desc");     //调用数据层操作对象对数据库进行查询
	}

	public function Add($title,$body,$id)
	{
		self::$QuestionDAL->Add("null,'$id','$title','$body','".date("Y-m-d h:G:s")."',4,0,0,0,null,0");
	}

	/***************************
	功能：获取数据库数据量
	参数：无
	返回：数据库查询结果（二维数组）
	****************************/
	public function Count()
	{
		return self::$QuestionDAL->Count_Reply("post_IsDel=false and post_OwnForumId=4 and post_OwnPostId=0");      //调用数据层操作对象对数据库数据个数计算
	}
}
?>