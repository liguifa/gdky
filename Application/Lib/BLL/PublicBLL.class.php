<?php
class PublicBLL
{
	private $addExperience=2;
	public function Publish($dataArr,$files)
	{
		if(isset($_SESSION['user'])  && $dataArr("yzm")==$_SESSION["ver"])
		{
			switch ($dataArr["forum"]) {
				case '0':
					return $this->News($dataArr,$files);
					break;
				case '1':
					return $this->Projection($dataArr);
					break;
				case '2':
					return $this->Technology($dataArr);
					break;
				case '3':
					return $this->Share($dataArr);
					break;
				case '4':
					return $this->Question($dataArr);
					break;
				case '5':
					return $this->Teahouse($dataArr);
					break;
				case '6':
					return $this->Study($dataArr);
					break;
			}
		}
		else
		{
			return false;
		}
	}

	public function News($dataArr,$files)    //0
	{
		$newHtmlId=date("YmdhGs").rand(1000,9999);
		$filename="Application/PublicViews/newContent.html";
		$newFileName="public/updatafile/newsHtml/".$newHtmlId.".html";
		$subArr=array();
		$subArr[0]=array('sub' =>"{title}" , "str" => $dataArr['title'] );
		$subArr[1]=array('sub' =>"{body}" , "str" => $dataArr['body'] );
		FileOperation::ReplaceAndSave($filename,$subArr,$newFileName);
		$image=new UpdataFile();
		$image->UpdataImage($files["image"],"public/updatafile/images/".$newHtmlId.".jpg");
		$new=new NewsBLL();
		$new->Add($dataArr["title"],$dataArr["briefly"],$newHtmlId,$_SESSION['user'],$newHtmlId.".jpg");
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