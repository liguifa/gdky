<?php
/*********************************
时间：2014-10-31
作者：李贵发
功能：数据表news操作
**********************************/
import("DAL.BaseDAL","Application/Lib");
class NewsDAL extends BaseDAL
{

	/***************************
	功能：构造函数，创建创建库操作对象
	参数：无
	返回：空返回
	****************************/
	public function NewsDAL()
	{
		parent::$table="news";
		if(!parent::$sh)                //数据库操作对象如果不存在则创建
		{
			parent::$sh=new SqlHelper();
		}
	}
}
?>