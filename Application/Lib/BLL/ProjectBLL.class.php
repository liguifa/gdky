<?php
/*********************************
时间：2015-01-12
作者：李贵发
功能：数据表project数据处理
**********************************/
class ProjectBLL
{
	private static $ProjectDAL;      //数据层对象

	/***************************
	功能：构造函数，创建数据层对象
	参数：无
	返回：空返回
	****************************/
	public function ProjectBLL()
	{
		if(!self::$ProjectDAL)      //如果数据层对象不存在则创建对象
		{
			self::$ProjectDAL=new ProjectDAL();
		}
	}

	/***************************
	功能：数据库的排序查询（重载4）
	参数：$pageIndex ： int类型数据，数据库从哪一个开始
		  $pageSize ： int类型数据，指定从数据库中读取数据数
	返回：数据库查询结果集（二维数组）
	****************************/
	public function Select($pageIndex,$pageSize,$type)
	{
		return self::$ProjectDAL->Select("users","user_Id","technology_UserId",$pageIndex-1,$pageSize,"technology_IsDel=false and technology_OwnForumId=2 and (technology_Type=$type or $type=0)","technology_PublicTime","desc");     //调用数据层操作对象对数据库进行查询
	}

	/***************************
	功能：获取数据库数据量
	参数：无
	返回：数据库查询结果（二维数组）
	****************************/
	public function Count($type)
	{
		return self::$ProjectDAL->Count_Reply("technology_IsDel=false and technology_OwnForumId=2 and (technology_Type=$type or $type=0)");      //调用数据层操作对象对数据库数据个数计算
	}
}
?>