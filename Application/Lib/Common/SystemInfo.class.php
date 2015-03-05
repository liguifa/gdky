<?php
class SystemInfo
{
	private static $System_Version;
	
	private static $Php_Version;
	
	private static $Service_Version;
	
	public static function GetSystemVersion()
	{
		self::$System_Version=php_uname();
		return self::$System_Version;
	}
	
	public static function GetServiceVersion()
	{
		self::$Service_Version=php_sapi_name();
		return self::$Service_Version;
	}
}
?>