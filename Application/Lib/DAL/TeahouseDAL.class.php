<?php
/*********************************
时间：2014-11-29
作者：李贵发
功能：数据表teahouse操作
**********************************/
class TeahouseDAL extends BaseDAL
{

	/***************************
	功能：构造函数，创建创建库操作对象
	参数：无
	返回：空返回
	****************************/
	public function TeahouseDAL()
	{
		parent::$table="posts";
		if(!parent::$sh)                //数据库操作对象如果不存在则创建
		{
			parent::$sh=new SqlHelper();
		}
	}
}
?>