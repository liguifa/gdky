<?php
class MySQLConnect
{
	public static $dbConnect=array(
		"host" =>"localhost" , 
		"user"=>"root",
		"pwd"=>"123456",
		"database"=>"gdky"
		);
}

return array(
	'LOAD_EXT_FILE' => 'function.global',
	'URL_MODE' => 3
	);
?>