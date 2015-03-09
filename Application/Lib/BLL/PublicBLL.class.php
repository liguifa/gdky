<?php
class PublicBLL
{
	private $addExperience=2;
	public function Publish($dataArr)
	{
		if(!isset($_SESSION['user']))
		{
			switch ($dataArr["forum"]) {
				case '0':
					return $this->News();
					break;
				case '1':
					return $this->Projection();
					break;
				case '2':
					return $this->Technology();
					break;
				case '3':
					return $this->Share();
					break;
				case '4':
					return $this->Question();
					break;
				case '5':
					return $this->Teahouse();
					break;
				case '6':
					return $this->Study();
					break;
			}
		}
		else
		{
			return false;
		}
	}

	public function News($dataArr)    //0
	{
		$filename="../../PublicViews/newContent.html";
		$newFileName="/public/updatafile/newsHtml/".date("YmdhGs").rand(1000,9999).".html";
		echo $newFileName;
		$subArr=array();
		$subArr[0]=array('sub' =>"{$title}" , "str" => $dataArr['title'] );
		$subArr[1]=array('sub' =>"{$body}" , "str" => $dataArr['body'] );
		FileOperation::ReplaceAndSave($fileName,$subArr,$newFileName);
		$new=new NewsBLL();
		$new->Add($dataArr["title"],$dataArr["title"],$dataArr["brief"],$dataArr["image"],$_SESSION['user'],$dataArr["title"]);
		$user=new UserBLL();
		$user->UpdateExperience($_SESSION['user'],$this->addExperience);
		return true;
	}

	public function Projection()   //1
	{

	}

	public function Technology()    //2
	{

	}

	public function Share()     //3
	{

	}

	public function Question()     //4
	{

	}

	public function Teahouse()    //5
	{

	}

	public function Study()    //6
	{

	}
}
?>