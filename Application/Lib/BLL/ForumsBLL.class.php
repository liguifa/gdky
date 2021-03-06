<?php
/*********************************
时间：2015-1-16
作者：李贵发
功能：数据表forums数据处理
**********************************/
class ForumsBLL
{
	private static $ForumsDAL;      //数据层对象

	/***************************
	功能：构造函数，创建数据层对象
	参数：无
	返回：空返回
	****************************/
	public function ForumsBLL()
	{
		if(!self::$ForumsDAL)      //如果数据层对象不存在则创建对象
		{
			self::$ForumsDAL=new ForumsDAL();
		}
	}

	/***************************
	功能：数据库的排序查询（重载4）
	参数：$pageIndex ： int类型数据，数据库从哪一个开始
		  $pageSize ： int类型数据，指定从数据库中读取数据数
	返回：数据库查询结果集（二维数组）
	****************************/
	public function Select()
	{
		return self::$ForumsDAL->Select(1,1000000000,"Forum_IsDel=false");     //调用数据层操作对象对数据库进行查询
	}

	public function Select_Number($size)
	{
		return self::$ForumsDAL->Select(0,$size,"Forum_IsDel=false");     //调用数据层操作对象对数据库进行查询
	}

	/***************************
	功能：获取数据库数据量
	参数：无
	返回：数据库查询结果（二维数组）
	****************************/
	public function Count()
	{
		return self::$ForumsDAL->Count();      //调用数据层操作对象对数据库数据个数计算
	}
}
?>