<?php
/*********************************
时间：2014-11-07
作者：李贵发
功能：与文件的读取写入相关的操作
**********************************/
class FileOperation
{
	private static $text;          //记录上一次操作的文件内容
	private static $fileName;	   //记录上一次操作的文件的文件名

	/***************************
	功能：全部读取传入文件的文件内容
	参数：$fileName : string类型数据，要读取的文件名（包含文件路径）
	返回：读取到的文件内容
	****************************/
	public static function ReadAll($fileName)
	{
		if(self::$fileName&&self::$fileName==$fileName)
		{
			return self::$text;
		}
		else
		{
			try
			{
				self::$fileName=$fileName;
				$file=fopen(self::$fileName, 'r');
				self::$text=fread($file, filesize(self::$fileName));
				fclose($file);
				return self::$text;
			}
			catch(Exception $e)
			{
				return FileOperation::Exception($e);
			}
		}
	}

	/***************************
	功能：读取传入文件的文件内容（指定读取大小）
	参数：$fileName : string类型数据，要读取的文件名（包含文件路径）
		  $length ：int类型数据，指定读取内容的大小
	返回：读取到的文件内容
	****************************/
	public static function ReadLength($fileName,$length)
	{
		if(self::$fileName&&self::$fileName==$fileName)
		{
			return self::$text;
		}
		else
		{
			try
			{
				self::$fileName=$fileName;
				$file=fopen(self::$fileName, 'r');
				self::$text=fread($file, $length);
				fclose($file);
				return self::$text;
			}
			catch(Exception $e)
			{
				return FileOperation::Exception($e);
			}
		}
	}

	/***************************
	功能：文件内容的写入
	参数：$fileName : string类型数据，要写入的文件名（包含文件路径）
		  $text ：string类型数据，将要写入的内容
	返回：空返回
	****************************/
	public static function Write($fileName,$text)
	{
		try
		{
			self::$fileName=$fileName;
			self::$text=$text;
			$file=fopen($fileName, "w");
			fwrite($file, $text);
			fclose($file);
		}
		catch(Exception $e)
		{
			FileOperation::Exception($e);
		}
	}

	/***************************
	功能：文件内容的追加
	参数：$fileName : string类型数据，要追加的文件名（包含文件路径）
		  $text ：string类型数据，将要追加的内容
	返回：空返回
	****************************/
	public static function Append($fileName,$text)
	{
		try
		{
			$file=fopen($fileName, 'a');
			fwrite($file, $text);
			fclose($file);
			FileOperation::ReadAll($fileName);
		}
		catch(Exception $e)
		{
			FileOperation::Exception($e);
		}
		
	}

	/***************************
	功能：文件内容的的替换
	参数：$fileName : string类型数据，要替换的文件名（包含文件路径）
		  $subString ：string[][]类型数据，将要替换的内容的二维数组，其中
					   sub：包含要被替换的内容
					   str：包含用于替换的内容
	返回：空返回
	****************************/
	public static function Replace($fileName,$subString)
	{
		FileOperation::ReadAll($fileName);
		foreach ($subString as $substr) 
		{
			self::$text=str_replace($substr["sub"],$substr["str"],self::$text);
		}
		FileOperation::Write($fileName,self::$text);
	}

	/***************************
	功能：文件内容的的替换(并重新指定保存的文件名)
	参数：$fileName : string类型数据，要替换的文件名（包含文件路径）
		  $subString ：string[][]类型数据，将要替换的内容的二维数组，其中
					   sub：包含要被替换的内容
					   str：包含用于替换的内容
	返回：空返回
	****************************/
	public static function ReplaceAndSave($fileName,$subString,$newFileName)
	{
		FileOperation::ReadAll($fileName);
		foreach ($subString as $substr) 
		{
			self::$text=str_replace($substr["sub"],$substr["str"],self::$text);
		}
		FileOperation::Write($newFileName,self::$text);
	}

	/***************************
	功能：异常处理方法
	参数：$e ： object类型数据，异常信息
	返回：空返回
	****************************/
	private static function Exception($e)
	{
		//FileOperation::Write(config::$Login,$e->getMessage().'=||='.date(‘y-m-d h:i:s’,time()).'\n');
	}
}
?>