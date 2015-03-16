<?php
/*********************************
时间：2014-11-29
作者：李贵发
功能：数据表studys数据处理
**********************************/
class StudyBLL
{
	private static $studyDAL;      //数据层对象

	/***************************
	功能：构造函数，创建数据层对象
	参数：无
	返回：空返回
	****************************/
	public function StudyBLL()
	{
		if(!self::$studyDAL)      //如果数据层对象不存在则创建对象
		{
			self::$studyDAL=new StudyDAL();
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
		return self::$studyDAL->Select("users","user_Id","study_UserId",$pageIndex-1,$pageSize,"study_IsDel=false","study_PublicTime","desc");     //调用数据层操作对象对数据库进行查询
	}

	public function GetStudyMsg($id)
	{
		return self::$studyDAL->Select("users","user_Id","study_UserId",0,1,"study_IsDel=false and study_Id=$id","study_PublicTime","desc")[0];     //调用数据层操作对象对数据库进行查询
	}

	public function Add($title,$body,$id,$append)
	{
		self::$studyDAL->Add("null,'$id','$title','$body','$id','".date("Y-m-d h:G:s")."',$append,0");
	}

	/***************************
	功能：获取数据库数据量
	参数：无
	返回：数据库查询结果（二维数组）
	****************************/
	public function Count()
	{
		return self::$studyDAL->Count();      //调用数据层操作对象对数据库数据个数计算
	}
}
?>