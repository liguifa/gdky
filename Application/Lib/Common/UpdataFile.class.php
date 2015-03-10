<?php
class UpdataFile
{
	private static $ImageTypes;
	private static $DocumentTypes;

	public function UpdataFile()
	{
		self::$ImageTypes=array(
			1 => "jpg" ,
			2 => "png" ,
			3 => "bmp" );
		self::$DocumentTypes=array(
			1 => "doc",
			2 => "docx",
			3 => "xls",
			4 => "xlsx",
			5 => "ppt",
			6 => "pptx");
	}

	public function UpdataImage($file,$newFileName)
	{

		if($this->VerificationImage($file))
		{
			//$newFileName=$newFileName.date('Yhis').".png";
			return $this->ConvertSaveStatus(move_uploaded_file($file["tmp_name"], $newFileName),$newFileName);
		}
		else
		{
			return false;
		}
		
	}

	private function VerificationImage($file)
	{
		$mime=split("\.", $file["name"]);
		$mime=$mime[sizeof($mime)-1];

		foreach (self::$ImageTypes as $ImageType) 
		{
			if($ImageType==$mime)
			{
				return true;
			}
		}
		return false;
	}

	public function UpdataDocument($file,$newFileName)
	{
		if($this->VerificationDocument($file))
		{
			return $this->ConvertSaveStatus(move_uploaded_file($file["name"], $newFileName),$newFileName);
			
		}
		else
		{
			return false;
		}
	}

	private function VerificationDocument($file)
	{
		$mime=split(".", $file["name"]);
		$mime=$mime[$mime.length-1];
		foreach (self::$DocumentTypes as $DocumentType) 
		{
			if($ImageType==$mime)
			{
				return true;
			}
		}
		return false;
	}

	private function ConvertSaveStatus($res,$filename)
	{
		$status=new StatusAttribute();
		if($res)
		{
			$status->status=true;
			$status->message="保存成功！";
			$status->append=$filename;
		}
		else
		{
			$status->status=false;
			$status->message="保存失败！";
			$status->append=null;
		}
		return $status->ToJson();
	}
}
?>