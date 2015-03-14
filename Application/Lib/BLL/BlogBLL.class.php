<?php
/*********************************
时间：2016-3-14
作者：李贵发
功能：数据表blogs数据处理
**********************************/
class BlogBLL
{
	private static $BlogDAL;      //数据层对象

	/***************************
	功能：构造函数，创建数据层对象
	参数：无
	返回：空返回
	****************************/
	public function BlogBLL()
	{
		if(!self::$BlogDAL)      //如果数据层对象不存在则创建对象
		{
			self::$BlogDAL=new BlogDAL();
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
		return self::$BlogDAL->Select($pageIndex,$pageSize,"blog_IsDel=false");     //调用数据层操作对象对数据库进行查询
	}

	public function Add($dataArr)
	{
		$newHtmlId=date("YmdhGs").rand(1000,9999);
		$filename="Application/PublicViews/blog.html";
		$newFileName="public/updatafile/newsHtml/".$newHtmlId.".html";
		$subArr=array();
		$subArr[0]=array('sub' =>"{title}" , "str" => $dataArr['title'] );
		$subArr[1]=array('sub' =>"{body}" , "str" => $dataArr['body'] );
		FileOperation::ReplaceAndSave($filename,$subArr,$newFileName);
		return self::$BlogDAL->Add("null,'".$dataArr["title"]."','".$dataArr["brief"]."',".$_SESSION["user"].",$newHtmlId,1,1,0");
	}

	/***************************
	功能：获取数据库数据量
	参数：无
	返回：数据库查询结果（二维数组）
	****************************/
	public function Count()
	{
		return self::$BlogDAL->Count();      //调用数据层操作对象对数据库数据个数计算
	}
}
?>