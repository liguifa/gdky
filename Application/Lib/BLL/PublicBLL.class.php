<?php
class PublicBLL
{
	private $addExperience=2;
	public function Publish($dataArr,$files)
	{
		if(isset($_SESSION['user']))
		{
			switch ($dataArr["forum"]) {
				case '0':
					return $this->News($dataArr,$files);
					break;
				case '2':
					return $this->Projection($dataArr);
					break;
				case '1':
					return $this->Technology($dataArr);
					break;
				case '3':
					return $this->Share($dataArr,$files);
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
		$new->Add($dataArr["title"],$dataArr["briefly"],$newHtmlId.".jpg",$_SESSION['user'],$newHtmlId);
		$user=new UserBLL();
		$user->UpdateExperience($_SESSION['user'],$this->addExperience);
		return true;
	}

	public function Projection($dataArr)   //2
	{
		$newHtmlId=date("YmdhGs").rand(1000,9999);
		$filename="Application/PublicViews/newContent.html";
		$newFileName="public/updatafile/newsHtml/".$newHtmlId.".html";
		$subArr=array();
		$subArr[0]=array('sub' =>"{title}" , "str" => $dataArr['title'] );
		$subArr[1]=array('sub' =>"{body}" , "str" => $dataArr['body'] );
		FileOperation::ReplaceAndSave($filename,$subArr,$newFileName);
		$project=new ProjectBLL();
		$project->Add($dataArr["title"],$dataArr["briefly"],$newHtmlId,$_SESSION['user'],$dataArr["type"]);
		$user=new UserBLL();
		$user->UpdateExperience($_SESSION['user'],$this->addExperience);
		return true;
	}

	public function Technology($dataArr)    //1
	{
		$newHtmlId=date("YmdhGs").rand(1000,9999);
		$filename="Application/PublicViews/newContent.html";
		$newFileName="public/updatafile/newsHtml/".$newHtmlId.".html";
		$subArr=array();
		$subArr[0]=array('sub' =>"{title}" , "str" => $dataArr['title'] );
		$subArr[1]=array('sub' =>"{body}" , "str" => $dataArr['body'] );
		FileOperation::ReplaceAndSave($filename,$subArr,$newFileName);
		$tech=new TechnologyBLL();
		$tech->Add($dataArr["title"],$dataArr["briefly"],$newHtmlId,$_SESSION['user'],$dataArr["type"]);
		$user=new UserBLL();
		$user->UpdateExperience($_SESSION['user'],$this->addExperience);
		return true;

	}

	public function Share($dataArr,$files)     //3
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
		$tech=new ShareBLL();
		$tech->Add($dataArr["title"],$dataArr["briefly"],$newHtmlId,$_SESSION['user'],$dataArr["type"],$newHtmlId.".jpg");
		$user=new UserBLL();
		$user->UpdateExperience($_SESSION['user'],$this->addExperience);
		return true;
	}

	public function Question($dataArr)     //4
	{
		$question=new QuestionBLL();
		$question->Add($dataArr["title"],$dataArr["body"],$_SESSION["user"]);
		$user=new UserBLL();
		$user->UpdateExperience($_SESSION['user'],$this->addExperience);
		return true;
	}

	public function Teahouse()    //5
	{
		$question=new TechnologyBLL();
		$question->Add($dataArr["title"],$dataArr["body"],$_SESSION["user"]);
		$user=new UserBLL();
		$user->UpdateExperience($_SESSION['user'],$this->addExperience);
		return true;
	}

	public function Study()    //6
	{
		$study=new StudyBLL();
		$study->Add($dataArr["title"],$dataArr["body"],$_SESSION["user"],$_SESSION["append"]);
		$user=new UserBLL();
		$user->UpdateExperience($_SESSION['user'],$this->addExperience);
	}
}
?>