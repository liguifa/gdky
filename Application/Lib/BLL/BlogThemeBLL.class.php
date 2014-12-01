<?php
import("DAL.BlogThemeDAL","Application/Lib");
import("Common.StatusAttribute","Application/Lib");
class BlogThemeBLL
{
	private static $blogThemes;

	private $blogThemeDAL;

	public function BlogThemeBLL()
	{
		$this->blogThemeDAL=new BlogThemeDAL();
	}

	public function GetBlogThemes()
	{
		if(!self::$blogThemes)
		{
			self::$blogThemes=$this->blogThemeDAL->Select();
		}
		return self::$blogThemes;
	}
}
?>