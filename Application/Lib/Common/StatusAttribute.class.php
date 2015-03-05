<?php
class StatusAttribute
{
	private $status;

	private $message;

	private $append;

	public function __get($property_name)
	{
		if(isset($this->$property_name))
		{
			return $this->$property_name;
		}
		else
		{
			return null;
		}
	}

	private function __set($property_name, $value)
	{
		$this->$property_name = $value;
	}

	public function ToJson()
	{
		$json = array('status' => $this->status,'message'=>$this->message,'append'=>$this->append );
		return json_encode($json,JSON_UNESCAPED_UNICODE);
	}
}
?>