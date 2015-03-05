<?php
/*********************************
时间：2014-10-35
作者：李贵发
功能：数据表news数据处理
**********************************/
class NewsBLL
{
	private static $newsDAL;      //数据层对象

	/***************************
	功能：构造函数，创建数据层对象
	参数：无
	返回：空返回
	****************************/
	public function NewsBLL()
	{
		if(!$newsDAL)      //如果数据层对象不存在则创建对象
		{
			self::$newsDAL=new NewsDAL();
		}
	}

	/***************************
	功能：数据库的查询
	参数：$pageIndex ： int类型数据，数据库从哪一个开始
		  $pageSize ： int类型数据，指定从数据库中读取数据数
		  $where : string类型数据，查询条件
		  $col ：string类型数据，排序列名
		  $rank : string类型数据，排序方式
	返回：数据库查询结果集（二维数组）
	****************************/
	public function Select($pageIndex,$pageSize,$where,$col,$rank)
	{
		return self::$newsDAL->Select("users","user_Id","new_UserId",$pageIndex-1,$pageSize,"new_IsDel=false and new_IsReview=true","new_PublicTime","desc");     //调用数据层操作对象对数据库进行查询
	}

	/***************************
	参数：$col ：string类型数据，排序列名
	返回：数据库查询结果集（二维数组）
	****************************/
	public function Select_Order($col)
	{
		return self::$newsDAL->Select("users","user_Id","new_UserId",0,10,"new_IsDel=false and new_IsReview=true",$col,"desc");     //调用数据层操作对象对数据库进行查询
	}

	/***************************
	功能：获取数据库数据量
	参数：无
	返回：数据库查询结果（二维数组）
	****************************/
	public function Count()
	{
		return self::$newsDAL->Count();      //调用数据层操作对象对数据库数据个数计算
	}
}
?>