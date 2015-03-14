<?php
/*********************************
时间：2014-10-31
作者：李贵发
功能：数据表 self::$table操作
**********************************/
class BaseDAL
{
	public static $sh;			//数据库操作对象

	public static $table;

	/***************************
	功能：数据库的简单查询（重载1）
	参数：无
	返回：数据库查询结果集（二维数组）
	****************************/
	private function Select_General()
	{
		return self::$sh->Select("*")->From(self::$table)->Exec();     //调用数据库操作对象对数据库进行简单查询
	}

	/***************************
	功能：数据库的指定个数查询（重载2）
	参数：$startNumber ： int类型数据，数据库从哪一个开始
		  $startNumber ： int类型数据，指定从数据库中读取数据数
	返回：数据库查询结果集（二维数组）
	****************************/
	private function Select_Top($pageNumber,$sizeNumber)
	{
		return self::$sh->Select("*")->From(self::$table)->Limit($pageNumber*$sizeNumber,$sizeNumber)->Exec();     //调用数据库操作对象对数据库进行查询
	}

	/***************************
	功能：数据库的条件查询（重载3）
	参数：$startNumber ： int类型数据，数据库从哪一个开始
		  $startNumber ： int类型数据，指定从数据库中读取数据数
		  $where : string类型数据，查询条件
	返回：数据库查询结果集（二维数组）
	****************************/
	private function Select_Where($pageNumber,$sizeNumber,$where)
	{
		return self::$sh->Select("*")->From(self::$table)->Where($where)->Limit(($pageNumber-1)*$sizeNumber,$sizeNumber)->Exec();    //调用数据库操作对象对数据库进行查询
	}

	/***************************
	功能：数据库的排序查询（重载4）
	参数：$startNumber ： int类型数据，数据库从哪一个开始
		  $startNumber ： int类型数据，指定从数据库中读取数据数
		  $where : string类型数据，查询条件
		  $col ：string类型数据，排序列名
		  $rank : string类型数据，排序方式
	返回：数据库查询结果集（二维数组）
	****************************/
	private function Select_Order($pageNumber,$endNumber,$where,$col,$rank)
	{
		return self::$sh->Select("*")->From(self::$table)->Where($where)->Order($col,$rank)->Limit($pageNumber*$sizeNumber,$sizeNumber)->Exec();     //调用数据库操作对象对数据库进行查询
	}
    
    /***************************
	功能：数据库的联合查询（重载5）
	参数：$table : string类型数据,要联合的表名
		  $data_1 : string类型数据，要联合的列名
		  $data_2 : string类型数据，要联合的列名
          $startNumber ： int类型数据，数据库从哪一个开始
		  $startNumber ： int类型数据，指定从数据库中读取数据数
		  $where : string类型数据，查询条件
		  $col ：string类型数据，排序列名
		  $rank : string类型数据，排序方式
	返回：数据库查询结果集（二维数组）
	****************************/
	private function Select_Join($tableJoin,$data_1,$data_2,$pageNumber,$sizeNumber,$where,$col,$rank)
	{
		return self::$sh->Select("*")->From(self::$table)->Join($tableJoin)->On($data_1,$data_2)->Where($where)->Order($col,$rank)->Limit($pageNumber*$sizeNumber,$sizeNumber)->Exec();     //调用数据库操作对象对数据库进行查询
	}

	/***************************
	功能：获取数据库数据量
	参数：无
	返回：数据库查询结果（二维数组）
	****************************/
	public function Count()
	{
		return self::$sh->Select()->Count("*")->From(self::$table)->Exec(); 	//调用数据库操作对象对数据库数据个数计算
	}

	public function Count_Reply($where)
	{
		return self::$sh->Select()->Count("*")->From(self::$table)->Where($where)->Exec();
	}
	/***************************
	功能：增加数据
	参数：$data ： string类型数据,要添加的数据,eg:"2,'_{$id}'"
	返回：无
	****************************/
	public function Add($data)
	{
		return self::$sh->Insert(self::$table)->Values($data)->Exec(false);
	}
    
    /***************************
	功能：数据修改
	参数:$col ： string类型数据,要更新的行
         $data : sreing类型数据，要更新的数据
         $where : string类型数据，更新的条件
	返回：无
	****************************/
	public function Update($col,$data,$where)
	{
		return self::$sh->Update(self::$table)->Set($col,$data)->Where($where)->Exec(false);
	}

	/***************************
	功能：魔术方式实现方式重载
	参数：$method ：string类型数据，方式名
		  $p : string[]类型数据，参数数组
	返回：空返回
	****************************/
	public function __call($method, $p)
   	{
		if($method == 'Select')
        {
           	switch (sizeof($p)) 
           	{
           		case 0:
           			return $this->Select_General();
           			break;
           		case 2:
           			return $this->Select_Top($p[0],$p[1]);
           			break;
           		case 3:
           			return $this->Select_Where($p[0],$p[1],$p[2]);
           			break;
           		case 5:
           			return $this->Select_Order($p[0],$p[1],$p[2],$p[3],$p[4]);
           			break;
                case 8:
                    return $this->Select_Join($p[0],$p[1],$p[2],$p[3],$p[4],$p[5],$p[6],$p[7]);
                    break;
           	}
        }
    }
}
?>