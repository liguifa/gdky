<?php
/*********************************
时间：2015-3-14
作者：李贵发
功能：数据表blogs操作
**********************************/
class BlogDAL extends BaseDAL
{

	/***************************
	功能：构造函数，创建创建库操作对象
	参数：无
	返回：空返回
	****************************/
	public function BlogDAL()
	{
		parent::$table="blogs";
		if(!parent::$sh)                //数据库操作对象如果不存在则创建
		{
			parent::$sh=new SqlHelper();
		}
	}
}
?>